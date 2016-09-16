<?php
/**
 * The main template file
 *
 * @package portalnoar
 * @subpackage portalnoar
 * @since Portal no AR 1.0
 * Author: Beto Canuto [ Web Design / beto@quadradigital.com.br ], Douglas Boza [ Front-end / douglas@quadradigital.com.br ], Ed Moura [ Back-end / http://thechacal.github.io/ ]
 */
?>
<!--start  HEADER  -->
<?php get_header(); ?>
<!--end  HEADER  -->

<script type="text/javascript">
	index = true;
</script>

<section id="principal">
	<div class="container">

		<div class="principal_box1">
			<div class="noticia_principal">
				<!-- editoria, chapeu da notícia ou supertag ( a supertag é um campo que ela preenche no painel, se
				o usuário clicar na supertag, carrega-se todas as notícias dessa supertag )-->

				<!-- fim -->
				<?php
				$page = get_page_by_title('Capa principal');
				$id = $page->ID;
				$posts=get_field('manchete-seca',$id);
				if( $posts ):
					foreach( $posts as $post ):
						setup_postdata($post);
				?>
				<h4 class="np_chapeu" ><?= get_field('chapeu_da_noticia',$id); ?></h4>
				<a class="np_titulo" href="<?php the_permalink($id); ?>"><h1><?= the_title(); ?></h1></a>
				<p class="np_descricao"><?= get_field('sutia_da_noticia',$id); ?></p>

				<?php
					endforeach;
					wp_reset_postdata();
				endif;
				?>
				<div class="np_subs_box">
					<a class="marcador_mais" href=""><p>Servidores públicos do RN vão ter descontos em academias da Grande Natal</p></a>
					<a class="marcador_mais" href=""><p>Servidores públicos do RN vão ter descontos em academias da Grande Natal</p></a>
					<a class="marcador_mais" href=""><p>Servidores públicos do RN vão ter descontos em academias da Grande Natal</p></a>
				</div>

			</div>

			<div class="coluna1_p">
				<div class="coluna1_p_not_hori">
					<p class="colun1_p_chapeu">chapéu da notícia</p>
					<h3><a href="">Prefeitura do Natal anula concurso da Secretaria de Saúde</a></h3>
					<img src="<?php bloginfo('template_url') ?>/imgs/img_not1.jpg">
					<p>Avenida Capitão Mor Gouveia passa a funcionar no sistema binário</p>
				</div>

				<a class="marcador_mais coluna1_p_noticia_rel" href=""><p>Servidores públicos do RN vão ter descontos em academias da Grande Natal</p></a>

				<div class="coluna1_p_not_hori">
					<p class="colun1_p_chapeu">chapéu da notícia</p>
					<h3><a href="">Imprensa internacional diz que impeachment de Dilma esconde problemas do Brasil</a></h3>
				</div>

				<a class="marcador_mais coluna1_p_noticia_rel" href=""><p>Servidores públicos do RN vão ter descontos em academias da Grande Natal</p></a>


				<div class="coluna1_p_3col_all">

					<div class="coluna1_p_box">
						<div style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
						<p><a href="">Bancários do RN aprovam greve em todo o país</a></p>
					</div>
					<div class="coluna1_p_box">
						<div style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
						<p><a href="">Bancários do RN aprovam greve em todo o país</a></p>
					</div>
					<div class="coluna1_p_box">
						<div style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)"></div>
						<p><a href="">Bancários do RN aprovam greve em todo o país</a></p>
					</div>

				</div>




			</div>

			<div class="slideshow_p">

				<div id="slideshow_p_all">

					<div class="slideshow_p_item">
						<div class="slideshow_p_item_img" style="background-image:url('<?php bloginfo('template_url') ?>/imgs/img_not1.jpg')"></div>
						<h3 class="slideshow_p_item_title"><a href="">Venezuela congela relações com Brasil após impeachment e Itamaraty reage</a></h3>
						<p class="slideshow_p_item_desc">Governo venezuelano condenou o que chamou de “golpe de Estado parlamentar”, expressou solidariedade à ex-presidente Dilma e às “milhões de mulheres e homens” que a elegeram</p>
					</div>
					<div class="slideshow_p_item">
						<div class="slideshow_p_item_img" style="background-image:url('<?php bloginfo('template_url') ?>/imgs/img_not1.jpg')"></div>
						<h3 class="slideshow_p_item_title"><a href="">Venezuela congela relações com Brasil após impeachment e Itamaraty reage</a></h3>
						<p class="slideshow_p_item_desc">Governo venezuelano condenou o que chamou de “golpe de Estado parlamentar”, expressou solidariedade à ex-presidente Dilma e às “milhões de mulheres e homens” que a elegeram</p>
					</div>
					<div class="slideshow_p_item">
						<div class="slideshow_p_item_img" style="background-image:url('<?php bloginfo('template_url') ?>/imgs/img_not1.jpg')"></div>
						<h3 class="slideshow_p_item_title"><a href="">Venezuela congela relações com Brasil após impeachment e Itamaraty reage</a></h3>
						<p class="slideshow_p_item_desc">Governo venezuelano condenou o que chamou de “golpe de Estado parlamentar”, expressou solidariedade à ex-presidente Dilma e às “milhões de mulheres e homens” que a elegeram</p>
					</div>
					<div class="slideshow_p_item">
						<div class="slideshow_p_item_img" style="background-image:url('<?php bloginfo('template_url') ?>/imgs/img_not1.jpg')"></div>
						<h3 class="slideshow_p_item_title"><a href="">Venezuela congela relações com Brasil após impeachment e Itamaraty reage</a></h3>
						<p class="slideshow_p_item_desc">Governo venezuelano condenou o que chamou de “golpe de Estado parlamentar”, expressou solidariedade à ex-presidente Dilma e às “milhões de mulheres e homens” que a elegeram</p>
					</div>
					<div class="slideshow_p_item">
						<div class="slideshow_p_item_img" style="background-image:url('<?php bloginfo('template_url') ?>/imgs/img_not1.jpg')"></div>
						<h3 class="slideshow_p_item_title"><a href="">Venezuela congela relações com Brasil após impeachment e Itamaraty reage</a></h3>
						<p class="slideshow_p_item_desc">Governo venezuelano condenou o que chamou de “golpe de Estado parlamentar”, expressou solidariedade à ex-presidente Dilma e às “milhões de mulheres e homens” que a elegeram</p>
					</div>


				</div>

				<div class="slideshow_p_const">

					<div id="slideshow_p_prev">
						<img src="<?php bloginfo('template_url') ?>/imgs/slideshow_p_prev.png">
					</div>

					<div id="slideshow_p_next">
						<img src="<?php bloginfo('template_url') ?>/imgs/slideshow_p_next.png">
					</div>

				</div>


			</div>

		</div>

		<div class="principal_box2">
				<?php
					include('includes/painel_leitor.php');
				 ?>

				 <div class="esp_box_wid"></div>
				 <?php
				 	include('includes/tvnoar.php');
				  ?>

				  <div class="esp_box_wid"></div>
				 <?php
				 	include('includes/editorial.php');
				  ?>

				  <div class="esp_box_wid"></div>
				 <?php
				 //	include('includes/plantaoredacao.php');
				  ?>

				  <div class="esp_box_wid"></div>
				 <?php
				 //	include('includes/opiniao.php');
				  ?>

		</div>


	</div>
