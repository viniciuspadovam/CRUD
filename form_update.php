<?php
include './includes/header.php';

require './includes/connection.php';

$consulta = $pdo->query("SELECT * FROM products WHERE id = " . $_GET['id'] . ";");
$linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>

<h2 class="mt-3 mb-4">Altere os dados deste produto</h2>
<main>

    <div class="little-container">
        <form action="./update.php" method="POST">
            <input type="hidden" id="id" name="id" value="<?= $linha['id'] ?>">
            <div class="mb-3">
                <label for="txtName" class="form-label"> Nome: </label>
                <input type="text" class="form-control" id="txtName" name="txtName" value="<?= $linha['name'] ?>" />
            </div>
            <div class="mb-3">
                <label for="txtQtd" class="form-label">Quantidade: </label>
                <input type="text" class="form-control" id="txtQtd" name="txtQtd" value="<?= $linha['qtd'] ?>" />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</main>

<?php include './includes/footer.php'; ?>