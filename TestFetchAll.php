<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);

$customers = $statement->fetchAll();
var_dump($customers);

$connection = null;
