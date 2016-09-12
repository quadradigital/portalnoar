<?php
/**
 * Template Name: single-post
 * @package portalnoar
 * @subpackage portalnoar
 * @since Portal no AR 1.0
 * Author: Beto Canuto [ Web Design / beto@quadradigital.com.br ], Douglas Boza [ Front-end / douglas@quadradigital.com.br ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */

	$id = $post->ID;
	//contador de visualizações
	$cont = get_post_meta($post->ID,'_contViews');
	 if (!add_post_meta($post->ID, '_contViews', '1', true ) ) {
		update_post_meta($post->ID, '_contViews', $cont[0]+1);
	 }

	get_header();
	$img = wp_get_attachment_image_src(get_post_thumbnail_id($id), array(2000,2000));
	$posttags = get_the_tags();
 ?>



 <section class="interna_post">
 	<div class="container">
 	 	<div class="noticias_all_box">
		 		<div class="infs_post_interna">
		 			<?= (get_field('chapeu_da_noticia')!='' ? "<p class=\"chapeu_noticia\">".get_field('chapeu_da_noticia')."</p>" : ''); ?>
		 			<p class="data_noticia"><?= get_the_date('d/m/Y'); ?></p>
		 			<p class="hora_noticia"><i class="fa fa-clock-o" aria-hidden="true"></i><?= get_the_date('H:i'); ?></p>

		 		</div>
		 		<h1><?= get_the_title($id) ?></h1>
		 		<p class="desc_noticia"><?= get_field('sutia_da_noticia')?></p>
				<p class="desc_noticia">Por <?= get_field('autor_fonte_noticia')?></p>

		 		<div class="noticia_conteudo">

		 			<div class="img_destaque_noticia img_destaque_noticia_50">
		 				<p class="post_autor"><?= get_the_author(); ?></p>
		 				<div style="background-image:url(<?= $img[0]?>)" > </div>
		 				<?php if(get_field('texto_sobre_img')!=''){?>
							<p class="desc_img_noticia"><?= get_field('texto_sobre_img')?></p>
							<?php }?>
		 			</div>

		 			<div class="text_sub_noticia">
		 				<p><?= get_field('texto1')?></p>
		 			</div>

		 			<div class="redes_sociais_noticia">
		 				<img src="<?php bloginfo('template_url') ?>/imgs/redes_post.png">
		 			</div>


		 			<div class="text_noticia">
		 				<p><?= get_field('texto2')?></p>

						<?php if(get_field('ativar_veja_tambem')){ ?>
		 				<div class="box_veja_tambem">
			 					<p class="titulo_tmb">veja também</p>
			 					<div class="item_veja_tambem">
			 						<div class="img_veja_tambem" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
			 						<div class="text_veja_tambem">
			 							<a href="#"><p class="titulo_item_tmb">Lorem ipsum dolor</p></a>
			 							<p class="desc_item_tmb">Ipsum dolo ipsum dolo ipsum dolo</p>
			 						</div>
			 					</div>
			 					<div class="item_veja_tambem">
			 						<div class="img_veja_tambem" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
			 						<div class="text_veja_tambem">
			 							<a href="#"><p class="titulo_item_tmb">Lorem ipsum dolor</p></a>
			 							<p class="desc_item_tmb">Ipsum dolo ipsum dolo ipsum dolo</p>
			 						</div>
			 					</div>
			 					<div class="item_veja_tambem">
			 						<div class="img_veja_tambem" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
			 						<div class="text_veja_tambem">
			 							<a href="#"><p class="titulo_item_tmb">Lorem ipsum dolor</p></a>
			 							<p class="desc_item_tmb">Ipsum dolo ipsum dolo ipsum dolo</p>
			 						</div>
			 					</div>

								<div class="veja_tambem_all_ultimas">

									<div class="veja_tambem_ultimas_item">
										<div class="veja_tambem_ultimas_item_img">
											<img src="<?php bloginfo('template_url') ?>/imgs/sim_ultimas_not.png">
										</div>
										<div class="veja_tambem_ultimas_item_text">
											<a href=""><p class="veja_tambem_ultimas_item_titulo">Foragido do sistema prisional</p></a>
											<p class="veja_tambem_ultimas_item_desc">Foragido do sistema prisional</p>
										</div>
									</div>
									<div class="veja_tambem_ultimas_item">
										<div class="veja_tambem_ultimas_item_img">
											<img src="<?php bloginfo('template_url') ?>/imgs/sim_ultimas_not.png">
										</div>
										<div class="veja_tambem_ultimas_item_text">
											<a href=""><p class="veja_tambem_ultimas_item_titulo">Foragido do sistema prisional</p></a>
											<p class="veja_tambem_ultimas_item_desc">Foragido do sistema prisional</p>
										</div>
									</div>
									<div class="veja_tambem_ultimas_item">
										<div class="veja_tambem_ultimas_item_img">
											<img src="<?php bloginfo('template_url') ?>/imgs/sim_ultimas_not.png">
										</div>
										<div class="veja_tambem_ultimas_item_text">
											<a href=""><p class="veja_tambem_ultimas_item_titulo">Foragido do sistema prisional</p></a>
											<p class="veja_tambem_ultimas_item_desc">Foragido do sistema prisional</p>
										</div>
									</div>

								</div>


		 				</div>
						<?php } ?>

		 				<p><?= get_field('texto3')?></p>

		 			</div>

		 			<div class="redes_sociais_noticia">
		 				<img src="<?php bloginfo('template_url') ?>/imgs/redes_post.png">
		 			</div>

					<div class="list_tags_noticia">
					<?php if ($posttags) {
						foreach($posttags as $tag) {
							?><li><a href="/blog/?tag=<?php echo $tag->slug." ";?>"><?php echo $tag->name." ";?></a></li>
			<?php }
					}?>
		 			</div>

		 		</div>
 	 </div>

 	 <div class="ultimas_noticias_box">
 	 	<h1 class="ultimas_noticias_titulo">últimas notícias</h1>

 	 	<div class="all_ult_not">
			<?php
				$args = array( 'post_type' => 'post', 'posts_per_page'=>5, 'orderby'=>'date', 'order'=> 'DESC');
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ){
					setup_postdata( $post );
					$id = $post->ID;
					$contViews=get_post_meta($id,'_contViews');
					update_post_meta($id, '_contWpFb', getCoutCommentsWpFb($id));
					$contWpFb=get_post_meta($id,'_contWpFb');
			?>

 	 		<div class="item_ult_not">
 	 			<div class="item_ult_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/sim_ultimas_not.png)"></div>
 	 			<div class="item_ult_text">
 	 				<p class="item_ult_text_chapeu"><a href="<?= get_post_permalink(); ?>"><?= get_the_title($id) ?></a></p>
 	 				<a href="<?= get_post_permalink(); ?>"><p class="item_ult_text_titulo"><?= get_field('sutia_da_noticia')?></p></a>
 	 				<p class="item_ult_text_subtitulo"><?= get_field('resumo_da_noticia')?></p>
 	 				<p class="item_ult_text_data">
						 <span class="data_ult_not"><?= get_the_date('d/m/Y'); ?></span>
						 <span class="hora_ult_not"><i class="fa fa-clock-o" aria-hidden="true"></i><?= get_the_date('H:i'); ?></span>
						 <span class="hora_ult_not">Visualizações: <?= $contViews[0] ?></span><br />
						 <span class="hora_ult_not">Comentários: <?= $contWpFb[0] ?></span>
					</p>
 	 			</div>
 	 		</div>

 	 		<?php
 	 			}
 	 		 ?>
 	 	</div>

		<h1 class="ultimas_noticias_titulo">+ Lidas no Dia</h1>

 	 	<div class="all_ult_not">
			<?php
				$cont=1;
				$args = array( 'post_type' => 'post', 'posts_per_page'=>5, 'meta_key'=>'_contViews','orderby' => 'meta_value_num date','order'=> 'DESC');
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ){
					setup_postdata( $post );
					$id = $post->ID;
					$contViews=get_post_meta($id,'_contViews');
					$contWpFb=get_post_meta($id,'_contWpFb');
			?>

 	 		<div class="item_ult_not">
 	 			<div class="item_ult_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/sim_ultimas_not.png)"></div>
 	 			<div class="item_ult_text">
 	 				<p class="item_ult_text_chapeu"><a href="<?= get_post_permalink(); ?>"><?= get_the_title($id) ?></a></p>
 	 				<a href="<?= get_post_permalink(); ?>"><p class="item_ult_text_titulo"><?= get_field('sutia_da_noticia')?></p></a>
 	 				<p class="item_ult_text_subtitulo"><?= get_field('resumo_da_noticia')?></p>
 	 				<p class="item_ult_text_data">
						<span class="data_ult_not"><?= get_the_date('d/m/Y'); ?></span>
						<span class="hora_ult_not"><i class="fa fa-clock-o" aria-hidden="true"></i><?= get_the_date('H:i'); ?></span>
						<span class="hora_ult_not">Visualizações: <?= $contViews[0] ?></span><br />
						<span class="hora_ult_not">Comentários: <?= $contWpFb[0] ?></span>
					</p>
 	 			</div>
 	 		</div>

 	 		<?php
 	 			}
 	 		 ?>
 	 	</div>

		<h1 class="ultimas_noticias_titulo">+ Comentadas no Dia</h1>

		<div class="all_ult_not">
			<?php
				$cont=1;
				$args = array( 'post_type' => 'post', 'posts_per_page'=>5, 'meta_key'=>'_contWpFb','orderby' => 'meta_value_num date','order'=> 'DESC');
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ){
					setup_postdata( $post );
					$id = $post->ID;
					$contViews=get_post_meta($id,'_contViews');
					$contWpFb=get_post_meta($id,'_contWpFb');
			?>

 	 		<div class="item_ult_not">
 	 			<div class="item_ult_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/sim_ultimas_not.png)"></div>
 	 			<div class="item_ult_text">
 	 				<p class="item_ult_text_chapeu"><a href="<?= get_post_permalink(); ?>"><?= get_the_title($id) ?></a></p>
 	 				<a href="<?= get_post_permalink(); ?>"><p class="item_ult_text_titulo"><?= get_field('sutia_da_noticia')?></p></a>
 	 				<p class="item_ult_text_subtitulo"><?= get_field('resumo_da_noticia')?></p>
 	 				<p class="item_ult_text_data">
						<span class="data_ult_not"><?= get_the_date('d/m/Y'); ?></span>
						<span class="hora_ult_not"><i class="fa fa-clock-o" aria-hidden="true"></i><?= get_the_date('H:i'); ?></span>
						<span class="hora_ult_not">Comentários: <?= $contWpFb[0] ?></span><br />
						<span class="hora_ult_not">Visualizações: <?= $contViews[0] ?></span>
					</p>
 	 			</div>
 	 		</div>

 	 		<?php
 	 			}
 	 		 ?>
 	 	</div>

 	 </div>

 	</div>

 </section>

 <section id="recomendamos_noticias">
 	<div class="container box_tit_recn">
 		<h1 class="tit_recn_noticias">recomendamos</h1>
 	</div>

 	<div class="container all_rec_not">

 		<div class="recn_box">
 			<div class="item_recn">
 				<div class="item_recn_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
 				<div class="item_recn_text">
 					<p class="item_recn_titulo">Lorem ipsum.</p>
 					<p class="item_recn_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
 				</div>
 			</div>
  			<div class="item_recn">
 				<div class="item_recn_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
 				<div class="item_recn_text">
 					<p class="item_recn_titulo">Lorem ipsum.</p>
 					<p class="item_recn_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
 				</div>
 			</div>
 		</div>

 		<div class="recn_box">
 			<div class="item_recn">
 				<div class="item_recn_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
 				<div class="item_recn_text">
 					<p class="item_recn_titulo">Lorem ipsum.</p>
 					<p class="item_recn_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
 				</div>
 			</div>
  			<div class="item_recn">
 				<div class="item_recn_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
 				<div class="item_recn_text">
 					<p class="item_recn_titulo">Lorem ipsum.</p>
 					<p class="item_recn_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
 				</div>
 			</div>
 		</div>

 		<div class="recn_box">
 			<div class="item_recn">
 				<div class="item_recn_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
 				<div class="item_recn_text">
 					<p class="item_recn_titulo">Lorem ipsum.</p>
 					<p class="item_recn_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
 				</div>
 			</div>
  			<div class="item_recn">
 				<div class="item_recn_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
 				<div class="item_recn_text">
 					<p class="item_recn_titulo">Lorem ipsum.</p>
 					<p class="item_recn_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
 				</div>
 			</div>
 		</div>

 		<div class="recn_box">
 			<div class="item_recn">
 				<div class="item_recn_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
 				<div class="item_recn_text">
 					<p class="item_recn_titulo">Lorem ipsum.</p>
 					<p class="item_recn_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
 				</div>
 			</div>
  			<div class="item_recn">
 				<div class="item_recn_img" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
 				<div class="item_recn_text">
 					<p class="item_recn_titulo">Lorem ipsum.</p>
 					<p class="item_recn_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
 				</div>
 			</div>
 		</div>

 	</div>
 </section>



 <section id="comentarios_noticias">
 	<div class="container box_coments_not">
 		<h1 class="tit_coments_noticias">comentários</h1>

 		<p class="regras_coments">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

 		<div class="fb-comments fb_not_coments" expr:data-href="<?php the_permalink() ?>" data-num-posts="10" data-width="100%"></div>
 	</div>
 </section>




<?php
	get_footer();
 ?>
