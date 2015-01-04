<section class="Register">
  
    <?php
        echo $this->Form->create('User', array(
          'action' => 'add')
        );
        $formGroup = array(
            'class' => 'form-group' 
          );
        $buttonStyle = array(
          'div' => false,
          'label' => 'Registar',
          'class' => 'large levitate-button bg-orange padding round font-white'
          );
        echo $this->Form->input('acd', array(
                                    'label' => 'ACD',
                                    'div' => array(
                                      'class' =>$formGroup),
                                    'class' => 'form-control',
                                    'placeholder' => 'ACD'));
        echo $this->Form->input('first_name', array(
                                    'label' => 'Nombre',
                                    'div' => array(
                                      'class' =>$formGroup),
                                    'class' => 'form-control',
                                    'placeholder' => 'Nombre'));
        echo $this->Form->input('last_name', array(
                                    'label' => 'Apellidos',
                                    'div' => array(
                                      'class' =>$formGroup),
                                    'class' => 'form-control',
                                    'placeholder' => 'Apellidos'));
        echo $this->Form->input('username', array(
                                    'label' => 'UserName',
                                    'div' => array(
                                      'class' =>$formGroup),
                                    'class' => 'form-control',
                                    'placeholder' => 'UserName'));
        echo $this->Form->input('password', array(
                                    'label' => 'Contraseña',
                                    'div' => array(
                                      'class' =>$formGroup),
                                    'class' => 'form-control',
                                    'placeholder' => 'contraseña'));
        echo $this->Form->input('role_id', array(
                                    'label' => 'Rol',
                                    'div' => array(
                                      'class' =>$formGroup),
                                    'class' => 'form-control',
                                    'options' => $roles
                                    ));

        echo $this->Form->end($buttonStyle);


    ?>

</section>
