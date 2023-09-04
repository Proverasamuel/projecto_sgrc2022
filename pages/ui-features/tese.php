<?php
  
  include_once("../../php/conexao.php");
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
</head>
<body>
<form action="" method="post">
<div class="form-group col-lg-10">
                    <input type="text" name="nome_familia" id="nome_familia" class="form-control">
                    <label for="nome_familia" id="lbl">Nome de Familia</label>
                  </div>
                  <div class="form-group col-lg-10">
                  <select name="idProvincia" id="idProvincia" class="form-control" Required>
                    <option value="">Selecione a Provincia</option>
                          <?php
                            $sqlSelect="SELECT * FROM provincia";
                            $sqlQuery=mysqli_query($conexao,$sqlSelect);
                            while ($query=mysqli_fetch_assoc($sqlQuery)) {
                              echo'<option value="'.$query['idProvincia'].'">'.utf8_encode($query['nomeProvincia']).'</option>';
                            }
                          
                          ?>
                  </select>
                    <label for="nome_provincia" id="lbl">Provincia</label>
                  </div>
                  <div class="form-group col-lg-10">
                  <span class="carregando">Aguarde, carregando...</span>
                  <select name="idMunicipio" id="idMunicipio" class="form-control" Required>
                    <option value="">Selecione o municipio</option>
                         
                  </select>
                      <label  for="municipio" id="lbl">Municipio </label>
                    </div>
</form>

                    <script type="text/javascript">
		$(function(){
			$('#idProvincia').change(function(){
				if( $(this).val() ) {
					$('#idMunicipio').hide();
					$('.carregando').show();
					$.getJSON('/php/munipost.php?search=',{idProvincia: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha Subcategoria</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].idmunicipio + '">' + j[i].nomeMunicipio + '</option>';
						}	
						$('#idmunicipio').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#idmunicipio').html('<option value="">– Escolha Subcategoria –</option>');
				}
			});
		});
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                <script >
                	  google.load("jquery", "1.4.2");
                </script>
            		<script src="../../js/jquery.js"></script>
</body>
</html>