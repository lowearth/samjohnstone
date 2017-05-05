<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="row">
	<div class="small-12 medium-12 column">
		<div class="entry">
		<div class="portfolio-image">
			<?php the_content(); ?>
		</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<!-- PORTFOLIO CONTENT -->
<?php 
    query_posts(array( 
        'post_type' => 'portfolio' 
    ) );  
?>
<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="small-12 medium-4 column">
	<div class= "services">
	<h1 class="page-title"><?php the_title(); ?></h1>
	<h1 class="page-title"><?php the_content(); ?></h1>
	<div class="button"> <a href="butts">Get a Quote</a></div>
	</div>
	</div>
<?php endwhile; ?>
</div>
<?php endif; ?>

<!-- PORTFOLIO CONTENT -->
<?php get_footer(); ?>