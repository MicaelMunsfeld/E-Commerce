<?php

session_start();
require 'conection.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produto - E-Commerce</title>

    <!-- CSS Aqui -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css?v=1.2">

</head>
<body class="bg-gray">

    <div class="row">
        <div class="col-md-12">
            <div class="card-header p-5 bg-red">
                <div class="row">
                    <div class="col-5">
                        <a href="index.php">
                            <h2 class="text-center text-white">E-COMMERCE</h2>
                        </a>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-1">
                        <a href="carrinho.php" class="btn btn-carrinho w-100">Carrinho</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 bg-red p-5 br-10">
                <div>
                    <?php 
                    $oQuery     = "SELECT * FROM categorias";
                    $oQuery_run = mysqli_query($oConexao, $oQuery);

                    foreach($oQuery_run as $oCategoria) {
                        ?>
                        <ul>
                            <a class="no-decoration" href="view_categoria.php?id=<?= $oCategoria['id']; ?>">
                                <li class="text-white"><?= $oCategoria['descricao']; ?></li>
                            </a>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 p-3">
                <div class="row">

                    <?php
                    $iProduto   = mysqli_real_escape_string($oConexao, $_GET['id']);
                    $oQuery     = "SELECT * FROM produtos WHERE id = '$iProduto'";
                    $oQuery_run = mysqli_query($oConexao, $oQuery);
                    $oProduto   = mysqli_fetch_array($oQuery_run);
                    ?>
                    <form method="POST" action="carrinho.php">
                        <div class="card col-12 br-10 p-5">
                            <img class="img-view-produto br-10 img-fluid" src="<?= $oProduto['imagem']; ?>" alt="<?= $oProduto['descricao']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $oProduto['descricao']; ?></h5>
                                <p class="text-justify text-height-produto"><?= $oProduto['caracteristicas'] ?></p>
                                <div class="row">
                                    <div class="col-3">
                                        <h4 class="card-title">Preço: R$ <?= $oProduto['valor']; ?></h4>
                                    </div>
                                    <div class="col-4">
                                        <h4 class="card-title">Estoque: <?= $oProduto['estoque']; ?> unidades</h4>
                                    </div>
                                    <div class="col-5">
                                        <button type="submit" name="add_carrinho" class="btn btn-primary w-100">Adicionar ao carrinho</button>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <?php
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- JS Aqui -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
