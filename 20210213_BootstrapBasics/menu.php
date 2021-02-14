<!-- Доктайп -->
<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Пример шаблона Bootstrap</title>
    <meta charset="utf-8">
    <!-- Метатег Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
      crossorigin="anonymous">
	<style>
		#mydiv {
			background-color: #F00;
		}
		
		#my_logo {
			color: #F00;
		}
		
		nav {
			background-color: #00AAFF;
		}
	</style>
  </head>
  <body>

  <!-- Ваше содержимое начинается здесь -->
	<nav class="navbar navbar-expand-lg">
		<a id="my_logo" class="navbar-brand">ЛОГО</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu_items">Меню</button>
		<div class="collapse navbar-collapse" id="menu_items">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link">Пункт 1</a></li>
				<li class="nav-item"><a class="nav-link">Пункт 2</a></li>
				<li class="nav-item"><a class="nav-link">Пункт 3</a></li>
				<li class="nav-item"><a class="nav-link">Пункт 4</a></li>
			</ul>
		</div>
	</nav>
	
  <!-- Ваше содержимое заканчивается здесь -->

  <!-- JavaScript: размещается в конце документа, чтобы страницы загружались быстрее -->
    <!-- Библиотека jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
      crossorigin="anonymous"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
      crossorigin="anonymous"></script>
    <!-- Последний скомпилированный и минимизированный Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
      crossorigin="anonymous"></script>
  </body>
</html>
