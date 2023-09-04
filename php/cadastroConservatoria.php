<?php
          session_start();
          include_once("conexao.php");
          $nomeConservatoria = $_POST['nomeConservatoria'];
          $consProvincia = $_POST['idProvincia'];
          $consMunicipio=$_POST['idMunicipio'];
          $bairro=$_POST['nomeBairro'];
          $sqlConservatoria = "INSERT INTO `conservatoria`(`nomeConservatoria`, `idProvincia`, `idMunicipio`, `bairro`) 
          VALUES ('$nomeConservatoria','$consProvincia', '$consMunicipio', '$bairro')";
          $queryConservatoria = mysqli_query($conexao, $sqlConservatoria);

          if ($queryConservatoria == 1) {
            $_SESSION['msg']="<h4 style='color: green;'>Cadastrado com sucesso</h4>";
            header("Location: ../pages/usuarios/conservatoria.php");
          }else {
            $_SESSION['msg']="<h4 style='color: red;'>Não cadastrado com sucesso</h4>";
            header("Location: ../pages/usuarios/conservatoria.php");
          }
    ?>