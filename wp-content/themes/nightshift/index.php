<?php get_header(); ?>
<!-- Start the Loop. -->
<div class="row">
	<div class="small-12 medium-8 medium-offset-2 column">
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		 	<!-- Test if the current post is in category 3. -->
		 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
		 	<!-- Otherwise, the div box is given the CSS class "post". -->
		 	<?php if ( in_category( '3' ) ) : ?>
		<div class="post-cat-three">
		 	<?php else : ?>
		<div class="post">
		 	<?php endif; ?>

		 	<!-- Display the Title as a link to the Post's permalink. -->
		
		 	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		 	<h4><?php the_time('F Y'); ?></h4><hr>

		 	<!-- Display the Post's content in a div box. -->

		 	<div class="entry">
		 		<?php the_excerpt(); ?>
<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a></h2>
		 	</div>
		</div>
		</div>
	</div>
</div>

		 	<!-- Stop The Loop (but note the "else:" - see next line). -->
<div class="row">
	<div class="small-12 medium-8 medium-offset-2 column">
		 <?php endwhile; else : ?>


		 	<!-- The very first "if" tested to see if there were any Posts to -->
		 	<!-- display.  This "else" part tells what do if there weren't any. -->
		 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


		 	<!-- REALLY stop The Loop. -->
		 <?php endif; ?>

	<div class="navigation"><h1><?php posts_nav_link(' | ','Previous','Next'); ?></h1></div>
</div>
</div>
<?php get_footer(); ?>