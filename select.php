<?php
function loadSelect()
{
    require './includes/connection.php';

    $consulta = $pdo->query("SELECT * FROM products;");

    $data = '';
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $data .= "<tr>
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

    return $data;
}

function searchSelect()
{
    require './includes/connection.php';
    $data = '';
    $var = $_GET['searchPattern'];
    $query = $pdo->prepare('SELECT * FROM products WHERE name LIKE ?');
    //$query->bindParam(':pattern', $_GET['searchPattern']);
    $query->execute(array("%$var%"));

    while ($linha = $query->fetch(PDO::FETCH_ASSOC)) {
        $data .= "<tr>
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

    return $data;
}
