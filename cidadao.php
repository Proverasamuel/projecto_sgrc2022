
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
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="cidadao.php">
            <img src="images/SGRC.jpg" style="height: 18px; margin-top: -0.3em;" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="cidadao.php">
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text text-black">Registo Civil</h1>
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
              <img class="img-xs rounded-circle" src="images/faces/user-shape_icon-icons.com_73346.png" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="images/faces/user-shape_icon-icons.com_73346.png" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">User</p>
                <p class="fw-light text-muted mb-0">User Email</p>
              </div>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> User Profile </a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
              <a class="dropdown-item" href="" onclick="refresh"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sair</a>
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
                <li class="nav-item"><a class="nav-link" href="pages/documentos/nascimento.php">Registo de Nascimento</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/documentos/casamento.php">Certidão de Casamento</a></li>
                <li class="nav-item"><a class="nav-link" href="pages/documentos/obito.php">Certidão de Obito</a></li>
              </ul>
            </div>
            
          </li>
          
          <li class="nav-item nav-category">pages</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">Usúarios da pagina</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/login/login.php"> Login </a></li>
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
                      <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#noticias" role="tab" aria-controls="noticias" aria-selected="true">Noticias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#listaServiços" role="tab" aria-controls="listaServiços"  aria-selected="true">Lista de Serviços</a>
                    </li>
                  
                  </ul>
                  <div>
                    <div class="btn-wrapper">
                      <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                      <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                    </div>
                  </div>
                </div>
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="noticias" role="tabpanel" aria-labelledby="noticias"> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title ">Munícipes de Luanda beneficiam do novo registo civil</h4>
                                   <h5 class="card-subtitle " style="text-indent: 2em;">Os munícipes de Luanda começaram a beneficiar, ontem, do novo modelo do registo civil, que permite a obtenção da Cópia Integral do Assento de Nascimento na hora. Com esse documento, o utente pode tratar imediatamente o Bilhete de Identidade.</h5>
                                  </div>
                                </div>
                                <div class="mt-2 mx-0">
                                  <img src="images/dashboard/images_cms-image-000030872.png" alt="Fotos de Bilhetes" width="99%" >
                                  <p style="font-size: 15px; text-indent: 2em;" class="mt-4">
                                    O novo modelo foi implementado no quadro do Programa de Massificação do Registo Civil e Atribuição do Bilhete de Identidade. O lançamento aconteceu em quatro postos de Registo Civil, no município de Talatona, que foram inaugurados pelo director Nacional dos Registos e Notariado, Israel Nambi.</p>
  
                                   <p style="font-size: 15px; text-indent: 2em;"> Vão beneficiar desses serviços os moradores dos bairros Calemba II, Lar do Patriota, Futungo e Kifica, que antes não tinham Postos de Identificação.</p>
                                    
                                   <p style="font-size: 15px; text-indent: 2em;"> O acto foi testemunhado pelo administrador municipal de Talatona, Ermelindo da Silva Pereira, e por quadros do Ministério da Justiça e dos Direitos Humanos.</p>
                                    
                                   <p style="font-size: 15px; text-indent: 2em;"> O coordenador técnico nacional do Programa de Massificação do Registo Civil e Atribuição de Bilhetes de Identidade, Fernando Fortes, disse à imprensa que o novo modelo de registo é um livro acoplado com as funções de Assento de Nascimento e Cópia Integral do Assento de Nascimento.</p>
                                    
                                   <p style="font-size: 15px; text-indent: 2em;"> No lado esquerdo do livro, esclareceu, consta o Assento de Nascimento e do lado direito a Cópia Integral, o que não acontecia anteriormente.
                                    
                                    Antes, o registo aprontava apenas a Cédula Pessoal, sem a entrega imediata do Assento de Nascimento. Fernando Fortes disse que os serviços deixam de gastar dinheiro com fotocopiadoras.
                          </p>
                          <hr>
                                </div>
                                <div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex">
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body pb-0">
                                <h4 class="card-title card-title-dash text-dark mb-4">Últimas</h4><hr>
                                <h4>As dificuldades no Registo Civil</h4>
                                <img src="images/dashboard/20120129103815ed_ident.jpg" alt="" width="99%">
                                <p>
                                      A concentração dos Serviços de Identificação, Conservatória do Registo Civil e o Notário num único edifício, em Cabinda, está a provocar desconforto à população que acorre diariamente ao local para tratar de documentos pessoais e outros de interesse empresarial, devido às enormes enchentes.</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body pb-0">
                               
                                <h4>Conservatórias começam a emitir BI</h4>
                                <img src="images/dashboard/transferir.jpg" alt="" width="99%">
                                <p>
                                    A segunda e a quinta conservatórias do Registo Civil de Luanda começaram a emitir, na sexta-feira, Bilhetes de Identidade, acção extensiva a todas as conservatórias angolanas.
                                </p>
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
        <div class="row" id="formRegisto">
          <div class="col-md-6">
                  <div class="container">
                     <h3 class=" text-dark mt-4">Entre em contacto</h3>
                      <form action="">
                        <div class="form-group">
                          <input type="text" class="form-control"  name="Name">
                          <label for="" id="lbl">Insira seu nome</label>
                        </div>
                        <br>
                        <div class="form-group">
                          <input type="email" class="form-control"  name="Email" Required>
                          <label for="" id="lbl">Indique seu email</label>
                        </div>
                        <br>
                        <form action="">
                            <div class="form-group">
                              <textarea class="form-control"  rows="5" id="comment" name="text" Required></textarea>
                              <label for="" id="lbl">Escreva sua mensagem</label>
                            </div>
                            <div class="form-group mt-4" ><button class="btn btn-primary" type="submit">Enviar mensagem</button></div>
                        </form>
                      </form>
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
      </div>     <!-- main-panel ends -->
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

