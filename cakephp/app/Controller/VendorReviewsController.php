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
		$this->VendorReview->recursive = -1;
		$this->layout = false;
		
		$vendorReviews = $this->VendorReview->find('all');
		
		$data = array(
			'success' => 'true',
			'data' => $vendorReviews,
			'count' => count($vendorReviews),
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
		$this->VendorReview->recursive = -1;
		$this->layout = false;
		$status = 200;
		
		// check if vendor exists
		if (!$this->VendorReview->exists($id)) {
			$status = 404;
		}
		
		// find by Id
		$options = array('conditions' => array('VendorReview.' . $this->VendorReview->primaryKey => $id));
		
		
		$data = array(
			'success' => 'true',
			'data' => $this->VendorReview->find('first', $options),
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
		$this->VendorReview->recursive = -1;
		$this->layout = false;
		
		$status = 200;
		$success = 'true';
		
		
		if  ($this->request->is('post')) {
			$this->VendorReview->create();
			if (!$this->VendorReview->save($this->request->data)) {
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
		$this->VendorReview->recursive = -1;
		$this->layout = false;
			
		if (! ($this->request->is('post') || $this->request->is('put')) )
			throw new NotFoundException();
				
		
		$saved_data = null;
		$status = 200;
		$success = 'true';
		
		// 	check if vendor exists
		if (!array_key_exists('id', $this->request->data) || !$this->VendorReview->exists($id)) {
			$status = 404;
			$success = 'false';
		}else{
			// save the vendor
			if ($this->request->is('post') || $this->request->is('put')) {
				$saved_data = $this->VendorReview->save($this->request->data);
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
		$this->VendorReview->recursive = -1;
		$this->layout = false;	
			
		$this->VendorReview->id = $id;
		$status = 200;
		$success = 'true';
		
		if (!$this->VendorReview->exists()) {
			$status = 404;
			$success = 'false';
		}
		
		$this->request->onlyAllow('post', 'delete');
		if (!$this->VendorReview->delete()) {
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
