<?php
session_start();
include_once("php/conexao.php");
if (isset ($_SESSION['emailUsuario']) && $_SESSION['idCargo']==1) {
  $email=$_SESSION['emailUsuario'];
  $user=$_SESSION['nomeUsuario'];
  $cargo=$_SESSION['nomeCargo'];
}else {
  $_SESSION['loginErro'] = "Faça Login Administrador";
  header("Location: ../projecto_sgrc2022/pages/login/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SGRC</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="css/vertical-layout-light/cssmemer.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
   
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start ">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="index.php">
          <img src="images/SGRC.jpg" style="height: 18px; margin-top: -0.3em;" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top "> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text text-black">Bem-vindo, <?php echo utf8_encode($user); ?></h1>
            <h3 class="welcome-sub-text"><?php echo utf8_encode($cargo); ?></h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
         
          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
        
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="images/faces/user-shape_icon-icons.com_73346.png" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/user-shape_icon-icons.com_73346.png" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold"><?php echo utf8_encode($user); ?></p>
                <p class="fw-light text-muted mb-0"><?php echo $email; ?></p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> User Profile </a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
              <a class="dropdown-item" href="php/sair.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sair</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="mdi mdi-border-all menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Serviços</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-file-document-box"></i>
              <span class="menu-title">Serviços ao cidadão </span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item flex-column sub-menu"> <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="ui-basic" href="#ui-basic" ><span>Registo de Nascimento</span>   <i class="menu-arrow"></i> </a>
                  <ul class="collapse" id="ui-basic" style="list-style-type: none;">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/registonasc.php" >Cadastrar</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/nascList.php">Listar</a></li>
                  </ul>
                </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="ui-basic" href="#ui-basic" ><span>Certidão de Casamento</span><i class="menu-arrow"></i></a>
                  <ul class="collapse" id="ui-basic" style="list-style-type: none;">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Cadastrar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Listar</a></li>
                      </ul>
                
                </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="ui-basic" href="#ui-basic" ><span>Certidão de Obito</span> <i class="menu-arrow"></i> </a>
                  <ul class="collapse" id="ui-basic" style="list-style-type: none;">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/registroobi.php">Cadastrar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/listaobitos.php">Listar</a></li>
                      </ul>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Certidão e Instituição</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Certidão</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/documentos/nascimento.php">Registo de Nascimento</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/documentos/casamento.php">Certidão de Casamento</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/documentos/obito.php">Certidão de Obito</a></li>
              </ul>
            </div>
            
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="menu-icon mdi mdi-archive"></i>
              <span class="menu-title">Instituição</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/usuarios/usuario.php">Criar</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/usuarios/conservatoria.php">Cadastrar</a></li>
              </ul>
            </div>
          </li>
          
          
          <li class="nav-item nav-category">help</li>
          <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Taxa anual de nascimento e morte</a>
                    </li>
                  </ul>
                  <?php
                  $mesAtual = date("F");
               
                    $sql="SELECT * FROM registando";
                    if ($result = mysqli_query($conexao,$sql)) {
                      $rowCount = mysqli_num_rows($result);
                      $taxaReg=($rowCount*1000)/34956314;
                      $cd= number_format($taxaReg,5);
                    }
                    $sqlF="SELECT * FROM `registando` WHERE genero='Femenino'";
                    if ($resF=mysqli_query($conexao,$sqlF)) {
                      $contaF= mysqli_num_rows($resF);
                    }
                    $sqlM="SELECT * FROM `registando` WHERE genero='Masculino'";
                    if ($resM=mysqli_query($conexao,$sqlM)) {
                      $contaM= mysqli_num_rows($resM);
                    }
                    $sqlObito=" SELECT * FROM boletimobi";
                    if ($calculoObi= mysqli_query($conexao, $sqlObito)) {
                    
                      $contar=mysqli_num_rows($calculoObi);
                      $taxaMorte=($contar*1000)/34956314;
                      $dc= number_format($taxaMorte,5);
                    }
                    $sqlFM="SELECT * FROM `boletimobi` WHERE genero='Femenino'";
                    if ($resFM=mysqli_query($conexao,$sqlFM)) {
                      $contaFM= mysqli_num_rows($resFM);
                    }
                    $sqlMM="SELECT * FROM `boletimobi` WHERE genero='Masculino'";
                    if ($resMM=mysqli_query($conexao,$sqlMM)) {
                      $contaMM= mysqli_num_rows($resMM);
                    }
                    $sqlmesNascimento="SELECT * FROM registando WHERE mesRegisto = '$mesAtual' ";
                    if ($mesNascimento = mysqli_query($conexao, $sqlmesNascimento)) {
                      $percMes= mysqli_num_rows($mesNascimento);
                      $taxanascPormes=($percMes * 1000)/34956314;
                      $txn= number_format($taxanascPormes,5);
                    }
                    $sqlmesMorte="SELECT * FROM boletimObi WHERE mesRegisto = '$mesAtual' ";
                    if ($mesMorte = mysqli_query($conexao, $sqlmesMorte)) {
                      $percMort= mysqli_num_rows($mesMorte);
                      $taxamortPormes=($percMort * 1000)/34956314;
                      $txm= number_format($taxamortPormes,5);
                    }
                    $sqlJovens="SELECT TIMESTAMPDIFF(YEAR, dataNascimento, NOW()) FROM `boletimobi` 
                    WHERE TIMESTAMPDIFF(YEAR, dataNascimento, NOW()) BETWEEN '15' AND '29'";
                    if ($jovensM= mysqli_query($conexao, $sqlJovens)) {
                      $jovensPer=mysqli_num_rows($jovensM);
                      $taxaJovens = ($jovensPer * 1000)/22721604.1;
                      $txj= number_format($taxaJovens,5);
                    }
                    $sqlCriancas="SELECT TIMESTAMPDIFF(YEAR, dataNascimento, NOW()) FROM `boletimobi` 
                    WHERE TIMESTAMPDIFF(YEAR, dataNascimento, NOW()) BETWEEN '0' AND '14'";
                    if ($criancasM= mysqli_query($conexao, $sqlCriancas)) {
                      $criancasPer=mysqli_num_rows($criancasM);
                      $taxaCriancas = ($criancasPer * 1000)/34956314;
                      $txc= number_format($taxaCriancas,5);
                    }
                    $sqlIdosos="SELECT TIMESTAMPDIFF(YEAR, dataNascimento, NOW()) FROM `boletimobi` 
                    WHERE TIMESTAMPDIFF(YEAR, dataNascimento, NOW()) BETWEEN '60' AND '100'";
                    if ($idososM= mysqli_query($conexao, $sqlIdosos)) {
                      $idososPer=mysqli_num_rows($idososM);
                      $taxaIdosos = ($idososPer * 1000)/838951.536;
                      $txi= number_format($taxaIdosos,5);
                    }
                  ?>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Taxa de Registo</p>
                            <h3 class="rate-percentage"><?php echo "$cd"; ?>%</h3>
                        
                          </div>
                          <div>
                            <p class="statistics-title">Taxa de Morte</p>
                            <h3 class="rate-percentage"><?php echo"$dc";?>%</h3>
                           
                          </div>
                          <div>
                            <p class="statistics-title">Registadas/Ano</p>
                            <h3 class="rate-percentage"><?php echo"$rowCount";?></h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Masculino</p>
                            <h3 class="rate-percentage"><?php echo "$contaM";?></h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Femenino</p>
                            <h3 class="rate-percentage"><?php echo "$contaF";?></h3>
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Mortas/Ano</p>
                            <h3 class="rate-percentage"><?php echo"$contar";?></h3>
                            
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Masculino</p>
                            <h3 class="rate-percentage"><?php echo "$contaMM";?></h3>
                            
                          </div>
                          <div class="d-none d-md-block">
                            <p class="statistics-title">Femenino</p>
                            <h3 class="rate-percentage"><?php echo "$contaFM";?></h3>
                            
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Dados estatísticos</h4>
                                   <h5 class="card-subtitle card-subtitle-dash">Nascimentos e mortes</h5>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs mt-5">
                                  <canvas id="grafico"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center mb-2 mb-sm-0">
                                      <div class="circle-progress-width">
                                        <div id="totalVisitors" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Total Visitors</p>
                                        <h4 class="mb-0 fw-bold">26.80%</h4>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <div class="circle-progress-width">
                                        <div id="visitperday" class="progressbar-js-circle pr-2"></div>
                                      </div>
                                      <div>
                                        <p class="text-small mb-2">Visits per day</p>
                                        <h4 class="mb-0 fw-bold">9065</h4>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                               
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                        $sqlUsuarios="SELECT usuario.idUsuario,usuario.nomeUsuario,usuario.emailUsuario,cargo.nomeCargo,conservatoria.nomeConservatoria from usuario 
                        join cargo on usuario.idCargo=cargo.idCargo 
                        join conservatoria on usuario.idConservatoria=conservatoria.idConservatoria";
                        $queryUsuarios= mysqli_query($conexao, $sqlUsuarios);
                        
                        $sqlPegar="SELECT * FROM conservatoria 
                        JOIN provincia ON conservatoria.idProvincia=provincia.idProvincia
                        JOIN municipio ON conservatoria.idMunicipio=municipio.idMunicipio";
                        $queryConser=mysqli_query($conexao,$sqlPegar);
                        ?>
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Funcionários</h4>
                                  
                                  </div>
                                  <div>
                                    <a class="btn btn-primary btn-lg text-white mb-0 me-0" href="./pages/usuarios/usuario.php" type="button"><i class="mdi mdi-account-plus"></i>Adicionar funcionário</a>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>Nome</th>
                                        <th>Conservatória</th> 
                                        <th>Funções</th> 
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      while ($dados=mysqli_fetch_assoc($queryUsuarios)) {
                                        $idUsuario=$dados['idUsuario'];
                                        $nomeUsuario=$dados['nomeUsuario'];
                                        $nomeConservatoria=$dados['nomeConservatoria'];
                                        $nomeCargo=$dados['nomeCargo'];
                                        $emailUsuario=utf8_encode($dados['emailUsuario']);
                                        echo "<tr>
                                        <td>
                                          <div class='d-flex '>
                                            
                                            <div>
                                              <h6>$nomeUsuario</h6>
                                              <p>$nomeCargo</p>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>$nomeConservatoria</h6>
                                        </td>
                                        <td width='150px'>
                                        <a href='pages/usuarios/usuarioedit?id=$idUsuario' class='btn btn-success btn-sm'>Editar</a>
                                        </td>
                                      </tr>";
                                      }
                                      
                                      
                                      ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                       
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Conservatórias</h4>
                                  
                                  </div>
                                  <div>
                                    <a class="btn btn-primary btn-lg text-white mb-0 me-0" href="./pages/usuarios/conservatoria.php" type="button"><i class="mdi mdi-account-plus"></i>Adicionar Conservatória</a>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>Conservatória</th> 
                                        <th>Provincia</th>
                                        <th>Municipio</th>
                                        <th>Bairro</th>
                                        <th>Funções</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      while ($pegar=mysqli_fetch_assoc($queryConser)) {
                                        $idConservatoria=$pegar['idConservatoria'];
                                        $nomeConservatoria=$pegar['nomeConservatoria'];
                                        $nomeProvincia=$pegar['nomeProvincia'];
                                        $nomeMunicipio=$pegar['nomeMunicipio'];
                                        $bairro=$pegar['bairro'];
                                        echo "<tr>
                                        
                                        <td>
                                          <div class='d-flex '>
                                            <div>
                                              <h6>$nomeConservatoria</h6>
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6>$nomeProvincia</h6>
                                        </td>
                                        <td>
                                        <h6>$nomeMunicipio</h6>
                                      </td>
                                      <td>
                                      <h6>$bairro</h6>
                                    </td>
                                        <td width='150px'>
                                        <a href='pages/usuarios/conservatoriaedit?id=$idConservatoria' class='btn btn-success btn-sm'>Editar</a>
                                       
                                        </td>
                                      </tr>";
                                      }
                                      
                                      ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                      <h4 class="card-title card-title-dash">Agenda</h4>
                                      <div class="add-items d-flex mb-0">
                                        <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                        <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                      </div>
                                    </div>
                                    <div class="list-wrapper">
                                      <ul class="todo-list todo-list-rounded">
                                        <li class="d-block">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Criar seccão para atualizar as notícias <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                              <i class="mdi mdi-flag ms-2 flag-color"></i>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="d-block">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">23 June 2020</div>
                                              <div class="badge badge-opacity-success me-3">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li>
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-success me-3">Done</div>
                                            </div>
                                          </div>
                                        </li>
                                        <li class="border-bottom-0">
                                          <div class="form-check w-100">
                                            <label class="form-check-label">
                                              <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                            </label>
                                            <div class="d-flex mt-2">
                                              <div class="ps-4 text-small me-3">24 June 2020</div>
                                              <div class="badge badge-opacity-danger me-3">Expired</div>
                                            </div>
                                          </div>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Sistema de Registo Civil  from <a href="http://" target="_blank" rel="noopener noreferrer">PRO Developers.</a></span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2022. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
   
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>
  <script type="text/javascript">
                        var graf = document.getElementById('grafico').getContext('2d');
                        var mygraf = new Chart(graf,{

                          type: 'bar',
                          data:{
                            labels: [ "ABR","MAI", "JUN", "JUL", "AGO", "SET"],
                            datasets:[
                              {
                               
                              label:'Natalidade <?php /* echo date("Y"); */?>',
                              data:[ '',<?php  echo $txn; ?>],
                              backgroundColor: 'rgba(0,255,255)',
                              borderColor: 'rgba(0,255,255)',
                             
                              borderWidth: 3
                            },
                            {
                             
                              label:'Mortalidade <?php /* echo date("Y"); */?>',
                              data:[ '',<?php echo $txm;?>],
                              backgroundColor: 'rgba(255,99,132)',
                              borderColor: 'rgba(255,99,132)',
                              borderWidth: 3
                            },
                            {
                             
                             label:'Jovens Mortos <?php /* echo date("Y"); */?>',
                             data:[ '',<?php echo $txj;?>],
                             backgroundColor: 'rgba(255,255,0)',
                             borderColor: 'rgba(255,255,0)',
                             borderWidth: 3
                           },
                           {
                             
                             label:'Crianças Mortas<?php /* echo date("Y"); */?>',
                             data:[ '',<?php echo $txc;?>],
                             backgroundColor: 'rgba(112,128,144)',
                             borderColor: 'rgba(112,128,144)',
                             borderWidth: 3
                           },
                           {
                             
                             label:'Idosos Mortos<?php /* echo date("Y"); */?>',
                             data:[ '',<?php echo $txi;?>],
                             backgroundColor: 'rgba(205,85,55)',
                             borderColor: 'rgba(205,85,55)',
                             borderWidth: 3
                           }
                          ]
                          }
                    
                        });
</script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

