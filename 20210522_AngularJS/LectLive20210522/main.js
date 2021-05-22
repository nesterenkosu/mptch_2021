//Создание объекта приложения AngularJS
var app = angular.module('myApp', []);


app.controller('myCtrl', function($scope) {
  //$scope - доступ к переменным шаблонизатора
  $scope.firstName = "John";
  $scope.lastName = "Doe";
  $scope.age = 20;
  
  $scope.names = [
	{"Name":"Василий","Country":"Россия"},
	{"Name":"Николай","Country":"Украина"},
	{"Name":"Пётр","Country":"Казахстан"},
	{"Name":"Пётр2","Country":"Казахстан"},
	{"Name":"Пётр3","Country":"Казахстан"},
  ];
});