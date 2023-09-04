<?php
    function isOnline(){
        session_start();
        if ($_SESSION['idUsuario']) {
            true;
            return false;
        }
    }

?>