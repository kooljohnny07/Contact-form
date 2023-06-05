<?php
$pdo = new PDO('mysql:host=localhost; port=3306; dbname=contact', 'root', '');
$pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('set names utf8');

?>