<?php
App::uses('AppController', 'Controller');
/**
 * Garments Controller
 *
 * @property Garment $Garment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class GarmentsController extends AppController {

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
        $this->set('garments', $this->Garment->find('all', array('recursive' => -1, 'conditions' => array('Garment.eliminado' => 0))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Garment->exists($id)) {
			throw new NotFoundException(__('garment no válido/a.'));
		}
		$options = array('conditions' => array('Garment.' . $this->Garment->primaryKey => $id));
		$this->set('garment', $this->Garment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Garment->create();
			if ($this->Garment->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La garment ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la garment no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		}
        		$colors = $this->Garment->Color->find('list');
		$sizes = $this->Garment->Size->find('list');
		$this->set(compact('colors', 'sizes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Garment->exists($id)) {
			throw new NotFoundException(__('garment no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Garment->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La garment ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La garment no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Garment.' . $this->Garment->primaryKey => $id));
			$this->request->data = $this->Garment->find('first', $options);
		}
        		$colors = $this->Garment->Color->find('list');
		$sizes = $this->Garment->Size->find('list');
		$this->set(compact('colors', 'sizes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Garment->id = $id;
		if (!$this->Garment->exists()) {
			throw new NotFoundException(__('garment no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Garment->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La garment ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La garment no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
