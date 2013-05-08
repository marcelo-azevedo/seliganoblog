<? get_header() ?>
  
  <div class="center">
  	
  	<div id="cont">
  		<section id="secao1">
      <?$postcount=0?>
      <?while(have_posts()):the_post()?>
        <?$postcount++;?>
  			<article>
          <?if(has_post_thumbnail()):?>
            <?the_post_thumbnail('destaque1')?>
          <?else:?>
            <img src="<? bloginfo('template_url') ?>/img/lay/01.jpg" alt="">
          <?endif?>
  				<h1><?the_title()?></h1>
  				<span><?the_time('M j, Y')?> - <? comments_number( 'Nenhum comentário', '1 comentário', '% comentários' ); ?>.</span>
  				<?the_excerpt()?>
  				<a href="<?the_permalink()?>">Continue Lendo...</a>
  			</article>
        <?if($postcount==2)break;?>
      <?endwhile?>
  		</section>
  		
      <?if($wp_query->post_count>2):?>
  		<section id="secao2">
      <?while(have_posts()):the_post()?>
        <?$postcount++;?>
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
        <?if($postcount==6)break;?>
      <?endwhile?>
  		</section>
      <?endif?>
  		
      <?if($wp_query->post_count>6):?>
  		<section id="secao3">
      <?while(have_posts()):the_post()?>
  			<article>
	  			<a href="<?the_permalink()?>">
            <?if(has_post_thumbnail()):?>
              <?the_post_thumbnail('destaque2')?>
            <?else:?>
              <img src="<? bloginfo('template_url') ?>/img/lay/03.jpg" alt="">
            <?endif?>
	  				<h1><?the_title()?></h1>
	  				<?the_excerpt()?>
	  			</a>
			</article>
      <?endwhile?>
  		</section>
      <?endif?>
  	</div>

    <? include('sidebar.php') ?>
  	
  </div> <!-- final da dv center -->
 
 <? get_footer() ?>
