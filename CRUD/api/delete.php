<?php

$id = $_POST['id'];
$con = new PDO("mysql:host=localhost;dbname=extincteur","root","");
$querySQL = "DELETE FROM product WHERE id = '$id' ";
$applySQL = $con -> prepare($querySQL);
$applySQL -> execute();

?>