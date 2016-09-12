<section id="mais_lidas">
	<div class="container">

		<div class="lidas_comentadas">
			<div class="lidas_box">
				<h1 class="lidas_comentadas_titulo">+ Lidas no Dia</h1><!-- mensal,semanal,diario -->

				<div class="posts_mais_lc">

					<?php
						$cont=1;
						$args = array( 'post_type' => 'post', 'posts_per_page'=>5, 'meta_key'=>'_contViews','orderby' => 'meta_value_num date','order'=> 'DESC');
						$myposts = get_posts( $args );
						foreach ( $myposts as $post ){
							setup_postdata( $post );
							$id = $post->ID;
							$contViews=get_post_meta($id,'_contViews');
							update_post_meta($id, '_contWpFb', getCoutCommentsWpFb($id));
							$contWpFb=get_post_meta($id,'_contWpFb');
					?>
					<div class="item_post_lc">
						<p class="num_post_lc"><?= $cont?></p>
						<div class="item_post_text_lc">
							<a href="<?= get_post_permalink(); ?>"><p class="titulo_post_lc"><?= get_the_title($id) ?></p></a>
							<p class="desc_post_lc"><?= cutText(get_the_excerpt($id),100) ?></p>
							<p class="desc_post_lc">Visualizações: <span><?= $contViews[0] ?></span></p>
							<p class="desc_post_lc">Comentários: <span><?= $contWpFb[0] ?></span></p>
						</div>
					</div>
					<?php
					$cont+=1;
					}?>
				</div>


			</div>
			<div class="lidas_box">
				<h1 class="lidas_comentadas_titulo">+ Comentadas no Dia</h1>


				<div class="posts_mais_lc">

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
					<div class="item_post_lc">
						<p class="num_post_lc"><?= $cont?></p>
						<div class="item_post_text_lc">
							<a href="<?= get_post_permalink(); ?>"><p class="titulo_post_lc"><?= get_the_title($id) ?></p></a>
							<p class="desc_post_lc"><?= cutText(get_the_excerpt($id),100) ?></p>
							<p class="desc_post_lc">Comentários: <span><?= $contWpFb[0] ?></span></p>
							<p class="desc_post_lc">Visualizações: <span><?= $contViews[0] ?></span></p>
						</div>
					</div>
					<?php
						$cont+=1;
				 		}?>


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
