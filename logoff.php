<?php

session_start();
session_destroy();
header("Location:index.php");




/*

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    unset($_SESSION['x']); //remove indice apenas se existir.

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    session_destroy(); //sera destruida, porém apenas em uma proxima sessão não teremos mais acesso as variaveis de sessão

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */


//remover indices do array de sessão
//unset(); //não é exclusiva da super global session, serve para destruir indices de qualquer array


//remover a variável de sessão
//session_destroy() //remove todos os indices dentro da super global sesssion

?>