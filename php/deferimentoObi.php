<?php
    session_start();
include_once("conexao.php");
$id = $_POST['id'];
$nomeFalecido=$_POST['nomeFalecido'];

$sqldeferimentoObi="UPDATE boletimobi SET `nomeFalecido`= '$nomeFalecido' , status='Deferido' WHERE idObito = $id";
    $querydeferimentoObi=mysqli_query($conexao, $sqldeferimentoObi);


    


?>