<?php
			$aux=FALSE;
			$args = array(
					'post_type' => 'tvnoar',
					'numberposts' => 1000,
					'orderby' => 'date',
					'order' => 'DESC'
			);
			$myposts_post = get_posts( $args );
			foreach ( $myposts_post as $post_post ){
					setup_postdata( $post_post );
					$id = $post_post->ID;
					$titulo = get_the_title($id);
					$link_do_youtube = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", get_field('link_do_youtube',$id));
					if(get_field('listar_video',$id)||get_field('video_em_destaque',$id)){
?>
					<div class="all_coluna2_principal">
							<h4 class="titulo_colula2_principal">tv no ar</h4>
							<div class="video_tvnoar">
								<iframe width="100%" height="170" src="<?= $link_do_youtube ?>" frameborder="0" allowfullscreen></iframe>
							</div>
								<p class="titulo_tvnoar"><a href=""><?= $titulo ?></a></p>
								<img class="ico_tvnoar" src="<?php bloginfo('template_url') ?>/imgs/painelleitorico.png"><p class="desc_tvnoar"><a href="">Entrega CNH no mesmo dia da emissão no mesmo dia da emissão</a></p>
								<img class="ico_tvnoar" src="<?php bloginfo('template_url') ?>/imgs/painelleitorico.png"><p class="desc_tvnoar"><a href="">Entrega CNH no mesmo dia da emissão no mesmo dia da emissão</a></p>
					</div>
			<?php
						$aux=TRUE;
						break;
			 		}
 	 		}
		 if(!$aux){
			 $args = array(
					 'post_type' => 'tvnoar',
					 'numberposts' => 1,
					 'orderby' => 'date',
					 'order' => 'DESC'
			 );
			 $myposts_post = get_posts( $args );
			 foreach ( $myposts_post as $post_post ){
					 setup_postdata( $post_post );
					 $id = $post_post->ID;
					 $titulo = get_the_title($id);
					 $link_do_youtube = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", get_field('link_do_youtube',$id));
					 if(get_field('listar_video',$id)||get_field('video_em_destaque',$id)){
					 ?>
					 <div class="all_coluna2_principal">
							 <h4 class="titulo_colula2_principal">tv no ar</h4>
							 <div class="video_tvnoar">
								 <iframe width="100%" height="170" src="<?= $link_do_youtube ?>" frameborder="0" allowfullscreen></iframe>
							 </div>
								 <p class="titulo_tvnoar"><a href=""><?= $titulo ?></a></p>
								 <img class="ico_tvnoar" src="<?php bloginfo('template_url') ?>/imgs/painelleitorico.png"><p class="desc_tvnoar"><a href="">Entrega CNH no mesmo dia da emissão no mesmo dia da emissão</a></p>
								 <img class="ico_tvnoar" src="<?php bloginfo('template_url') ?>/imgs/painelleitorico.png"><p class="desc_tvnoar"><a href="">Entrega CNH no mesmo dia da emissão no mesmo dia da emissão</a></p>
					 </div>
					 <?php
				 }
			}
		}
?>
