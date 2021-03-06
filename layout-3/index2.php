<!doctype html>
<?php
session_start();
?>
<html ng-app="myApp" >
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->        
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


      <!-- SPELLS -->
      <!-- load angular and angular route via CDN -->
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
          <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <!-- AngularJS core Javascript -->
    <script src="app.js"></script>

  <title>Centre Intelligence Artificielle</title>




  <?php
 include('nav.html');
//    include('navbar.html');
  ?>
  <body ng-controller="HomeController">

  <script type="text/ng-template" id="pages/Home.html">
    <h2 class="titre"> {{title}}</h2>
    <h3>{{message}}</h3>
  </script>

  </script>
  <script type="text/ng-template" id="pages/Contact.html">
    <h2 class="titre"> {{title}}</h2>
    <h3>{{message}}</h3>
  </script>
<script type="text/ng-template" id="pages/Blog.html">
    <h2 class="titre"> {{title}}</h2>
    <h3>{{message}}</h3>
  </script>



<header>
<h1 class=""> Centre d'intelligence Artificielle </h1>


</header>

    <!-- Page Content -->

  <div id="#main">
    <?php
    if(isset($_SESSION['login']))
    echo "Bienvenue " .$_SESSION['login'];
    ?>

    <section class="py-5">
    <div class="container">



    </div>
    <div ng-view></div>
  </div>



    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/scripts.js"></script>

</body>
</html>
