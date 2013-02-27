<?php get_header(); ?>

	<div id="content" class="narrowcolumn">


<?php if (is_front_page()) { ?>
<div id="front_stuff">
<?php if (function_exists('show_listings_featured')) 
	show_listings_featured('4','random'); ?>
</div>
<?php } ?>
<?php if (function_exists('show_listings_featured')) 
	show_listings_featured('4','random'); ?>
</div>
<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="single-tittle">	
			<?php the_title(); ?>
			
			</div>
		<div  id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
		<?php include ("mainFeatured.php");?>
		</div>
	
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>
</div>