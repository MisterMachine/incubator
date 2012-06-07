<?php
class SeedsController extends AppController {

	var $uses = array('Seed', 'Term', 'Taxonomy', 'TermRelationship');

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
		$seeds = $this->paginate();
		//debug($seeds);
		$this->set('seeds', $seeds);
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
			$terms = $this->Term->find('all', array(
				'fields' => array('Term.id', 'Term.name'),
				'order' => array('Term.name ASC'),
				'recursive' => 0
			));
			$objects = $this->Seed->find('list', array(
				'fields' => array('Seed.id', 'Seed.name'),
				'order' => array('Seed.name ASC'),
				'recursive' => 0
			));

			$taxonomies = $this->Taxonomy->getUniqueTaxonomies();
			foreach($taxonomies as &$taxonomy) {
				$taxonomy['Terms'] = $this->Taxonomy->getTaxonomyTerms($taxonomy['Taxonomy']['name']);
			}
			$this->set('objects', $objects);
			$this->set('terms', $terms);
			$this->set('taxonomies', $taxonomies);
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

	public function step_one() {
		if ($this->request->is('post')) {
			$this->Seed->create();
			$user_id = $this->Auth->user('id');
			if(isset($user_id)) {
				$this->request->data['Seed']['user_id'] = $user_id;
				$seed = $this->Seed->save($this->request->data);
				if (!empty($seed)) {
					$this->Session->setFlash(__('The seed has been saved'));
					$this->redirect(array('action' => 'step_two', $seed['Seed']['id']));
				} else {
					$this->Session->setFlash(__('The seed could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('The seed could not be associated with a user. Please, try again.'));
			}
		}
	}

	public function step_two($id = null) {
		$this->Seed->id = $id;
		if (!$this->Seed->exists()) {
			throw new NotFoundException(__('Invalid seed'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Seed->save($this->request->data)) {
				$this->Session->setFlash(__('The seed has been saved'));
				$seed = $this->Seed->read(null, $id);
				$this->redirect(array('action' => 'step_three', $seed['Seed']['id']));
			} else {
				$this->Session->setFlash(__('The seed could not be saved. Please, try again.'));
			}
		} else {
			$this->set('seed', $this->Seed->read(null, $id));
		}
	}

	public function step_three($id = null) {
		$this->Seed->id = $id;
		if (!$this->Seed->exists()) {
			throw new NotFoundException(__('Invalid seed'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Seed->save($this->request->data)) {
				$this->Session->setFlash(__('The seed has been saved'));
				$seed = $this->Seed->read(null, $id);
				$this->redirect(array('action' => 'step_four', $seed['Seed']['id']));
			} else {
				$this->Session->setFlash(__('The seed could not be saved. Please, try again.'));
			}
		} else {
			$this->set('seed', $this->Seed->read(null, $id));
		}
	}

	public function step_four($id = null) {
		$this->Seed->id = $id;
		if (!$this->Seed->exists()) {
			throw new NotFoundException(__('Invalid seed'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Seed->save($this->request->data)) {
				$this->Session->setFlash(__('The seed has been saved'));
				$seed = $this->Seed->read(null, $id);
				$this->redirect(array('action' => 'step_five', $seed['Seed']['id']));
			} else {
				$this->Session->setFlash(__('The seed could not be saved. Please, try again.'));
			}
		} else {
			$this->set('seed', $this->Seed->read(null, $id));
		}
	}

	public function step_five($id = null) {
		$this->Seed->id = $id;
		if (!$this->Seed->exists()) {
			throw new NotFoundException(__('Invalid seed'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Seed->save($this->request->data)) {
				$this->Session->setFlash(__('The seed has been saved'));
				$seed = $this->Seed->read(null, $id);
				$this->redirect(array('action' => 'view', $seed['Seed']['id']));
			} else {
				$this->Session->setFlash(__('The seed could not be saved. Please, try again.'));
			}
		} else {
			$this->set('seed', $this->Seed->read(null, $id));
		}
	}

}