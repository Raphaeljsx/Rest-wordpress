<?php get_header(); ?>


<?php
			if( have_posts() ) : while ( have_posts() ) : the_post(); 
		?>

<section class="container sobre">
	<h2 class="subtitulo"><?php	the_title(); ?></h2>
	<div class="grid-12">
	<?php the_content(); ?>
	</div>
</section>

<?php endwhile; else: ?>
<h1 class="center white p-20"><?php _e('Desculpe, não foi possível encontrar os posts solicitados.'); ?></h1>
<?php endif; ?>


<?php get_footer(); ?>