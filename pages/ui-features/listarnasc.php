<?php
  
  include_once("../../php/conexao.php");
  $anoAtual= date("Y");
  $nomeProprio="";
  $nomeFamilia="";
  $dataNascimento="";
  $dataRegisto="";
  $genero="";
  $nRegisto="";
  $nomeMunicipio="";
  $id=$_GET['id'] ?? '';
  $sqlBusca="SELECT * FROM registando 
  JOIN pai ON registando.idRegistando=pai.idRegistando 
  JOIN mae ON registando.idRegistando=mae.idRegistando 
  JOIN avos ON registando.idRegistando=avos.idRegistando WHERE registando.idRegistando = $id";
$dados=mysqli_query($conexao,$sqlBusca);
$linha = mysqli_fetch_assoc($dados);

  $nomeProvincia="";
  $sqlMuni="SELECT municipio.nomeMunicipio, provincia.nomeProvincia, registando.idRegistando FROM municipio 
  JOIN provincia ON municipio.idProvincia=provincia.idProvincia 
  JOIN registando ON registando.idMunicipio=municipio.idMunicipio 
  WHERE registando.idRegistando=$id";
  $sqlmuniQuery=mysqli_query($conexao,$sqlMuni);
 $linhaMunicipio = mysqli_fetch_assoc($sqlmuniQuery);
    
    $nomeConservatoria="";
    $sqlConservatoria="SELECT conservatoria.nomeConservatoria FROM usuario 
    JOIN conservatoria ON usuario.idConservatoria=conservatoria.idConservatoria 
    JOIN registando ON registando.idUsuario=usuario.idUsuario WHERE registando.idRegistando=$id";
    $sqlconsQuery = mysqli_query($conexao,$sqlConservatoria);
    $linhaConservatoria = mysqli_fetch_assoc($sqlconsQuery);
   use Dompdf\Dompdf;
    
    require_once('../../dompdf/autoload.inc.php');

    $domPdf=new DOMPDF();

    $domPdf->load_html('
    <div class="body" style=" border: solid 1px black;
    width: 700px;
    height: 930px;
    margin: auto;
    font-size: 10px;">
    <center>
    <div class="header" style="margin:auto;">
       <img src="../../images/transferir.jpg" width="6%" style="margin-top:1em;">
       <h3>REPÚBLICA DE ANGOLA</h3>
       <hr style="margin-top:1.4em;" width="60px">
       <h4 style="margin-top:0em;">REGISTO CIVIL</h4>
       <h4 style="margin-top: -1em; text-transform:uppercase;"> '. $linhaConservatoria['nomeConservatoria'] .'</h4>
       <h4 style="margin-top:-1em;">ASSENTO DE NASCIMENTO N.º '.$linha['nRegisto'].'</h4>
       <h4 style="margin-top:-1em;">DO ANO DE '.$anoAtual.'</h4>
    </div>
</center>
<hr>
    <div class="body-element" style="margin-left:1em;">
        <h4>REGISTANDO</h4>
        <h5>Nome Próprio: '.$linha['nomeProprio'].' ***</h5>
        <h5>Apelidos: '.$linha['nomeFamilia'].' ***</h5>
        <h5>Sexo: '.$linha['genero'].' ***</h5>
        <h5>Naturalidade: '. $linhaMunicipio['nomeMunicipio'].'***</h5>
        <h5>Municipio: '. $linhaMunicipio['nomeMunicipio'].' ***</h5>
        <div style="float: right; margin-top: -8.5em; margin-right: 10em;">
            <h5>Horas e data do nascimento: '.$linha['dataRegisto'].' , '.$linha['dataNascimento'].' ***</h5>
        <h5>Comuna: '. $linhaMunicipio['nomeMunicipio'].'***</h5>
        <h5>Provincia: '. utf8_encode($linhaMunicipio['nomeProvincia']).' ***</h5>
        <hr style="margin-top: -1em; color: blanchedalmond;">
        </div>
    </div>
    <hr>
    <div class="body-element" style="margin-left:1em;">
        <h4>PAI</h4>
        <h5>Nome: '.$linha['nomeP'].' ***</h5>
        <h5>Estado Civil: '.$linha['estadoCivilP']. '***</h5>
        <h5>Comuna: '. utf8_encode($linha['comunaP']).' ***</h5>
        <h5>Provincia: '. utf8_encode($linha['provinciaResP']).' ***</h5>
        <h5>Residencia Habitual: '. utf8_encode($linha['provinciaResP']).' ***</h5>
        <div style="float: right; margin-top: -8.5em; margin-right: 15em;">
            <h5>Naturalidade: '. utf8_encode($linha['naturalidadeP']).' ***</h5>
        <h5>Municipio: '. utf8_encode($linha['municipioP']).' ***</h5>
        <h5>Nacionalidade: '. utf8_encode($linha['nacionalidadeP']). '***</h5>
        <hr style="margin-top: -1em; color: blanchedalmond;">
        </div>
    </div>
    <hr>
    <div class="body-element" style="margin-left:1em;">
        <h4>MÃE</h4>
        <h5>Nome: '.$linha['nome'].' ***</h5>
        <h5>Estado Civil: '.$linha['estadoCivil'].' ***</h5>
        <h5>Comuna: '. utf8_encode($linha['comuna']).' ***</h5>
        <h5>Provincia: '. utf8_encode($linha['provinciaRes']).' ***</h5>
        <h5>Residencia Habitual: '. utf8_encode($linha['provinciaRes']).' ***</h5>
        <div style="float: right; margin-top: -8.5em; margin-right: 15em;">
            <h5>Naturalidade: '.$linha['naturalidade'].' ***</h5>
        <h5>Municipio: '.$linha['municipio'].' ***</h5>
        <h5>Nacionalidade: '.$linha['nacionalidade'].' ***</h5>
        <hr style="margin-top: -1em; color: blanchedalmond;">
        </div>
    </div>
    <hr>
    <div class="body-element" style="margin-left:1em;">
        <h4>AVOS</h4>
        <h5>Paternos: '.$linha['avoPaterno'].'  e '.$linha['avoPater'].' ***</h5>
        <h5>Maternos: '.$linha['avoMaterna'].'  e '.$linha['avoMater'].' ***</h5>
    </div>
    <hr>
    <div class="body-element" style="margin-left:1em;">
        <h5>Declarante(s): '.$linha['declarante'].' ***</h5>
        <h5>Menções especiais: '.$linha['mencoes'].' ***</h5>
        <h5>Testemunha(s): ***</h5>
    </div>
</div>
    
    
    
    
    
    
    ');
    $domPdf->render();
    $domPdf->stream(
        "Registo de nascimento.pdf",
        array(
            "Attachment"=>false
        )

    )   
?>