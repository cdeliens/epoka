<div id="mainContent-listing" class="containerMainListing">

<!-- div id="tittle" >Lista de propiedades:</div -->
<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div class="postmetadata"><div id='titulo-post'><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </div>
			<div id='info-post'><?php the_tags('Tags: ', ', ', '<br />'); ?><?php incomplete_cat_list(' &bull; ') ?> | <?php edit_post_link('Edit', '', ' | '); ?><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> </div></div>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				
				<div class="entrylisting">
				<div id="thumb">
					<?php $thumbnail = (get_post_meta($post->ID, 'thumbnail', $single = true)) ? '<img class="thumbnail" src="'.get_post_meta($post->ID, 'thumbnail', $single = true).'" width="120" height="114" alt="'.get_the_title($post->ID).'" />' : ''; ?>
					<?php echo $thumbnail; ?>
				</div>
				<div id="excerpt">
				<div id="excerpt-text">
					<?php the_excerpt(); ?>
				</div>
					<div id="Precio">
						<?php $Precio = get_post_meta($post->ID, 'Precio', true); ?>
						<?php echo "<a href="?> <?php the_permalink() ?> <?php echo " class='button orange small'>Precio: <br> " . $Precio ;?><br> + info </a>
					</div>
				</div>
					
				</div>
				
				<div id='datos'>
					<a id="ck_email" class="stbar chicklet" href="javascript:void(0);"><img src="http://w.sharethis.com/chicklets/email.gif" /></a>
<a id="ck_facebook" class="stbar chicklet" href="javascript:void(0);"><img src="http://w.sharethis.com/chicklets/facebook.gif" /></a>
<a id="ck_twitter" class="stbar chicklet" href="javascript:void(0);"><img src="http://w.sharethis.com/chicklets/twitter.gif" /></a>
<a id="ck_sharethis" class="stbar chicklet" href="javascript:void(0);"><img src="http://w.sharethis.com/chicklets/sharethis.gif" /></a -->
<script type="text/javascript">
	var shared_object = SHARETHIS.addEntry({
	title: document.title,
	url: document.location.href
});

shared_object.attachButton(document.getElementById("ck_sharethis"));
shared_object.attachChicklet("email", document.getElementById("ck_email"));
shared_object.attachChicklet("facebook", document.getElementById("ck_facebook"));
shared_object.attachChicklet("twitter", document.getElementById("ck_twitter"));
</script >
					<?php $Habitaciones = get_post_meta($post->ID, 'Habitaciones', true); ?>
					<?php echo "<a href='#' class='button white small'>Habitaciones: " . $Habitaciones ;?></a>
					<?php $Bannos = get_post_meta($post->ID, 'Bannos', true); ?>
					<?php echo "<a href='#' class='button white small'>Ba&ntilde;os: " . $Bannos ;?></a>
					<?php $Construccion = get_post_meta($post->ID, 'Construccion', true); ?>
					<?php echo "<a href='#' class='button white small'>Construcci&oacute;n: " . $Construccion ;?></a>
					<?php $Lote = get_post_meta($post->ID, 'Lote', true); ?>
					<?php echo "<a href='#' class='button white small'>Lote: " . $Lote ;?></a>
					
					
				</div>

				
			</div>

		<?php endwhile; ?>
<div class='navigation'>
  <?php		
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;

	if ($total_pages > 1){

	  $current_page = max(1, get_query_var('paged'));
	  
	  echo paginate_links(array(
	      'base' => get_pagenum_link(1) . '%_%',
	      'format' => '&paged=%#%',
	      'current' => $current_page,
	      'total' => $total_pages,
	      'prev_text' => '< Anterior', 
	      'next_text' => 'Siguiente >'
	    ));
	}
  ?>
 </div>	

	<?php include ("mainFeatured.php");?>	
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

</div>