<?php
function incomplete_cat_list($separator) {
  $first_time = 1;
  foreach((get_the_category()) as $category) {
    if ($category->parent != '63' && $category->parent != '0' && $category->parent != '47') {
      if ($first_time == 1) {
        echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>'  . $category->name.'</a>';
        $first_time = 0;
      } else {
        echo $separator . '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a>';
      }
    }
  }
}
?>
<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
?>
<?php
function new_excerpt_length($length) {
	return 45;
}
add_filter('excerpt_length', 'new_excerpt_length');

?>
