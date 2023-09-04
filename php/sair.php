<?php
session_start();
    unset(
        $_SESSION['idUsuario'],      
        $_SESSION['nomeUsuario'],            
        $_SESSION['idCargo'],        
        $_SESSION['emailUsuario'],        
    );

    header ("Location: ../pages/login/login.php");

?>