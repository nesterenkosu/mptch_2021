var app = angular.module("app",[]);

app.directive("myUseredit",function($http){
	return {
		scope: true,		
		templateUrl: "my_first_template",
		link: function(scope,elem,attrs) {
			scope.f={};
			$http.get("http://localhost/rest/user?id="+attrs.id).then(
				function(response) {
					scope.f=response.data;
				}
			);
		}
	};
});