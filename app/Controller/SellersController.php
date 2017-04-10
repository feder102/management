<?php
App::uses('AppController', 'Controller');
/**
 * Sellers Controller
 *
 * @property Seller $Seller
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class SellersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	// public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->set('sellers', $this->Seller->find('all', array('recursive' => -1, 'conditions' => array('Seller.eliminado' => 0))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Seller->exists($id)) {
			throw new NotFoundException(__('seller no válido/a.'));
		}
		$options = array('conditions' => array('Seller.' . $this->Seller->primaryKey => $id));
		$this->set('seller', $this->Seller->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Seller->create();
			if ($this->Seller->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La seller ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la seller no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Seller->exists($id)) {
			throw new NotFoundException(__('seller no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Seller->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La seller ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La seller no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Seller.' . $this->Seller->primaryKey => $id));
			$this->request->data = $this->Seller->find('first', $options);
		}
        	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Seller->id = $id;
		if (!$this->Seller->exists()) {
			throw new NotFoundException(__('seller no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Seller->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La seller ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La seller no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
