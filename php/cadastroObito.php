<?php
        session_start();
        $DateAndTime = date('Y-m-d h:i:s', time());  
        include_once("conexao.php");
        $assento=$_POST['assento']; 
        $sqlObi="SELECT provincia.nomeProvincia, municipio.nomeMunicipio, registando.nRegisto FROM municipio 
        JOIN provincia ON municipio.idProvincia = provincia.idProvincia 
        JOIN registando ON registando.idMunicipio = municipio.idMunicipio WHERE registando.nRegisto=$assento";
        $queryObi=mysqli_query($conexao,$sqlObi);
        $campoPro=mysqli_fetch_assoc($queryObi);
        $provinciaRes=$campoPro['nomeProvincia'];
        $municipioRes=$campoPro['nomeMunicipio'];
        /* ------------------------------------------------------------------------- */
    
        $sqlB="SELECT * FROM registando
        JOIN pai ON registando.idRegistando=pai.idRegistando
        JOIN mae ON registando.idRegistando=mae.idRegistando WHERE registando.nRegisto=$assento";
        $queryB=mysqli_query($conexao, $sqlB);
        $campos=mysqli_fetch_assoc($queryB);
       
        $localMorte=$_POST['localMorte'];
        $dataMorte=$_POST['dataMorte'];
        $horaMorte=$_POST['horaMorte'];
        $nomeDeclarante=$_POST['nomeDeclarante'];
        $nomePai=$campos['nomeP'];
        $nomeMae=$campos['nome'];
        $nomeProprio=$campos['nomeProprio'];
        $nomeFamilia=$campos['nomeFamilia'];
        $genero=$campos['genero'];
        $dataNascimento=$campos['dataNascimento'];
        $nProcesso=$_POST['nProcesso'];
        $idFuncionario= $_POST['idFuncionario'];
        $nomeDeclarante=$_POST['nomeDeclarante'];
        $nomeCompleto= "$nomeProprio"   . "$nomeFamilia" ;
       
        $sqlIn="INSERT INTO `boletimobi`( `nomeFalecido`, `genero`,`dataNascimento`,`dataMorte`, `horaMorte`, `localMorte`, `dataEmissao`, `nProcesso`, `nomePai`, `nomeMae`, `nAssento`,`nomeDeclarante`, `provinciaRes`, `municipioRes`, `idFuncionario`) 
        VALUES ('$nomeCompleto','$genero','$dataNascimento','$dataMorte','$horaMorte','$localMorte','$DateAndTime','$nProcesso','$nomePai','$nomeMae','$assento','$nomeDeclarante','$provinciaRes','$municipioRes','$idFuncionario')";
        $queryIn= mysqli_query($conexao,$sqlIn);
        echo $assento, $localMorte, $dataMorte, $horaMorte, $nomeDeclarante, $nomePai, $nomeMae, $nProcesso, $idFuncionario, $nomeCompleto, $DateAndTime;


        if ($queryIn==true) {
                $_SESSION['m']="<h4 style='color: green;'>Cadastrado com sucesso</h4>";
                            header("Location: ../pages/ui-features/listaobitos.php");
                        }else {
                            $_SESSION['m']="<h4 style='color: green;'>Não cadastrado</h4>";
                             header("Location: ../pages/ui-features/listaobitos.php");
                        }




?>