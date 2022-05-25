<?php
SESSION_START();
if(!isset($_SESSION['usuario'])){
    header('Location:index.php?error=3');
}