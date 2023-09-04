<?php
  
  include_once("../../php/conexao.php");
  $time = date('d-m-Y', time());
  $nomeProprio="";
  $nomeFamilia="";
  $nomeP="";
  $nome="";
  $id=$_GET['id'] ?? '';
  $data= date('l jS \de F Y h:i:s A');
  $sqlBusca="SELECT * FROM boletimobi WHERE idObito=$id";
$dados=mysqli_query($conexao,$sqlBusca);
$linha = mysqli_fetch_assoc($dados);


  $sqlBusca="SELECT boletimObi.nomeFalecido, boletimObi.localMorte, boletimObi.horaMorte FROM boletimObi WHERE boletimObi.idObito = $id";
  $nomeConservatoria="";
    $sqlConservatoria="SELECT conservatoria.nomeConservatoria FROM usuario JOIN conservatoria ON usuario.idConservatoria=conservatoria.idConservatoria 
    JOIN boletimobi ON boletimobi.idFuncionario=usuario.idUsuario
    WHERE boletimobi.idObito=$id";
    $sqlconsQuery = mysqli_query($conexao,$sqlConservatoria);
    $linhaConservatoria = mysqli_fetch_assoc($sqlconsQuery);
   use Dompdf\Dompdf;
    
    require_once('../../dompdf/autoload.inc.php');

    $domPdf=new DOMPDF();

    $domPdf->load_html('
    <div class="header" style=" border: solid 1px black;
    width: 710px;
    height: 493px;
    margin: auto;
    font-size: 10px;">
         <center>
             <div class="header" style="margin:auto;">
            <img src="../../images/transferir.jpg" width="6%" style="margin-top:1em;">
            <h3>REPÚBLICA DE ANGOLA</h3>
            <hr style="margin-top:1.4em;" width="60px">
            <h4 style="margin-top:0em;">REGISTO CIVIL</h4>
            <h4 style="margin-top: -1em;"> '. $linhaConservatoria['nomeConservatoria'] .'</h4>
            <h4 style="margin-top:-1em;">DO ANO DE 2022</h4>
         </div>
     </center>
        <hr>
        <div class="body-element">
            <h1 style="text-align: center;">Recibo</h1>
            <h5 style="margin-left: 1em;">Nome Completo: '.$linha['nomeFalecido'].'</h5>
            <h5 style="margin-left: 1em;">Local da Morte: '.$linha['localMorte'].'</h5>
            <h5 style="margin-left: 1em;">Hora da Morte: '.$linha['horaMorte'].'</h5>
            <p style="margin-left:1em; text-align: justify; margin-top:-2em;">
        <pre style="font-family: Cambria, Cochin, Georgia, Times, serif; font-size: 11px;  margin-left:0.5em;"> Para ter acesso ao seu documento basta entrar no site www.cidadao.com e seguir os seguintes passos:
 Passo 1: No menu clique em Ceridão e selecione o documento que deseja.
 Passo 2: Na Area Do Cidadão escolha se deseja a primeira via ou a segunda via do documento.
 Passo 2.1: Caso quiser a primeira via insira este codigo <em style="color: darkblue;">'.'"'.$linha['nProcesso'].'"'.'</em> e verifique os seus dados e baixe o documento caso o status deferido.
 Passo 2.2: Caso quiser a segunda via preencha corretamente as informações que lhe forem solicitadas confirme e pode fazer o download do seu documento.

 Está informação é pessoal e instranmissível, devendo ser mantida em segurança e apenas utilizada pelo seu titular.
        </pre></p>
        </div>
        <div class="footer">
            <h4 style="text-align: center;">Luanda Aos '.$time.'</h4>
        </div>
    </div>
    
    ');
    $domPdf->render();
    $domPdf->stream(
        "Recibo de nascimento.pdf",
        array(
            "Attachment"=>false
        )

    )   
?>