<?php
App::uses('AppController', 'Controller');
/**
 * VendorReviews Controller
 *
 * @property VendorReview $VendorReview
 */
class VendorReviewsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->VendorReview->recursive = 0;
		$this->set('vendorReviews', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VendorReview->exists($id)) {
			throw new NotFoundException(__('Invalid vendor review'));
		}
		$options = array('conditions' => array('VendorReview.' . $this->VendorReview->primaryKey => $id));
		$this->set('vendorReview', $this->VendorReview->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VendorReview->create();
			if ($this->VendorReview->save($this->request->data)) {
				$this->flash(__('Vendorreview saved.'), array('action' => 'index'));
			} else {
			}
		}
		$users = $this->VendorReview->User->find('list');
		$vendors = $this->VendorReview->Vendor->find('list');
		$this->set(compact('users', 'vendors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->VendorReview->exists($id)) {
			throw new NotFoundException(__('Invalid vendor review'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->VendorReview->save($this->request->data)) {
				$this->flash(__('The vendor review has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$options = array('conditions' => array('VendorReview.' . $this->VendorReview->primaryKey => $id));
			$this->request->data = $this->VendorReview->find('first', $options);
		}
		$users = $this->VendorReview->User->find('list');
		$vendors = $this->VendorReview->Vendor->find('list');
		$this->set(compact('users', 'vendors'));
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
		$this->VendorReview->id = $id;
		if (!$this->VendorReview->exists()) {
			throw new NotFoundException(__('Invalid vendor review'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VendorReview->delete()) {
			$this->flash(__('Vendor review deleted'), array('action' => 'index'));
		}
		$this->flash(__('Vendor review was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
