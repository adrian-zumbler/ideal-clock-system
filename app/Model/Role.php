<?php

class Role extends AppModel {
	public $name = 'Role';
	public $hasMany = array(
		'Role' => array(
			'className' => 'User',
			'foreignKey' => 'role_id')
		);
}