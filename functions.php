<?

register_nav_menu( 'principal', 'Menu Principal' );

function new_excerpt_length($length) {
  return 40;
}

add_filter('excerpt_length', 'new_excerpt_length');

add_image_size('destaque1',300,200,true);
add_image_size('destaque2',100,100,true);
add_image_size('interna',650,300,true);

add_theme_support( 'post-thumbnails' ); 

register_sidebar(array(
  'name'=>'Sidebar Principal',
  'id'=>'mainbar',
  'before_widget'=>'<nav>',
  'after_widget'=>'</nav>',
  'before_title'=>'<h1>',
  'after_title'=>'</h1>',
));

