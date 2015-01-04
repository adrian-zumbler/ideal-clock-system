<section class="Login round">
	<?php
		echo $this->Form->create('User',array(
			'action' => 'login' ));
		$formGroup = array(
            'class' => 'form-group' 
          );
        $buttonStyle = array(
          'div' => false,
          'label' => 'Entrar',
          'class' => 'Login-button large levitate-button bg-blue round font-white'
          );
        echo $this->Form->input('username', array(
                                    'label' => 'Nombre de usuario',
                                    'div' => array(
                                      'class' =>$formGroup),
                                    'class' => 'form-control',
                                    'placeholder' => 'username'));
        echo $this->Form->input('password', array(
                                    'label' => 'Contraseña',
                                    'div' => array(
                                      'class' =>$formGroup),
                                    'class' => 'form-control',
                                    'placeholder' => 'contraseña'));
        echo $this->Form->end($buttonStyle);
	?>
</section>