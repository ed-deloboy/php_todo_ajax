<?php
require "db_conn.php";

var_dump($_POST);

$title = $_POST['title_task'];
$desc = $_POST['desc_task'];


mysqli_query($conn, "INSERT INTO `tasks` (`id`, `task_title`, `task_desc`) VALUES (NULL, '$title', '$desc')");

// header("Location: /");
