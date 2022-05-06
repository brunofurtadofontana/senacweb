<?php

include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$dtnasc = $_POST['datanasc'];

$res = mysqli_query($link,"insert into usuarios(id_usuario,nome,email,senha,dataNasc)
VALUES('NULL','$nome','$email','$senha','$dtnasc')") or die(mysqli_error($link));

if($res){
    header("Location:../index.php");
}else{
    header("Location:../cadastro.php?erro=1");
}