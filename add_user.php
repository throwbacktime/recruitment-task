<?php

require './user_crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = createUser($_POST);
    header("Location: ./");
}

$users = getUsers();

?>