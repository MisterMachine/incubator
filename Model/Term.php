<?php
class Term extends AppModel {
	public $name = 'Term';
	public $hasMany = 'Taxonomy';
	public $validate = array(
		'name' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A name is required'
			)
		),
		'slug' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A slug is required'
			)
		)
	);

	public function beforeSave() {
	}

	public function getTermRelationshipCount($id = false) {
		if($id) {
		}
		return false;
	}

}