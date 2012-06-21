<?php
class TermRelationship extends AppModel {
	public $name = 'TermRelationship';
/*
	public $belongsTo = array(
		'object_id' => array('className' => 'Term'),
		'term_taxonomy_id' => array('className' => 'Taxonomy')
	);
*/
	public $validate = array(
		'object_id' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'An object_id is required'
			)
		),
		'term_taxonomy_id' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A term_taxonomy_id is required'
			)
		)
	);

	public function beforeSave() {
		//$this->isUniqueTermRelationship();
	}

	public function isUniqueTermRelationship() {

		//debug($this->TermRelationship);

/*
		return $this->find('first', array(
			'conditions' => array('TermRelationship.object_id' => $this->data['TermRelationships']['object_id'])
		));
*/
		return true;
	}

}