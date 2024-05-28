<?php

include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start();


if (isset($_POST['email'], $_POST['p'])){
    $email = $_POST['email'];
    $password = $_POST['p'];

    if (login($email, $password, $mysqli) == true ){
        header('Location: ../protected_page.php');
    } else {
        //falha de login
        header('Location: ../index.php?error=1');

     }
} else {
    // As váriaveis POST corretas não foram enviadas para esta página.
    echo 'Invalid Request';
}