<?php
session_start();
include_once("conexao.php");
$id = $_POST['id'];
$sqlapgObi="DELETE FROM boletimobi WHERE idObito=$id";
$queryapgObi=mysqli_query($conexao, $sqlapgObi);

if ($queryapgObi==true) {
    $_SESSION['mg']="<h4 style='color: green;'>Nome excluido com sucesso</h4>";
                header("Location: ../pages/ui-features/listaobitos.php");
            }else {
                $_SESSION['mg']="<h4 style='color: red;'>Nome não excluido</h4>";
                 header("Location: ../pages/ui-features/listaobitos.php");
            }
?>