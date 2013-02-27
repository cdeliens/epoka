<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<?php
//tomar el id de la galeria asociado al post
$Galeria = get_post_meta($post->ID, 'Galeria', true);
//tomar la direccion de la galeria
$rutaGaleria = $wpdb->get_var( "SELECT path FROM wp_ngg_gallery WHERE gid = $Galeria" );
$imagenes = $wpdb->get_results( "SELECT filename, description FROM wp_ngg_pictures WHERE galleryid = $Galeria");
$count = count($imagenes);
?>

<script type="text/javascript">

</script>
<!--script type="text/javascript">
			function startGallery() {
				var myGallery = new gallery($('myGallery'), {
					timed: false,
					defaultTransition: "fadeslideleft"
				});
			}
			window.addEvent('domready', startGallery);
		</script-->
 
	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="single-tittle">	
			<?php the_title(); ?><div id='info-post'><?php incomplete_cat_list(' &bull; ')?>  <?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --> </div>
			
			</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			 
	
			<div id='slider'>
			<div id='mask-gallery'>
			<ul id="gallery">
			<a href="#" id="btn-prev" class= "button-gal" >Atr&aacute;s</a>
			<a href="#" id="btn-next" class= "button-gal" >Siguiente</a>
			<?php
			foreach ($imagenes as $imagen) {
				echo "<li>";
				echo "<img src='"?><?php bloginfo('url'); ?>/<?php echo "" . $rutaGaleria . "/" . $imagen->filename . "'> </img>";
				
				echo "</li>";
			}
			
			?>
			</ul>
			</div>
			<div id="mask-excerpt">  
		    <ul id="excerptgal">  
			<?php
			foreach ($imagenes as $imagen) {
				echo "<li>";
				echo $imagen->description;
				echo "</li>";
			}
			
			?>
			</ul>
			</div>
			
		 </div>
			<div id='datos-single'>
			<div id="Precio-single">
						<?php $Precio = get_post_meta($post->ID, 'Precio', true); ?>
						<?php echo "<a href="?> <?php the_permalink() ?> <?php echo " class='button orange small'>Precio: <br> " . $Precio ;?></a>
				</div>
				<b>Detalle:</b><br>
			
					<?php $Habitaciones = get_post_meta($post->ID, 'Habitaciones', true); ?>
					<?php echo "<b><a href='#' >Habitaciones: </b>" . $Habitaciones ;?></a> -
					<?php $Bannos = get_post_meta($post->ID, 'Bannos', true); ?>
					<?php echo "<b><a href='#' >Baños: </b>" . $Bannos ;?></a> - 
					<?php $Construccion = get_post_meta($post->ID, 'Construccion', true); ?>
					<?php echo "<b><a href='#' >Construcci&oacute;n: </b>" . $Construccion ;?></a> - 
					<?php $Lote = get_post_meta($post->ID, 'Lote', true); ?>
					<?php echo "<b><a href='#' >Lote: </b>" . $Lote ;?></a>
					
			</div>
			<div class="entry">
			
				 <div id="single-content">
		 
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
<div class="calendar"> <a href="http://www.epokacr.com/?page_id=393"><img src="<?php bloginfo('template_directory'); ?>/images/Calendar-icon.png"></img>Realice una cita para visitar la propiedad<br>
</a></div>
		<br>
			<div id="single-contact">
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
</script>
		</div>
		</div>	
			
			
				
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

				

			</div>
		</div>

	

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>
<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
</div>
		
<?php endif; ?>

<?php include ("listingCat.php");?>	
<?php include ("mainFeatured.php");?>

	</div>
<div id="wrapper-sidebar">
<?php get_sidebar	(); ?>
</div>

<?php get_footer(); ?>
