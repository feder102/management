<?php
App::uses('AppController', 'Controller');
/**
 * Debts Controller
 *
 * @property Debt $Debt
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class DebtsController extends AppController {

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
        $this->set('debts', $this->Debt->find('all', array('recursive' => -1, 'conditions' => array('Debt.eliminado' => 0))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Debt->exists($id)) {
			throw new NotFoundException(__('debt no válido/a.'));
		}
		$options = array('conditions' => array('Debt.' . $this->Debt->primaryKey => $id));
		$this->set('debt', $this->Debt->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Debt->create();
			if ($this->Debt->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La debt ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la debt no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Debt->exists($id)) {
			throw new NotFoundException(__('debt no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Debt->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La debt ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La debt no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Debt.' . $this->Debt->primaryKey => $id));
			$this->request->data = $this->Debt->find('first', $options);
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
		$this->Debt->id = $id;
		if (!$this->Debt->exists()) {
			throw new NotFoundException(__('debt no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Debt->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La debt ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La debt no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
