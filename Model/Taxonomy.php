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

}