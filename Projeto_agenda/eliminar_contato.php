<?php
require_once('header.php');
?>

<div class="row">
    <div class="col text-center">
        <h3>Deseja eliminar o seguinte contato?</h3>

        <div class="my-4">
            <div>
                <span class="me-5">Nome: <strong> ###### </strong></span>
                <span>Telefone: <strong> ###### </strong></span>
            </div>
        </div>

        <a href="index.php" class="btn btn-outline-dark yes-no-width">Não</a>
        <a href="eliminar_contato.php&id=0?delete=yes" class="btn btn-outline-dark yes-no-width">Sim</a>
    </div>
</div>

<?php
require_once('footer.php');
?>