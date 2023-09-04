<?php
    session_start();
    include_once("conexao.php");
    $nomeProprio=$_POST['nomeProprio'];
    $nomeFamilia=$_POST['nomeFamilia'];
    $sexo=$_POST['sexo'];
    $horaNascimento=$_POST['horaNascimento'];
    $dataNascimento=$_POST['dataNascimento'];
    $dataNascimento = date('Y-m-d', strtotime($dataNascimento));
    $nAssento=$_POST['nAssento'];
    $idMunicipio=$_POST['idMunicipio'];
    $declarante=$_POST['declarante'];
    $nUsuario=$_POST['nUsuario'];
  /*   echo $nomeProprio. $nomeFamilia. $sexo. $horaNascimento. $dataNascimento. $nAssento. $idMunicipio; */
   
    $sqlRegistando="INSERT INTO registando ( `nomeProprio`, `nomeFamilia`, `dataNascimento`, `dataRegisto`, `genero`, `nRegisto`,`idMunicipio`, `declarante`,`status`, `idUsuario`) 
    VALUES ('$nomeProprio','$nomeFamilia','$dataNascimento','$horaNascimento','$sexo','$nAssento', '$idMunicipio', '$declarante','Pendente', '$nUsuario')";
    $queryRegistando=mysqli_query($conexao, $sqlRegistando);
/* ----------------------------------------------------------------------------------------------------------------------------------------------- */
    $nomePai=$_POST['nomePai'];
    $estadocivilPai=$_POST['estadocivilPai'];
    $naturalidadePai=$_POST['naturalidadePai'];
    $residenciaPai=$_POST['residenciaPai'];
    $municipioPai=$_POST['municipioPai'];
    $comunaPai=$_POST['comunaPai'];
    $nacionalidadePai=$_POST['nacionalidadePai'];
    $idRegistando = mysqli_insert_id($conexao);
    $sqlPai="INSERT INTO `pai`(`nomeP`, `estadoCivilP`, `naturalidadeP`, `provinciaResP`, `municipioP`, `comunaP`, `nacionalidadeP`, `idRegistando`) 
    VALUES ('$nomePai','$estadocivilPai','$naturalidadePai','$residenciaPai','$municipioPai','$comunaPai','$nacionalidadePai','$idRegistando')";
    $queryPai=mysqli_query($conexao,$sqlPai);

    /* ------------------------------------ */
    
    $avohomemPaterno=$_POST['avohomemPaterno'];
    $avomulherPaterno=$_POST['avomulherPaterno'];
    $avohomemMaterno=$_POST['avohomemMaterno'];
    $avomulherMaterno=$_POST['avomulherMaterno'];
    $idPai = mysqli_insert_id($conexao);
    echo $avohomemPaterno. $avomulherPaterno.$avohomemMaterno.$avomulherMaterno.$idRegistando;
    $sqlAvos="INSERT INTO `avos`(`avoPaterno`, `avoPater`, `avoMaterna`, `avoMater`, `idRegistando`) 
    VALUES ('$avohomemPaterno','$avomulherPaterno','$avohomemMaterno','$avomulherMaterno','$idRegistando')";
    $queryAvos=mysqli_query($conexao, $sqlAvos);
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
    $sqlMae="INSERT INTO `mae`(`nome`, `estadoCivil`, `naturalidade`, `provinciaRes`, `municipio`, `comuna`, `nacionalidade`, `idRegistando`, `idPai`) 
    VALUES ('$nomeMae','$estadocivilMae','$naturalidadeMae','$residenciaMae','$municipioMae','$comunaMae','$nacionalidadeMae','$idRegistando','$idPai')";
    $queryMae=mysqli_query($conexao, $sqlMae); 

 /* --------------------------------------------------------------------------------------- */

   
      if ($queryMae==true) {
        $_SESSION['mensagem']="<h4 style='color: green;'>Cadastrado com sucesso</h4>";
                    header("Location: ../pages/ui-features/registonasc.php");
                }else {
                    $_SESSION['mensagem']="<h4 style='color: green;'>Não cadastrado</h4>";
                     header("Location: ../pages/ui-features/registonasc.php");
                }
?>
