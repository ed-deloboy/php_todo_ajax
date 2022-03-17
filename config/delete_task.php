<?php
// удаление записи
require "db_conn.php";

$id_task = $_GET['id'];

mysqli_query($conn, "DELETE FROM `tasks` WHERE `tasks`.`id` = '$id_task'");

// header("Location: /");
