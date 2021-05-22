var app = angular.module("app",[]);

//Код первого контроллера
app.controller("mycontrol1",function($scope,myfactory){
	//переменная val_shared будет содержать разделяемые данные
	$scope.val_shared = myfactory;
});

//Код второго контроллера
app.controller("mycontrol2",function($scope,myfactory){
	//переменная val_shared будет содержать разделяемые данные
	$scope.val_shared = myfactory;
});

//Создание переменной, общей для нескольких контроллеров
//при помощи фабрики
app.factory("myfactory",function(){
	return {v: ""};
});