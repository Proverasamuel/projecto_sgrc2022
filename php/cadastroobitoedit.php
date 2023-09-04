<?php
    session_start();
    include_once("conexao.php");
    $id = $_POST['id'];
    $localMorte=$_POST['localMorte'];
    $dataMorte=$_POST['dataMorte'];
    $horaMorte=$_POST['horaMorte'];
    $nomeDeclarante=$_POST['nomeDeclarante'];
    $dataMorte=date('Y-m-d', strtotime($dataMorte));
    $sqlObt="UPDATE boletimobi SET  `localMorte` = '$localMorte', `horaMorte` = '$horaMorte', `dataMorte` = '$dataMorte', `nomeDeclarante` = '$nomeDeclarante' WHERE idObito = $id";
    $queryObt=mysqli_query($conexao, $sqlObt);
/* ----------------------------------------------------------------------------------------------------------------------------------------------- */
    

   
       if ($queryObt==true) {
        $_SESSION['mensag']="<h4 style='color: green;'>Alterado com sucesso</h4>";
                    header("Location: ../pages/ui-features/listaobitos.php");
                }else {
                    $_SESSION['mensag']="<h4 style='color: red;'>Não alterado com sucesso</h4>";
                     header("Location: ../pages/ui-features/listaobitos.php");
                } 
?>
