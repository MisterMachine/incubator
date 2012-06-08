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

	public function getTaxonomyTerms( $taxonomy = false, $verbose = true ) {
		if(!empty($taxonomy)) {
			$terms = $this->find('all', array(
				'recursive' => 1,
				'fields' => array('Term.id', 'Term.name'),
				'conditions' => array('Taxonomy.name' => $taxonomy),
				'order' => array('Term.name ASC')
			));
			if(empty($verbose)) {
				$terms_simple = array();
				foreach($terms as $term) {
					$terms_simple[$term['Term']['id']] = $term['Term']['name'];
				}
				return $terms_simple;
			} else {
				return $terms;
			}
		}
		return false;
	}

}