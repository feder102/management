<?php
App::uses('AppController', 'Controller');
/**
 * AcountSales Controller
 *
 * @property AcountSale $AcountSale
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class AcountSalesController extends AppController {

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
        $this->set('acountSales', $this->AcountSale->find('all', array('recursive' => -1, 'conditions' => array('AcountSale.eliminado' => 0))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AcountSale->exists($id)) {
			throw new NotFoundException(__('acount sale no válido/a.'));
		}
		$options = array('conditions' => array('AcountSale.' . $this->AcountSale->primaryKey => $id));
		$this->set('acountSale', $this->AcountSale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AcountSale->create();
			if ($this->AcountSale->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La acount sale ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la acount sale no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		}
        		$sales = $this->AcountSale->Sale->find('list');
		$this->set(compact('sales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AcountSale->exists($id)) {
			throw new NotFoundException(__('acount sale no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AcountSale->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La acount sale ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La acount sale no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('AcountSale.' . $this->AcountSale->primaryKey => $id));
			$this->request->data = $this->AcountSale->find('first', $options);
		}
        		$sales = $this->AcountSale->Sale->find('list');
		$this->set(compact('sales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AcountSale->id = $id;
		if (!$this->AcountSale->exists()) {
			throw new NotFoundException(__('acount sale no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AcountSale->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La acount sale ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La acount sale no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
