	<footer>
		<div class="footer_geral">
			<div class="container">
					<div class="footer_geral_col1">

						<a href="" class="lista_footer_cats">Cidades</a>
						<a href="" class="lista_footer_cats">Política</a>
						<a href="" class="lista_footer_cats">Economia</a>
						<a href="" class="lista_footer_cats">Esportes</a>
						<a href="" class="lista_footer_cats">Lazer</a>
						<a href="" class="lista_footer_cats">Cotidiano</a>
						<a href="" class="lista_footer_cats">Cotidiano</a>
						<br><br>
						<a href="" class="lista_footer_cats">Esportes</a>
						<a href="" class="lista_footer_cats">Lazer</a>
						<a href="" class="lista_footer_cats">Cotidiano</a>

						<button>ANÚNCIE JÁ</button>

						<img style="width: 80%;" src="http://dev.portalnoar.com.br/wp-content/themes/portalnoar/imgs/redes_com.png">


					</div>

					<div class="footer_geral_col2">
						<p class="endereco_footer">RUA DESEMBARGADOR BENÍCIO FILHO, N° 465 PETRÓPOLIS
							<br>CEP: 59014-470<br>PABX: <br><span>2020-1200</span>
							<br>REDAÇÃO: <br><span>2020-1200</span>
							<br>COMERCIAL: <br><span>(84) 99408-1871</span>
							<p>


						<p class="lista_footer_tit_blog">BLOGS</p>
						<a href="" class="lista_footer_blogs">Ricardo Rosado</a>
						<a href="" class="lista_footer_blogs">Ricardo Rosado</a>
						<a href="" class="lista_footer_blogs">Ricardo Rosado</a>
						<a href="" class="lista_footer_blogs">Ricardo Rosado</a>
						<a href="" class="lista_footer_blogs">Ricardo Rosado</a>
						<a href="" class="lista_footer_blogs">Ricardo Rosado</a>
						<a href="" class="lista_footer_blogs">Ricardo Rosado</a>


					</div>

					<div class="footer_geral_col3">
						<form>
							<input type="text"><i class="fa fa-search" aria-hidden="true"></i>

							<div class="all_tags_footer">
								<?php
								$args = array( 'post_type' => 'post', 'posts_per_page'=>1000);
								$myposts = get_posts( $args );
								foreach ( $myposts as $post ){
										setup_postdata( $post );
										$id = $post->ID;
										$posttags = get_the_tags($id);
								 		if ($posttags) {
											foreach($posttags as $tag) {
										?><li><a style="text-decoration: none;" href="/blog/?tag=<?php echo $tag->slug." ";?>"><?php echo $tag->name." ";?></a></li>
								<?php }
									}
								}
									?>
							</div>

							<div class="fb-page" data-href="https://www.facebook.com/quadradigital" data-tabs="timeline" data-width="220" data-height="100" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>

						</form>
					</div>
					<div class="footer_geral_col4">
						<p class="fale_conosco_tit">FALE CONOSCO</p>

						<form>
							<span class="fale_conosco_label fale_conosco_ne">NOME</span>
							<input class="fc_nome_email" type="text">

							<span class="fale_conosco_label fale_conosco_tel">TELEFONE</span>
							<input class="fc_tel" type="text">

							<span class="fale_conosco_label fale_conosco_ne">NOME</span>
							<input class="fc_nome_email" type="text">

							<textarea class="fale_conosco_msg"></textarea>

							<button type="submit">ENVIAR</button>

						</form>


					</div>
			</div>

		</div>

		<div class="footer_envie_titulo">
			<p>ENVIE SUA NOTÍCIA</p>
		</div>


		<div class="footer_envie">
			<div class="envie_box1">
				<img src="http://dev.portalnoar.com.br/wp-content/themes/portalnoar/imgs/fotos_envie.png">
				<p>FOTOS</p>
			</div>
			<div class="envie_box2">
				<img src="http://dev.portalnoar.com.br/wp-content/themes/portalnoar/imgs/videos_envie.png">
				<p>VÍDEOS</p>
			</div>
			<div class="envie_box3">
				<img src="http://dev.portalnoar.com.br/wp-content/themes/portalnoar/imgs/relatos_envie.png">
				<p>RELATOS</p>
			</div>

		</div>

		<div class="novidades_email">
			<div class="container">
				<p class="novidades_email_tit">RECEBA NOSSAS NOVIDADES</p>

				<form class="novidades_email_form">
					<span>E-MAIL</span>
					<input type="text">
					<button>RECEBER</button>
				</form>


			</div>
		</div>

		<div class="faixa_assinatura">
			<a href=""><img class="img_assinatura" src="http://dev.portalnoar.com.br/wp-content/themes/portalnoar/imgs/ass_quadradigital.png"></a>

		</div>

	</footer>


	<script src="<?php bloginfo('template_url') ?>/js/scripts.js" type="text/javascript"></script>

</body>

</html>