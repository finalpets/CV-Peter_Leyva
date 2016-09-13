    <header class="header fixed clearfix navbar navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

            <!-- header-left start -->
            <!-- ================ -->
            <div class="header-left clearfix">

              <!-- logo -->
              <div class="logo smooth-scroll">
                <a href="#banner"><img id="logo" src="images/profile_img.jpg" alt="Worthy"></a>
              </div>

              <!-- name-and-slogan -->
              <div class="site-name-and-slogan smooth-scroll">
                <div class="site-name"><a href="#banner">Peter Leyva</a></div>
                <div class="site-slogan">Web Developer <!--<a target="_blank" href="http://htmlcoder.me">HtmlCoder</a> --></div>
              </div>

            </div>
            <!-- header-left end -->

          </div>
          <div class="col-md-8">

            <!-- header-right start -->
            <!-- ================ -->
            <div class="header-right clearfix">

              <!-- main-navigation start -->
              <!-- ================ -->
              <div class="main-navigation animated">

                <!-- navbar start -->
                <!-- ================ -->
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">

                    <!-- Toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#banner">Inicio</a></li>
                        <li><a href="#about">Acerca De</a></li>
                        <li><a href="#services">Servicios</a></li>
                        <li><a href="#portfolio">Portafolio</a></li>
                        {{-- <li><a href="#clients">Clientes</a></li> --}}
                        <li><a href="#contact">Contacto</a></li>
                      </ul>
                    </div>

                  </div>
                </nav>
                <!-- navbar end -->

              </div>
              <!-- main-navigation end -->

            </div>
            <!-- header-right end -->

          </div>
        </div>
      </div>
    </header>

        <!-- banner start -->
    <!-- ================ -->
    <div id="banner" class="banner">
      <div class="banner-image"></div>
      <div class="banner-caption">
        <div class="container">
          <div class="row">
          @yield('banner')
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->