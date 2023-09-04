<?php include_once("conexao.php");

	$idProvincia = $_REQUEST['idProvincia'];
	
	$result_sub_cat = "SELECT * FROM municipio WHERE idProvincia=$idProvincia ORDER BY nomeMunicipio";
	$resultado_sub_cat = mysqli_query($conexao, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post[] = array(
			'idMunicipio'	=> $row_sub_cat['idMunicipio'],
			'nomeMunicipio' => $row_sub_cat['nomeMunicipio'],
		);
	}
	
	echo(json_encode($sub_categorias_post));
