<?php 
	/* Template Name: Portfolio */ 
	get_header(); 
?>

<!-- HOME PAGE INTRO CONTENT -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="row">
	<div class="small-12 medium-12 column">
		<div class="front-page">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<!-- HOME PAGE INTRO CONTENT -->

<?php get_footer(); ?>