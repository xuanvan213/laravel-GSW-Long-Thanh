<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="DỰ ÁN KHU ĐÔ THỊ CENTURY CITY">
  <meta name="author" content="Paul">

  <!-- Favicons -->
  <link rel="shortcut icon" href="/images/brand.png">
  <link rel="apple-touch-icon" href="/images/brand.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/images/brand.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/images/brand.png">

  <title>DỰ ÁN KHU ĐÔ THỊ CENTURY CITY</title> 

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Styles -->
  <link href="/css/style.css" rel="stylesheet" media="screen">
  <link href="/css/dark.css" rel="stylesheet" media="screen">
</head>
<body>

  <!-- Loader -->
  <div class="loader">
    <div class="spinner">
      <div class="double-bounce1"></div>
      <div class="double-bounce2"></div>
    </div>
  </div>

  <div class="wrapper boxed">

    <!-- Content CLick Capture-->
    <div class="click-capture"></div>

    <!-- Sidebar Menu-->
    <div class="menu"> 
      <span class="close-menu icon-cross right-boxed"></span>
      <div class="menu-lang right-boxed">
        <a href="" class="active">En</a>
        <a href="">Fr</a>
        <a href="">De</a>
      </div>
      <nav class="nav mobile-menu">
        <ul class="menu-list right-boxed">
          <li>
            <a  href="#main">Trang Chủ</a>
          </li>
          <li>
            <a href="#about">Giới Thiệu</a>
          </li>
          <li>
            <a href="#projects">Dự Án</a>
          </li>
          <li>
            <a href="#clients">Khách Hàng</a>
          </li>
          <li>
            <a href="#team">Nhà Đầu Tư</a>
          </li>
          <li>
            <a href="#contacts">Liên Hệ</a>
          </li>
        </ul>
      </nav>
      <!-- <div class="menu-footer right-boxed">
        <div class="social-list">
          <a href="#" class="icon ion-social-twitter"></a>
          <a href="#" class="icon ion-social-facebook"></a>
          <a href="#" class="icon ion-social-googleplus"></a>
          <a href="#" class="icon ion-social-linkedin"></a>
          <a href="#" class="icon ion-social-dribbble-outline"></a>
        </div>
        <div class="copy">© Bauhaus 2019. All Rights Reseverd<br> Design by LoganCee</div>
      </div> -->
    </div>

    <!-- Navbar -->
    <header class="navbar boxed js-navbar">
      
      <!-- Brand -->
      <a class="brand" href="#">
        <img src="images/brand-white.png" alt="hình ảnh dự án Gem Sky Work Long Thành">
        <div class="brand-info">
          <div class="brand-name">Gem Sky Work</div>
          <div class="brand-text">Long Thành</div>
        </div>
      </a>

      <!-- Phone -->
      <address class="navbar-address visible-md visible-xl">call us: <span class="text-white">(+080) 9684 32 45 789</span></address>

      <!-- Button -->
      <button type="button" class="navbar-toggle hidden-lg" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Social -->
      <!-- <div class="social-list hidden-xs">
        <a href="#" class="icon ion-social-twitter"></a>
        <a href="#" class="icon ion-social-facebook"></a>
        <a href="#" class="icon ion-social-googleplus"></a>
        <a href="#" class="icon ion-social-linkedin"></a>
        <a href="#" class="icon ion-social-dribbble-outline"></a>
      </div> -->

      <!-- Spacer -->
      <div class="navbar-spacer pull-right visible-lg"></div>

      <!-- Navigation -->
      <nav class="nav navigation visible-lg">
        <ul>
          <li>
            <a  href="#main">Trang Chủ</a>
          </li>
          <li>
            <a href="#about">Giới Thiệu</a>
          </li>
          <li>
            <a href="#projects">Dự Án</a>
          </li>
          <li>
            <a href="#clients">Khách Hàng</a>
          </li>
          <li>
            <a href="#team">Nhà Đầu Tư</a>
          </li>
          <li>
            <a href="#contacts">Liên Hệ</a>
          </li>
        </ul>
      </nav>
      
    </header>
    
    <!-- Main Jumbotron -->
    <main id="main" class="jumbotron">

      <!-- Start revolution slider -->
      @yield('revolution-slider')
      
    </main>

    <div class="content">   

      <!-- Section About -->
      @yield('about')

      @yield('section-info')


      <!-- Section Projects -->
      @yield('projects')


      <!-- Section Clients -->
      @yield('clients')
 

      <!-- Section Team -->
      @yield('team')
 

      <!-- Section Contacts -->
      @yield('contacts')
    
    </div>

    <!-- Footer -->
    <footer id="footer" class="footer section"> 
      <div class="footer-flex">
        <div class="flex-item">
          <a class="brand pull-left" href="#">
            <img alt="hình ảnh dự án Gem Sky Work Long Thành" src="images/brand-white.png">
            <div class="brand-info">
              <div class="brand-name">Gem Sky Work</div>
              <div class="brand-text">Long Thành</div>
            </div>
          </a>
        </div>
        <div class="flex-item">
          <div class="social-list pull-sm-right">
            <a href="" class="icon ion-social-twitter"></a>
            <a href="" class="icon ion-social-facebook"></a>
            <a href="" class="icon ion-social-googleplus"></a>
            <a href="" class="icon ion-social-linkedin"></a>
            <a href="" class="icon ion-social-dribbble-outline"></a>
          </div>
        </div>
        <div class="flex-item">
          <ul class="lang-list">
            <li class="active"><a href="">EN</a></li>
            <li><a href="">FR</a></li>
            <li><a href="">DE</a></li>
          </ul> 
        </div>
        <div class="flex-item">
          <div class="inline-block pull-sm-right">© Bauhaus 2019. All Rights Resevered</div>
        </div>
      </div>
    </footer>
  </div>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyCwVuYiM-83l2IdjpT9uC0lg4jBm8-w4j8"></script> 
  <script src="js/gmap.js"></script>

  <!-- Slider revolution -->
  <script src="js/rev-slider/jquery.themepunch.tools.min.js"></script>
  <script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script>

  <!-- Slider revolution 5x Extensions   -->
  <script src="js/rev-slider/revolution.extension.actions.min.js"></script>
  <script src="js/rev-slider/revolution.extension.carousel.min.js"></script>
  <script src="js/rev-slider/revolution.extension.kenburn.min.js"></script>
  <script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script>
  <script src="js/rev-slider/revolution.extension.migration.min.js"></script>
  <script src="js/rev-slider/revolution.extension.navigation.min.js"></script>
  <script src="js/rev-slider/revolution.extension.parallax.min.js"></script>
  <script src="js/rev-slider/revolution.extension.slideanims.min.js"></script>
  <script src="js/rev-slider/revolution.extension.video.min.js"></script>

  <!-- Scripts -->
  <script src="js/rev-slider-init.js"></script>
  <script src="js/scripts.js"></script> 
</body>
</html>