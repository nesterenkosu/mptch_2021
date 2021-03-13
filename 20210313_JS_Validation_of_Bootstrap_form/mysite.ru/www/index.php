<?require_once("$_SERVER[DOCUMENT_ROOT]/../db/dal.inc.php");?>
<?
	//Обработчик нажатия на кнопку "Сохранить"
	if(isset($_POST["btnSave"])) {
		$f_name=mysqli_real_escape_string($cms_db_link,$_POST["f_name"]);
		$f_price=(double)$_POST["f_price"];
		$f_quantity=(int)$_POST["f_quantity"];
		$f_year=(int)$_POST["f_year"];
		
		$errmsg="";
		try {
			DBCreateComputer($f_name,$f_price,$f_quantity,$f_year);
			
			//Редирект (перенаправление) для предотвращения дублирования
			//информации в БД
			header("Location: $_SERVER[PHP_SELF]?success");
		}catch(Exception $ex){
			$errmsg=$ex->getMessage();
		}
	}
?>
<!-- Доктайп -->
<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Пример шаблона Bootstrap</title>
    <meta charset="utf-8">
    <!-- Метатег Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	
	<!-- Библиотека jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
      crossorigin="anonymous"></script>
	<script type="text/javascript">		
		//Модульный подход
		var form_valid=true;
		
		//Функция проверки корректности заполнения поля
		//Аргументы:
		//selector - jQuery-селектор проверяемого поля
		//is_valid - boolean-значение, определяющее корректность формы
		function validate_form(selector,is_valid) {
				if(is_valid) {
					//Если ошибка
					$(selector).removeClass("is-valid");
					$(selector).addClass("is-invalid");
					form_valid=false;
				} else {
					//Если успех
					$(selector).removeClass("is-invalid");
					$(selector).addClass("is-valid");
				}
		}
		
		$(function() {
						
			//Обработчик нажатия на кнопку "Отправить"
			$("#btnSave").click(function() {				
				form_valid=true;
			
				// Регулярные выражения для проверки введённых значений
				var reg_pCena = /^[0-9]+(\.[0-9]{2})?$/;
				var reg_pKol = /^[0-9]+$/;
				var reg_pGod = /^[0-9]+$/;
				var reg_pProc = /^[0-9]+$/;
				var reg_pPamyat = /^[0-9]+$/;				
				
				//Собственно процесс валидации				
				validate_form("#f_name",$("#f_name").val().trim()=="");
				validate_form("#f_price",!reg_pCena.test($("#f_price").val()));
				
				//Предотвращение дефолтной реакции на нажатие
				//кнопки с типом Submit в случае ошибок в форме (то есть когда form_valid=false)
				return form_valid;
			});
		});
	</script>
  </head>
  <body>
	
  <!-- Ваше содержимое начинается здесь -->
	<div class="container">
		<?if(isset($_GET["success"])):?>
		<div class="alert alert-success">Данные успешно сохранены</div>
		<?endif;?>
		<?if(trim($errmsg)!=""):?>
		<div class="alert alert-danger"><?=$errmsg?></div>
		<?endif;?>
		<!--Кнопка для открытия модального окна-->
		<button class="btn btn-primary" data-toggle="modal" data-target="#myForm">Добавить</button>
		<!--Заготовка для модального окна-->
		<form action="" method="POST">
		<div id="myForm" class="modal">
			<div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">
					<!--Заголовок окна-->
					<div class="modal-header">
						<h4 class="modal-title">Добавление товара</h4>
						<button class="close" data-dismiss="modal">x</button>
					</div>
					
					
					<div class="modal-body">
						 <fieldset class="form-group">
							<label for="f_name">Название</label>
							<input type="text" class="form-control" id="f_name" name="f_name">
							<div class="invalid-feedback">
								Название не может быть пустым
							</div>							
						 </fieldset>
						 <fieldset class="form-group">
							<label for="f_price">Цена</label>
							<input type="text" class="form-control" id="f_price" name="f_price">
							<div class="invalid-feedback">
								Поле Цена содержит недопустимые символы
							</div>
						 </fieldset>
						 <fieldset class="form-group">
							<label for="f_quantity">Количество</label>
							<input type="text" class="form-control" id="f_quantity" name="f_quantity">
						 </fieldset>
						 <fieldset class="form-group">
							<label for="f_year">Год</label>
							<input type="text" class="form-control" id="f_year" name="f_year">
						 </fieldset>
						 <fieldset class="form-group">
							<label for="f_country">Страна</label>
							<select class="custom-select" id="f_country" name="f_country">
								<option value="0">--Выберите страну--</option>
								<option value="1">Россия</option>
								<option value="2">США</option>
								<option value="3">Германия</option>
							</select>
						 </fieldset>
						 <fieldset class="form-group">
							<label for="f_freq">Частота ЦПУ</label>
							<input type="text" class="form-control" id="f_freq" name="f_freq">
						 </fieldset>
						 <fieldset class="form-group">
							<label for="f_ram">Объём ОЗУ</label>
							<input type="text" class="form-control" id="f_ram" name="f_ram">
						 </fieldset>
						 <fieldset class="form-group">
							<label for="f_ram">Накопители информации</label>
							<div class="custom-control custom-checkbox">
							  <input type="checkbox" id="customRadio1" name="customRadio" class="custom-control-input">
							  <label class="custom-control-label" for="customRadio1">CD-ROM</label>
							</div>
							<div class="custom-control custom-checkbox">
							  <input type="checkbox" id="customRadio2" name="customRadio" class="custom-control-input">
							  <label class="custom-control-label" for="customRadio2">Floppy</label>
							</div>
						 </fieldset>
						 <fieldset class="form-group">
							<label for="f_description">Описание</label>
							<textarea id="f_description" name="f_description" class="form-control"></textarea>
						 </fieldset>
					</div>
					
					<div class="modal-footer">
						<input type="Submit" id="btnSave" name="btnSave" class="btn btn-primary" value="Сохранить"/>
						<button class="btn btn-danger" data-dismiss="modal">Отмена</button>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	</form>
  <!-- Ваше содержимое заканчивается здесь -->

  <!-- JavaScript: размещается в конце документа, чтобы страницы загружались быстрее -->    
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
      crossorigin="anonymous"></script>
    <!-- Последний скомпилированный и минимизированный Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
