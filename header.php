<?php
$cidadePadrao = "natal";
?>
<!doctype html>
<html>
<head>
	<title>Portal no Ar</title>
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Raleway:600" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Raleway:200" rel="stylesheet"/>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:600" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet"/>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/jquery.bxslider.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/font-awesome-4.6.3/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/style-footer.css">

	<script src="<?php bloginfo('template_url') ?>/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url') ?>/js/jquery.bxslider.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url') ?>/js/cycle.all.js" type="text/javascript"></script>
	<script>
		var index=false;
	</script>
</head>

<body>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '247762908958034',
	      xfbml      : true,
	      version    : 'v2.7'
	    });
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	</script>

	<header>
		<div class="faixa_topo">
			<div class="container">
				<p class="cor1 titulo_faixa_topo">últimas notícias</p>

				<div class="faixa_topo_box">
					<?php for ($i=0; $i < 3; $i++) {
						?>


					<li class="faixa_topo_box_item">
						<i class="fa fa-circle" aria-hidden="true"></i><a class="faixa_topo_box_nottit" href=""><p class="cor0 faixa_topo_box_not_p">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> <span class="faixa_topo_hora">10:15 AM</span> </a>
					</li>


					<?php }
					 ?>

				</div>
				<div class="faixa_topo_contr">
					<i id="slide_topo_prev" class="fa fa-backward" aria-hidden="true"></i>
					<i id="pausa_topo_pause" class="fa fa-pause-circle-o" aria-hidden="true"></i>
					<i id="slide_topo_next" class="fa fa-forward" aria-hidden="true"></i>
				</div>


			</div>
		</div>

		<div class="faixa_topo_sec">

			<div class="container">
				<i class="fa fa-home" aria-hidden="true"></i>

				<div class="menu_sec">
					<nav>
						<a href=""> <li>expediente</li></a><i class="fa fa-circle" aria-hidden="true"></i>
						<a href=""> <li>central do leitor</li></a><i class="fa fa-circle" aria-hidden="true"></i>
						<a href=""> <li>blogs</li></a><i class="fa fa-circle" aria-hidden="true"></i>
						<a href=""> <li>artigos</li></a><i class="fa fa-circle" aria-hidden="true"></i>
						<a href=""> <li>contato</li></a>

					</nav>
				</div>
				<div class="cambio_tempo">
					<?php
					//cotação do dollar e do euro
					$cotacoes = getQuotes();
					if(!empty($cotacoes)){
					?>
					<p class="ct_titulo">câmbio:</p>
							<span class="ct_span_values"><?= $cotacoes[0]['moeda']?> R$ <?= $cotacoes[2]['cotacao']?></span>
							<span class="ct_span_values"><?= $cotacoes[4]['moeda']?> R$ <?= $cotacoes[5]['cotacao']?></span>
					<?php
					}
					$clima = getWeatherForecast(strtoupper(getWithoutAccentsSpaces($cidadePadrao)));
					if(!empty($clima)){
					?>
							<p class="ct_titulo">Tempo, <?= $cidadePadrao?>:</p>
							<span class="ct_span_values"><?= $clima['tempo']." ".$clima['temperatura']?></span>
					<?php }?>
				</div>

			</div>


		</div>

		<div class="faixa_topo_logo">
			<div class="container">

				<div class="faixa_logo_box1">
					<span class="data_topo"></span>
					<span class="all_hora_topo"><i class="fa fa-clock-o" aria-hidden="true"></i> <span class="hora_topo"></span> </span>
				</div>

				<div class="faixa_logo_box2">
					<a href="http://dev.portalnoar.com.br/"><img src="<?php bloginfo('template_url') ?>/imgs/logo.png"></a>
				</div>

				<div class="faixa_logo_box3">
					<img src="<?php bloginfo('template_url') ?>/imgs/redes_com.png">
				</div>

			</div>

		</div>

		<div class="faixa_menu_topo">
			<div class="container">

					<nav>

					<ul class="item_menu_all">
						<a href="" class="item_menu_p">Cidades</a><i class="fa fa-circle menu_p_sep" aria-hidden="true"></i>

						<div class="item_submenu_p">

							<div class="box1_menu">
								<li><a href="">Cidade1</a></li>
								<li><a href="">Cidade2</a></li>
								<li><a href="">Cidade3</a></li>
								<li><a href="">Cidade4</a></li>
								<li><a href="">Cidade5</a></li>
								<li><a href="">Cidade6</a></li>
								<li><a href="">Cidade7</a></li>
							</div>
							<div class="box2_menu">
								<p>Blogs</p>
								<li><a href="">Blog 1</a></li>
								<li><a href="">Blog 2</a></li>
								<li><a href="">Blog 3</a></li>
							</div>

						</div>

					</ul>

					<ul class="item_menu_all">
						<a href="" class="item_menu_p">Política</a><i class="fa fa-circle menu_p_sep" aria-hidden="true"></i>

						<div class="item_submenu_p">

							<div class="box1_menu">
								<li><a href="">Cidade1</a></li>
								<li><a href="">Cidade2</a></li>
								<li><a href="">Cidade3</a></li>
								<li><a href="">Cidade4</a></li>
								<li><a href="">Cidade5</a></li>
								<li><a href="">Cidade6</a></li>
								<li><a href="">Cidade7</a></li>
							</div>
							<div class="box2_menu">
								<p>Blogs</p>
								<li><a href="">Blog 1</a></li>
								<li><a href="">Blog 2</a></li>
								<li><a href="">Blog 3</a></li>
							</div>

						</div>
					</ul>


					<ul class="item_menu_all">
						<a href="" class="item_menu_p">Economia</a><i class="fa fa-circle menu_p_sep" aria-hidden="true"></i>

						<div class="item_submenu_p">

							<div class="box1_menu">
								<li><a href="">Cidade1</a></li>
								<li><a href="">Cidade2</a></li>
								<li><a href="">Cidade3</a></li>

							</div>
							<div class="box2_menu">
								<p>Blogs</p>
								<li><a href="">Blog 1</a></li>
								<li><a href="">Blog 3</a></li>
							</div>

						</div>
					</ul>


					<ul class="item_menu_all">
						<a href="" class="item_menu_p">Esportes</a><i class="fa fa-circle menu_p_sep" aria-hidden="true"></i>

						<div class="item_submenu_p">

							<div class="box1_menu">
								<li><a href="">Cidade1</a></li>
								<li><a href="">Cidade2</a></li>
								<li><a href="">Cidade3</a></li>

							</div>
							<div class="box2_menu">
								<p>Blogs</p>
								<li><a href="">Blog 1</a></li>
								<li><a href="">Blog 3</a></li>
							</div>

						</div>
					</ul>


					<ul class="item_menu_all">
						<a href="" class="item_menu_p">Lazer</a><i class="fa fa-circle menu_p_sep" aria-hidden="true"></i>

						<div class="item_submenu_p">

							<div class="box1_menu">
								<li><a href="">Cidade1</a></li>
								<li><a href="">Cidade2</a></li>
								<li><a href="">Cidade3</a></li>

							</div>
							<div class="box2_menu">
								<p>Blogs</p>
								<li><a href="">Blog 1</a></li>
								<li><a href="">Blog 3</a></li>
							</div>

						</div>
					</ul>



					<ul class="item_menu_all">
						<a href="" class="item_menu_p">Cotidiano</a><i class="fa fa-circle menu_p_sep" aria-hidden="true"></i>
					</ul>



					<ul class="item_menu_all">
						<a href="" class="item_menu_p">Brasil e Mundo</a><i class="fa fa-circle menu_p_sep" aria-hidden="true"></i>

						<div class="item_submenu_p">

							<div class="box1_menu">
								<li><a href="">Cidade1</a></li>
								<li><a href="">Cidade2</a></li>
								<li><a href="">Cidade3</a></li>

							</div>
							<div class="box2_menu">
								<p>Blogs</p>
								<li><a href="">Blog 1</a></li>
								<li><a href="">Blog 3</a></li>
							</div>

						</div>
					</ul>



					<ul class="item_menu_all">
						<a href="" class="item_menu_p">mais rn</a><i class="fa fa-circle menu_p_sep" aria-hidden="true"></i>

						<div class="item_submenu_p">

							<div class="box1_menu">
								<li><a href="">Cidade1</a></li>
								<li><a href="">Cidade2</a></li>
								<li><a href="">Cidade3</a></li>

							</div>
							<div class="box2_menu">
								<p>Blogs</p>
								<li><a href="">Blog 1</a></li>
								<li><a href="">Blog 3</a></li>
							</div>

						</div>
					</ul>


					<ul class="item_menu_all">
						<a href="" class="item_menu_p">Blogs</a><i class="fa fa-circle menu_p_sep" aria-hidden="true"></i>
					</ul>

				</nav>


				<form class="form_search">
					<input type="text"><i class="fa fa-search" aria-hidden="true"></i>
				</form>

			</div>
		</div>


	</header>
