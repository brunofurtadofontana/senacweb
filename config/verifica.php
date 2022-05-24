<?php
SESSION_START();
if(!isset($_SESSION['usuario'])){
    header('Location:index.php?erro=3');
}