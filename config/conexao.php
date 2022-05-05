<?php

$host = "127.0.0.1";
$user = "root";
$pass = "";
$bd = "twitter_bd";

$link = mysqli_connect($host,$user,$pass,$bd);

if(!$link){
    echo "Erro ao conectar no banco de dados";
    echo mysqli_error($link);
}