<?php


	class Painel
		{
			
			public static function loadPage(){
				if(isset($_GET['url'])){
					$url = explode('/', $_GET['url']);
					if(file_exists('Pages/'.$url[0].'.php')){
						include('Pages/'.$url[0].'.php');
					}else{
						//Página não existe//
						header('Location: '.'../Painel/Pages/home.php');
					}
				}else{
					include('Pages/home.php');
				}
				
		}




}


?>