<?php
$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8', 'root', 'ihvn_secured');

include 'dbconnect.php';

$indexModel = new IndexModel($db);
$result = $indexModel->getTheData();

include 'view.php';
