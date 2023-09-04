<?php
 include_once("../../php/conexao.php");
 use Dompdf\Dompdf;
 use Dompdf\Options;
 require_once('../../dompdf/autoload.inc.php');
 $options=new Options();
 $options->set('isRemoteEnabled', true);



 $anoAtual= date("y");
 $nomeFalecido="";
 $localMorte="";
 $dataMorte="";
 $horaMorte="";
 $nomePai="";
 $nomeMae="";
 $nAssento="";
 $id=$_GET['id'] ?? '';
 $sqlBuscaobi="SELECT * FROM boletimobi WHERE idObito=$id";
$querybuscaObi=mysqli_query($conexao, $sqlBuscaobi);
$dad=mysqli_fetch_assoc($querybuscaObi);

$sqlbuscaObi="SELECT conservatoria.nomeConservatoria FROM usuario JOIN conservatoria ON usuario.idConservatoria=conservatoria.idConservatoria 
JOIN boletimobi ON boletimobi.idFuncionario=usuario.idUsuario
WHERE boletimobi.idObito=$id";
$queryConse=mysqli_query($conexao, $sqlbuscaObi);
$ddObi=mysqli_fetch_assoc($queryConse);


echo strftime("%d, %b de %y", strtotime($dad['dataMorte']));

 $domPdf=new Dompdf($options);
 $domPdf->load_html("

 <div style=' border: solid 1px black; width: 500px; height: 800px; margin: auto;'>
 <div style='text-align: center; margin: auto;'>
     <img src='../../images/transferir.jpg' width='12%' style='margin-top:1em;' alt=''>
     <h6 style='margin-top: -2px;'>REPÚBLICA DE ANGOLA</h6>
     <hr style='margin-top: -20px; width: 3em;'>
     <h6 style='margin-top: -1px;'>REGISTO CIVIL</h6>
    <h5 style='margin-top: -20px;'> </h5>
    <h4 style='margin-top: -15px;'>BOLETIM DE ÓBITO</h4>
    <p style='float: right; margin-right: 1em'>Processo nº ".$dad['nProcesso']."/".$anoAtual."</p>
 </div> 
 <div style='margin-top: 6em; margin-left: 0.5em;'>
     
 <p>Dá ".$ddObi['nomeConservatoria']." </p>
 <p>Ás ".$dad['horaMorte']." do dia , ".$dad['dataMorte']." ***</p>
 <p>Em ".$dad['localMorte']." ***</p>
 <p>Faleceu: ".$dad['nomeFalecido']." ***</p>
 <p>Residente em: ".$dad['provinciaRes']." ***</p>
 <p>Filho de: ".$dad['nomePai']." ***</p>
 <p>e de: ".$dad['nomeMae']." ***</p>
 <p>Assento nº: ".$dad['nAssento']." </p>
 <p>Data de emissão: ".$dad['dataEmissao']." ***</p>
 <p style='margin-top: 8em;'>Vai ser sepultado no: cemitério do benfica***</p>
 <p>Verificou óbito o: Dr. Proverá samuel***</p>

</div> 
</div>

 "
);

$domPdf->render();
    $domPdf->stream(
        "Boletim de óbito.pdf",
        array(
            "Attachment"=>false
        )

    )   
?>