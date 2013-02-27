



<div id="listingCat" class="containerMainListing">

<!-- div id="tittle" >Lista de propiedades:</div -->
<?php
$category = get_the_category(); 

?>
<div class="postmetadata">Propiedades Similares:</div>
<?php	echo "<div id='indexFeaturedListing'>"?>
<?php $recent = new WP_Query("cat=" . $category[0]->cat_ID . "&showposts=4"); ?>
		<?php while($recent->have_posts()) : $recent->the_post(); ?>
			<?php	echo "<div id='indexFeaturedSingle2'>";
				echo "<div class='featuredpost'>";
				?>	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h2>
				<?php $thumbnail = (get_post_meta($post->ID, 'thumbnail', $single = true)) ? '<img class="thumbnail-featured-wid" src="'.get_post_meta($post->ID, 'thumbnail', $single = true).'" width="120" height="114" alt="'.get_the_title($post->ID).'" />' : ''; 
				echo "<div id='thumbWrapper'>";
				echo $thumbnail; 
				echo "</div>";
	      		echo "<div id='featured-excerpt-cdn'>";
	      		the_excerpt();
	      		$Precio = get_post_meta($post->ID, 'Precio', true); 
	 
						 	
				echo "<div id='PrecioMain'>";
				echo "<a href="?><?php the_permalink() ?><?php echo " 'class='button orange small'>Precio: <br>"  . $Precio ;
				echo "<br> </a>";
				echo "</div>";
				
				echo "</div>";
				echo "</div>";
	      		echo "</div>";?>


		<?php endwhile; ?>
<?php echo "</div>";?>
		

	

</div>