 <div id="tittleIndex"class='buttom white'>
Propiedades Destacadas
</div>
<div id="wrapperIndexFeatured">
<?php $recent = new WP_Query("cat=29" . "&showposts=3"); ?>
		<?php while($recent->have_posts()) : $recent->the_post(); ?>
		<?php	echo "<div id='indexFeaturedIndex'>";
				echo "<div class='featuredpost'>";
				?>	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> </h2>
				<?php $thumbnail = (get_post_meta($post->ID, 'thumbnail', $single = true)) ? '<img class="thumbnail-featured-wid" src="'.get_post_meta($post->ID, 'thumbnail', $single = true).'" width="120" height="114" alt="'.get_the_title($post->ID).'" />' : ''; 
				echo "<div id='thumbWrapper'>";
				echo $thumbnail; 
				echo "</div>";
	      		echo "<div id='featured-excerpt-cdn'>";
	      		the_excerpt();
	      		$Precio = get_post_meta($post->ID, 'Precio', true);
				echo "<a href="?><?php the_permalink() ?><?php echo " 'class='button orange small'>Precio: <br>"  . $Precio ;
				echo "<br> </a>";
				echo "</div>";
				echo "</div>";
	      		echo "</div>";?>

		<?php endwhile; ?>

</div>

