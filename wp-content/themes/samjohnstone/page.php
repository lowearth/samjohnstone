<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="row">
	<div class="small-12 medium-6 medium-offset-6 column">
	<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="entry">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>