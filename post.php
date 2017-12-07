<?php
// create a variable
$task = $_POST['task'];
$description = $_POST['description'];
$completion = $_POST['completion'];
$completion_bool = settype($completion, 'boolean');

//Execute the query
$sql = "INSERT INTO user1(task,description,completion) VALUES('$task','$description','$completion_bool')";
