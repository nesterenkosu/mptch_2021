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
		#my_first_container {
			background-color: blue;
			max-width: 250px;
		}
		
		#my_second_container {
			background-color: green;			
		}
		
		#mygrid div div{
			background-color: #00AAFF;
			border-style: solid;
			border-color: black;
		}
	</style>
  </head>
  <body>

  <!-- Ваше содержимое начинается здесь -->
	<div id="my_first_container" class="container">
		Hello, world!
	</div>
	<div id="my_second_container" class="container-fluid">
		Hello, world 2!
	</div>	
	
	<?/*?>
	<div id="mygrid" class="container">
		<div class="row">
			<?for($i=1;$i<=14;$i++) {?>
			
			
			
			<div class="col">Колонка <?=$i?></div>
			
			<?if($i==7) {?>
			<div class="w-100"></div>
			<?}?>
			<?}?>			
		</div>
	</div><?*/?>
	
	<div id="mygrid" class="container">
		<div class="row">
			<div class="col-4">Колонка 1</div>
			<div class="col">Колонка 2</div>
			<div class="col">Колонка 3</div>			
		</div>
	</div>
	
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
