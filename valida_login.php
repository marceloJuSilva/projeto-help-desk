<?php 
   
   session_start();
   
   $valida_usuario = false;
   $usuario_id = null;
   $perfil_id = null;

   $perfis = array('1'=>'Administrativo', '2'=>'Usuário');


   //Usuarios do sistema
    $usuarios_app = array(
        array('id'=> '1', 'email' => 'adm@teste.com.br', 'senha'=>'fafafafa', 'perfil_id'=>'1'),
        array('id'=> '2', 'email' => 'user@teste.com.br', 'senha'=>'fafafafa', 'perfil_id'=>'1'),
        array('id'=> '3', 'email' => 'marcelo@teste.com.br', 'senha'=>'fafafafa', 'perfil_id'=>'2'),
        array('id'=> '4', 'email' => 'helren@teste.com.br', 'senha'=>'fafafafa', 'perfil_id'=>'2'),
    );

     foreach($usuarios_app as $usuarios) {

    if($usuarios['email'] == $_POST['email'] && $usuarios['senha'] == $_POST['senha']) {
        
        $valida_usuario = true;
        $usuario_id = $usuarios['id'];
        $perfil_id = $usuarios['perfil_id'];        
    }     
    }

    if($valida_usuario) {
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $perfil_id;

        header('location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NÃO';
        header('location: index.php?login=erro');
    }


//   $_POST['email'];
//   $_POST['senha'];


    /*echo '<pre>';
    print_r($usuarios);
    echo '</pre>';*/
   
  
?>