<?php
    session_start();
    //remover índices do array de sessão
    //unset()
    //unset($_SESSION['x']) exclui esse indice, apenas se existir 
    print_r($_SESSION);

    //Destruir a sessão
    //session_destroy()
    // Após a próxima execução os valores será excluido
    session_destroy();
    header('Location: Index.php');
    

?>