<?php
App::uses('AppController', 'Controller');
/**
 * ItemAcounts Controller
 *
 * @property ItemAcount $ItemAcount
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ItemAcountsController extends AppController {

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
        $this->set('itemAcounts', $this->ItemAcount->find('all', array('recursive' => -1, 'conditions' => array('ItemAcount.eliminado' => 0))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemAcount->exists($id)) {
			throw new NotFoundException(__('item acount no válido/a.'));
		}
		$options = array('conditions' => array('ItemAcount.' . $this->ItemAcount->primaryKey => $id));
		$this->set('itemAcount', $this->ItemAcount->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemAcount->create();
			if ($this->ItemAcount->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item acount ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la item acount no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		}
        		$acountSales = $this->ItemAcount->AcountSale->find('list');
		$garments = $this->ItemAcount->Garment->find('list');
		$this->set(compact('acountSales', 'garments'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemAcount->exists($id)) {
			throw new NotFoundException(__('item acount no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemAcount->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item acount ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La item acount no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('ItemAcount.' . $this->ItemAcount->primaryKey => $id));
			$this->request->data = $this->ItemAcount->find('first', $options);
		}
        		$acountSales = $this->ItemAcount->AcountSale->find('list');
		$garments = $this->ItemAcount->Garment->find('list');
		$this->set(compact('acountSales', 'garments'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemAcount->id = $id;
		if (!$this->ItemAcount->exists()) {
			throw new NotFoundException(__('item acount no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemAcount->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La item acount ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La item acount no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
