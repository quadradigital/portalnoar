<section id="mais_lidas">
	<div class="container">

		<div class="lidas_comentadas">
			<div class="lidas_box">
					<?php
					//abaixo eu pego uma lista de notícias que estão marcadas para não serem exibidas
					//e armazeno o ID da notícia em uma array, pra excluir depois.
					$args = array(
												'post_type' => 'post',
												'posts_per_page'=>500,
												'meta_key'=>'_contViews',
												'orderby' => 'meta_value_num',
												'order'=> 'DESC',
					);
					$posts = get_posts( $args );
					foreach ( $posts as $post ){
						setup_postdata( $post );
						$id = $post->ID;
						if(get_field('não_listar_essa_noticia',$id)){
							$excluir_ids[]=$id;
						}
					}
					$page = get_page_by_title('Capa principal - A página principal ( index ) do portal');
					$id = $page->ID;
					$periodicidade=get_field('lidas_comentadas',$id);
					switch ($periodicidade) {
    				case "Dia"://os posts mais vistos que foram postados hoje
								$args = array(
															'post_type' => 'post',
															'posts_per_page'=>5,
															'meta_key'=>'_contViews',
															'orderby' => 'meta_value_num',
															'order'=> 'DESC',
															'post__not_in' => $excluir_ids,//excluindo as notícias que não devem ser listadas
															'date_query' => array(
																										array(
																													'year'  => date( 'Y' ),
																													'month' => date( 'n' ),
																													'day'   => date( 'j' ),
																											),
																									),
														);
								$lidas='+ Lidas no '.$periodicidade;
        				break;
    				case "Semana"://os posts mais vistos que foram postados na semana
								$args = array(
															'post_type' => 'post',
															'posts_per_page'=>5,
															'meta_key'=>'_contViews',
															'orderby' => 'meta_value_num',
															'order'=> 'DESC',
															'post__not_in' => $excluir_ids,
															'date_query' => array(
																										array(
																													'year' => date( 'Y' ),
																													'week' => date( 'W' ),
																											),
																									),
														);
								$lidas='+ Lidas na '.$periodicidade;
								break;
    				case "Mes"://os posts mais vistos que foram postados no mês
								$args = array(
															'post_type' => 'post',
															'posts_per_page'=>5,
															'meta_key'=>'_contViews',
															'orderby' => 'meta_value_num',
															'order'=> 'DESC',
															'post__not_in' => $excluir_ids,
															'date_query' => array(
																										array(
																													'year'  => date( 'Y' ),
																													'month' => date( 'n' ),
																											),
																									),
														);
								$lidas='+ Lidas no '.$periodicidade;
		        		break;
						case "Ano"://os posts mais vistos que foram postados no ano
								$args = array(
															'post_type' => 'post',
															'posts_per_page'=>5,
															'meta_key'=>'_contViews',
															'orderby' => 'meta_value_num',
															'order'=> 'DESC',
															'post__not_in' => $excluir_ids,
															'date_query' => array(
																										array(
																													'year' => date( 'Y' ),
																											),
																									),
														);
								$lidas='+ Lidas no '.$periodicidade;
								break;
					}
					?>
				<h1 class="lidas_comentadas_titulo"><?=$lidas?></h1>
				<div class="posts_mais_lc">
					<?php
					$cont=1;
					$query = new WP_Query( $args );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) : $query->the_post();
							$contViews=get_post_meta(get_the_ID(),'_contViews');
							update_post_meta(get_the_ID(), '_contWpFb', getCoutCommentsWpFb(get_the_ID()));
							$contWpFb=get_post_meta(get_the_ID(),'_contWpFb');
					?>
					<div class="item_post_lc">
						<p class="num_post_lc"><?= $cont?></p>
						<div class="item_post_text_lc">
							<a href="<?= get_post_permalink(get_the_ID()); ?>"><p class="titulo_post_lc"><?= get_the_title(get_the_ID()) ?></p></a>
							<p class="desc_post_lc"><?= cutText(get_the_excerpt(get_the_ID()),100) ?></p>
							<p class="desc_post_lc">Visualizações: <span><?= $contViews[0] ?></span></p>
							<p class="desc_post_lc">Comentários: <span><?= $contWpFb[0] ?></span></p>
							<p class="desc_post_lc"><span><?= get_the_date('j \d\e F \d\e Y \à\s H:i:s'); ?></span></p>
						</div>
					</div>
					<?php
						$cont+=1;
					endwhile;
				endif;
				?>
				</div>


			</div>
			<div class="lidas_box">
				<?php
							switch ($periodicidade) {
								case "Dia"://os posts mais comentados que foram postados hoje
										$args = array(
																	'post_type' => 'post',
																	'posts_per_page'=>5,
																	'meta_key'=>'_contWpFb',
																	'orderby' => 'meta_value_num',
																	'order'=> 'DESC',
																	'post__not_in' => $excluir_ids,//excluindo as notícias que não devem ser listadas
																	'date_query' => array(
																												array(
																															'year'  => date( 'Y' ),
																															'month' => date( 'n' ),
																															'day'   => date( 'j' ),
																													),
																											),
																);
										$comentadas='+ Comentadas no '.$periodicidade;
										break;
								case "Semana"://os posts mais comentados que foram postados na semana
										$args = array(
																	'post_type' => 'post',
																	'posts_per_page'=>5,
																	'meta_key'=>'_contWpFb',
																	'orderby' => 'meta_value_num',
																	'order'=> 'DESC',
																	'post__not_in' => $excluir_ids,
																	'date_query' => array(
																												array(
																															'year' => date( 'Y' ),
																															'week' => date( 'W' ),
																													),
																											),
																);
										$comentadas='+ Comentadas na '.$periodicidade;
										break;
								case "Mes"://os posts mais comentados que foram postados no mês
										$args = array(
																	'post_type' => 'post',
																	'posts_per_page'=>5,
																	'meta_key'=>'_contWpFb',
																	'orderby' => 'meta_value_num',
																	'order'=> 'DESC',
																	'post__not_in' => $excluir_ids,
																	'date_query' => array(
																												array(
																															'year'  => date( 'Y' ),
																															'month' => date( 'n' ),
																													),
																											),
																);
										$comentadas='+ Comentadas no '.$periodicidade;
										break;
								case "Ano"://os posts mais comentados que foram postados no ano
										$args = array(
																	'post_type' => 'post',
																	'posts_per_page'=>5,
																	'meta_key'=>'_contWpFb',
																	'orderby' => 'meta_value_num',
																	'order'=> 'DESC',
																	'post__not_in' => $excluir_ids,
																	'date_query' => array(
																												array(
																															'year' => date( 'Y' ),
																													),
																											),
																);
										$comentadas='+ Comentadas no '.$periodicidade;
										break;
							}
				 ?>
				<h1 class="lidas_comentadas_titulo"><?=$comentadas?></h1>
				<div class="posts_mais_lc">
					<?php
						$cont=1;
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) : $query->the_post();
								$contViews=get_post_meta(get_the_ID(),'_contViews');
								$contWpFb=get_post_meta(get_the_ID(),'_contWpFb');
					?>
					<div class="item_post_lc">
						<p class="num_post_lc"><?= $cont?></p>
						<div class="item_post_text_lc">
							<a href="<?= get_post_permalink(get_the_ID()); ?>"><p class="titulo_post_lc"><?= get_the_title(get_the_ID()) ?></p></a>
							<p class="desc_post_lc"><?= cutText(get_the_excerpt(get_the_ID()),100) ?></p>
							<p class="desc_post_lc">Comentários: <span><?= $contWpFb[0] ?></span></p>
							<p class="desc_post_lc">Visualizações: <span><?= $contViews[0] ?></span></p>
							<p class="desc_post_lc"><span><?= get_the_date('j \d\e F \d\e Y \à\s H:i:s'); ?></span></p>
						</div>
					</div>
					<?php
						$cont+=1;
					endwhile;
				endif;
				?>
				</div>
			</div>
		</div>

		<div class="voce_viu">
			<h1 class="voce_viu_titulo">Você viu</h1>

			<div class="all_box_voce">
				<div class="item_voce_viu item_voce_viu_left">
					<div class="img_vv" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
					</div>

					<div class="cont_voce_viu">
						<a href=""><p class="tit_voce_viu">TVs poderão decidir</p></a>
						<p class="desc_voce_viu">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>

				<div class="item_voce_viu item_voce_viu_right">
					<div class="cont_voce_viu">
						<a href=""><p class="tit_voce_viu">TVs poderão decidir</p></a>
						<p class="desc_voce_viu">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="img_vv" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
					</div>

				</div>

				<div class="item_voce_viu item_voce_viu_left">
					<div class="img_vv" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
					</div>

					<div class="cont_voce_viu">
						<a href=""><p class="tit_voce_viu">TVs poderão decidir</p></a>
						<p class="desc_voce_viu">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>

			</div>

			<?php
				for ($i=0; $i < 3; $i++) {
			 ?>

				<div class="voce_viu_subitem">
						<div class="voce_viu_subitem_img">
							<img src="<?php bloginfo('template_url') ?>/imgs/voce_viu_simb.png">
						</div>
						<div class="voce_viu_subitem_texto">
							<a href=""><p class="voce_viu_subitem_titulo">Foragido do sistema prisional</p></a>
							<p class="voce_viu_subitem_desc">Foragido do sistema prisional</p>
						</div>
				</div>

			<?php
				}
			?>

		</div>

	</div>
</section>
