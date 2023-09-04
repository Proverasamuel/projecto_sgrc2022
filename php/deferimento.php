<?php
    session_start();
include_once("conexao.php");
$id = $_POST['id'];
$mencoes=$_POST['mencoes'];

$sqlDeferimento="UPDATE registando SET `mencoes`= '$mencoes' , status='Deferido' WHERE idRegistando = $id";
    $queryDeferimento=mysqli_query($conexao, $sqlDeferimento);


    if ($queryDeferimento==true) {
        $_SESSION['msge']="<h4 style='color: green;'>Deferido com sucesso</h4>";
                    header("Location: ../pages/ui-features/listar.php");
                    
                }else {
                    $_SESSION['msge']="<h4 style='color: green;'>Não deferido</h4>";
                     header("Location: ../pages/ui-features/listar.php");
                }


?>