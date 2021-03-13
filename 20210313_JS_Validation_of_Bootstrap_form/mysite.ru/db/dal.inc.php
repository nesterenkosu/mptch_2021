<?php require_once("$_SERVER[DOCUMENT_ROOT]/../db/common.dal.inc.php");

//CRUD - Create Read Update Delete
//Создание нового компьютера (Create)
function DBCreateComputer($Name,$Price,$Quantity,$Year) {
	_DBQuery("INSERT INTO tovary(Nazvanie,Cena,Kol,God) VALUES('$Name','$Price','$Quantity','$Year')");
}

//Обновление существующего компьютера (Update)
function DBUpdateComputer($id,$Name,$Price,$Quantity,$Year) {
	_DBQuery("UPDATE tovary SET Nazvanie='$Name',Cena='$Price',Kol='$Quantity',God='$Year' WHERE ID=$id");
}
