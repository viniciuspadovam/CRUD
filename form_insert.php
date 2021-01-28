<?php include  './includes/header.php' ?>
<h2 class="mt-3 mb-4">Insira os dados de um novo produto</h2>
<main>
    <div class="little-container">
        <form action="./insert.php" method="POST">
            <div class="mb-3">
                <label for="txtName" class="form-label"> Nome: </label>
                <input type="text" class="form-control" id="txtName" name="txtName">
            </div>
            <div class="mb-3">
                <label for="txtQtd" class="form-label">Quantidade: </label>
                <input type="text" class="form-control" id="txtQtd" name="txtQtd">
            </div>
            <input type="submit" class="btn btn-primary" value="Insert">
        </form>
    </div>
</main>
<?php include './includes/footer.php' ?>