</section>



<section id="colunistas_blogs">
	<div class="container">

		<div class="cb_box">
			<h1>colunistas</h1>

			<div class="cb_itens_box">

				<?php
					for ($i=0; $i < 4; $i++) {
				 ?>

				<div class="item_cb">
					<div style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)" class="item_cb_img">

					</div>

					<div class="item_cb_text">
						<p class="item_cb_text_titulo">Lorem ipsum</p>
						<p class="item_cb_text_desc"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
					</div>
				</div>

				<?php
					}
				 ?>

			</div>


		</div>

		<div class="cb_box">
			<h1>blogueiros</h1>

			<div class="cb_itens_box">

				<?php
					for ($i=0; $i < 4; $i++) {
				 ?>

				<div class="item_cb">
					<div style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)" class="item_cb_img">

					</div>

					<div class="item_cb_text">
						<p class="item_cb_text_titulo">Lorem ipsum</p>
						<p class="item_cb_text_desc"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></p>
					</div>
				</div>

				<?php
					}
				 ?>

			</div>

		</div>

	</div>
</section>


<section id="gentear">
	<div class="container">

		<div class="gentear_slide">
			<h1 class="titulo_gentear">gente no ar</h1>

			<div id="gentear_all_slider">

				<!-- inicio item -->
				<div class="gentenoar_item">
					<div class="bloco_gentear ga_l30xa100" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">

						<div class="gentear_desc_item">
							<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
							<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
							<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
						</div>

					</div>

					<div class="gentear_box30" >
						<div class="bloco_gentear ga_l20xa70" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">

							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							</div>

						</div>

						<div class="bloco_gentear ga_l20xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">

						</div>
					</div>
					<div class="gentear_box20">

						<div class="bloco_gentear ga_l30xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>
						<div class="bloco_gentear ga_l30xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>
						<div class="bloco_gentear ga_l30xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>

					</div>

				</div>
				<!-- fim item -->

				<!-- inicio item -->
				<div class="gentenoar_item">
					<div class="bloco_gentear ga_l30xa100" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
						<div class="gentear_desc_item">
							<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
							<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
							<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
						</div>
					</div>

					<div class="gentear_box20">

						<div class="bloco_gentear ga_l30xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>
						<div class="bloco_gentear ga_l30xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>
						<div class="bloco_gentear ga_l30xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>

					</div>

					<div class="gentear_box30" >
						<div class="bloco_gentear ga_l20xa70" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>

						<div class="bloco_gentear ga_l20xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>
					</div>

				</div>
				<!-- fim item -->

				<!-- inicio item -->
				<div class="gentenoar_item">
					<div class="gentear_box30" >
						<div class="bloco_gentear ga_l20xa70" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>

						<div class="bloco_gentear ga_l20xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>
					</div>


					<div class="gentear_box20">

						<div class="bloco_gentear ga_l30xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>
						<div class="bloco_gentear ga_l30xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>
						<div class="bloco_gentear ga_l30xa30" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
							<div class="gentear_desc_item">
								<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
								<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
								<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
							</div>
						</div>

					</div>

					<div class="bloco_gentear ga_l30xa100" style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)">
						<div class="gentear_desc_item">
							<p class="gentear_desc_item_titulo">LOREM IPSUM</p>
							<p class="gentear_desc_item_comts"><i class="fa fa-comment-o" aria-hidden="true"></i> 20</p>
							<p class="gentear_desc_item_desc"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p></a>
						</div>
					</div>

				</div>
				<!-- fim item -->

			</div>

				<div class="gentear_slide_p_const">

					<div id="gentear_slide_p_prev">
						<img src="<?php bloginfo('template_url') ?>/imgs/gentear_prev.png">
					</div>

					<div id="gentear_slide_p_next">
						<img src="<?php bloginfo('template_url') ?>/imgs/gentear_next.png">
					</div>

				</div>

		</div>

		<div class="gentear_ultimas">
			<p class="titulo_gentear_ultimas">top celebridades</p>

			<div class="gentear_all_ultimas">
				<?php
					for ($i=0; $i < 5; $i++) {
				 ?>
				<div class="gentear_ultimas_item">
					<div class="gentear_ultimas_item_img">
						<img src="<?php bloginfo('template_url') ?>/imgs/marc_gentear.png">
					</div>
					<div class="gentear_ultimas_item_text">
						<a href=""><p class="gentear_ultimas_item_titulo">Foragido do sistema prisional</p></a>
						<p class="gentear_ultimas_item_desc">Foragido do sistema prisional</p>
					</div>
				</div>
				<?php
					}
				 ?>
			</div>
		</div>

	</div>
