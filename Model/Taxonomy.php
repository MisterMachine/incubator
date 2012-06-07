<?php
class Taxonomy extends AppModel {
	public $name = 'Taxonomy';
	public $belongsTo = 'Term';
	public $validate = array(
		'term_id' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A term_id is required'
			)
		),
		'taxonomy' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A taxonomy is required'
			)
		)
	);

	public function beforeSave() {
	}

	public function getUniqueTaxonomies() {
		return $this->find('all', array(
			'recursive' => -1,
			'fields' => array('Taxonomy.name'),
			'group' => array('Taxonomy.name'),
			'order' => array('Taxonomy.name ASC')
		));
	}

	public function getTaxonomyTerms( $taxonomy = false ) {
		if(!empty($taxonomy)) {
			return $this->find('all', array(
				'recursive' => 1,
				'fields' => array('Term.id', 'Term.name'),
				'conditions' => array('Taxonomy.name' => $taxonomy),
				'order' => array('Term.name ASC')
			));
		}
		return false;
	}

}