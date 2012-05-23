<?php
class Pod extends AppModel {
	public $name = 'Pod';
	public $belongsTo = 'Group';
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