</section>

<section id="editoriais">
	<div class="container">
		<div class="editorial_all">

			<div class="item_editorial">
				<p class="titulo_editorialin">esporte no ar</p>
				<?php
					for ($i=0; $i < 5; $i++) {
				 ?>

				<div class="editorial_subitem">
						<div class="editorial_subitem_img">
							<img src="<?php bloginfo('template_url') ?>/imgs/marc_tvnoar.png">
						</div>
						<div class="editorial_subitem_texto">
							<a href=""><p class="editorial_subitem_titulo">Foragido do sistema prisional</p></a>
							<p class="editorial_subitem_desc">Foragido do sistema prisional</p>
						</div>
				</div>
				<?php
					}
				 ?>
			</div>

			<div class="item_editorial">
				<p class="titulo_editorialin">esporte no ar</p>
				<?php
					for ($i=0; $i < 5; $i++) {
				 ?>

				<div class="editorial_subitem">
						<div class="editorial_subitem_img">
							<img src="<?php bloginfo('template_url') ?>/imgs/marc_tvnoar.png">
						</div>
						<div class="editorial_subitem_texto">
							<a href=""><p class="editorial_subitem_titulo">Foragido do sistema prisional</p></a>
							<p class="editorial_subitem_desc">Foragido do sistema prisional</p>
						</div>
				</div>
				<?php
					}
				 ?>
			</div>

			<div class="item_editorial">
				<p class="titulo_editorialin">esporte no ar</p>
				<?php
					for ($i=0; $i < 5; $i++) {
				 ?>

				<div class="editorial_subitem">
						<div class="editorial_subitem_img">
							<img src="<?php bloginfo('template_url') ?>/imgs/marc_tvnoar.png">
						</div>
						<div class="editorial_subitem_texto">
							<a href=""><p class="editorial_subitem_titulo">Foragido do sistema prisional</p></a>
							<p class="editorial_subitem_desc">Foragido do sistema prisional</p>
						</div>
				</div>
				<?php
					}
				 ?>
			</div>


		</div>


	</div>

