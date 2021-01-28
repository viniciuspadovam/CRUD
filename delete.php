<?php

require './includes/connection.php';

$stmt = $pdo->prepare('DELETE FROM products WHERE id = :id');
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

header('Location:./index.php');

?>