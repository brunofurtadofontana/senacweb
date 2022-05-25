<?php
    include("conexao.php");
    $id = $_GET['id_tweet'];

    $res = mysqli_query($link,"UPDATE tweet set curtir = curtir+1 where id_tweet = $id ");
    
    if($res){
        header("Location: ../home.php");
    }else{
        echo "Erro ao curtir a postagem!";
    }
