<?php
	/** Template Name: Home Page */
	get_header(); 
?>

<div class="sticky-footer">	
	<?php
		get_template_part( 'template-parts/home/home', 'banner' );
		get_template_part( 'template-parts/home/home', 'below-banner' );
	
	?>
</div>

<?php get_footer(); ?>