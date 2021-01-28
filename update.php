<?php
try {
    require './includes/connection.php';

    $stmt = $pdo->prepare('UPDATE products SET name = :name, qtd = :qtd WHERE id = :id');
    $stmt->bindParam(':id', $_POST['id']);
    $stmt->bindParam(':name', $_POST['txtName']);
    $stmt->bindParam(':qtd', $_POST['txtQtd']);
    $stmt->execute();

    header('Location:./index.php');
} catch (PDOException $e) {
    echo 'Error:' . $e->getMessage();
}
?>