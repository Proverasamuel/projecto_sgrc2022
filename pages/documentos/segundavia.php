<?php
  session_start();
  include_once("../../php/conexao.php");
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

  <link rel="stylesheet" href="../../css/vertical-layout-light/cssmemer.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <style>
      h11{
          color: red;
      }
  </style>
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="../../cidadao.php">
            <img src="../../images/SGRC.jpg" style="height: 18px; margin-top: -0.3em;" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../cidadao.php">
            <img src="../../images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text text-black">Área Do Cidadão</h1>
            <h3 class="welcome-sub-text">Serviços ao Cidadão</h3>
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
                <p class="mb-1 mt-3 font-weight-semibold">user </p>
                <p class="fw-light text-muted mb-0"> email user</p>
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
            <a class="nav-link" href="../../cidadao.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item nav-category">Certidão</li>
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
            <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Usúarios da pagina</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/login/login.php"> Login </a></li>
              </ul>
            </div>
          </li>
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

      <div class="modal fade" id="confirma-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title"> <img src="../../images/round-key_icon-icons.com_70876.png" alt=""> Referência de pagamento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
               
                    <div class="modal-body">
                
                        <p style="font-size:14px;">Digite seu email para receber a referencia de pagamento e obter sua certdão digital</p>
                        
                        <div class="form-group">
                         <label for="modal-confirma" id="lbl">Insira seu email</label>
                         <input type="email" class="form-control" id="modal-confirma" name="codigo">
                         </div>
                     
                    </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
            </div>
        </div>
    </div>

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row" id="formRegisto"> 
            <form action="" class="Form">
                <div class="barraProgresso mt-4">
                    <div class="passo-progredido passo-progredido-active" data-title="Conservatória"></div>
                    <div class="passo-progredido" data-title="Identificação"></div>
                    <div class="passo-progredido" data-title="Dados do Registo"></div>
                  </div>
                  <h5 style="float: right;" class="mx-2"><h11>*</h11>Campos Obrigatórios</h5>
               <div  class="form-step form-step-active">
                <h4>Informe a conservatória</h4>
              <div class="form-group">
                <input type="text" name="nome_proprio" id="nome_proprio" class="form-control" required placeholder=" " >
                <label for="nome_proprio" id="lbl">Província <h11>*</h11></label>
              </div>
              <div class="form-group">
                <input type="text" name="nome_familia" id="nome_familia" class="form-control">
                <label for="nome_familia" id="lbl">Municipio <h11>*</h11></label>
              </div>
              <div class="form-group">
                <input type="text" name="nome_provincia" id="nome_provincia" class="form-control" >
                <label for="nome_provincia" id="lbl">Conservatoria <h11>*</h11></label>
              </div>
              <div class="">
                <a class="btn btn-next btn-primary" href="#ti">Proximo</a>
              </div>
            </div>
            <div  class="form-step ">
        
              <h4>Identificação</h4>
              <div class="form-group col-lg-12">
                <input type="text" name="nome_proprio" id="nome_proprio" class="form-control" required >
                <label for="nome_proprio" id="lbl">Nome completo <h11>*</h11></label>
              </div>
              <div class="form-group col-lg-12">
                <label for="data_emissao" id="lbl">Data de Nascimento</label>
                <input type="date" name="nome_comuna" id="nome_comuna" class="form-control">
              </div>
              <div class="form-group col-lg-12">
                <input type="text" name="nome_proprio" id="nome_proprio" class="form-control" required >
                <label for="nome_proprio" id="lbl">Pai <h11>*</h11></label>
              </div>
              <div class="form-group col-lg-12">
                <input type="text" name="nome_proprio" id="nome_proprio" class="form-control" required >
                <label for="nome_proprio" id="lbl">Mãe <h11>*</h11></label>
              </div>
              <div class="row">
              <div class="form-group col-lg-6">
                <input type="text" name="nome_proprio" id="nome_proprio" class="form-control" required >
                <label for="nome_proprio" id="lbl">Avo Paterno <h11>*</h11></label>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="nome_proprio" id="nome_proprio" class="form-control" required >
                <label for="nome_proprio" id="lbl">Avo Materno <h11>*</h11></label>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="nome_proprio" id="nome_proprio" class="form-control" required >
                <label for="nome_proprio" id="lbl">Avo Paterno <h11>*</h11></label>
              </div>
              <div class="form-group col-lg-6">
                <input type="text" name="nome_proprio" id="nome_proprio" class="form-control" required >
                <label for="nome_proprio" id="lbl">Avo Materno <h11>*</h11></label>
              </div>
            </div>
              <div class="">
                <a class="btn btn-prev btn-primary" href="#ti">Anterior</a>
                <a class="btn btn-next btn-primary" href="#ti">Proximo</a>
              </div>
              
            </div>
            <div  class="form-step">
              <h4>Dados do registo</h4>
              <div class="form-group">
                <input type="number" name="nome_proprio" id="nome_proprio" class="form-control" required >
                <label for="nome_proprio" id="lbl">Numero do assento <h11>*</h11></label>
              </div>
              <div class="form-group">
                <input type="number" name="nome_proprio" id="nome_proprio" class="form-control" required >
                <label for="nome_proprio" id="lbl">Numero da folha</label>
              </div>
              <div class="form-group float-lg-end mt-2 ">
                <label for="Cadastrar"></label>
                  <button id="Cadastrar" name="Cadastrar" data-bs-toggle="modal" data-bs-target="#confirma-modal" class="btn btn-success" type="Submit">SOLICITAR</button>
                  <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">CANCELAR</button>
                
              </div>
              <div class="">
                <a  class="btn btn-prev btn-primary" href="#ti">Anterior</a>
              </div>
            </div>
            </form>
           
           
          </div>
        </div>
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
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <script src="../../js/scriptmemer.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
