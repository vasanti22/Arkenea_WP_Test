<div class="get-in-touch">
	<div class="container clearfix">
		<div class="contact-txt">GET IN TOUCH FOR A FREE CONSULTATION</div>
		<a href="contact-btn">Talk to Us</a>
	</div>
</div>
<footer class="footer">
	<div class="footer-inner">
		<div class="container clearfix"> 
			
			<nav class="nav-menu footer-nav-menu">
				<p class="footer-title">imporant links</p>	
				<?php wp_nav_menu( array( 'theme_location'=>'footer-menu' ) ); ?>
			</nav>	 
			<div class="contact-info">
				<p class="footer-title">contact</p>	
				<p class="footer-title">north carolina</p>	
				<p>2500 Regency Parkway #118, Cary 27518 (408) 320-6361 </p>
				<a href="#">Send Us A Message</a>
			</div>   
		</div>		
	</div>
	<div class="footer-rights-txt">
		<div class="container">
			All text and designs is copyright of <?php bloginfo('title'); ?> &copy; <?php echo date('Y'); ?> All rights reserved
		</div>
	</div>			
</footer>

<?php
wp_footer();
if(function_exists('get_common_file_path')){
	include(get_common_file_path('footer'));
}

?>
</body>
</html>