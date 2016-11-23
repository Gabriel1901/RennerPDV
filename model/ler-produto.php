<?php

$db = new PDO('mysql:host=localhost;dbname=renner_pdv;charset=UTF8','root','elaborata');

$id = $_GET["id"];
$sql = "select * from produtos WHERE id = $id";

$retorno = $db->query($sql);

$produtos = $retorno->fetch(PDO::FETCH_ASSOC);


echo json_encode($produtos);