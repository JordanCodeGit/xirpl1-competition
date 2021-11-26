<?php
    session_start();
    $user = "popol";
    $password = "popol";
    $form_user = $_POST['username'];
    $form_pass = $_POST['password'];
    if(($form_user == $user) && ($form_pass == $password)){
        $_SESSION['username'] = $form_user;
        header("Location: ./tampil.php");
    } else {
        echo "SALAH cuy";
    }
?>