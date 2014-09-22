<?php
if(empty($_POST['usuario']) && empty($_POST['password']))
{
  ?>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Kontramundo Systems">
      <link rel="shortcut icon" href="../assets/img/logo.ico">

      <title>Pilar Electrica | Administraci&oacute;n</title>

      <!-- Bootstrap core CSS -->
      <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

      <link href="../assets/css/signin.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="signin.css" rel="stylesheet">

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>

      <div class="container">

      <form class="form-signin" role="form" name="login" id="login" action="index.php" method="post">
        <h2 class="form-signin-heading"><img src="../assets/img/logo_grande.png"></h2>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required autofocus>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Iniciar Sesi&oacute;n</button>
        <?php
        @$error = trim($_GET['e']);
        if($error==1)
        {
          ?>
          <p class="text-center"><strong>Usuario y/o password incorrecto</strong></p>
          <?php
        }
        ?>
      </form>

    </div> <!-- /container -->

    </body>
  </html>
  <?php
}
else
{
  $usuario  = trim($_POST['usuario']);
  $password = trim($_POST['password']);

  if (!get_magic_quotes_gpc())
  {
    $usuario  = addslashes($usuario);
    $password = addslashes($password);
  }

  $usr_system  = 'd033e22ae348aeb5660fc2140aec35850c4da997';
  $pass_system = 'd36f34bddffa7523b4f5dcd9cdda6d12f0072571';


  if(sha1($usuario)==$usr_system && sha1($password)==$pass_system)
  {
    unset($usuario);
    unset($password); 
    ?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Kontramundo Systems">
        <title>Pilar Electrica | Administraci&oacute;n</title>
        <link rel="shortcut icon" href="../assets/img/logo.ico">
        <link href="../assets/css/template.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
      </head>

      <body>
        <div id="page">
        <header id="header" class="site-header">
          <nav id="topbar" class="site-topbar visible-lg visible-md">
            <div class="container">
              <div class="row">
                <div class="col-sm-8"><i class="fa fa-map-marker"></i> Guillermo Prieto, Loma Bonita, 54759 Cuautitl&aacute;n Izcalli, Estado de M&eacute;xico</div>
                <div class="social-links col-sm-4">
                  <i class="fa fa-phone"></i> 5870-6083 / 2620-3025 | <i class="fa fa-fax"></i> 5870-4823
                </div>
              </div>
            </div>
          </nav>

          <nav id="navbar" class="site-navbar navbar navbar-static-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <i class="fa fa-bars"></i>
                </button>
                <h1 class="navbar-brand"><img src="../assets/img/logo.png" class="img-responsive" ></h1>
              </div>
              <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul id="navigation" class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#header" class="current" id="logout">Cerrar Sesi&oacute;n</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>


          <main id="main" class="site-main">

            <section id="features" class="section section-hilite section-features">
              <div class="container">
                <h2 class="section-title"><span>Administraci&oacute;n</span></h2>

                <div class="row">

                  <div class="col-md-6">
                    <div class="row">

                      <?php
                      for($i=1;$i<=18;$i++)
                      {
                        ?>
                        <!-- BANNER <?php echo $i;?> -->
                        <div class="col-md-6">
                          <h4>Marca <?php echo $i;?></h4>
                          <small>165 x 80</small>

                          <div class="row">
                            <div class="col-md-8">
                              <!-- Carga de archivos -->
                              <div class="form-group">
                                  <input type="file" name="marca<?php echo $i;?>" id="marca<?php echo $i;?>" class="input_file" accept="image/jpeg" style="display:none;" placeholder="Examinar"/>
                                  <p>
                                    <button data-file="marca<?php echo $i;?>" data-folder="assets/img/marcas" data-res="#res_marca<?php echo $i;?>" data-tipo="banner" class="btn btn-large btn-danger adjuntar"><i class="fa fa-search-plus"></i> Seleccionar Archivo</button>
                                  </p>
                              </div>
                              <!-- Fin Carga de archivos -->
                            </div>
                            <div class="col-md-4" id="res_marca<?php echo $i;?>">
                              
                            </div>
                          </div>
                        </div>
                        <!-- Fin BANNER <?php echo $i;?> -->
                        <?php
                      }
                      ?>


                    </div>
                  </div>


                  <div class="col-md-6">
                    <div class="row">
                      <!-- SLIDE 1 -->
                      <div class="col-md-6">
                        <h4>Slide 1</h4>
                        <small>1920 × 550</small>

                        <div class="row">
                          <div class="col-md-8">
                            <!-- Carga de archivos -->
                            <div class="form-group">
                                <input type="file" name="slide1" id="slide1" class="input_file" accept="image/jpeg" style="display:none;" placeholder="Examinar"/>
                                <p>
                                  <button data-file="slide1" data-folder="assets/img/sliders" data-res="#res_archivo1" data-tipo="slide"  class="btn btn-large btn-danger adjuntar"><i class="fa fa-search-plus"></i> Seleccionar Archivo</button>
                                </p>
                            </div>
                            <!-- Fin Carga de archivos -->
                          </div>
                          <div class="col-md-4" id="res_archivo1">
                            
                          </div>
                        </div>
                      </div>
                      <!-- Fin SLIDE 1 -->

                      <!-- SLIDE 2 -->
                      <div class="col-md-6">
                        <h4>Slide 2</h4>
                        <small>1920 × 550</small>

                        <div class="row">
                          <div class="col-md-8">
                            <!-- Carga de archivos -->
                            <div class="form-group">
                                <input type="file" name="slide2" id="slide2" class="input_file" accept="image/jpeg" style="display:none;" placeholder="Examinar"/>
                                <p>
                                  <button data-file="slide2" data-folder="assets/img/sliders" data-res="#res_archivo2" data-tipo="slide"  class="btn btn-large btn-danger adjuntar"><i class="fa fa-search-plus"></i> Seleccionar Archivo</button>
                                </p>
                            </div>
                            <!-- Fin Carga de archivos -->
                          </div>
                          <div class="col-md-4" id="res_archivo2">
                            
                          </div>
                        </div>
                      </div>
                      <!-- Fin SLIDE 2 -->

                      <!-- SLIDE 3 -->
                      <div class="col-md-6">
                        <h4>Slide 3</h4>
                        <small>1920 × 550</small>

                        <div class="row">
                          <div class="col-md-8">
                            <!-- Carga de archivos -->
                            <div class="form-group">
                                <input type="file" name="slide3" id="slide3" class="input_file" accept="image/jpeg" style="display:none;" placeholder="Examinar"/>
                                <p>
                                  <button data-file="slide3" data-folder="assets/img/sliders" data-res="#res_archivo3" data-tipo="slide"  class="btn btn-large btn-danger adjuntar"><i class="fa fa-search-plus"></i> Seleccionar Archivo</button>
                                </p>
                            </div>
                            <!-- Fin Carga de archivos -->
                          </div>
                          <div class="col-md-4" id="res_archivo3">
                            
                          </div>
                        </div>
                      </div>
                      <!-- Fin SLIDE 3 -->

                      <!-- SLIDE 4 -->
                      <div class="col-md-6">
                        <h4>Slide 4</h4>
                        <small>1920 × 550</small>

                        <div class="row">
                          <div class="col-md-8">
                            <!-- Carga de archivos -->
                            <div class="form-group">
                                <input type="file" name="slide4" id="slide4" class="input_file" accept="image/jpeg" style="display:none;" placeholder="Examinar"/>
                                <p>
                                  <button data-file="slide4" data-folder="assets/img/sliders" data-res="#res_archivo4" data-tipo="slide"  class="btn btn-large btn-danger adjuntar"><i class="fa fa-search-plus"></i> Seleccionar Archivo</button>
                                </p>
                            </div>
                            <!-- Fin Carga de archivos -->
                          </div>
                          <div class="col-md-4" id="res_archivo4">
                            
                          </div>
                        </div>
                      </div>
                      <!-- Fin SLIDE 4 -->

                      <!-- SLIDE 6 -->
                      <div class="col-md-6">
                        <h4>Slide 5</h4>
                        <small>1920 × 550</small>

                        <div class="row">
                          <div class="col-md-8">
                            <!-- Carga de archivos -->
                            <div class="form-group">
                                <input type="file" name="slide5" id="slide5" class="input_file" accept="image/jpeg" style="display:none;" placeholder="Examinar"/>
                                <p>
                                  <button data-file="slide5" data-folder="assets/img/sliders" data-res="#res_archivo5" data-tipo="slide"  class="btn btn-large btn-danger adjuntar"><i class="fa fa-search-plus"></i> Seleccionar Archivo</button>
                                </p>
                            </div>
                            <!-- Fin Carga de archivos -->
                          </div>
                          <div class="col-md-4" id="res_archivo5">
                            
                          </div>
                        </div>
                      </div>
                      <!-- Fin SLIDE 5 -->

                      <!-- SLIDE 6 -->
                      <div class="col-md-6">
                        <h4>Slide 6</h4>
                        <small>1920 × 550</small>

                        <div class="row">
                          <div class="col-md-8">
                            <!-- Carga de archivos -->
                            <div class="form-group">
                                <input type="file" name="slide6" id="slide6" class="input_file" accept="image/jpeg" style="display:none;" placeholder="Examinar"/>
                                <p>
                                  <button data-file="slide6" data-folder="assets/img/sliders" data-res="#res_archivo6" data-tipo="slide" class="btn btn-large btn-danger adjuntar"><i class="fa fa-search-plus"></i> Seleccionar Archivo</button>
                                </p>
                            </div>
                            <!-- Fin Carga de archivos -->
                          </div>
                          <div class="col-md-4" id="res_archivo6">
                            
                          </div>
                        </div>
                      </div>
                      <!-- Fin SLIDE 6 -->
                    </div>
                  </div>


                </div>
              </div>
            </section>

          
          </main>

          <footer id="footer" class="site-footer">
            <div class="container">


              <div class="copyright"><p> <br />
          Pilar El&eacute;ctrica S.A. de C.V. &copy; 2014<br /> Developed By <a href="http://www.kontramundo.com">Kontramundo Systems</a>
          <br />Todas las marcas aqu&iacute; mencionadas son propiedad de sus respectivos due&ntilde;os.
</p></div>
            </div>
          </footer>
        </div>

        <div class="scroll-to-top" data-spy="affix" data-offset-top="200"><a href="#page" class="smooth-scroll"><i class="fa fa-arrow-up"></i></a></div>
      
        <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/js/jquery.isotope.min.js?v=1.5.26"></script>
        <script type="text/javascript" src="../assets/js/jquery.singlePageNav.min.js"></script>
        <script type="text/javascript" src="../assets/js/main.js"></script>
        <script type="text/javascript" src="../assets/js/upload.js"></script>

        <script type="text/javascript">
        $(document).ready(function(){
          $("#logout").click(function(){
            location.reload();
          });
        });
        </script>
      </body>
    </html>
    <!-- Localized -->
    <?php
  }
  else
  {
    header('location: index.php?e=1');
  }
}
?> 