<?php
App::uses('AppController', 'Controller');
/**
 * ItemSales Controller
 *
 * @property ItemSale $ItemSale
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ItemSalesController extends AppController {

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
        $this->set('itemSales', $this->ItemSale->find('all', array('recursive' => -1, 'conditions' => array('ItemSale.eliminado' => 0))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemSale->exists($id)) {
			throw new NotFoundException(__('item sale no válido/a.'));
		}
		$options = array('conditions' => array('ItemSale.' . $this->ItemSale->primaryKey => $id));
		$this->set('itemSale', $this->ItemSale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemSale->create();
			if ($this->ItemSale->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item sale ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la item sale no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		}
        		$providers = $this->ItemSale->Provider->find('list');
		$this->set(compact('providers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemSale->exists($id)) {
			throw new NotFoundException(__('item sale no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemSale->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item sale ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La item sale no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('ItemSale.' . $this->ItemSale->primaryKey => $id));
			$this->request->data = $this->ItemSale->find('first', $options);
		}
        		$providers = $this->ItemSale->Provider->find('list');
		$this->set(compact('providers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemSale->id = $id;
		if (!$this->ItemSale->exists()) {
			throw new NotFoundException(__('item sale no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemSale->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La item sale ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La item sale no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
