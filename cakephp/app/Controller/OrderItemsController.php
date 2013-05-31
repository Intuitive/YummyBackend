<?php
App::uses('AppController', 'Controller');
/**
 * OrderItems Controller
 *
 * @property OrderItem $OrderItem
 */
class OrderItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index($orderId = null) {
		$this->OrderItem->recursive = -1;
		$this->layout = false;
		$orderItems;
		
		// get all OrderItems
		if($orderId == null)
			$orderItems = $this->OrderItem->find('all');
		
		// get MenuItems by Vendor id
		else
			$orderItems = $this->OrderItem->find('all', array(
		        'conditions' => array('OrderItem.order_id =' => $orderId)
		    ));
			
		$data = array(
			'success' => 'true',
			'data' => $orderItems,
			'count' => count($orderItems),
			'code' => '200'
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
		if (!$this->OrderItem->exists($id)) {
			throw new NotFoundException(__('Invalid order item'));
		}
		$options = array('conditions' => array('OrderItem.' . $this->OrderItem->primaryKey => $id));
		$this->set('orderItem', $this->OrderItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->OrderItem->create();
			if ($this->OrderItem->save($this->request->data)) {
				$this->flash(__('Orderitem saved.'), array('action' => 'index'));
			} else {
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->OrderItem->exists($id)) {
			throw new NotFoundException(__('Invalid order item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->OrderItem->save($this->request->data)) {
				$this->flash(__('The order item has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$options = array('conditions' => array('OrderItem.' . $this->OrderItem->primaryKey => $id));
			$this->request->data = $this->OrderItem->find('first', $options);
		}
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
		$this->OrderItem->id = $id;
		if (!$this->OrderItem->exists()) {
			throw new NotFoundException(__('Invalid order item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->OrderItem->delete()) {
			$this->flash(__('Order item deleted'), array('action' => 'index'));
		}
		$this->flash(__('Order item was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
