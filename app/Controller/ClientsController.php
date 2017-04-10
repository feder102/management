<?php
App::uses('AppController', 'Controller');
/**
 * Clients Controller
 *
 * @property Client $Client
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ClientsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');
public $uses = array ('Client');
/**
 * index method
 *
 * @return void
 */
	public function index() {
        // $this->set('clients', $this->Client->find('all', array('recursive' => -1,
				// 'conditions'=> array('Client.eliminado' => 0)),
				// $this->Paginator->paginate('Client')));
				$this->set('clients', $this->Client->find('all', array('recursive' => -1),
				$this->Paginator->paginate('Client')));
				// $this->Paginator->settings = array(
        //             array('conditions' => array('Clients.dni' != ""))
        //         );
				//
        // $this->set('vouchers', $this->Paginator->paginate('Client'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('client no válido/a.'));
		}
		$options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
		$this->set('client', $this->Client->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Client->create();
			if ($this->Client->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La cliente ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/la client no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Client->exists($id)) {
			throw new NotFoundException(__('client no válido/a.'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Client->save($this->request->data)) {
            				$this->Session->setFlash(__('El/La client ha sido guardado/a.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El/La client no se pudo guardar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
            			}
		} else {
			$options = array('conditions' => array('Client.' . $this->Client->primaryKey => $id));
			$this->request->data = $this->Client->find('first', $options);
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

		$this->request->allowMethod(['post', 'delete']);

	 //$this->Client->dni = $id
 //echo "$id";
	 if ($this->Client->delete($id)) {
			 //$this->Flash->success(__('The post with id: {0} has been deleted.', h($id)));
			 return $this->redirect(['action' => 'index']);
	 }
}

// 		public function delete($id = null) {
// 			$this->autoRender = false;
// 			$this->Client->dni = $id;
// 			// pr($this->Client->dni);
// 			if (!$this->Client->exists()) {
// 				throw new NotFoundException(__('client no es válido/a.'));
// 			}
// 			// $this->request->onlyAllow('post', 'delete');
// 			if ($this->Client->delete()) {
// 	            			// $this->Session->setFlash(__('El/La client ha sido eliminado/a.'), 'default', array('class' => 'alert alert-success'));
// 			} else {
// 				// $this->Session->setFlash(__('El/La client no se pudo eliminar. Por favor, intente nuevamente.'), 'default', array('class' => 'alert alert-danger'));
// 			}
// 			return $this->redirect(array('action' => 'index'));
// 	        	}
}
