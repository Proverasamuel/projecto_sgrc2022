<?php
    session_start();
    include_once("conexao.php");
    $id = $_POST['id'];
    $nomeProprio=$_POST['nomeProprio'];
    $nomeFamilia=$_POST['nomeFamilia'];
    $sexo=$_POST['sexo'];
    $horaNascimento=$_POST['horaNascimento'];
    $dataNascimento=$_POST['dataNascimento'];
    $dataNascimento = date('Y-m-d', strtotime($dataNascimento));
    $nAssento=$_POST['nAssento'];
    $idMunicipio=$_POST['idMunicipio'];
    $declarante=$_POST['declarante'];
  /*   echo $nomeProprio. $nomeFamilia. $sexo. $horaNascimento. $dataNascimento. $nAssento. $idMunicipio; */
   
   /*  $sqlRegistando="INSERT INTO registando ( `nomeProprio`, `nomeFamilia`, `dataNascimento`, `dataRegisto`, `genero`, `nRegisto`,`idMunicipio`) 
    VALUES ('$nomeProprio','$nomeFamilia','$dataNascimento','$horaNascimento','$sexo','$nAssento', '$idMunicipio')";
    $queryRegistando=mysqli_query($conexao, $sqlRegistando); */

    $sqlRegista="UPDATE registando SET  `nomeProprio` = '$nomeProprio', `nomeFamilia` = '$nomeFamilia', `dataNascimento` = '$dataNascimento', `dataRegisto` = '$horaNascimento', `genero` = '$sexo',`idMunicipio` = '$idMunicipio',`declarante` = '$declarante'  WHERE idRegistando = $id";
    $queryRegista=mysqli_query($conexao, $sqlRegista);
/* ----------------------------------------------------------------------------------------------------------------------------------------------- */
    $nomePai=$_POST['nomePai'];
    $estadocivilPai=$_POST['estadocivilPai'];
    $naturalidadePai=$_POST['naturalidadePai'];
    $residenciaPai=$_POST['residenciaPai'];
    $municipioPai=$_POST['municipioPai'];
    $comunaPai=$_POST['comunaPai'];
    $nacionalidadePai=$_POST['nacionalidadePai'];
    $idRegistando = mysqli_insert_id($conexao);
    $sqlP="UPDATE `pai` SET `nomeP` = '$nomePai', `estadoCivilP` = '$estadocivilPai', `naturalidadeP` = '$naturalidadePai', `provinciaResP` = '$residenciaPai', `municipioP` = '$municipioPai', `comunaP` = '$comunaPai', `nacionalidadeP` = '$nacionalidadePai' WHERE idRegistando = $id";
    $queryP=mysqli_query($conexao,$sqlP);

    /* ------------------------------------ */
    
    $avohomemPaterno=$_POST['avohomemPaterno'];
    $avomulherPaterno=$_POST['avomulherPaterno'];
    $avohomemMaterno=$_POST['avohomemMaterno'];
    $avomulherMaterno=$_POST['avomulherMaterno'];
/*     $idPai = mysqli_insert_id($conexao); */
    echo $avohomemPaterno. $avomulherPaterno.$avohomemMaterno.$avomulherMaterno.$idRegistando;
    $sqlAvo="UPDATE `avos` SET `avoPaterno` = '$avohomemPaterno', `avoPater` = '$avomulherMaterno', `avoMaterna` = '$avohomemMaterno', `avoMater` = '$avomulherMaterno' WHERE idRegistando = $id";
    $queryAvo=mysqli_query($conexao, $sqlAvo);
    /* ----------------------------------------------------------------------- */
    $nomeMae=$_POST['nomeMae'];
    $estadocivilMae=$_POST['estadocivilMae'];
    $naturalidadeMae=$_POST['naturalidadeMae'];
    $residenciaMae=$_POST['residenciaMae'];
    $municipioMae=$_POST['municipioMae'];
    $comunaMae=$_POST['comunaMae'];
    $nacionalidadeMae=$_POST['nacionalidadeMae'];
   
    
 /* ------------------------------------------------------------------------------ */  
    /* echo $nomePai. $estadocivilPai. $naturalidadePai. $residenciaPai. $municipioPai. $comunaPai. $nacionalidadePai. $idRegistando. "<br>";
    echo $nomeMae. $estadocivilMae. $naturalidadeMae. $residenciaMae. $municipioMae. $comunaMae. $nacionalidadeMae. $idRegistando. $idPai;
 */
    $sqlM="UPDATE `mae` SET `nome` = '$nomeMae', `estadoCivil` = '$estadocivilMae', `naturalidade` = '$naturalidadeMae', `provinciaRes` = '$residenciaMae', `municipio` = '$municipioMae', `comuna` = '$comunaMae', `nacionalidade` = '$nacionalidadeMae' WHERE idRegistando = $id";
    $queryM=mysqli_query($conexao, $sqlM); 

 /* --------------------------------------------------------------------------------------- */

   
      if ($queryM==1) {
        $_SESSION['mensagem']="<h4 style='color: green;'>Alterado com sucesso</h4>";
                    header("Location: ../pages/ui-features/nascList.php");
                }else {
                    $_SESSION['mensagem']="<h4 style='color: green;'>Não alterado</h4>";
                     header("Location: ../pages/ui-features/nascList.php");
                }
?>
