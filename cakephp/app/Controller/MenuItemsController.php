<?php
App::uses('AppController', 'Controller');
/**
 * MenuItems Controller
 *
 * @property MenuItem $MenuItem
 */
class MenuItemsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MenuItem->recursive = 0;
		$this->set('menuItems', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MenuItem->exists($id)) {
			throw new NotFoundException(__('Invalid menu item'));
		}
		$options = array('conditions' => array('MenuItem.' . $this->MenuItem->primaryKey => $id));
		$this->set('menuItem', $this->MenuItem->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MenuItem->create();
			if ($this->MenuItem->save($this->request->data)) {
				$this->flash(__('Menuitem saved.'), array('action' => 'index'));
			} else {
			}
		}
		$vendors = $this->MenuItem->Vendor->find('list');
		$this->set(compact('vendors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MenuItem->exists($id)) {
			throw new NotFoundException(__('Invalid menu item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MenuItem->save($this->request->data)) {
				$this->flash(__('The menu item has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$options = array('conditions' => array('MenuItem.' . $this->MenuItem->primaryKey => $id));
			$this->request->data = $this->MenuItem->find('first', $options);
		}
		$vendors = $this->MenuItem->Vendor->find('list');
		$this->set(compact('vendors'));
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
		$this->MenuItem->id = $id;
		if (!$this->MenuItem->exists()) {
			throw new NotFoundException(__('Invalid menu item'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MenuItem->delete()) {
			$this->flash(__('Menu item deleted'), array('action' => 'index'));
		}
		$this->flash(__('Menu item was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
