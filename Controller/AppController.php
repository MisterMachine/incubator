<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {

	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'home'),
			'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
		)
	);

	function beforeFilter() {
		// allow access to all index and view actions
		//$this->Auth->allow('index', 'view');

		$this->set('auth_user', $this->Auth->User());

	}

	public function stringToSlug($str = false) {
		if($str) {
			// turn into slug
			$str = Inflector::slug($str);
			// to lowercase
			$str = strtolower($str);
			return $str;
		}
		return false;
	}

	public function createTaxonomyList($taxonomies = false, $delimiter = ', ') {
		if($taxonomies) {
			$taxonomy_list = array();
			foreach($taxonomies as $taxonomy) {
				$taxonomy_list[] = $taxonomy['name'];
			}
			return implode($taxonomy_list,', ');
		}
		return false;
	}
}