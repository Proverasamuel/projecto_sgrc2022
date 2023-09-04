<?php
    session_start();
    include_once("conexao.php");
    $id = $_POST['id'];
    $nomeProprio=$_POST['nomeProprio'];
    $nomeFamilia=$_POST['nomeFamilia'];
    
    $sqlapgRegistando="DELETE FROM registando WHERE idRegistando = $id";
    $queryapgRegista=mysqli_query($conexao, $sqlapgRegistando);
/* ----------------------------------------------------------------------------------------------------------------------------------------------- */
    $sqlapgP="DELETE FROM `pai` WHERE idRegistando = $id";
    $queryapgP=mysqli_query($conexao,$sqlapgP);

    /* ------------------------------------ */
    
    $sqlapgAvo="DELETE FROM `avos` WHERE idRegistando = $id";
    $queryapgAvo=mysqli_query($conexao, $sqlapgAvo);
    /* ----------------------------------------------------------------------- */
    $sqlapgM="DELETE FROM `mae` WHERE idRegistando = $id";
    $queryapgM=mysqli_query($conexao, $sqlapgM); 

 /* --------------------------------------------------------------------------------------- */

   
      if ($queryapgM==true) {
        $_SESSION['msg']="<h4 style='color: green;'>Apagado com sucesso</h4>";
                    header("Location: ../pages/ui-features/nascList.php");
                }else {
                    $_SESSION['msg']="<h4 style='color: green;'>Não apagado</h4>";
                     header("Location: ../pages/ui-features/nascList.php");
                }
?>
