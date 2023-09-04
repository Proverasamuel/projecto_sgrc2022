<?php
$server = "localhost";
$usuario = "root";
$senha = '1234@';
$bD = "bd_sgrc";
$conexao = @mysqli_connect($server, $usuario, $senha, $bD);
    if (!$conexao) {
      die("Connection Failed".mysqli_connect_error());
      $conexao=null;
    }