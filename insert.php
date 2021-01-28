<?php
try {
  require './includes/connection.php';
  
  $stmt = $pdo->prepare('INSERT INTO products (name, qtd) VALUES(:name, :qtd)');
  $stmt->bindParam(':name', $_POST['txtName']);
  $stmt->bindParam(':qtd', $_POST['txtQtd']);
  $stmt->execute();

  header('Location:./index.php');
  //echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>