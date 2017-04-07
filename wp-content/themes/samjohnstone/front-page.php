<?php 
	/* Template Name: Portfolio */ 
	get_header(); 
?>

<!-- HOME PAGE INTRO CONTENT -->
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
<!-- HOME PAGE INTRO CONTENT -->


<!-- PORTFOLIO CONTENT -->
<?php 
    query_posts(array( 
        'post_type' => 'portfolio' 
    ) );  
?>
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
<!-- PORTFOLIO CONTENT -->

<?php get_footer(); ?>