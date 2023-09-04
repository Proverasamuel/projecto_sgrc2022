<?php
    session_start();
    include_once("conexao.php");
    $id = $_POST['id'];
    $nomeFuncionario = $_POST['nomeFuncionario'];
    $email = $_POST['email'];
    $selectCargo = $_POST['selectCargo'];
    $senha = $_POST['senha'];
    $confSenha = $_POST['confSenha'];             
    $selectConservatoria = $_POST['selectConservatoria'];
  
    $sqlUser="UPDATE `usuario` SET `nomeUsuario`= '$nomeFuncionario',`emailUsuario`='$email',`senha`= '$senha',`confSenha`='$confSenha',`idCargo`= $selectCargo,`idConservatoria`= $selectConservatoria   WHERE idUsuario = $id";
    $queryUser=mysqli_query($conexao, $sqlUser);

    if ($queryUser==true) {
        $_SESSION['mensagem']="<h4 style='color:green;'>Cadastrado com sucesso</h4>";
        header("Location: ../index.php");
    }else {
        $_SESSION['mensagem']="<h4 style='color:red;'>Não cadastrado</h4>";
         header("Location: ../index.php");
    }
?>