</section>

<section id="agendacultural">
	<div class="container">
		<h1 class="titulo_p_agenda">agenda cultural</h1>
		<div class="agenda_box_all">

			<div class="agenda_box">

				<div class="agenda_subitem">
					<div class="agenda_subitem_img">
						<img src="<?php bloginfo('template_url') ?>/imgs/marc_agenda.png">
					</div>
					<div class="agenda_subitem_texto">
						<a href=""><p class="agenda_subitem_titulo">Foragido do sistema prisional</p></a>
						<p class="agenda_subitem_desc">Foragido do sistema prisional</p>
					</div>
				</div>
				<div class="agenda_subitem">
					<div class="agenda_subitem_img">
						<img src="<?php bloginfo('template_url') ?>/imgs/marc_agenda.png">
					</div>
					<div class="agenda_subitem_texto">
						<a href=""><p class="agenda_subitem_titulo">Foragido do sistema prisional</p></a>
						<p class="agenda_subitem_desc">Foragido do sistema prisional</p>
					</div>
				</div>
				<div class="agenda_subitem">
					<div class="agenda_subitem_img">
						<img src="<?php bloginfo('template_url') ?>/imgs/marc_agenda.png">
					</div>
					<div class="agenda_subitem_texto">
						<a href=""><p class="agenda_subitem_titulo">Foragido do sistema prisional</p></a>
						<p class="agenda_subitem_desc">Foragido do sistema prisional</p>
					</div>
				</div>

			</div>

			<div class="agenda_box">

				<div class="agenda_box_img" style="background-image: url('<?php bloginfo('template_url') ?>/imgs/img_not1.jpg')"></div>
				<div class="agenda_box_text">
					<p class="data_agenda">06/09</p>
					<a href=""><p class="titulo_agenda">Lorem ipsum dolor.</p></a>
					<p class="desc_agenda">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
				</div>

			</div>
			<div class="agenda_box">

				<div class="agenda_box_img" style="background-image: url('<?php bloginfo('template_url') ?>/imgs/img_not1.jpg')"></div>
				<div class="agenda_box_text">
					<p class="data_agenda">06/09</p>
					<a href=""><p class="titulo_agenda">Lorem ipsum dolor.</p></a>
					<p class="desc_agenda">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
				</div>

			</div>

		</div>
	</div>

</section>

