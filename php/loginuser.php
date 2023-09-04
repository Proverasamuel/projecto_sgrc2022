<?php
    session_start();
    include_once("conexao.php");
   
    if (isset($_POST['email']) && isset($_POST['password']) ) {
        $usuario= mysqli_real_escape_string ($conexao, $_POST['email']);
        $passe= mysqli_real_escape_string ($conexao, $_POST ['password']);
     /*    $passe= md5($passe);  */
        $sqlSelect = "SELECT usuario.idUsuario,usuario.nomeUsuario, usuario.emailUsuario, usuario.senha, cargo.nomeCargo, cargo.idCargo FROM usuario 
        JOIN cargo ON usuario.idCargo=cargo.idCargo 
        WHERE usuario.emailUsuario='$usuario' AND usuario.senha='$passe'";
        $sqlQuery = mysqli_query($conexao, $sqlSelect);
        $query = mysqli_fetch_assoc($sqlQuery);
        if (empty ($query)) {
            $_SESSION['loginErro'] = "Usuario ou senha invalida ";
            header("Location: ../pages/login/login.php");
        } elseif(isset($query)) {
            header("Location: ../index.php");
        }
        else {
            $_SESSION['loginErro'] = "Usuario ou senha invalida ";
            header("Location: ../pages/login/login.php");
        }

        if (isset ($query)) {
            $_SESSION['idUsuario'] = $query['idUsuario'];
            $_SESSION['nomeUsuario'] = $query['nomeUsuario'];
            $_SESSION['nomeCargo'] = $query['nomeCargo'];            
            $_SESSION['idCargo'] = $query['idCargo'];            
            $_SESSION['emailUsuario'] = $query['emailUsuario']; 
            if ($_SESSION['idCargo']=="1") {
                header("Location: ../index.php");
            }elseif ($_SESSION['idCargo']=="2" || $_SESSION['idCargo']=="3" || $_SESSION['idCargo']=="4" || $_SESSION['idCargo']=="5") {
                header("Location: ../conservador.php");
            }
            elseif ($_SESSION['idCargo']=="6") {
                header("Location: ../funcionario.php");
            }
            else {
                $_SESSION['loginErro'] = "Usuario ou senha invalida";
                header("Location: ../pages/login/login.php");
            }
        }
        

    } 

     
   
    else {
        $_SESSION['loginErro'] = "Usuario ou senha invalida";
        header("Location: ../pages/login/login.php");
    } 



/* if (isset($query)) {
            $_SESSION['idUsuario'] = $query['idUsuario'];
            $_SESSION['nomeUsuario'] = $query['nomeUsuario'];            
            $_SESSION['idCargo'] = $query['idCargo'];            
            $_SESSION['emailUsuario'] = $query['emailUsuario'];            
            if ($_SESSION['idCargo'] == "1") {
                echo "log";
                header("location: ");
            }
        } */
?>
