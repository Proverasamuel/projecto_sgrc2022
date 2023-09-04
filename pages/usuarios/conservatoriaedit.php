<?php
  session_start();
  include_once("../../php/conexao.php");
  if (isset ($_SESSION['emailUsuario']) && $_SESSION['idCargo']==1) {
    $email=$_SESSION['emailUsuario'];
    $user=$_SESSION['nomeUsuario'];
    $cargo=$_SESSION['nomeCargo'];
  }else {
    $_SESSION['loginErro'] = "Faça Login Administrador";
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
  <link rel="stylesheet" href="../../css/vertical-layout-light/cssmemer.css">
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
          <a class="navbar-brand brand-logo" href="../../index.php">
            <img src="../../images/SGRC.jpg" style="height: 18px; margin-top: -0.3em;" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.php">
            <img src="../../images/logo-mini.svg" alt="logo" />
          </a>
        </div>
        
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text text-black"><?php echo $user; ?></h1>
            <h3 class="welcome-sub-text"><?php echo $cargo; ?></h3>
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
                <p class="mb-1 mt-3 font-weight-semibold"><?php echo $user  . '-' .  $cargo; ?></p>
                <p class="fw-light text-muted mb-0"><?php echo utf8_encode($email); ?></p>
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
            <a class="nav-link" href="../../index.php">
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
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/registonasc.php">Cadastrar</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Listar</a></li>
                  </ul>
                </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="ui-basic" href="#ui-basic" ><span>Certidão de Casamento</span><i class="menu-arrow"></i></a>
                  <ul class="collapse" id="ui-basic" style="list-style-type: none;">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Cadastrar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Listar</a></li>
                      </ul>
                
                </li>
                <li class="nav-item"> <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="ui-basic" href="#ui-basic" ><span>Certidão de Obito</span> <i class="menu-arrow"></i> </a>
                  <ul class="collapse" id="ui-basic" style="list-style-type: none;">
                    <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/registroobi.php">Cadastrar</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Listar</a></li>
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
                <li class="nav-item"><a class="nav-link" href="">Registo de Nascimento</a></li>
                <li class="nav-item"><a class="nav-link" href="">Certidão de Casamento</a></li>
                <li class="nav-item"><a class="nav-link" href="">Certidão de Obito</a></li>
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
      <div class="main-panel" id="asspos">
        <div class="content-wrapper">
          <div class="row" id="formRegisto">
            <div class="col-lg-12">
              <h2 class="mt-4">Cadastrar conservatória</h2>
              <?php
                if (isset($_SESSION['mensag'])) {
                  echo $_SESSION['mensag'];
                  unset($_SESSION['mensag']);
                }
              ?>
               <?php
               include_once("../../php/conexao.php");
                  $id=$_GET['id'] ?? '';
                  $sqlBusca="SELECT * FROM conservatoria JOIN provincia ON conservatoria.idProvincia=provincia.idProvincia
                  JOIN municipio ON conservatoria.idMunicipio=municipio.idMunicipio
                  WHERE idConservatoria=$id";
                $dados=mysqli_query($conexao,$sqlBusca);
                $linha = @mysqli_fetch_assoc($dados);

              ?>
              <form action="../../php/cadastroConseedit_scrip.php" method="POST">
                  <h4 class="mt-4">Dados da conservatória</h4>
                  <div class="form-group col-lg-10">
                    <input type="text" name="nomeConservatoria" id="nomeConservatoria" value="<?php echo $linha['nomeConservatoria']; ?>" class="form-control" >
                    <label for="nomeConservatoria" id="lbl">Nome</label>
                  </div>
                  <div class="form-group col-lg-10">
                  <select name="idProvincia" id="idProvincia" class="form-control">
                    <option value="<?php echo $linha['idProvincia']; ?>"><?php echo $linha['nomeProvincia']; ?></option>
                    <?php
                      $result_cat_post = "SELECT * FROM provincia ORDER BY nomeProvincia";
                      $resultado_cat_post = mysqli_query($conexao, $result_cat_post);
                      while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
                        echo '<option value="'.$row_cat_post['idProvincia'].'">'.$row_cat_post['nomeProvincia'].'</option>';
                      }
                    ?>
                  </select>
                  <label for="nome_provincia" id="lbl">Provincia</label>
                </div>
                <div class="form-group col-lg-10">
           <!--        <span class="carregando">Aguarde, carregando...</span> -->
                  <select name="idMunicipio" id="idMunicipio" class="form-control">
                    <option value="<?php echo $linha['idMunicipio']; ?>"><?php echo $linha['nomeMunicipio']; ?></option>
                  </select>
                  <label for="nome_municipio" id="lbl">Municipio</label>
                </div>   
                <div class="form-group col-lg-10">
                    <input type="text" name="nomeBairro" id="nomeBairro" value="<?php echo $linha['bairro']; ?>" class="form-control" >
                    <label for="nomeBairro" id="lbl">Bairro</label>
                  </div>  
                  <div class="form-group float-lg-end mt-2">
                    <label for="Cadastrar"></label>
                    <input type="hidden" name="id" value="<?php echo $linha['idConservatoria'];?>">
                      <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">SALVAR</button>
                      <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">CANCELAR</button>
                    
                  </div>
                </form>
                </div>
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
  <script src="../../vendors/chart.js/Chart.min.js"></script>
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
  <script src="../../js/chart.js"></script>
  <!-- End custom js for this page-->
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<link rel="stylesheet" href="/php/munipost.php">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript">
    google.load("jquery", "1.4.2");
  </script>
  <script type="text/javascript">
  $(function(){
    $('#idProvincia').change(function(){
      if( $(this).val() ) {
        $('#idMunicipio').hide();
      /*   $('.carregando').show(); */
        $.getJSON('../../php/munipost.php?search=',{idProvincia: $(this).val(), ajax: 'true'}, function(j){
          var options = '<option value="">Selecione o municipio</option>';	
          for (var i = 0; i < j.length; i++) {
            options += '<option value="' + j[i].idMunicipio + '">' + j[i].nomeMunicipio + '</option>';
          }	
          $('#idMunicipio').html(options).show();
          $('.carregando').hide();
        });
      } else {
        $('#idMunicipio').html('<option value="">– Selecione o municipio –</option>');
      }
    });
  });
  </script>
</body>

</html>
