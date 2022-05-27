<?php
    include("config/verifica.php");
    include("config/conexao.php");
    $email =  $_SESSION['usuario'];
    $res = mysqli_query($link,"SELECT *from usuarios WHERE email = '$email' ");
    $show = mysqli_fetch_assoc($res);
    $id = $show['id_usuario'];
    $nomeLogado = $show['nome'];
    
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/home.css" />
        <link rel="stylesheet" href="dist/css/lightbox.min.css">
        <script src="dist/js/lightbox-plus-jquery.min.js"></script>
    </head>
    <body>
    <container>
        <div class="sidebar">

        </div>
        <div class="conteudo">
            
            <div class="top">
                <h2 class="titulo">HOME / Olá <?php  echo $nomeLogado; ?>
                    <a href="config/logoff.php" class="btn btn-danger" style="float:right">SAIR</a>
                </h2>
            </div>
            <div class="wh">
                <form action="" method="post"  enctype="multipart/form-data">
                    <textarea class="form-control" name="msg"></textarea>
                    <div class="img-upload">
                        <label for="uploadImage">
                            <img src="data:image/png;base64,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" style="width:35px;" />
                        </label>
                        <input type="file" name="foto" id="uploadImage"/>
                    </div>
                    <input type="submit" class="btn btn-primary" value="tweet" name="tweet"/>
                </form>
            </div>
            <?php 
               
                $res = mysqli_query($link,"SELECT *from usuarios as u JOIN tweet as t WHERE u.id_usuario = t.id_usuario ORDER BY id_tweet DESC")or die(mysqli_error($link));
                while($show = mysqli_fetch_assoc($res)){
                    $idUsuarioTweet = $show['id_usuario'];
                    $id_tweet = $show['id_tweet'];
                    $msg = $show['tweet'];
                    $nome = $show['nome'];
                    $hr = $show['hora_inclusao'];
                    $imagem = $show['image_tweet'];
                    $curtidas = $show['curtir'];
            ?>
            
            <div class="tweets">
                <div class="twt-content">
                    <div class="twt-img">
                        <img src="img/avatar.jpg" class="rounded-circle" widht="50" height="50"/>
                        <span class="twt-perfil"><?php echo $nome ?></span>
                        <span class="twt-hr"><?php echo $hr ?></span>
                        
                        <?php
                            if($id == $idUsuarioTweet){      
                        
                                echo "<a href='config/delete.php?id_tweet=$id_tweet' ><img src='img/delete.png' width='25' /></a>";

                            }
                        ?>
                        
                    </div>
                    
                    <div class="twt-msg">
                        
                        
                        <?php echo $msg ?>
                        <br>
                        <?php 
                            if($imagem != 'NULL'){ ?>
                            <a class="example-image-link" href="uploads/<?php echo $imagem ?>" data-lightbox="example-1">
                                <img class="example-image" src="uploads/<?php echo $imagem ?>" width="200" />
                            </a>
                        <?php        
                            }
                        ?>
                        
                    </div>
                    <div class="twt-share">
                        <div class="twt-comment">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id_tweet ?>"> 
                                <img src="img/comment.png" width="22"/>
                            </a>
                        </div>
                        <div class="twt-rt">
                            <img src="img/rt.png" width="22"/>20
                        </div>
                        <div class="twt-like">
                            <a href="config/like.php?id_tweet=<?php echo $id_tweet ?>"><img src="img/like.png" width="22"/></a>
                            <?php echo $curtidas ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?php if($id_tweet == $id_tweet)echo $id_tweet?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Comentar tweet</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="config/comment.php" method="post">
                            <textarea class="form-control" name="comment" placeholder="Digite aqui o comentario"></textarea>
                            <input type="hidden" name="idUsuario" value="<?php echo $id ?>" />
                            <input type="hidden" name="idTweet" value="<?php echo $id_tweet ?>" />
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" class="btn btn-primary">Comentar</button>
                            </div>
                        </form>
                        <hr>
                            <?php 
                                $resComment = mysqli_query($link,"SELECT *from usuarios as u JOIN comentarios as c  WHERE u.id_usuario = c.id_usuario AND c.id_tweet = '$id_tweet' ORDER BY id_comentario DESC");
                                $count = mysqli_num_rows($resComment);
                            ?>
                            <h3>Comentários(<?php echo $count ?>)</h3>
                        <hr>
                        <?php
                            if($count>0){
                                while($show=mysqli_fetch_assoc($resComment)){
                                    $comment = $show['mensagem'];
                                    $dataComment = $show['dataComentario'];
                                    $horaComment = $show['horaComentario'];
                                    $nome = $show['nome'];
                            ?>
                            <div class="card border-primary mb-3" style="">
                            <div class="card-header"><?php echo $nome ?> - <?php echo $dataComment ?></div>
                            <div class="card-body text-primary">
                                <p class="card-text"><?php echo $comment ?></p>
                            </div>
                            </div>

                            <?php 
                                }                 
                            }else{
                                echo "<h3>Esse tweet não possui comentarios!</h3>";
                            }
                        ?>
                    </div>  
                    </div>
                </div>
            </div>
            <?php
                }
            ?>        
        </div>
    </container>
    </body>
</html>

<?php
    if(isset($_POST['tweet'])){
        $msg = $_POST['msg'];
        $data = date("Y-m-d");
        $time = date("H:i:s");
        
        if(isset($_FILES['foto']) && $_FILES['foto']['name'] != ''){
            $ext = strtolower(substr($_FILES['foto']['name'],-4));
            $new_name = date('Y.m.d-h.i.s').$ext;
            $dir = './uploads/';
            move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name);
            $res = mysqli_query($link,"INSERT INTO tweet(
                                                        id_tweet,
                                                        id_usuario,
                                                        tweet,
                                                        data_inclusao,
                                                        hora_inclusao,
                                                        image_tweet)VALUES(
                                                                            'NULL',
                                                                            '$id',
                                                                            '$msg',
                                                                            '$data',
                                                                            '$time',
                                                                            '$new_name')")or die(mysqli_error($link));
        }else{
            $res = mysqli_query($link,"INSERT INTO tweet(
                                                    id_tweet,
                                                    id_usuario,
                                                    tweet,
                                                    data_inclusao,
                                                    hora_inclusao,
                                                    image_tweet)VALUES(
                                                                        'NULL',
                                                                        '$id',
                                                                        '$msg',
                                                                        '$data',
                                                                        '$time',
                                                                 'NULL')")or die(mysqli_error($link));
        }
        if($res){
            echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
           // var_dump($_FILES['foto']);
        }                                                                
    }

?>