<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = -1;
		$this->layout = false;
		
		$users = $this->User->find('all');
		
		$data = array(
			'success' => 'true',
			'data' => $users,
			'count' => count($users),
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
		$this->User->recursive = -1;
		$this->layout = false;
		$status = 200;
		
		// check if user exists
		if (!$this->User->exists($id)) {
			$status = 404;
		}
		
		// find by Id
		$options = array('conditions' => array('Vendor.' . $this->User->primaryKey => $id));
		
		
		$data = array(
			'success' => 'true',
			'data' => $this->User->find('first', $options),
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
		$this->User->recursive = -1;
		$this->layout = false;
		
		$status = 200;
		$success = 'true';
		
		
		if  ($this->request->is('post')) {
			$this->User->create();
			if (!$this->User->save($this->request->data)) {
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
		$this->User->recursive = -1;
		$this->layout = false;
			
		if (! ($this->request->is('post') || $this->request->is('put')) )
			throw new NotFoundException();
				
		
		$saved_data = null;
		$status = 200;
		$success = 'true';
		
		// 	check if vendor exists
		if (!array_key_exists('id', $this->request->data) || !$this->User->exists($id)) {
			$status = 404;
			$success = 'false';
		}else{
			// save the vendor
			if ($this->request->is('post') || $this->request->is('put')) {
				$saved_data = $this->User->save($this->request->data);
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
		$this->User->recursive = -1;
		$this->layout = false;	
			
		$this->User->id = $id;
		$status = 200;
		$success = 'true';
		
		if (!$this->User->exists()) {
			$status = 404;
			$success = 'false';
		}
		
		$this->request->onlyAllow('post', 'delete');
		if (!$this->Vendor->delete()) {
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
