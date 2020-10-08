<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('title'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon">
	<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

	<?php
	wp_head();
	if(function_exists('get_common_file_path')){
		include(get_common_file_path('header'));
	}
	?>
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<div class="container clearfix"> 
			<h1 class="logo">
				<a class="logo-a text-hide" href="<?php echo home_url(); ?>"> <?php echo home_url(); ?>
				<?php get_template_part( 'template-parts/common/common', 'logo' ); ?>
			</a>
		</h1>	

		<a href="" class="chat-btn">Let's Chat</a>

	</div>			
</header>

