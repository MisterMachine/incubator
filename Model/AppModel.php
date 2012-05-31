<?php
App::uses('Model', 'Model');
class AppModel extends Model {

	public function isUnique($field, $value, $id = false) {
		$fields[$this->name.'.'.$field] = $value;
		if (!empty($id)) {
			$fields[$this->name.'.id'] = "IS NOT $id";
		}
		$this->recursive = -1;
		if ($this->hasAny($fields)) {
			$this->invalidate('unique_'.$field);
			return false;
		} else {
			return true;
		}
	}

}