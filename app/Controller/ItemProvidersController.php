<?php
App::uses('AppController', 'Controller');
/**
 * ItemProviders Controller
 *
 * @property ItemProvider $ItemProvider
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ItemProvidersController extends AppController {

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
        $this->set('itemProviders', $this->ItemProvider->find('all', array('recursive' => -1, 'conditions' => array('ItemProvider.eliminado' => 0))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemProvider->exists($id)) {
			throw new NotFoundException(__('item provider no válido/a.'));
		}
		$options = array('conditions' => array('ItemProvider.' . $this->ItemProvider->primaryKey => $id));
		$this->set('itemProvider', $this->ItemProvider->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemProvider->create();
			if ($this->ItemProvider->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item provider ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la item provider no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		}
        		$providers = $this->ItemProvider->Provider->find('list');
		$sales = $this->ItemProvider->Sale->find('list');
		$this->set(compact('providers', 'sales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemProvider->exists($id)) {
			throw new NotFoundException(__('item provider no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemProvider->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La item provider ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La item provider no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('ItemProvider.' . $this->ItemProvider->primaryKey => $id));
			$this->request->data = $this->ItemProvider->find('first', $options);
		}
        		$providers = $this->ItemProvider->Provider->find('list');
		$sales = $this->ItemProvider->Sale->find('list');
		$this->set(compact('providers', 'sales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemProvider->id = $id;
		if (!$this->ItemProvider->exists()) {
			throw new NotFoundException(__('item provider no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ItemProvider->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La item provider ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La item provider no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
