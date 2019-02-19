<?php

function uploadImage($image){
    $extention = pathinfo($image['name'], 4);
    $filename = uniqid().".".$extention;
    move_uploaded_file($image['tmp_name'],"./uploads/".$filename);
    
    return $filename;
}

$filename = uploadImage($_FILES['image']);
$pdo = new PDO("mysql:host=localhost;dbname=exzample1", "root","");
$sql = "INSERT INTO posts (title, content, image) VALUES (:title, :content, :image)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":title", $_POST['title']);
$statement->bindParam(":content", $_POST['content']);
$statement->bindParam(":image", $filename);
$statement->execute();




