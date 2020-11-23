<body>
	<?php session_start(); ?>
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<link href="../Style/css/all.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
	<div class="menu">
		<div class="box-user">
			<?php  
			include('../Classes/Painel.php');
					$user = $_SESSION['user'];
					$password = $_SESSION['password'];
					$sql = "SELECT * FROM tb_admin_usuarios WHERE user = '$user' AND password = '$password'";
					$query = mysqli_query($conn, $sql);
					$row = mysqli_num_rows($query);

					if($row>0){
						while($linha = mysqli_fetch_array($query)){
							$nome = $linha['nome'];
							$cargo = $linha['cargo'];
							$img = $linha['img'];
						}
					}
					function pegaCargo($cargo){
						$arr=['0' => 'Normal', '1' => 'Sub Administrador', '2' => 'Administrador'];
						return $arr[$cargo];
					}	

			?>
			<?php
				if ($img =='') {

			?>
			<div class="avatar">
				<i class="fa fa-user"></i>
			</div><!--Avatar-->
			<?php  }else{ ?>
				<div class="imagem-usuario">
					<img src="../Uploads/<?php echo $img; ?>"/>
				</div><!--Avatar-->
			<?php } ?>
			<div class="username">
				<p><?php echo $nome; ?></p>
				<p><?php echo pegaCargo($cargo); ?></p>
			</div>
		</div><!--User Box-->
		<div class="itens-menu">
			<a href="main.php"><i class="fas fa-home"></i> Home</a>
			<h2>Controle Estoque</h2>
			<a href="Pages/cadastrar_produtos.php">Cadastrar Produtos</a>
			
		</div>
		<div class="clear"></div>
	</div><!--Menu-->

	<header>
		<div class="center">
			<div class="menu-btn">
				<i class="fas fa-bars"></i>
			</div><!--Botão do menu-->
			<div class="logout">
				<a href="index.php"><i class="fas fa-sign-out-alt"></i> Sair</a>
			</div><!--Logout-->
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</header>
<script src="../js/jquery.js"></script>
<script src="../Painel/js/main.js"></script>
</body>
