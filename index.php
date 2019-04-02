<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<span><?php bloginfo('description'); ?></span>
	</header>

	<div class="main">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post() ?>
			<h3><?php the_title() ?></h3>
			<div class="meta">
			Created by <?php the_author(); ?> on <?php the_date(); ?>	
			</div>
			<?php the_content(); ?>
		<?php endwhile ?>
	<?php else : ?>
	    <?php echo wpautop("Sorry, no post was found"); ?>
	<?php endif; ?>
	</div>

</body>
</html>