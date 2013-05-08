<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-BR"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <link type="image/x-icon" href="img/favicon.ico" rel="shortcut icon" />

  <title><?wp_title()?> - <? bloginfo('name') ?></title>

  <link href="<? bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/style.css">

  <?wp_head()?>

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


  <div id="topo">
  	<header>
  		<div id="barra-topo">
        <?wp_nav_menu(array(
          'theme_location'=>'principal',
          'container'=>'nav',
          'container_class'=>'center',
        ))?>
  		</div>
  		
		<div class="center">
			<a href="<?bloginfo('url')?>"><div id="logo"></div></a>
			<div id="pesquisa">
				<form class="form-inline" action="<?bloginfo('url')?>">
  				<input type="text" name="s" id="" value="<?the_search_query()?>" placeholder="O que você proucura?">
  				<input type="submit" value="Pesquisar" id="btn-pesquisa" class="btn btn-info">

			</form>
			</div>
		</div>
  	</header>
  </div>
  
