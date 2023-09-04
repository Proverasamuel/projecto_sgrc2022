<?php
    session_start();
    include_once("conexao.php");

    $cadastrados=filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

    $sqlCadast= "SELECT registando.nomeProprio,registando.idRegistando,registando.status,registando.nomeFamilia,registando.nRegisto, pai.nomeP, mae.nome FROM registando JOIN pai ON registando.idRegistando=pai.idRegistando JOIN mae ON pai.idPai=mae.idPai WHERE nomeProprio LIKE '%$cadastrados%'";
    $queryCadast= mysqli_query($conexao, $sqlCadast);

    if (($queryCadast) AND ($queryCadast->num_rows != 0)) {
        while($linhaCadast=mysqli_fetch_assoc($queryCadast)){
            $idRegistando=$linhaCadast['idRegistando'];
            $nomeProprio=$linhaCadast['nomeProprio'];
            $nomeFamilia=$linhaCadast['nomeFamilia'];
            $nRegisto=$linhaCadast['nRegisto'];
            $nomePai= utf8_decode($linhaCadast['nomeP']);
            $nomeMae=utf8_decode($linhaCadast['nome']);
            $status=$linhaCadast['status'];
            echo " <td class='py-1'>
            $nomeProprio
          </td>
          <td>
            $nomeFamilia
          </td>
          <td>
            $nomePai
          </td>
          <td>
            $nomeMae
          </td>
          <td>
              $nRegisto
            </td>
            <td>
              <label class='badge badge-danger'>$status</label>
            </td>
            <td width='150px'>
            <a href='nasciEdit.php?id=$idRegistando' class='btn btn-success btn-sm'>Editar</a>
            <a href='listarnasc.php?id=$idRegistando' class='btn btn-primary btn-sm'>Ver</a>
            <a href='' data-bs-toggle ='modal' data-bs-target ='#apagar' class='btn btn-danger btn-sm'
            onclick=" .'"' ."dados($idRegistando,'$nomeProprio','$nomeFamilia')" .'"' ."
            >Excluir</a>
            </td>";
        }
    }else {
        echo "<td>Nenhum resultado encontrado</td>";
    }

?>