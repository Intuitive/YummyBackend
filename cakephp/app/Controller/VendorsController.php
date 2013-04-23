<?php
App::uses('AppController', 'Controller');
/**
 * Vendors Controller
 *
 * @property Vendor $Vendor
 */
class VendorsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vendor->recursive = -1;
		$this->layout = false;
		
		$vendors = $this->Vendor->find('all');
		
		$data = array(
			'success' => 'true',
			'data' => $vendors,
			'count' => count($vendors),
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
		$this->Vendor->recursive = -1;
		$this->layout = false;
		$status = 200;
		
		// check if vendor exists
		if (!$this->Vendor->exists($id)) {
			$status = 404;
		}
		
		// find by Id
		$options = array('conditions' => array('Vendor.' . $this->Vendor->primaryKey => $id));
		
		
		$data = array(
			'success' => 'true',
			'data' => $this->Vendor->find('first', $options),
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
		if ($this->request->is('post')) {
			$this->Vendor->create();
			if ($this->Vendor->save($this->request->data)) {
				$this->Session->setFlash(__('The vendor has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vendor could not be saved. Please, try again.'));
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
		if (! ($this->request->is('post') || $this->request->is('put')) )
			throw new NotFoundException();
		
		$this->Vendor->recursive = -1;
		$this->layout = false;
		
		$saved_data = null;
		$status = 200;
		$success = 'true';
		
		// 	check if vendor exists
		if (!array_key_exists('id', $this->request->data) || !$this->Vendor->exists($id)) {
			$status = 404;
			$success = 'false';
		}else{
			// save the vendor
			if ($this->request->is('post') || $this->request->is('put')) {
				$saved_data = $this->Vendor->save($this->request->data);
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
		$this->Vendor->id = $id;
		if (!$this->Vendor->exists()) {
			throw new NotFoundException(__('Invalid vendor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Vendor->delete()) {
			$this->Session->setFlash(__('Vendor deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vendor was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
