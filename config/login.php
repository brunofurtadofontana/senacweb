<?php

include("conexao.php");
 
$email = $_POST['email'];
$pass = $_POST['password'];
//$pass = md5($pass);

$res = mysqli_query($link,"select email from usuarios WHERE email = '$email' ");
$rowEmail = mysqli_num_rows($res);

if($rowEmail == 1){
    session_start();
    $resPass = mysqli_query($link,"select senha from usuarios WHERE senha = '$pass' ");
    $rowPass = mysqli_num_rows($resPass);
    if($rowPass == 1){
        $_SESSION['usuario'] = $email;
        header("Location:../home.php");
    }else{
        $_SESSION['nao_autenticado'] = true;
        header("Location:../index.php?error=1");
    }
}else{
    $_SESSION['nao_autenticado'] = true;
    header("Location:../index.php?error=1");
}