<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'todo_php') ;

if(!$conn){
    echo "Errror DB";
    exit();
}
