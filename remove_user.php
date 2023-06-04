<?php

require './user_crud.php';

$userId = $_POST['id'];
deleteUser($userId);
header("Location: ./");

?>