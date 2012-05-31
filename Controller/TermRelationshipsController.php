<?php
class TermRelationshipsController extends AppController {

	var $uses = array('TermRelationship', 'Seed', 'Term');

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$termRelationships = $this->TermRelationship->find('all');
		$this->set('termRelationships', $termRelationships);
	}

	public function view($id = null) {
		$this->TermRelationship->id = $id;
		if (!$this->TermRelationship->exists()) {
			throw new NotFoundException(__('Invalid pod'));
		}
		$this->set('termRelationship', $this->TermRelationship->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->TermRelationship->create();
			if ($this->TermRelationship->save($this->request->data)) {
				$this->Session->setFlash(__('The term relationship has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The term relationship could not be saved. Please, try again.'));
			}
		} else {
			$objects = $this->Seed->find('list', array(
				'fields' => array('Seed.id', 'Seed.name'),
				'order' => array('Seed.name ASC'),
				'recursive' => 0
			));
			$terms = $this->Term->find('list', array(
				'fields' => array('Term.id', 'Term.name'),
				'recursive' => 0
			));


			debug($terms, true);



			$this->set('objects', $objects);
			$this->set('terms', $terms);
		}
	}

	public function edit($id = null) {
		$this->TermRelationship->id = $id;
		if (!$this->TermRelationship->exists()) {
			throw new NotFoundException(__('Invalid term relationship'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TermRelationship->save($this->request->data)) {
				$this->Session->setFlash(__('The term relationship has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The term relationship could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TermRelationship->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->TermRelationship->id = $id;
		if (!$this->TermRelationship->exists()) {
			throw new NotFoundException(__('Invalid term relationship'));
		}
		if ($this->TermRelationship->delete()) {
			$this->Session->setFlash(__('Term relationship deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Term relationship was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}