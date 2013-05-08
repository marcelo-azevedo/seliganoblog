<? get_header() ?>
  
  <div class="center">
  	
  	<div id="cont">
  		
  		<section id="secao2">
      <?while(have_posts()):the_post()?>
  			<article>
	  			<a href="<?the_permalink()?>">
            <?if(has_post_thumbnail()):?>
              <?the_post_thumbnail('destaque2')?>
            <?else:?>
              <img src="<? bloginfo('template_url') ?>/img/lay/03.jpg" alt="">
            <?endif?>
	  				<h1><?the_title()?></h1>
	  				<span><?the_time('M j, Y')?> - <? comments_number( 'Nenhum comentário', '1 comentário', '% comentários' ); ?></span>
	  				<?the_excerpt()?>
	  			</a>
			</article>
      <?endwhile?>
  		</section>
  	</div>

    <? include('sidebar.php') ?>
  	
  </div> <!-- final da dv center -->
 
 <? get_footer() ?>
