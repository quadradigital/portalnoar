<?php
/*
Funções Utilizadas no Tema do Portal no AR
Autor: Ed Moura [ Back-end / http://thechacal.github.io/ ]
*/
//error_reporting(0);

/* Função que altera a opção 'post' no menu para "notícias" */
function changePostLabel() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Notícias';
    $submenu['edit.php'][5][0] = 'Notícias';
    $submenu['edit.php'][10][0] = 'Adicionar Notícia';
}

function changePostObject() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Notícias';
    $labels->singular_name = 'Notícia';
    $labels->add_new = 'Adicionar Notícia';
    $labels->add_new_item = 'Adicionar Notícia';
    $labels->edit_item = 'Editar Notícia';
    $labels->new_item = 'Notícia';
    $labels->view_item = 'Ver Notícia';
    $labels->search_items = 'Buscar Notícias';
    $labels->not_found = 'Nenhuma Notícia Encontrada';
    $labels->not_found_in_trash = 'Nenhuma Notícia Encontrada no Lixo';
    $labels->all_items = 'Todos as Notícias';
    $labels->menu_name = 'Notícias';
    $labels->name_admin_bar = 'Notícias';
}

/* Função que cria a opção 'tv no ar' no menu com submenus */
function addTvNoAr() {
		$labels = array(
			'name' => _x('TV no AR', 'post type general name'),
			'singular_name' => _x('TV no AR', 'post type singular name'),
			'add_new' => _x('Adicionar Vídeo', 'Novo Vídeo'),
			'add_new_item' => __('Novo Vídeo'),
			'edit_item' => __('Editar Vídeo'),
			'new_item' => __('Novo Vídeo'),
			'view_item' => __('Ver Vídeo'),
			'search_items' => __('Procurar Vídeos'),
			'not_found' =>  __('Nenhum Vídeo Encontrado'),
			'not_found_in_trash' => __('Nenhum Vídeo Encontrado na Lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'TV no AR'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 5,
      'register_meta_box_cb' => 'tvnoar_meta_box',
			'supports' => array('title', 'author')
      );

register_post_type( 'tvnoar' , $args );
flush_rewrite_rules();
}

/* Função que cria a opção 'galeria no ar' no menu com submenus */
function addNoArGallery() {
		$labels = array(
			'name' => _x('Galeria no AR', 'post type general name'),
			'singular_name' => _x('Galeria no AR', 'post type singular name'),
			'add_new' => _x('Adicionar Imagem', 'Novo Imagem'),
			'add_new_item' => __('Nova Imagem'),
			'edit_item' => __('Editar Imagem'),
			'new_item' => __('Nova Imagem'),
			'view_item' => __('Ver Imagem'),
			'search_items' => __('Procurar Imagens'),
			'not_found' =>  __('Nenhuma Imagem Encontrada'),
			'not_found_in_trash' => __('Nenhuma Imagem Encontrada na Lixeira'),
			'parent_item_colon' => '',
			'menu_name' => 'Galeria no AR'
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'public_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => 5,
      'register_meta_box_cb' => 'galerianoar_meta_box',
			'supports' => array('title', 'author')
      );

register_post_type( 'galerianoar' , $args );
flush_rewrite_rules();
}
/* Função que limita o texto em um número X de caracteres */
function cutText($string,$number){
  if (strlen($string) > $number){
    $string = substr($string, 0, $number);
    $string = trim($string) . "...";
  }

  return $string;

}
/* Função que remove acentos em uma string, espaços em branco são substituídos por %20 ( YQL não aceita espaço em branco no SQL ) */
function getWithoutAccentsSpaces($string){
    $newString = preg_replace(array("/(á|à|ã|â|ä)/",
                                    "/(Á|À|Ã|Â|Ä)/",
                                      "/(é|è|ê|ë)/",
                                      "/(É|È|Ê|Ë)/",
                                      "/(í|ì|î|ï)/",
                                      "/(Í|Ì|Î|Ï)/",
                                    "/(ó|ò|õ|ô|ö)/",
                                    "/(Ó|Ò|Õ|Ô|Ö)/",
                                      "/(ú|ù|û|ü)/",
                                      "/(Ú|Ù|Û|Ü)/",
                                            "/(ñ)/",
                                            "/(Ñ)/",
                                            "/(ç)/",
                                            "/(Ç)/"),
                                            explode(" ","a A e E i I o O u U n N c C"),
                                            str_replace(" ","%20",$string));
    return $newString;
}

/* Função para tratar cookies, se ele não existir a função cria, se existir e for diferente da nova cidade selecionada no menu
 ele muda o cookie pra nova cidade selecionada, dessa forma sempre que o usuário acessar o site será carregado o clima/temo
 que ele escolheu anteriormente ( e ficou armazenado no cookie ) */
function getCookie($cidade){
    setcookie('cidadePadrao',str_replace("%20"," ",$cidade),time()+3600*24*30*12*1); // Tempo de vida do cookie: 1 ano
}

/* Função que pega a cotação atual de uma moeda no mercado financeiro ( Dollar, Euro )*/
function getQuotes(){

/* Faço a consulta no YQL ( Yahoo! Developer Network: https://developer.yahoo.com/yql/console/ ) passando a query:

  select * from yahoo.finance.xchange where pair in ("USDBRL,EURBRL")

  O YQL me retorna um XML.
  Pego esse XML e o transformo em um Array
  */
  $xml = @simplexml_load_file("https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.xchange%20where%20pair%20in%20(%22USDBRL%2CEURBRL%22)&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys");

  //Varre o Array nas tags com o nome "rate" somente, que é onde fica a moeda/cotação armazendo em outro array
  if(!empty($xml)){
  foreach($xml -> results -> rate as $rate){
    if($rate->Name="USD/BRL")
      $myarray[]['moeda'] = "DÓLAR";
    if($rate->Name="EUR/BRL")
      $myarray[]['moeda'] = "EURO";
    $myarray[]['cotacao'] = $rate->Rate;
  }

  return $myarray;
  }
}

/* Função que pega o tempo ( em graus celsius ) e a temperatura atual ( nublado, parcialmente nublado, etc ) de uma determinada cidade */
function getWeatherForecast($cidadePadrao){
  /* Faço a consulta no YQL ( Yahoo! Developer Network: https://developer.yahoo.com/yql/console/ ) passando a query:

  select wind from weather.forecast where woeid in (select woeid from geo.places(1) where text="recife, br")

  O YQL me retorna um JSON.
  Pego esse JSON e o transformo em um Array
  */
  $json_file = @file_get_contents("https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22".$cidadePadrao."%2C%20br%22)%20and%20u%3D%22c%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys");
  $json_str = json_decode($json_file, true);

  if(!empty($json_str)){
  $myarray['temperatura'] = $json_str["query"]["results"]["channel"]["item"]["condition"]["temp"];
  $myarray['tempo'] = $json_str["query"]["results"]["channel"]["item"]["condition"]["text"];

  return $myarray;
  }
}

/* Função que pega a quantidade de comentários feitos no WP no post X, a quantidade de comentários que foram feitos via plugin do FB no post X,
soma os dois e retorna o total */
function getCoutCommentsWpFb($id){

  //montando a url de consulta a API do FB, sem o token do APP você tem limites de consulta
  $url = 'https://graph.facebook.com/?ids='.get_permalink($id).'&access_token=247762908958034|iVsZnhPIK_HBBinWOJZqCZZRih0';
  $filecontent = @file_get_contents($url);
  $json_str = json_decode($filecontent, true);
  $fbCount = $json_str[get_permalink($id)]["share"]["comment_count"]; // pegando a quantidade de comentários FB em um post X
  $post = get_post($id);
  if(!$post){
    $wpCount = 0;
  }else{
    $wpCount = $post->comment_count;// pegando a quantidade de comentários WP em um post X
  }
  $realCount = $fbCount + $wpCount;

  return $realCount;
}

add_theme_support( 'post-thumbnails' );
add_action( 'admin_menu', 'changePostLabel' );
add_action( 'init', 'changePostObject' );
add_action( 'init', 'addTvNoAr');
add_action( 'init', 'addNoArGallery');
?>
