<?php  session_start(); ?>
<?php  session_destroy(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login - Eshop</title>
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<?php include('../Utils/MySql.php');?>
</head>
<body>
	<div class="login">
		<?php
			if(isset($_POST['enviar'])){
				session_start();
				//Validando Usuario//
				$usuario = $_POST['login'];
				$pass = $_POST['senha'];
				$sql = "SELECT * FROM tb_admin_usuarios WHERE user = '$usuario' AND password = '$pass'";
				$query = mysqli_query($conn, $sql);

				if(mysqli_affected_rows($conn) != 0){
					$_SESSION['login'] = true;
					$_SESSION['user'] = $usuario;
					$_SESSION['password'] = $pass;
					header('Location: '.'main.php');
				}else{
					echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/sistemaLoja/Painel/index.php'>
			<script type=\"text/javascript\">
				alert(\"Erro ao conectar. Usuário não Encontrado.\");
			</script>";	
	
				}
				
			}

		?>
		<form method="POST">
			<input type="text" name="login" placeholder="Login"><br>
			<input type="password" name="senha" placeholder="Senha"><br></br>
			<input type="submit" name="enviar" value="Logar">
		</form>
	</div>
</body>
</html>