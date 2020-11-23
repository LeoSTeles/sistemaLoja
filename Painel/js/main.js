$(function(){

	var open = true;
	var windowSize = $(window)[0].innerWidth;

	if (windowSize > 768){
		$('.menu').css('width','0').css('padding','0').css('display','none');
		$('.content,header').css('width','100%').css('left','0');
		open=false;
	}

	if(windowSize <= 768){
		$('menu').css('width','0').css('padding','0');
		open = false;
	}

	$('.menu-btn').click(function(){
		if(open){
			//O menu está aberto, preciso fechar e adaptar o conteudo geral do painel//
			$('.menu').animate({'width':'0','padding':'0'},function(){
				open = false;
			});
			$('.content,header').css('width','100%');
			$('.content,header').animate({'left':'0'},function(){
				open = false;
			});
		}else{
			//O menu está fechado//
			$('.menu').css('display','block');
			$('.menu').animate({'width':'300px','padding':'0'},function(){
				open = true;
			});
			//$('.content,header').css('width','calc(100%-300px)');
			$('.content,header').animate({'left':'300px',},function(){
				open = true;
			});
		}
	})

	$(window).resize(function(){
		windowSize = $(window)[0].innerWidth;
		if(windowSize <= 7680){
			$('.menu').css('width','0').css('padding','0');
			$('.content, header').css('width','100%').css('left','0');
			open = false;
		}else{
			open = true;
			$('.menu').css('width','250px').css('padding','0');
			$('.content, header').css('width','calc(100%-250px)').css('left','250px');
		}
	})
})