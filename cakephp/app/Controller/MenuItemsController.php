<?php
App::uses('AppController', 'Controller');
/**
 * MenuItems Controller
 *
 * @property MenuItem $MenuItem
 */
class MenuItemsController extends AppController {

/**
 * Gets all MenuItems or all MenuItems by Vendor id
 *
 * @return void
 */
	public function index($vendorId = null) {
		$this->MenuItem->recursive = -1;
		$this->layout = false;
		$menuItems;
		
		// get all MenuItems
		if($vendorId == null)
			$menuItems = $this->MenuItem->find('all');
		// get MenuItems by Vendor id
		else
			$menuItems = $this->MenuItem->find('all', array(
		        'conditions' => array('MenuItem.vendor_id =' => $vendorId)
		    ));
			
		$data = array(
			'success' => 'true',
			'data' => $menuItems,
			'count' => count($menuItems),
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
		$this->MenuItem->recursive = -1;
		$this->layout = false;
		$status = 200;
		
		// check if vendor exists
		if (!$this->MenuItem->exists($id)) {
			$status = 404;
		}
		
		// find by Id
		$options = array('conditions' => array('MenuItem.' . $this->MenuItem->primaryKey => $id));
		
		
		$data = array(
			'success' => 'true',
			'data' => $this->MenuItem->find('first', $options),
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
		$this->MenuItem->recursive = -1;
		$this->layout = false;
		
		$status = 200;
		$success = 'true';
		
		
		if  ($this->request->is('post')) {
			$this->MenuItem->create();
			if (!$this->MenuItem->save($this->request->data)) {
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
		$this->MenuItem->recursive = -1;
		$this->layout = false;
			
		if (! ($this->request->is('post') || $this->request->is('put')) )
			throw new NotFoundException();
				
		
		$saved_data = null;
		$status = 200;
		$success = 'true';
		
		// 	check if vendor exists
		if (!array_key_exists('id', $this->request->data) || !$this->MenuItem->exists($id)) {
			$status = 404;
			$success = 'false';
		}else{
			// save the vendor
			if ($this->request->is('post') || $this->request->is('put')) {
				$saved_data = $this->MenuItem->save($this->request->data);
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
		$this->MenuItem->recursive = -1;
		$this->layout = false;	
			
		$this->MenuItem->id = $id;
		$status = 200;
		$success = 'true';
		
		if (!$this->MenuItem->exists()) {
			$status = 404;
			$success = 'false';
		}
		
		$this->request->onlyAllow('post', 'delete');
		if (!$this->MenuItem->delete()) {
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
