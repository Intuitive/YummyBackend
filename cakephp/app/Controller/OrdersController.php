<?php
App::uses('AppController', 'Controller');
App::import('model','MenuItem');
App::import('model','OrderItem');
/**
 * Orders Controller
 *
 * @property Order $Order
 */
class OrdersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($vendorId = null, $userId = null, $status = null) {
		$this->Order->recursive = -1;
		$this->layout = false;
		
		if($vendorId == null)
			$orders = $this->Order->find('all');
		else {
			$conditions = array();
			if($vendorId != -1)
				$conditions['Order.vendor_id = '] = $vendorId;
			if($userId != -1)
				$conditions['Order.user_id = '] = $userId;
			if($status != -1)
				$conditions['Order.status = '] = $status;	
			
			$orders = $this->Order->find('all', array(
		        'conditions' => $conditions
		    ));
		}
			
		$data = array(
			'success' => 'true',
			'data' => $orders ,
			'count' => count($orders ),
			'code' => '200'
			// very nice for debugging:
			//,'conditions' => $conditions
		);
		$this->set('data', $data);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Order->recursive = -1;
		$this->layout = false;
		$status = 200;
		date_default_timezone_set('UTC');
		
		// check if order exists
		if (!$this->Order->exists($id)) {
			$status = 404;
		}
		
		// find by Id
		$options = array('conditions' => array('Order.' . $this->Order->primaryKey => $id));
		
		
		$data = array(
			'success' => 'true',
			'data' => $this->Order->find('first', $options),
			'count' => 1,
			'status' => $status
		);
		
		$this->set('data', $data);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->Order->recursive = -1;
		$this->layout = false;
		
		$this->loadModel('MenuItem');
		$this->loadModel('OrderItem');
		
		$status = 200;
		$success = 'true';
		$returnData = null;
		
		// set timezone to GMT
		date_default_timezone_set('UTC');
		
		//print_r($this->request);
		if  ($this->request->is('post')) {
			$this->Order->create();
			
			// for creating a single Order entity
			if($this->request->data['app_data'] == null){
				if (!$this->Order->save($this->request->data)) {
					$status = 500; 
					$success = 'false';
				}
			}
			else{
				// for creating an Order and one or more OrderItems
				$requestData = json_decode($this->request->data['app_data'], true);
				
				// find a menuitem
				$menuItemId = $requestData[0]['menuItemId'];
				$options = array('conditions' => array('MenuItem.' . $this->MenuItem->primaryKey => $menuItemId));
				$menuItem = $this->MenuItem->find('first', $options);
				
				
				if($menuItem == null)
				{
					echo "No menu item found with id" . $requestData[0]['menuItemId'];
					$data = array(
						'success' => 'false',
						'status' => '404'
					);
					
					$this->set('data', $data);
					return;
				}
				
				// save order first
				$order = array(
					'user_id' => 1, 
					'wait_time' => $menuItem['Vendor']['wait_time'],
					'payment_method' => 1,
					'total_price' => 0,
					'vendor_id' => $menuItem['Vendor']['id'],
					'date_created' => date("Y-m-d H:i:s"),
					'status' => 0
				);
				$order = $this->Order->save($order);
				
				//then order items 
				$totalPrice = 0;
				
				foreach($requestData as $orderItem) {
					$totalPrice += $orderItem['price'];
				    $orderItemToSave = array(
						'order_id' => $this->Order->getLastInsertID(), 
						'menu_item_id' => $orderItem['menuItemId'],
						'name' => $orderItem['name'],
						'price' => $orderItem['price'],
						'quantity' => $orderItem['quantity'],
						'special_instructions' => $orderItem['specialInstructions']
					);
					$this->OrderItem->create();
					$this->OrderItem->save($orderItemToSave);
				}
				
				// update total
				$orderUpdateDate = array(
					'id' => $this->Order->getLastInsertID(),
					'total_price' => $totalPrice
				);
				$this->Order->save($orderUpdateDate);
			}
		}
		
		
		$order['total_price'] = $totalPrice;
		$order['id'] = $this->Order->getLastInsertID();
		
		$data = array(
			'success' => 'true',
			'status' => $status,
			'data' => $order,
			'count' => '1'
		);
		
		$this->set('data', $data);
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Order->recursive = -1;
		$this->layout = false;
			
		if (! ($this->request->is('post') || $this->request->is('put')) )
			throw new NotFoundException();
				
		
		$saved_data = null;
		$status = 200;
		$success = 'true';
		
		// 	check if order exists
		if (!array_key_exists('id', $this->request->data) || !$this->Order->exists($id)) {
			$status = 404;
			$success = 'false';
		}else{
			// save the order
			if ($this->request->is('post') || $this->request->is('put')) {
				$saved_data = $this->Order->save($this->request->data);
			}
		}
		
		$data = array(
			'success' => $success,
			'status' => $status,
			'data' => $saved_data,
			'count' => count($saved_data)
		);
		
		$this->set('data', $data);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Order->recursive = -1;
		$this->layout = false;	
			
		$this->Order->id = $id;
		$status = 200;
		$success = 'true';
		
		if (!$this->Order->exists()) {
			$status = 404;
			$success = 'false';
		}
		
		$this->request->onlyAllow('post', 'delete');
		if (!$this->Order->delete()) {
			$status = 500;
			$success = 'false';
		}
		
		$data = array(
			'success' => $success,
			'status' => $status
		);
		
		$this->set('data', $data);
	}
}
