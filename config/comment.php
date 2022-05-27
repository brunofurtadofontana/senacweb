<?php
include("conexao.php");

$idUsuario = $_POST['idUsuario'];
$idTweet = $_POST['idTweet'];
$comment = $_POST['comment'];
$dataComment = date("Y-m-d");
$timeComment = date("H:i:s");

$res = mysqli_query($link,"INSERT INTO comentarios(id_comentario,
                                                    id_tweet,
                                                    id_usuario,
                                                    mensagem,
                                                    dataComentario,
                                                    horaComentario)VALUES('NULL',
                                                                        '$idTweet',
                                                                        '$idUsuario',
                                                                        '$comment',
                                                                        '$dataComment',
                                                                        '$timeComment') ")or die(mysqli_error($link));
if($res){
    header("Location: ../home.php");
}else{
    header("Location: ../home.php?error=6");
}

