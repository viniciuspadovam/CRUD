<?php include('./includes/header.php') ?>

<h2 class="mt-3 mb-4">Painel de controle de estoque</h2>
<main>
    <div class="little-container">
        
            <a href="./form_insert.php" class="btn btn-info mb-2 link-dark">
                <i class="fas fa-plus"></i> Inserir Produto
            </a>
        

        <table class="table table-bordered text-center">
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Opções</th>
            </tr>
            <?php
            require './includes/connection.php';
            require './select.php';

            echo isset($_GET['searchPattern']) ? searchSelect() : loadSelect();
            ?>
        </table>
    </div>
</main>

<?php include('./includes/footer.php') ?>