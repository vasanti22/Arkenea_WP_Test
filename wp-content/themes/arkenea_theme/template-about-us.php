<?php
    /* Template Name: About Us Page */
    get_header(); 
?>

<div class="sticky-footer">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<div class="container">
    		<div class="static-page-content right-grey-dot"> <?php the_content(); ?> </div>     	
		</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>