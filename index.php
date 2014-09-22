<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar El&eacute;ctrica</title>
    <link rel="shortcut icon" href="assets/img/logo.ico">
    <link href="assets/css/template.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="assets/css/responsiveslides.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <style type="text/css">
      input, textarea { color: #000; }
.placeholder { color: #aaa; }
    </style>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/responsiveslides.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>


    <script>
    $(document).ready(function(){
      $('input, textarea').placeholder();

      //Solo Numeros
      $(".solo_numeros").keyup(function(){
        if ($(this).val())
        {
          $(this).val($(this).val().replace(/[^0-9\.]/g, ""));
        }
      });


      $(".rslides").responsiveSlides({
        auto: true,
        pager: true,
        nav: false,
        speed: 500,
        //maxwidth: 1145,
        namespace: "centered-btns"
      });
    });



</script>
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
              <h1 class="navbar-brand"><img src="assets/img/logo.png" class="img-responsive" ></h1>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <ul id="navigation" class="nav navbar-nav navbar-right">
                <li class="active"><a href="#header" class="current">Inicio</a></li>
                <li><a href="#features">Nuestra Empresa</a></li>
                <li><a href="#portfolio">Servicios</a></li>
                <li><a href="#cotizacion">Cotización</a></li>
                <li><a href="#contacto">Contacto</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <main id="main" class="site-main">

      <section id="clients">
          <div class="container">

            <div class="row marcas" id="marcas1"> 
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca1.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca2.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca3.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca4.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca5.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca6.jpg" alt="" />
              </div>
            </div>

            <div class="row marcas" id="marcas2" style="display:none;"> 
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca7.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca8.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca9.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca10.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca11.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca12.jpg" alt="" />
              </div>
            </div>

            <div class="row marcas" id="marcas3" style="display:none;"> 
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca13.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca14.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca15.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca16.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca17.jpg" alt="" />
              </div>
              <div class="col-md-2 col-sm-4 col-xs-6">
                <img src="assets/img/marcas/marca18.jpg" alt="" />
              </div>
            </div>

          </div>
        </section>




        <section id="carousel-1" class="carousel slide section-slide" data-ride="carousel">
          <ul class="rslides" id="slider">
            <li><img src="assets/img/sliders/slide1.jpg" alt=""></li>
            <li><img src="assets/img/sliders/slide2.jpg" alt=""></li>
            <li><img src="assets/img/sliders/slide3.jpg" alt=""></li>
            <li><img src="assets/img/sliders/slide4.jpg" alt=""></li>
            <li><img src="assets/img/sliders/slide5.jpg" alt=""></li>
            <li><img src="assets/img/sliders/slide6.jpg" alt=""></li>
          </ul>
        </section>

        

        <section id="features" class="section section-center section-hilite section-features">
          <div class="container">
            <h2 class="section-title"><span>Nuestra Empresa</span></h2>
            <div class="row">

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="assets/img/icon-easel-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="assets/img/icon-comments-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="assets/img/icon-book-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="assets/img/icon-bag-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="assets/img/icon-photo-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="icon-wrap"><img src="assets/img/icon-calculator-flat.png" alt=""></div>
                <h4>Subheading</h4>
                <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
              </div>

            </div>
          </div>
        </section>

        <section id="portfolio" class="section section-portfolio">
          <div class="container">
            <h2 class="section-title"><span>Servicios</span></h2>
            <ul id="filters">
              <li><a href="#" data-filter="*">All</a></li>
              <li>/</li>
              <li><a href="#" data-filter=".web">Web Design</a></li>
              <li>/</li>
              <li><a href="#" data-filter=".graphic">Graphic Design</a></li>
              <li>/</li>
              <li><a href="#" data-filter=".photography">Photography</a></li>
              <li>/</li>
              <li><a href="#" data-filter=".motion">Motion Graphics</a></li>
              <li>/</li>
              <li><a href="#" data-filter=".branding">Branding</a></li>
            </ul>

            <div class="portfolio-isotope row">
              <article class="post col-md-3 col-sm-6 portfolio-item branding photography web">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="assets/img/project-1.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="post col-md-3 col-sm-6 portfolio-item motion graphic">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="assets/img/project-2.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="post col-md-3 col-sm-6 portfolio-item branding web">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="assets/img/project-3.png" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="post col-md-3 col-sm-6 portfolio-item photography graphic">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="assets/img/project-4.png" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="post col-md-3 col-sm-6 portfolio-item motion web">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="assets/img/project-5.png" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="post col-md-3 col-sm-6 portfolio-item branding graphic">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="assets/img/project-6.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="post col-md-3 col-sm-6 portfolio-item motion photography web">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="assets/img/project-8.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
              <article class="post col-md-3 col-sm-6 portfolio-item photography motion branding graphic">
                <div class="entry-thumbnail">
                  <a href="#" class="hover-effect" data-toggle="modal" data-target="#project-modal">
                    <img src="assets/img/project-7.jpg" alt="" />
                    <span class="overlay"><i class="fa fa-plus"></i></span>
                  </a>
                </div>
              </article>
            </div>

          </div>
        </section>

        <!-- Project Modal -->
        <div class="modal fade" id="project-modal" tabindex="-1" role="dialog" aria-labelledby="project-modal-label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="project-modal-label">Project title</h4>
              </div>
              <div class="modal-body">
                <article class="single-project">
                  <div class="project-thumbnail">
                    <div id="project-thumbnail-carousel-1" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="item active"><img src="assets/img/single-project-1.jpg" /></div>
                        <div class="item"><img src="assets/img/single-project-2.png" /></div>
                        <div class="item"><img src="assets/img/single-project-3.jpg" /></div>
                      </div>
                      <ol class="carousel-indicators">
                        <li data-target="#project-thumbnail-carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#project-thumbnail-carousel-1" data-slide-to="1"></li>
                        <li data-target="#project-thumbnail-carousel-1" data-slide-to="2"></li>
                      </ol>
                      <a class="left carousel-control" href="#project-thumbnail-carousel-1" data-slide="prev"><span class="fa fa-chevron-left"></span></a>
                      <a class="right carousel-control" href="#project-thumbnail-carousel-1" data-slide="next"><span class="fa fa-chevron-right"></span></a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <button type="button" class="btn btn-block btn-primary">Launch Project</button>
                      <ul class="list-unstyled project-info">
                        <li><strong>Type</strong> <span class="pull-right">Web Design</span></li>
                        <li><strong>Client</strong> <span class="pull-right">Google</span></li>
                        <li><strong>Year</strong> <span class="pull-right">2014</span></li>
                      </ul>
                      
                    </div>
                    <div class="col-md-8">
                      <p>Suspendisse varius nisl nunc. Aenean in dictum nibh. Nullam congue facilisis purus porta ullamcorper. Aenean in consequat sapien. Cras orci augue, ultricies at luctus congue, dapibus sed magna. Vivamus consequat commodo pharetra. Maecenas sed tincidunt mi, quis accumsan nisi. Praesent ac porttitor massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur in bibendum tellus, vitae imperdiet mauris.</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Modal -->
        <div class="modal fade" id="cotizacion-modal" tabindex="-1" role="dialog" aria-labelledby="cotizacion-modal-label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="cotizacion-modal-label">Cotizaci&oacute;n</h4>
              </div>
              <div class="modal-body">
                
              </div>
            </div>
          </div>
        </div>

        <section id="cotizacion" class="section section-center section-hilite section-testimonial">
          <div class="container">
            <h2 class="section-title"><span>Cotizaci&oacute;n</span></h2>
            <div class="main-action">
              <form name="frm_cotizacion" id="frm_cotizacion" method="post" role="form">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="sr-only">* Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" placeholder="* Nombre" required>
                      </div>
                      <div class="form-group">
                        <label class="sr-only">* Tel&eacute;fono</label>
                        <input type="text" name="telefono" id="telefono" class="form-control" placeholder="* Tel&eacute;fono" required>
                      </div>
                      <div class="form-group">
                        <label class="sr-only">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label class="sr-only">Comentarios</label>
                        <textarea class="form-control" name="comentarios" id="comentarios" placeholder="Comentarios" style="height: 100px" rows="10"></textarea>
                      </div>

                      <?php 
                      for ($i=1;$i<=10;$i++)
                      {
                        ?>
                        <div class="row">
                          <div class="col-sm-1">
                            <div class="form-group">
                              <label class="sr-only">Cant.</label>
                              <input type="text" name="cantidad[]" class="cantidad form-control solo_numeros" placeholder="Cant." <?php if ($i==1){ echo "required";}?> >
                            </div>
                          </div>
                          <div class="col-sm-1">
                            <div class="form-group">
                              <label class="sr-only">U.M.</label>
                              <select  name="unidad[]" class="unidad form-control"  <?php if ($i==1){ echo "required";}?> >
                              <option value="" selected>U. M.</option>
                              <option value="lts">lts</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-10">
                            <div class="form-group">
                              <label class="sr-only">Producto</label>
                              <input type="text" name="producto[]" class="producto form-control" placeholder="Producto" <?php if ($i==1){ echo "required";}?>>
                            </div>
                          </div>
                        </div>
                        <?php
                      }
                      ?>
                      <p class="text-center"><footer><small>* Campos Obligatorios</small></footer></p>
                      <button type="submit" class="btn btn-danger" id="btn_cotizacion">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </section>

        
        
        <section id="contacto" class="section section-center section-contact">
          <div class="container">
            <h2 class="section-title"><span>Contacto</span></h2>
            <div class="main-action">
              <form name="frm_contacto" id="frm_contacto" method="post" role="form">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="sr-only">* Asunto</label>
                      <input type="text" name="asunto" id="asunto_c" class="form-control" placeholder="* Asunto" required>
                    </div>
                    <div class="form-group">
                      <label class="sr-only">* Nombre</label>
                      <input type="text" name="nombre" id="nombre_c" class="form-control" placeholder="* Nombre" required>
                    </div>
                    <div class="form-group">
                      <label class="sr-only">* Tel&eacute;fono</label>
                      <input type="text" name="telefono" id="telefono_c" class="form-control" placeholder="* Tel&eacute;fono" required>
                    </div>
                    <div class="form-group">
                      <label class="sr-only">Email</label>
                      <input type="email" name="email" id="email_c" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label class="sr-only">* Mensaje</label>
                      <textarea class="form-control" placeholder="* Mensaje" name="mensaje" id="mensaje_c" style="height: 202px" rows="10" required></textarea>
                    </div>
                    <p class="text-center"><footer><small>* Campos Obligatorios</small></footer></p>
                    <button type="submit" class="btn btn-danger" id="btn_contacto">Enviar</button>
                  </div>
                  <div class="col-sm-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3757.542583566975!2d-99.18418199999999!3d19.646844!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5eecb48f8b5672aa!2sPilar+Electrica%2C+S.A.+De+C.V.!5e0!3m2!1ses-419!2smx!4v1410980127301" width="580" height="400" frameborder="0" style="border:0"></iframe>
                    <p><i class="fa fa-map-marker"></i> Guillermo Prieto, Loma Bonita, 54759 Cuautitl&aacute;n Izcalli, Estado de M&eacute;xico</p>
                    <p>
                <i class="fa fa-phone"></i> 5870-6083 / 2620-3025 | <i class="fa fa-fax"></i> 5870-4823</p>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </section>
      </main>

      <footer id="footer" class="site-footer">
        <div class="container">

          <div id="sidebar-footer-1">
            <div class="row">

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title"><i class="fa fa-map-marker"></i> Direcci&oacute;n</h5>
                <div class="textwidget">
                  <div class="adr">
                    <div class="street-address">Guillermo Prieto, Loma Bonita, 54759 Cuautitl&aacute;n Izcalli, Estado de M&eacute;xico</div>            
                  </div>
                </div>
              </aside>

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title"><i class="fa fa-phone"></i> Tel&eacute;fonos</h5>
                <div class="textwidget">
                  <div class="adr">
                    <div class="street-address">
                      5870-6083
                    </div>
                    <div class="street-address">
                      2620-3025
                    </div>           
                  </div>
                </div>
              </aside>

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title"><i class="fa fa-fax"></i> Fax</h5>
                <div class="textwidget">
                  <div class="adr">
                    <div class="street-address">
                      5870-4823
                    </div>            
                  </div>
                </div>
              </aside>

              <aside class="widget col-md-3 col-sm-6">
                <h5 class="widget-title"><i class="fa fa-hand-o-right"></i> Siguenos en</h5>
                <ul class="social-links">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </aside>

            </div>
          </div>

          <div class="copyright"><p> <br />
          Pilar El&eacute;ctrica S.A. de C.V. &copy; 2014<br /> Developed By <a href="http://www.kontramundo.com">Kontramundo Systems</a>
          <br />Todas las marcas aqu&iacute; mencionadas son propiedad de sus respectivos due&ntilde;os.
</p></div>
        </div>
      </footer>
    </div>

    <div class="scroll-to-top" data-spy="affix" data-offset-top="200"><a href="#page" class="smooth-scroll"><i class="fa fa-arrow-up"></i></a></div>
  


    <!-- Modal Cotizacion -->
    <div class="modal fade" id="modalCotizacion">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
            <h4 class="modal-title">Cotizaci&oacute;n</h4>
          </div>
          <div class="modal-body">
            <p  class="text-center" id="msj_cotizacion">
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal Contacto -->
    <div class="modal fade" id="modalContacto">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
            <h4 class="modal-title">Contacto</h4>
          </div>
          <div class="modal-body">
            <p  class="text-center" id="msj_contacto">
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.isotope.min.js?v=1.5.26"></script>
    <script type="text/javascript" src="assets/js/jquery.singlePageNav.min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      
      $( function(){
        var arrImagenes = [ '#marcas1','#marcas2', '#marcas3'];
        var imagenActual = '#marcas1';
        var tiempo = 5000;

        setInterval( function(){
          do{
              var randImage = arrImagenes[Math.ceil(Math.random()*(arrImagenes.length-1))];
              }while( randImage == imagenActual )
                imagenActual = randImage;
                $('.marcas').hide();
                $(imagenActual).show();
          }, tiempo)
      });


      //Envio Cotizacion
      $("#frm_cotizacion").submit(function(evento){
        evento.preventDefault();

        //Desactiva Boton
        $("#btn_cotizacion").attr('disabled', true);


        if($("#nombre").val()=='' || $("#telefono").val()=='')
        {
          alert('Por favor Complete los campos obligatorios');
          return false;
        }

        $.ajax({
         type: "POST",
         url: "admin/envia_cotizacion.php",
         data: $(this).serialize(),
         success: function(msg){
           if(msg==1)
           {
              $("#msj_cotizacion").html('<h1><strong>¡GRACIAS!</strong></h1><br/>Su cotizaci&oacute;n se envio correctamente<br/>Nos pondremos en contacto con usted, lo antes posible');
           }
           else
           {
              $("#msj_cotizacion").html('<h1><strong>¡ERROR!</strong></h1><br/>Su cotizaci&oacute;n no se envio correctamente<br/>Por favor vuelva a intentarlo m&aacute;s tarde');
           }
           $("#frm_cotizacion")[0].reset();
           $("#btn_cotizacion").attr('disabled', false);
           $('#modalCotizacion').modal('show');
         }
       });
      });


      //Envio Contacto
      $("#frm_contacto").submit(function(evento){
        evento.preventDefault();

        $("#btn_contacto").attr('disabled', true);

        if($("#asunto_c").val()=='' || $("#nombre_c").val()=='' || $("#telefono_c").val()=='' || $("#mensaje_c").val()=='')
        {
          alert('Por favor Complete los campos obligatorios');
          return false;
        }

        $.ajax({
         type: "POST",
         url: "admin/envia_contacto.php",
         data: $(this).serialize(),
         success: function(msg){
           if(msg==1)
           {
              $("#msj_contacto").html('<h1><strong>¡GRACIAS!</strong></h1><br/>Su mensaje se envio correctamente<br/>Nos pondremos en contacto con usted, lo antes posible');
           }
           else
           {
              $("#msj_contacto").html('<h1><strong>¡ERROR!</strong></h1><br/>Su mensaje no se envio correctamente<br/>Por favor vuelva a intentarlo m&aacute;s tarde');
           }
           $("#frm_contacto")[0].reset();
           $("#btn_contacto").attr('disabled', false);
           $('#modalContacto').modal('show');
         }
       });
      });


    });
    </script>
  </body>
</html>
<!-- Localized -->