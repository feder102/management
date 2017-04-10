<?php
App::uses('AppController', 'Controller');
/**
 * Billings Controller
 *
 * @property Billing $Billing
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class BillingsController extends AppController {

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
        $this->set('billings', $this->Billing->find('all', array('recursive' => -1, 'conditions' => array('Billing.eliminado' => 0))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Billing->exists($id)) {
			throw new NotFoundException(__('billing no válido/a.'));
		}
		$options = array('conditions' => array('Billing.' . $this->Billing->primaryKey => $id));
		$this->set('billing', $this->Billing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Billing->create();
			if ($this->Billing->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La billing ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la billing no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		}
        		$sellers = $this->Billing->Seller->find('list');
		$this->set(compact('sellers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Billing->exists($id)) {
			throw new NotFoundException(__('billing no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Billing->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La billing ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La billing no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Billing.' . $this->Billing->primaryKey => $id));
			$this->request->data = $this->Billing->find('first', $options);
		}
        		$sellers = $this->Billing->Seller->find('list');
		$this->set(compact('sellers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Billing->id = $id;
		if (!$this->Billing->exists()) {
			throw new NotFoundException(__('billing no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Billing->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La billing ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La billing no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
