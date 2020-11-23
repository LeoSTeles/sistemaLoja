<!DOCTYPE html>
<html>
<head>
	<?php include('../Utils/MySql.php');?>
	<title>Painel de Controle</title>
	<link rel="stylesheet" type="text/css" href="../Style/style.css">
	<link href="../Style/css/all.css" rel="stylesheet">
</head>
<body>
<?php include('menu.php') ?>
<div class="content">
	<div class="box-content">
		<?php Painel::loadPage(); ?>	
	</div>
	<div class="clear"></div>
</div><!--Content-->

<script src="../js/jquery.js"></script>
<script src="../Painel/js/main.js"></script>

</body>
</html>