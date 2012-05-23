<?php
class Group extends AppModel {
	public $name = 'Group';
	public $hasMany = 'Pod';
	public $validate = array(
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