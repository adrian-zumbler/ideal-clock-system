<?php

class CheckoutsController extends AppController {

	function index() {
		
	}

	function add() {
		//$this->request->onlyAllow('ajax');
		if($this->request->is('post')){
			$id =  $this->request->data['id'];
			$data = array(
			'Checkout' => array(
				'time' => date("Y-m-d H:i:s",time()),
				'user_id' => '1',
				'auxiliar_id' => $id));
			$this->Checkout->create();
			$this->Checkout->save($data);	
		}
		


		/*$this->request->onlyAllow('ajax');
		if($this->request->is('post')) {
			$this->Checkout->create();
			if($this->Checkout->save()) {

			}
		}*/

	}
}