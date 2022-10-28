<?php

    if(isset($_SESSION['alertas'])) :

?>

    <div class="alert alert-warning alert-dismissible fade show">
        <?= $_SESSION['alertas']; ?>
        <button type="button" class="btn-close" aria-label="Fechar"></button>
    </div>

<?php 

    unset($_SESSION['alertas']);
    endif;

?>