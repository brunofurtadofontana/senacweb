<?php
include("conexao.php");

$id_tweet = $_GET['id_tweet'];

$getImage = mysqli_query($link,"SELECT image_tweet from tweet WHERE id_tweet = $id_tweet");
$resp = mysqli_fetch_assoc($getImage);
$image = $resp['image_tweet'];

$res = mysqli_query($link,"DELETE from tweet where id_tweet = $id_tweet ");

if($res){
    unlink("../uploads/$image");
    header("Location: ../home.php");
}else{
    header("Location: ../home.php?erro=5");
}


