<?php
class TaxonomiesController extends AppController {

	var $uses = array('Term', 'Taxonomy');

	public $paginate = array(
		'limit' => 25,
		'order' => array(
			'Taxonomy.name' => 'ASC'
		)
	);

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$taxonomies = $this->Taxonomy->find('all', array(
			'order' => array('Taxonomy.name ASC')
		));
		$this->set('taxonomies', $taxonomies);
	}

	public function view($id = null) {
		$this->Taxonomy->id = $id;
		if (!$this->Taxonomy->exists()) {
			throw new NotFoundException(__('Invalid taxonomy'));
		}
		$this->set('taxonomy', $this->Taxonomy->read(null, $id));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Taxonomy->create();
			if ($this->Taxonomy->save($this->request->data)) {
				$this->Session->setFlash(__('The taxonomy has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The taxonomy could not be saved. Please, try again.'));
			}
		} else {
			$terms = $this->Term->find('list', array(
				'fields' => array('Term.id', 'Term.name'),
				'order' => array('Term.name ASC'),
				'recursive' => 0
			));
			$taxonomies = $this->Taxonomy->find('list', array(
				'fields' => array('Taxonomy.id', 'Taxonomy.name'),
				'order' => array('Taxonomy.name ASC'),
				'recursive' => 0
			));
			$this->set('terms', $terms);
			$this->set('taxonomies', $taxonomies);
		}
	}

	public function edit($id = null) {
		$this->Taxonomy->id = $id;
		if (!$this->Taxonomy->exists()) {
			throw new NotFoundException(__('Invalid taxonomy'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Taxonomy->save($this->request->data)) {
				$this->Session->setFlash(__('The taxonomy has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The taxonomy could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Taxonomy->read(null, $id);
			$terms = $this->Term->find('list', array(
				'fields' => array('Term.id', 'Term.name'),
				'order' => array('Term.name ASC'),
				'recursive' => 0
			));
			$this->set('terms', $terms);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Taxonomy->id = $id;
		if (!$this->Taxonomy->exists()) {
			throw new NotFoundException(__('Invalid taxonomy'));
		}
		if ($this->Taxonomy->delete()) {
			$this->Session->setFlash(__('Taxonomy deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Taxonomy was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}