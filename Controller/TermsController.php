<?php
class TermsController extends AppController {

	var $uses = array('Term', 'Taxonomy');

	public $paginate = array(
		'limit' => 25,
		'order' => array(
			'Term.name' => 'ASC'
		)
	);

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function index() {
		$terms = $this->paginate();
		foreach($terms as &$term) {
			if(!empty($term['Taxonomy'])) {
				$term['TaxonomyList'] = $this->createTaxonomyList($term['Taxonomy']);
			} else {
				$term['TaxonomyList'] = null;
			}
		}
		$this->set('terms', $terms);
	}

	public function view($id = null) {
		$this->Term->id = $id;
		if (!$this->Term->exists()) {
			throw new NotFoundException(__('Invalid term'));
		}
		//$term = $this->Term->read(null, $id);

		$term = $this->Term->find('first', array(
			'recursive' => 2,
			'conditions' => array('Term.id' => $id)
		));

		debug($term);

		$this->set('term', $term);
	}

	public function add() {
		if ($this->request->is('post')) {

			if ($this->Term->isUnique('name', $this->request->data['Term']['name'])) {
				if ($this->Term->save($this->request->data)) {
					$this->Session->setFlash(__('The term has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The term could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The term already exists.'));
			}
		}
	}

	public function edit($id = null) {
		$this->Term->id = $id;
		if (!$this->Term->exists()) {
			throw new NotFoundException(__('Invalid term'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Term->isUnique('name', $this->request->data['Term']['name'], $id)) {
				if ($this->Term->save($this->request->data)) {
					$this->Session->setFlash(__('The term has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The term could not be saved. Please, try again.'));
					$this->request->data = $this->Term->read(null, $id);
				}
			} else {
				$this->Session->setFlash(__('The term already exists.'));
				$this->request->data = $this->Term->read(null, $id);
			}
		} else {
			$this->request->data = $this->Term->read(null, $id);
		}
	}

	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Term->id = $id;
		if (!$this->Term->exists()) {
			throw new NotFoundException(__('Invalid term'));
		}
		if ($this->Term->delete()) {
			$this->Session->setFlash(__('Term deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Term was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function make_a_clipping() {
		if ($this->request->is('post')) {
			$this->Term->create();
			// TODO: need to make sure slug is unique
			$this->request->data['Term']['slug'] = $this->stringToSlug($this->request->data['Term']['name']);
			if ($this->Term->isUnique('name', $this->request->data['Term']['name'])) {
				if ($this->Term->save($this->request->data)) {
					$this->Session->setFlash(__('The term has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The term could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The term already exists.'));
			}
		}
		$this->Term->recursive = 0;
		$this->set('terms', $this->paginate());
	}

}