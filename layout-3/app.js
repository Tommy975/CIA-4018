
var app = angular.module('myApp', ['ngRoute']);
app.config(function($routeProvider) {

  $routeProvider
  .when('/', {
    templateUrl : 'pages/Home.html',
    controller  : 'HomeController'
  })

  .when('/Equipe', {
    templateUrl : 'pages/equipe.html',
    controller  : 'EquipeController'
  })

  .when('/Contact', {
    templateUrl : 'pages/Contact.html',
    controller  : 'ContactController'
  })

  .when('/Blog', {
    templateUrl : 'pages/Blog.html',
    controller  : 'BlogController'
  })

  .when('/Connexion', {
    templateUrl : 'pages/Connexion.html',
    controller  : 'ConnexionController'
  })

  .when('/Deconnexion', {
    templateUrl : 'php/deco.php',
    controller  : 'DecoController'
  })

  .when('/Inscription', {
    templateUrl : 'pages/Inscription.html',
    controller  : 'InscriptionController'
  })
  .otherwise({redirectTo: '/'});
});

app.controller('HomeController', function($scope) {
	$scope.title = "Home";
	$scope.message = 'Hello from HomeController';
});

app.controller('EquipeController', function($scope) {
	$scope.title = "Equipe";
	$scope.message = 'Hello from EquipeController';
});

app.controller('ContactController', function($scope) {
	$scope.title = "Contact";
	$scope.message = 'Hello from ContactController';
});

app.controller('BlogController', function($scope) {
	$scope.title = "Blog";
	$scope.message = 'Hello from BlogController';
});

app.controller('ConnexionControler', function($scope) {
	$scope.title = "Connexion";
	$scope.message = 'Hello from ConnexionController';
});

app.controller('InscriptionControler', function($scope) {
	$scope.title = "Inscription";
	$scope.message = 'Hello from InscriptionController';
});
