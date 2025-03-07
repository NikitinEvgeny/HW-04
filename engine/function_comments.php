<?php
session_start();
$naim = $_SESSION['naim'];
$coment = $_POST['coment'] ?? null;
$today = date("Y-m-d H:i:s");


$db = new PDO (dsn:'sqlite:../data/db.db');
$coment_stmt = $db->prepare(query:'insert into comments (username,comment,date) values(?,?,?)');
$coment_stmt->execute([$naim,$coment,$today]);
var_dump($db->lastInsertId());
header('Location:../index.php');


