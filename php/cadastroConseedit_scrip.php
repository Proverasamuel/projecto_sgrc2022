<?php
    session_start();
    include_once("conexao.php");
    $id = $_POST['id'];
    $nomeConservatoria=$_POST['nomeConservatoria'];
    $idProvincia=$_POST['idProvincia'];
    $idMunicipio=$_POST['idMunicipio'];
    $bairro=$_POST['nomeBairro'];

    $sqlConservatoriaedit="UPDATE conservatoria SET `nomeConservatoria`='$nomeConservatoria',`idProvincia`='$idProvincia',`idMunicipio`='$idMunicipio',`bairro`='$bairro' WHERE idConservatoria=$id";
    $queryConsevatoriaedit=mysqli_query($conexao, $sqlConservatoriaedit);


    if ($queryConsevatoriaedit==true) {
        $_SESSION['mensag']="<h4 style='color: green;'>Alterado com sucesso</h4>";
                    header("Location: ../index.php");
                }else {
                    $_SESSION['mensag']="<h4 style='color: red;'>Não alterado com sucesso</h4>";
                     header("Location: ../index.php");
                } 
?>

    