<section id="tvnoarin">
	<div class="container">
			<h1 class="tvnoarin_titulo">tv no ar</h1>
			<div class="tvnoar_boxall">
				<?php
							$args = array(
									'post_type' => 'tvnoar',
									'meta_key' => 'video_em_destaque',
									'orderby' => array( 'meta_value_num' => 'DESC', 'date' => 'DESC' ),
									'order' => 'DESC',
									'meta_query' => array(
																				'relation' => 'AND',
																				array(
																								'key'     => 'listar_video',
																								'value'   => true,
																								'compare' => '='
																				),
																				array(
																								'relation' => 'OR',
																								array(
																												'key'     => 'listar_video',
																												'value'   => true,
																												'compare' => '='
																								),
																								array(
																												'key'     => 'video_em_destaque',
																												'value'   => true,
																												'compare' => '='
																								),
																				),
																),
							);
							$query = new WP_Query( $args );
							if ( $query->have_posts() ) :
								while ( $query->have_posts() ) : $query->the_post();
									$excluir[]=get_the_ID();
									$titulo = get_the_title(get_the_ID());
									$link_do_youtube = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", get_field('link_do_youtube',get_the_ID()));
									?>
				<div class="tvnoarin_box1">
						<iframe width="100%" height="250" src="<?= $link_do_youtube ?>" frameborder="0" allowfullscreen></iframe>
						<p class="tvnoarin_box1_titulo"><?= $titulo ?></p>
				</div>
							<?php
									break;
								endwhile;
							endif;
							?>
					<div class="tvnoarin_box2">
						<?php
						$args = array(
								'post_type' => 'tvnoar',
								'posts_per_page' => 2,
								'post__not_in' => $excluir,
								'meta_key' => 'video_em_destaque',
								'orderby' => array( 'meta_value_num' => 'DESC', 'date' => 'DESC' ),
								'order' => 'DESC',
								'meta_query' => array(
																			'relation' => 'AND',
																			array(
																							'key'     => 'listar_video',
																							'value'   => true,
																							'compare' => '='
																			),
																			array(
																							'relation' => 'OR',
																							array(
																											'key'     => 'listar_video',
																											'value'   => true,
																											'compare' => '='
																							),
																							array(
																											'key'     => 'video_em_destaque',
																											'value'   => true,
																											'compare' => '='
																							),
																			),
															),
						);
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) : $query->the_post();
								$excluir[]=get_the_ID();
								$titulo = cutText(get_the_title(get_the_ID()),30);
								$descricao_do_video = cutText(get_field('descricao_do_video',get_the_ID()),30);
								$link_do_youtube = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", get_field('link_do_youtube',get_the_ID()));
						?>
								<div class="video_div_all">
										<div class="video_div_tvnoar_text">
											<p class="subtitulo_tvnoarin"><?= $titulo ?></p>
											<p class="subdesc_tvnoarin"><?= $descricao_do_video ?></p>
										</div>
										<div class="video_div_tvnoar_frame">
												<iframe width="100%" height="100" src="<?= $link_do_youtube ?>" frameborder="0" allowfullscreen></iframe>
										</div>
							 </div>
			<?php
							endwhile;
						endif;
			 ?>
							 <div class="tvnoarin_lista_posts">
								 <?php
								$args = array(
										'post_type' => 'tvnoar',
										'posts_per_page' => 2,
										'post__not_in' => $excluir,
										'meta_key' => 'video_em_destaque',
										'orderby' => array( 'meta_value_num' => 'DESC', 'date' => 'DESC' ),
										'order' => 'DESC',
										'meta_query' => array(
																					'relation' => 'AND',
																					array(
																									'key'     => 'listar_video',
																									'value'   => true,
																									'compare' => '='
																					),
																					array(
																									'relation' => 'OR',
																									array(
																													'key'     => 'listar_video',
																													'value'   => true,
																													'compare' => '='
																									),
																									array(
																													'key'     => 'video_em_destaque',
																													'value'   => true,
																													'compare' => '='
																									),
																					),
																	),
								);
								$query = new WP_Query( $args );
								if ( $query->have_posts() ) :
									while ( $query->have_posts() ) : $query->the_post();
										$titulo = cutText(get_the_title(get_the_ID()),25);
										$descricao_do_video = cutText(get_field('descricao_do_video',get_the_ID()),25);
										$link_do_youtube = str_replace("https://www.youtube.com/watch?v=", "https://www.youtube.com/embed/", get_field('link_do_youtube',get_the_ID()));
								?>

									 <div class="tvnoar_subitem">
											 <div class="tvnoar_subitem_img">
												 <img src="<?php bloginfo('template_url') ?>/imgs/marc_tvnoar.png">
											 </div>
											 <div class="tvnoar_subitem_texto">
												 <a href="<?= get_post_permalink(get_the_ID()); ?>"><p class="tvnoar_subitem_titulo"><?= $titulo ?></p></a>
												 <p class="tvnoar_subitem_desc"><?= $descricao_do_video ?></p>
											 </div>
									 </div>
									 <?php
						 							endwhile;
						 						endif;
						 			 ?>
							</div>

					</div>
			</div>
	</div>
</section>




<?php
	include('includes/mais_lidas_comentadas.php')

 ?>



<section id="galerianoar">
	<div class="container">

		<div class="gentenoar_titulos">
			<h1 class="galerianoar_titulo">galeria no ar</h1>
			<h1 class="contador_slide"><span class="slide_atual_gente">1</span> de <span class="slide_total_gente"></span></h1>
		</div>

		<div id="galerianoar_all">
			<div style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)" class="item_galerianoar">
				<p class="gentenoar_barra"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</a></p>
			</div>
			<div style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)" class="item_galerianoar">
				<p class="gentenoar_barra"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</a></p>
			</div>
			<div style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)" class="item_galerianoar">
				<p class="gentenoar_barra"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</a></p>
			</div>
			<div style="background-image:url(<?php bloginfo('template_url') ?>/imgs/img_not1.jpg)" class="item_galerianoar">
				<p class="gentenoar_barra"><a href="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</a></p>
			</div>

		</div>

		<div class="galerianoar_slide_p_const">

			<div id="galerianoar_slide_p_prev">
				<img src="<?php bloginfo('template_url') ?>/imgs/slideshow_p_prev.png">
			</div>

			<div id="galerianoar_slide_p_next">
				<img src="<?php bloginfo('template_url') ?>/imgs/slideshow_p_next.png">
			</div>

		</div>

	</div>
</section>




<!--start  FOOTER  -->
<?php get_footer(); ?>
<!--end  FOOTER  -->
