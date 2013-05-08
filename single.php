<? get_header() ?>
  
  <div class="center">
  	
  	<div id="cont">
  		<section id="single">
      <?while(have_posts()):the_post()?>
  			<article>
          <?if(has_post_thumbnail()):?>
            <?the_post_thumbnail('interna')?>
          <?else:?>
            <img src="<? bloginfo('template_url') ?>/img/lay/01.jpg" alt="">
          <?endif?>
  				<h1><?the_title()?></h1>
  				<span><?the_time('M j, Y')?> - <? comments_number( 'Nenhum comentário', '1 comentário', '% comentários' ); ?>.</span>
  				<?the_content()?>
  			</article>
        <?comments_template()?>
      <?endwhile?>
  		</section>
  		
  	</div>

    <? include('sidebar.php') ?>
  	
  </div> <!-- final da dv center -->
 
 <? get_footer() ?>
