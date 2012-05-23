<?php
class SeedsController extends AppController {

	var $uses = array('Seed');

	public $paginate = array(
		'limit' => 25,
		'order' => array(
			'Seed.name' => 'ASC'
		)
	);

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$this->Seed->recursive = 0;
		$this->set('seeds', $this->paginate());
	}

	public function view($id = null) {
		$this->Seed->id = $id;
		if (!$this->Seed->exists()) {
			throw new NotFoundException(__('Invalid seed'));
		}
		$this->set('seed', $this->Seed->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Seed->create();
			$user_id = $this->Auth->user('id');
			if(isset($user_id)) {
				$this->request->data['Seed']['user_id'] = $user_id;
				if ($this->Seed->save($this->request->data)) {
					$this->Session->setFlash(__('The seed has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The seed could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The seed could not be associated with a user. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		$this->Seed->id = $id;
		if (!$this->Seed->exists()) {
			throw new NotFoundException(__('Invalid seed'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Seed->save($this->request->data)) {
				$this->Session->setFlash(__('The seed has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The seed could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Seed->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Seed->id = $id;
		if (!$this->Seed->exists()) {
			throw new NotFoundException(__('Invalid seed'));
		}
		if ($this->Seed->delete()) {
			$this->Session->setFlash(__('Seed deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Seed was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}