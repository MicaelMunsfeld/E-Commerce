<?php 

session_start();
require 'conection.php';

if(isset($_POST["add_carrinho"])) {
	if(isset($_SESSION["view_produto"])) {
		$aItens_id = array_column($_SESSION["view_produto"], "id");
		if(!in_array($_GET["id"], $aItens_id)) {
			$iCount = count($_SESSION["view_produto"]);
			$aItens = array(
				'id'		=> $_GET ["id"       ],
				'descricao'	=> $_POST["descricao"],
				'valor'		=> $_POST["valor"    ],
				'estoque'	=> $_POST["estoque"  ]
			);
			$_SESSION["view_produto"][$iCount] = $aItens;
		}
		else {
			echo '<script>alert("Produto já adicionado ao carrinho")</script>';
		}
	} else {
		$aItens = array(
			'id'		=>	$_GET ["id"       ],
			'descricao'	=>	$_POST["descricao"],
			'valor'		=>	$_POST["valor"    ],
			'estoque'	=>	$_POST["estoque"  ]
		);
		$_SESSION["view_produto"][0] = $aItens;
	}
}

if(isset($_GET["action"])) {
	if($_GET["action"] == "delete") {
		foreach($_SESSION["view_produto"] as $keys => $oProduto) {
			if($oProduto["id"] == $_GET["id"]) {
				unset($_SESSION["view_produto"][$keys]);
				echo '<script>alert("Produto Removido com sucesso!")</script>';
				echo '<script>window.location="carrinho.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carrinhos de Compras - E-Commerce</title>

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
			<h3>Carrinho de Compras</h3>
			<table class="table table-bordered">
				<tr>
					<th width="40%">Nome   </th>
					<th width="10%">Estoque</th>
					<th width="20%">valor  </th>
					<th width="15%">Total  </th>
					<th width="5%" >Ações  </th>
				</tr>
				<?php
				if(!empty($_SESSION["view_produto"])) {
					$iTotal = 0;
					foreach($_SESSION["view_produto"] as $keys => $oProduto) {
						?>
						<tr>
							<td><?php echo $oProduto["descricao"]; ?></td>
							<td><?php echo $oProduto["estoque"  ]; ?></td>
							<td><?php echo $oProduto["valor"    ]; ?></td>
							<td><?php echo number_format($oProduto["estoque"] * $oProduto["valor"], 2);?></td>
							<td>
								<a class="btn btn-primary w-100" href="carrinho.php?action=delete&id=<?php echo $oProduto["id"]; ?>">
									<span>Remover</span>
								</a>
							</td>
						</tr>
						<?php
						$iTotal = $iTotal + ($oProduto["estoque"] * $oProduto["valor"]);
					}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($iTotal, 2); ?></td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</section>

	<!-- JS Aqui -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>