<?php
App::uses('AppController', 'Controller');
/**
 * Telefonos Controller
 *
 * @property Telefono $Telefono
 * @property PaginatorComponent $Paginator
 */
class TelefonosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	// public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
        $this->set('telefonos', $this->Telefono->find('all', array('recursive' => -1, 'conditions' => array('Telefono.eliminado' => 0))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Telefono->exists($id)) {
			throw new NotFoundException(__('telefono no válido/a.'));
		}
		$options = array('conditions' => array('Telefono.' . $this->Telefono->primaryKey => $id));
		$this->set('telefono', $this->Telefono->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Telefono->create();
			if ($this->Telefono->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La telefono ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la telefono no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		}
        		$personas = $this->Telefono->Persona->find('list');
		$this->set(compact('personas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Telefono->exists($id)) {
			throw new NotFoundException(__('telefono no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Telefono->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La telefono ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La telefono no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Telefono.' . $this->Telefono->primaryKey => $id));
			$this->request->data = $this->Telefono->find('first', $options);
		}
        		$personas = $this->Telefono->Persona->find('list');
		$this->set(compact('personas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Telefono->id = $id;
		if (!$this->Telefono->exists()) {
			throw new NotFoundException(__('telefono no válido/a.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Telefono->saveField('eliminado', 1)) {
            			$this->Session->setFlash(__('El/La telefono ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('El/La telefono no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
        	}
}
