<?php

require './Entidades/todo.php';

if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    Todo::deletarTodo($_GET["id"]);
    header('location: index.php');
    exit;
} else {
    header('location: index.php');
    exit;
}
