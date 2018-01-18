<?php
function __autoload($classname){
	include_once("controller/$classname.php");
}

if (empty($_GET)||empty($_POST)||!isset($_COOKIE)){
  // Действие если новый пользователь
}