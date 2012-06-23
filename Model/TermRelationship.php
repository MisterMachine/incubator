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
		if(!$this->isUniqueTermRelationship()) {
			return false;
		}
		return true;
	}

	/**
	 * isUniqueTermRelationship function.
	 * Check to see if the term relationship exists already before saving.
	 * @access private
	 * @return void
	 */
	private function isUniqueTermRelationship() {
		$termRelationship = $this->find('first', array(
			'fields' => array('TermRelationship.id'),
			'conditions' => array(
				'TermRelationship.object_id' => $this->data['TermRelationship']['object_id'],
				'TermRelationship.term_taxonomy_id' => $this->data['TermRelationship']['term_taxonomy_id']
			)
		));
		// Term Relationship exists, so this is not a unique relationship
		if(!empty($termRelationship)) {
			return false;
		}
		// Yay, it's unique
		return true;
	}

}