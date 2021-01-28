<?php include('./includes/header.php') ?>

<h2 class="mt-3 mb-4">Painel de controle de estoque</h2>
<main>
    <div class="little-container">
        <button class="btn btn-info mb-2"><a href="./form_insert.php" class="link-dark">Inserir Produto</a></button>

        <table class="table table-bordered text-center">
            <tr>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Opções</th>
            </tr>
            <?php
            require './includes/connection.php';

            $consulta = $pdo->query("SELECT * FROM products;");


            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                    <td> {$linha['name']} </td>
                    <td> {$linha['qtd']} </td>
                    <td> 
                        <button class=\"btn btn-primary\">
                            <a href=\"./form_update.php?id={$linha['id']}\" class=\"link-light\">Alterar</a>
                        </button> 
                        <button class=\"btn btn-danger\">
                            <a href=\"./delete.php?id={$linha['id']}\" class=\"link-light\">Excluir</a>
                        </button>
                    </td>
                  </tr>";
            }
            ?>
        </table>
    </div>
</main>

<?php include('./includes/footer.php') ?>