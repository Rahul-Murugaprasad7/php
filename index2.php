<?php

$dsn = "mysql:host=localhost;
port=3306;
dbname=dummy;
user=root;
password=Rahul@2003";


$pdo = new PDO($dsn);

$statement = $pdo->prepare('select * from fruit');
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($posts);