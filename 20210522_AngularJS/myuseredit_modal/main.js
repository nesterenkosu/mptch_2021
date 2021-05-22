var app = angular.module("app",[]);

//Пример "самописного" (кастомного) валидатора для проверки возраста
app.directive('ageValidator', function() {
  return {
    require: 'ngModel',
    link: function(scope, element, attr, mCtrl) {
      function myValidation(value) {
        	//Выполнить действия по проверке

			//установить статус валидности 
			mCtrl.$setValidity('ageValidatorkey', value>18 && value<80);
        return value;
      }
      //Добавить валидатор в систему
      mCtrl.$parsers.push(myValidation);
	  console.log(mCtrl.$parsers);
    }
  };
});

app.directive("myUseredit",function($http){
	return {
		scope: true,		
		templateUrl:"ui.htm",
		link: function(scope,elem,attrs) {
			//alert("my user edit");
			
			/*$(elem).find("#btt").click(function(){
				alert("!!!");
			});*/
			
			scope.user={};
			//$scope.myForm.setPristine(true);
			if(attrs.id!=null)
				$http.get("http://localhost/rest/user?id="+attrs.id).then(
					function(response) {
						scope.user=response.data;
					},
					function(response) {
						alert("Ошибка метода Rest::ReadUser");
					}
				);
			
			scope.ClickTester = function() {
				alert("Вы что-то нажали");
			}
			
			scope.CreateOrUpdateUser=function(user) {
				alert("Create or update");				
				if(user.ID == null)
					scope.CreateUser(user);
				else
					scope.UpdateUser(user);
			}
			
			scope.CreateUser=function(user) {
				$http.put("http://localhost/rest/user",user).then(
					function() {
						scope.message="Данные успешно сохранены CREATED";
					},
					function() {alert("Ошибка метода Rest::CreateUser");}
				);
			}
			
			scope.UpdateUser=function(user) {
				$http.patch("http://localhost/rest/user",user).then(
					function() {
						scope.message="Данные успешно сохранены UPDATED";
					},
					function() {alert("Ошибка метода Rest::UpdateUser");}
				);
			}
		}
	};
});

app.directive("myTable",function($http){
	return {
		scope: true,		
		templateUrl:"ui2.htm",
		link: function(scope,elem,attrs) {
			/*scope.users=[
				{"id":4,"name":"Vasya","email":"v@mail.ru","age":20},
				{"id":5,"name":"Kolya","email":"k@mail.ru","age":30},
				{"id":6,"name":"Andrew","email":"a@mail.ru","age":50}
			];*/
					
			
			scope.RefreshTable = function() {
				$http.get("http://localhost/rest/users").then(
					function(response) {
						scope.users=response.data;
						console.log(scope.users);
					},
					function(response) {
						alert("Ошибка метода Rest::ReadUsers");
					}
				);
			}
			
			scope.RefreshTable();
			
			scope.delitem=function(id) {
				alert("Deleting");
				scope.DeleteUser(id);				
			}
			
			scope.DeleteUser=function(id) {
				alert("...");
				$http.delete("http://localhost/rest/user\?id="+id).then(
					function() {
						scope.RefreshTable();
						scope.message="Данные успешно удалены";
					},
					function() {alert("Ошибка метода Rest::CreateUser");}
				);
			}
			/*elem.clicked(function() {
				alert("clicked");
			});*/
			
			/*$(elem).find(".bbt").click(function() {
				alert("!!!");
			});*/
			
			//elem.bind("onclick",function(){alert("!");});
			
			/*$scope.myForm.setPristine(true);
			if(attrs.id!=null)
				$http.get("http://localhost/rest/user?id="+attrs.id).then(
					function(response) {
						scope.user=response.data;
					},
					function(response) {
						alert("Ошибка метода Rest::ReadUser");
					}
				);
			
			scope.CreateOrUpdateUser=function(user) {
				if(user.ID == null)
					scope.CreateUser(user);
				else
					scope.UpdateUser(user);
			}
			
			scope.CreateUser=function(user) {
				$http.put("http://localhost/rest/user",user).then(
					function() {
						scope.message="Данные успешно сохранены CREATED";
					},
					function() {alert("Ошибка метода Rest::CreateUser");}
				);
			}
			
			scope.UpdateUser=function(user) {
				$http.patch("http://localhost/rest/user",user).then(
					function() {
						scope.message="Данные успешно сохранены UPDATED";
					},
					function() {alert("Ошибка метода Rest::UpdateUser");}
				);
			}*/
		}
	};
});