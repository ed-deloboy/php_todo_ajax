<?php
require "db_conn.php";


$title = $_POST['title_task'];
$desc = $_POST['desc_task'];
$date = $_monthsList = array(".01." => "января", ".02." => "февраля", 
".03." => "марта", ".04." => "апреля", ".05." => "мая", ".06." => "июня", 
".07." => "июля", ".08." => "августа", ".09." => "сентября",
".10." => "октября", ".11." => "ноября", ".12." => "декабря");
 
//текущая дата
$currentDate = date("d.m.Y");
//переменная $currentDate теперь хранит текущую дату в формате 22.07.2015
 
//но так как наша задача - вывод русской даты, 
//заменяем число месяца на название:
$_mD = date(".m."); //для замены
$currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);


//текущее время

date_default_timezone_set('Europe/Moscow');
$nowtime = date('H:i');


mysqli_query($conn, "INSERT INTO `tasks` (`id`, `task_title`, `task_desc`, `date`, `time`) VALUES (NULL, '$title', '$desc', '$currentDate', '$nowtime')");

// header("Location: /");
