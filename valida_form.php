<?php 
    session_start(); // antes de impressão de dados, por padrão é o primeiro a ser declarado

    $usuarios_app = [
        ['id' => 1, 'email' => 'admin@teste.com.br', 'senha' => 'teste123', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'admin@teste1.com.br', 'senha' => 'teste1234', 'perfil_id' => 1],
        ['id' => 3, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'jose@teste1.com.br', 'senha' => 'teste1234', 'perfil_id' => 2],
        ['id' => 5, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
    ];

    //Verifica se esta autenticado
    $usuario_autencado = false;
    $usuario_id = null;
    $perfil_user_id = null;
    $perfis = [1 => 'admin', 
               2 => 'usuario'];
    
   if(isset($_POST['email']) && isset($_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

        foreach ($usuarios_app as $user) {

            $login_user = $user['email'];
            $senha_user = $user['senha'];
            if($login_user == $email && $senha_user == $senha){
                
                $usuario_autencado = true;
                $usuario_id = $user['id'];
                $user_perfil_id = $user['perfil_id'];
            }
        }

        if ($usuario_autencado){
            echo 'Autenticado';
            
            $_SESSION['autenticao'] = "SIM";
            $_SESSION['id'] = $usuario_id;
            $_SESSION['id_perfil'] = $user_perfil_id;
            header('Location: home.php');
            
            
        } else {
            $_SESSION['autenticao'] = "NAO";
            header('Location: index.php?Login=erro');
        }
    }
?>