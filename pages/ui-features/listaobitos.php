<?php
   session_start();
   include_once("../../php/conexao.php");
   if (isset ($_SESSION['emailUsuario']) && $_SESSION['idCargo']==6) {
     $email=$_SESSION['emailUsuario'];
     $user=$_SESSION['nomeUsuario'];
   }else {
     $_SESSION['loginErro'] = "Faça Login Funcionário";
     header("Location: ../login/login.php");
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
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <link rel="stylesheet" href="../../css/csspro/cssmemer.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_ -->
     <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="../../funcionario.php">
            <img src="../../images/SGRC.jpg" style="height: 18px; margin-top: -0.3em;" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../funcionario.php">
            <img src="../../images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text text-black">Área Do Funcionário</h1>
            <h3 class="welcome-sub-text">Serviços ao cidadão</h3>
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
              <img class="img-xs rounded-circle" src="../../images/faces/user-shape_icon-icons.com_73346.png" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="../../images/faces/user-shape_icon-icons.com_73346.png" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold"><?php echo $user; ?></p>
                <p class="fw-light text-muted mb-0"><?php echo $email; ?></p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> User Profile </a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
              <a class="dropdown-item" href="../../php/sair.php"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sair</a>
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
      <!-- partial:../../partials/_settings-panel.html -->
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
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../funcionario.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Home</span>
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
                <li class="nav-item"> <a class="nav-link" href="../ui-features/registonasc.php">Cadastrar</a></li>
                <li class="nav-item"> <a class="nav-link" href="../ui-features/nascList.php">Listar</a></li>
                  </ul>
                </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="ui-basic" href="#ui-basic" ><span>Certidão de Casamento</span><i class="menu-arrow"></i></a>
                  <ul class="collapse" id="ui-basic" style="list-style-type: none;">
                    <li class="nav-item"> <a class="nav-link" href="">Cadastrar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Listar</a></li>
                      </ul>
                
                </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="ui-basic" href="#ui-basic" ><span>Certidão de Obito</span> <i class="menu-arrow"></i> </a>
                  <ul class="collapse" id="ui-basic" style="list-style-type: none;">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/registroobi.php">Cadastrar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="">Listar</a></li>
                      </ul>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item nav-category">Certidão e Insttuição</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="menu-icon mdi mdi-card-text-outline"></i>
              <span class="menu-title">Certidão</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/documentos/nascimento.php">Registo de Nascimento</a></li>
                <li class="nav-item"><a class="nav-link" href="../../pages/documentos/casamento.php">Certidão de Casamento</a></li>
                <li class="nav-item"><a class="nav-link" href="../../pages/documentos/obito.php">Certidão de Obito</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/usuarios/usuario.php">Criar</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/usuarios/conservatoria.php">Cadastrar</a></li>
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
      <?php
        if (isset($_POST['busca'])) {
          $pesquisa = $_POST['busca'];
        }else {
          $pesquisa = '';
        }
        $sqlObito = "SELECT boletimobi.idObito,boletimobi.nAssento,boletimobi.nomeFalecido,boletimobi.localMorte,boletimobi.dataMorte,boletimobi.horaMorte,boletimobi.nProcesso,boletimobi.status,boletimobi.nomePai,boletimobi.nomeMae from boletimobi  WHERE nomeFalecido LIKE '%$pesquisa%'";
        $dadosObito = mysqli_query($conexao, $sqlObito); 
        ?>
      
      <div class="main-panel" id="asspos" >
        <div class="content-wrapper">
            <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Pesquisar</h2>
                    <?php
                if (isset($_SESSION['mensag'])) {
                  echo $_SESSION['mensag'];
                  unset($_SESSION['mensag']);
                }
                if (isset($_SESSION['mensagem'])) {
                  echo $_SESSION['mensagem'];
                  unset($_SESSION['mensagem']);

                }
                if (isset($_SESSION['msg'])) {
                  echo $_SESSION['msg'];
                  unset($_SESSION['msg']);
                }
                
                if (isset($_SESSION['m'])) {
                  echo $_SESSION['m'];
                  unset($_SESSION['m']);
                }
                if (isset($_SESSION['mg'])) {
                  echo $_SESSION['mg'];
                  unset($_SESSION['mg']);
                }
            
              ?>  
                    <nav class="navbar ">
                        <form class="form-inline" action="listaobitos.php" method="POST">
                            <input type="search" class="form-control mx-2" placeholder="Nome" name="busca" aria-label="search">
                            <button class="btn btn-success mt-2 mx-2" type="submit">Pesquisar</button>
                        </form>
                    </nav>
                </div>
            </div>
        </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Registo de óbitos</h4>
                           
                            <div class="table-responsive">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>
                                      Nome do Falecido
                                    </th>
                                    <th>
                                    Local da Morte
                                    </th>
                                     <th>
                                     Hora da Morte
                                    </th>
                                    <th>
                                      Nome do Pai
                                    </th>
                                    <th>
                                        Nome da Mãe
                                      </th>
                                      <th>
                                        Nº Assento
                                      </th>
                                      <th>
                                        Status
                                      </th>
                                      <th>
                                        Funções
                                      </th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                    while ($linha = mysqli_fetch_assoc($dadosObito)) {
                                        $idObito=$linha['idObito'];
                                        $nomeFalecido=$linha['nomeFalecido'];
                                        $localMorte=$linha['localMorte'];
                                        $horaMorte=$linha['horaMorte'];
                                        $nAssento=$linha['nAssento'];
                                        $nomePai=$linha['nomePai'];
                                        $nomeMae=$linha['nomeMae'];
                                        $status=$linha['status'];
                                        $ok = ($status=='Deferido') ? " <label class='badge badge-success'>$status</label>" : "<label class='badge badge-danger'>$status</label>";
                                        echo " 
                                        <tr>
                                    <td class='py-1'>
                                      $nomeFalecido
                                    </td>
                                    <td>
                                      $localMorte
                                    </td>
                                    <td>
                                      $horaMorte
                                    </td>
                                    <td>
                                    $nomePai
                                  </td>
                                    <td>
                                      $nomeMae
                                    </td>
                                    <td>
                                        $nAssento
                                      </td>
                                      <td>
                                        $ok
                                      </td>
                                      <td width='150px'>
                                      <a href='obitoEdit.php?id=$idObito' class='btn btn-success btn-sm'>Editar</a>
                                      <a href='utenteobito.php?id=$idObito' class='btn btn-primary btn-sm'>Recibo</a>
                                      <a href='' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma' onclick=
                                      ".'"'."pegar_dados('$idObito', '$nomeFalecido')".'"'." >Excluir</a>
                                      
                                      </td>
                                    </tr>
                                    <tr>
                                   ";
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
<!-- Modal -->
<div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Confirmação de exclusão</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="../../php/excluirObito.php" method="POST">
    <p>Deseja realmente excluir <b id="nomeFalecido">Nome do Falecido</b> ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <input type="hidden" name="id" id="idObito" value="">
        <input type="submit" class="btn btn-danger" value="sim">
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript ">
function pegar_dados(idObito, nomeFalecido){
  document.getElementById("nomeFalecido").innerHTML= nomeFalecido;
  document.getElementById("idObito").value= idObito;
  

}
</script>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
