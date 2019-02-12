<?php

$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = "INSERT INTO tasks (title,content)VALUESm(:title, :content)";
$statement = $pdo->prepare($sql);
$statement->execute($ POST);


