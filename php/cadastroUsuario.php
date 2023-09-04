<?php
                session_start();
                include_once("conexao.php");
                $nomeFuncionario = $_POST['nomeFuncionario'];
                $email = $_POST['email'];
                $selectCargo = $_POST['selectCargo'];
                $senha = $_POST['senha'];
                $confSenha = $_POST['confSenha'];             
                $selectConservatoria = $_POST['selectConservatoria'];

           
                $sqlInsert="INSERT INTO `usuario`(`nomeUsuario`, `emailUsuario`, `senha`, `confSenha`, `idCargo`, `idConservatoria`) 
                VALUES ('$nomeFuncionario','$email','$senha','$confSenha','$selectCargo', '$selectConservatoria')";
                $sqlQuery = mysqli_query($conexao, $sqlInsert);
                if ($sqlQuery==true) {
                    $_SESSION['mensagem']="<h4 style='color:green;'>Cadastrado com sucesso</h4>";
                    header("Location: ../pages/usuarios/usuario.php");
                }else {
                    $_SESSION['mensagem']="<h4 style='color:red;'>Não cadastrado</h4>";
                     header("Location: ../pages/usuarios/usuario.php");
                }
 ?>