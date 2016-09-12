<!--
	Template Name: single-post
-->
<?php
	get_header();
 ?>

 
<section id="chapeu_noticia">
		<div class="cha_int_titulo" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/barra_topo_cate.png)">
			<div class="container">
				<h1>mundo no ar</h1>
			</div>
		</div>

	<div class="container">
	 	 <div class="chapeu_all_box">
				
				<div class="ch_noticia_principal">
					<div class="ch_noticia_principal_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
					<a href=""><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p></a>
				</div>

				<?php 

					include('includes/gentenoar-interna.php'); 
					echo "<div class='int_espaco_gente_ar'></div>"
				?>

				<div class="chapeu_ultimas_noticias_all">
					<p class="chapeu_ul_not_titulo">últimas</p>
						
						<div class="ch_col3">
						<?php 
							for ($i=0; $i < 6; $i++) { 
						 ?>

							<div class="ch_col3_item">
								<div class="ch_col3_item_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
								<div class="ch_col3_item_text">
									<p class="ch_col3_item_chapeu">mundo no ar</p>
									<p class="ch_col3_item_titulo">Lorem ipsum dolor</p>
									<p class="ch_col3_item_desc">Lorem ipsum dolor adipisicing sed amet.</p>
								</div>
							</div>

						<?php 
							}
						 ?>
						</div>
				</div>



				<div class="chapeu_ultimas_noticias_all">
					<p class="chapeu_ul_not_titulo">leia também</p>
						<div class="ch_col3">
						<?php 
							for ($i=0; $i < 3; $i++) { 
						 ?>
						 
							<div class="ch_col3_item">
								<div class="ch_col3_item_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
								<div class="ch_col3_item_text">
									<p class="ch_col3_item_chapeu">mundo no ar</p>
									<p class="ch_col3_item_titulo">Lorem ipsum dolor</p>
									<p class="ch_col3_item_desc">Lorem ipsum dolor adipisicing sed amet.</p>
								</div>
							</div>

						<?php 
							}
						 ?>
						</div>
				</div>


				<div class="chapeu_ver_todas_not_box">
					<a class="chapeu_ver_todas_not" href="#">ver todas as notícias</a>
				</div>

	 	 </div>
	 	 
	 	 <div class="ultimas_chapeu_box">
	 	 	<h1 class="ultimas_chapeu_titulo">últimas notícias</h1>

	 	 	<div class="all_ult_not">
	 	 		<?php for ($i=0; $i < 5; $i++) { 
	 	 			
	 	 		?>

	 	 		<div class="item_ult_not_chap">
	 	 			<div class="item_ult_img_chap" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/sim_ultimas_not.png)"></div>
	 	 			<div class="item_ult_text_chap">
	 	 				<p class="item_ult_text_titulo_p_chap">Brasil e mundo</p>
	 	 				<a href="#"><p class="item_ult_text_titulo_chap">Lorem ipsum dolor</p></a>
	 	 				<p class="item_ult_text_subtitulo_chap">Sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	 	 				<p class="item_ult_text_data_chap"> <span class="data_ult_not_chap">08/09/2016</span> <span class="hora_ult_not_chap"><i class="fa fa-clock-o" aria-hidden="true"></i>11h40</span> </p>
	 	 			</div>
	 	 		</div>

	 	 		<?php 
	 	 			}
	 	 		 ?>
	 	 	</div>

	 	 </div>
 	</div>
	 	 		<?php 
					include('includes/mais_lidas_comentadas.php');
				 ?>

</section>





<?php
	get_footer();
 ?>
