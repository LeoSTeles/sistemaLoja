<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Produtos</title>
	<link rel="stylesheet" type="text/css" href="../../Style/style.css">
	<link href="../../Style/css/all.css" rel="stylesheet">

</head>
<body>
	<?php include('menu.php') ?>
	<div class="content">
		<div class="box-content">
			<h2><i class="fas fa-shopping-basket"></i> Cadastrar Produtos</h2>
			<div class="clear"></div>
			<form method="POST" action="salvar">
				<br>
				<p>Nome do Produto:</p>
				<input type="text" name="nome-produto" placeholder="Nome do Produto">
				<p>Descrição do Produto:</p>
				<textarea name="descricao-produto" placeholder="Descreva aqui as características do produto"></textarea>
				<p>Largura do Produto:</p>
				<input type="text" name="largura-produto" placeholder="Largura do Produto">
				<p>Altura do Produto:</p>
				<input type="text" name="altura-produto" placeholder="Altura do Produto">
				<p>Comprimento do Produto:</p>
				<input type="text" name="comprimento-produto" placeholder="Comprimento do Produto">
				<p>Peso do Produto:</p>
				<input type="text" name="peso-produto" placeholder="Peso do Produto">
				<p>Quantidade atual do Produto:</p>
				<input type="text" name="quantidade-produto" placeholder="Quantidade Atual do Produto">
				<p>Preço do Produto:</p>
				<input type="text" name="preco-produto" placeholder="Preço do Produto">
				<input type="submit" name="enviar" value="Salvar Produto!">
				<div class="clear"></div>
			</form>
		</div>
	</div>
</body>
</html>