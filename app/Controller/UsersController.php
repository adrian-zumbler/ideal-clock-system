<?php

class UsersController extends AppController {
	public $helpers = array('Form','Html');

	function index() {
		
	}

	function view() {

	}

	function login() {
		
	}

	function add() {
		$this->set('roles',$this->getRoles());

		if($this->request->is('post')) {
			$this->User->create();
			if($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('El usuario se cargo correctamente'));
			} else {
				$this->Session->setFlash(__('Imposible realizar la acción'));
			}
		}
	}

	private function getRoles() {
		$roles = $this->User->Role->find('list', array(
			'fields' => array('id','name')
			)
		);
		return $roles;
	}
}