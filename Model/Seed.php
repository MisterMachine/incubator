<?php
class Seed extends AppModel {
	public $name = 'Seed';
	public $belongsTo = 'User';
	public $hasMany = array('TermRelationship' => array('foreignKey' => 'object_id'));
	public $validate = array(
		'user_id' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A user_id is required'
			)
		),
		'name' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A name is required'
			)
		)
	);

	public function beforeSave() {
	}

}