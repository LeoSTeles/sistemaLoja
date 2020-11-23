<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="box-content">
		<div class="box-metricas">
			<h2><i class="fa fa-home"> Painel de Controle</i></h2>
			<div class="box-metrica-single" id="users">
				<h2>Usuários Online</h2>
				<p>10</p>
			</div>
			<div class="box-metrica-single" id="total-visitas">
				<h2>Total de Visitas</h2>
				<p>100</p>
			</div>
			<div class="box-metrica-single" id="visitas-hoje">
				<h2>Visitas Hoje</h2>
				<p>3</p>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="box-content">
		<h2><i class="fas fa-user"> Usuários Online</i></h2>
		<div class="table-responsive">
			<div class="row">
				<div class="col">
					<span>IP</span>
				</div>
				<div class="col">
					<span>Última Ação</span>
				</div>
				<div class="clear"></div>
			</div>

			<?php 
				for ($i = 0; $i<10; $i ++){
			?>
			<div class="row">
				<div class="col">
					<span>199.199.199.199</span>
				</div>
				<div class="col">
					<span>19/11/2020 15:21</span>
				</div>
				<div class="clear"></div>
			<?php } ?>
			</div>
		</div>
	</div>

</body>
</html>