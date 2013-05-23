<?php
App::uses('AppController', 'Controller');
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
		
		$status = 200;
		$success = 'true';
		
		// $this->Order->set($this->request->data);
		// if($this->Order->validates())
		// {
			// echo "validation failed";
			// return;
		// }
		
		if  ($this->request->is('post')) {
			$this->Order->create();
			if (!$this->Order->save($this->request->data)) {
				$status = 500;
				$success = 'false';
			}
		}
		
		$data = array(
			'success' => $success,
			'status' => $status
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
