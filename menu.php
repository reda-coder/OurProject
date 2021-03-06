
<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EMI Shop</title>
  <!-- the icon of the head -->
<link rel="icon" type="iamge/png" href="img\logoo.png" />

  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstap.bundle.min.js"></script>
  <!-- Our Css -->
  <link rel="stylesheet" href="css/style.css.css">
  <link rel="stylesheet" href="css/style.css">

    <!-- Our Js -->
    <script src="js/javascript.js"></script>
</head>

<body>
  <!-- we will use directly bootstrap for this front end part -->
  <!-- this is our navbar -->
  <?php
  if (isset($_SESSION['email'])) {
  ?><nav id="OurNavBar" class="navbar navbar-expand-lg navbar-light bg-light" style="height: 15cms;">

      <a class="navbar-brand" href="index.php" target="_self"><img src="img\logo2.png"></a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="childrenCatalogue.php">Les enfants</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="WomensCatalogues.php">Les femmes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="MenCatalogue.php">Les Hommes</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <span class="glyphicon glyphicon-log-out">Se deconnecter </span>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              A propos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="AboutUs.php">A propos de nous</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="CGU.php">Conditions Generaux d'Utilisation (CGU)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="Contact.php">Contactez nous</a>
            </div>
          </li>
          <a class="nav-link" href="panier.php" >
              <img src="img\panier.jpg"width="30" height="30">
              Panier
              </a>
           <li><a href="profile.php"><img class="img-circle profile_img" src="img\pic.png" href="#" height=50 width=50 style="margin-right:20px;"></a></li>
        </ul>

        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-bottom:20px">Search</button>
        </form>

      </div> 

             <!-- donnation to us -->
        <br>

        <button type="button" class="btn btn-outline-success"><a href='https://www.paypal.com/paypalme/donattoemishop'>Donate us </a> </button>
       <br>
    </nav>
  <?php
  } else {
  ?><nav class="navbar navbar-expand-lg navbar-light bg-light">

      <a class="navbar-brand" href="index.php" target="_self"><img src="img\logo11.png"></a>


      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="childrenCatalogue.php">Les enfants</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="WomensCatalogues.php">Les femmes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="MenCatalogue.php">Les Hommes</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Inscription.php">
              S'inscrire
            </a>
          </li>
          <a class="nav-link" href="Connexion.php">
            Se Connecter
          </a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              A propos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="AboutUs.php">A propos de nous</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="CGU.php">Conditions Generaux d'Utilisation (CGU)</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="Contact.php">Contactez nous</a>
            </div>
          </li>
          <!-- <a class="nav-link" href="Vendre.php">
            vendre des produits
          </a> -->
        </ul>

        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

      </div>
                   <!-- donnation to us -->
                   <br>
        
        <button type="button" class="btn btn-outline-info"><a href='https://www.paypal.com/paypalme/donattoemishop/9.99/'>Donate 
         us </a> </button>
       <br>
    </nav>
  <?php
  }

  ?>
  <!-- Dark Mode Option -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script> -->
  <script src="js/darkmode-js.min.js"></script>
  <script>
    const options = {
    bottom: '64px', // default: '32px'
    right: 'unset', // default: '32px'
    left: '32px', // default: 'unset'
    time: '0.5s', // default: '0.3s'
    mixColor: '#fff', // default: '#fff'
    backgroundColor: '#fff', // default: '#fff'
    buttonColorDark: '#100f2c', // default: '#100f2c'
    buttonColorLight: '#fff', // default: '#fff'
    saveInCookies: true, // default: true,
    label: '🌓', // default: ''
    autoMatchOsTheme: true // default: true
  }
     const darkmode = new Darkmode(options);
  darkmode.showWidget();
      function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
      window.addEventListener('load', addDarkmodeWidget);
  </script>


       <script>
       ///////////////// fixed menu on scroll for desktop
if ($(window).width() > 992) {
  $(window).scroll(function(){  
     if ($(this).scrollTop() > 40) {
        $('#navbar').addClass("fixed-top");
        // add padding top to show content behind navbar
        $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
      }else{
        $('#navbar').removeClass("fixed-top");
         // remove padding top from body
        $('body').css('padding-top', '0');
      }   
  });
} // end if
       </script>