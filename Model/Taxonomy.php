<?php
class Taxonomy extends AppModel {
	public $name = 'Taxonomy';
	public $belongsTo = array('Term' => array('foreignKey' => 'term_id'));
	public $hasMany = array('TermRelationship' => array('foreignKey' => 'term_taxonomy_id'));
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

	public function getTaxonomyTerms( $taxonomy = false, $verbose = true ) {
		if(!empty($taxonomy)) {
			$terms = $this->find('all', array(
				'recursive' => 1,
				'fields' => array('Term.id', 'Term.name', 'Taxonomy.id'),
				'conditions' => array('Taxonomy.name' => $taxonomy),
				'order' => array('Term.name ASC')
			));
			if(empty($verbose)) {
				$terms_simple = array();
				foreach($terms as $term) {
					// We're matching the terms up with their taxonomy record id in order to make the term taxonomy relationships
					$terms_simple[$term['Taxonomy']['id']] = $term['Term']['name'];
				}
				return $terms_simple;
			} else {
				return $terms;
			}
		}
		return false;
	}

}