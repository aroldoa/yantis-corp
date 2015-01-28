<?php get_header(); ?>

<div class="band pgtitle">
	<div class="container">
		<div class="twelve columns breadcrumb">

		<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
		</div>
	</div>
</div><!-- end of showcase -->


<div class="band main">
	<div class="container">

	<?php if (have_posts()) : ?>

	<div class="eleven columns content news">

		<h2><span>Search Results</span></h2>

		<?php while (have_posts()) : the_post(); ?>


				<h4><?php the_title(); ?></h4>


				<div class="entry">

					<?php the_excerpt(); ?>
					<a href="<?php echo get_permalink(); ?>"> Read Article..</a>

					<hr/>

				</div>



		<?php endwhile; ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

	</div>
	<?php get_sidebar('news'); ?>


	</div>
	</div>


<?php get_footer(); ?>
