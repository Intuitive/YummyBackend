<?php
App::uses('AppController', 'Controller');
/**
 * SpecialOffers Controller
 *
 * @property SpecialOffer $SpecialOffer
 */
class SpecialOffersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SpecialOffer->recursive = 0;
		$this->set('specialOffers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SpecialOffer->exists($id)) {
			throw new NotFoundException(__('Invalid special offer'));
		}
		$options = array('conditions' => array('SpecialOffer.' . $this->SpecialOffer->primaryKey => $id));
		$this->set('specialOffer', $this->SpecialOffer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SpecialOffer->create();
			if ($this->SpecialOffer->save($this->request->data)) {
				$this->flash(__('Specialoffer saved.'), array('action' => 'index'));
			} else {
			}
		}
		$vendors = $this->SpecialOffer->Vendor->find('list');
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
		if (!$this->SpecialOffer->exists($id)) {
			throw new NotFoundException(__('Invalid special offer'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SpecialOffer->save($this->request->data)) {
				$this->flash(__('The special offer has been saved.'), array('action' => 'index'));
			} else {
			}
		} else {
			$options = array('conditions' => array('SpecialOffer.' . $this->SpecialOffer->primaryKey => $id));
			$this->request->data = $this->SpecialOffer->find('first', $options);
		}
		$vendors = $this->SpecialOffer->Vendor->find('list');
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
		$this->SpecialOffer->id = $id;
		if (!$this->SpecialOffer->exists()) {
			throw new NotFoundException(__('Invalid special offer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SpecialOffer->delete()) {
			$this->flash(__('Special offer deleted'), array('action' => 'index'));
		}
		$this->flash(__('Special offer was not deleted'), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
