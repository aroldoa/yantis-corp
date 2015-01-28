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


		<div class="eleven columns content news">

		<h2><span>News</span></h2>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<div class="postdate"><?php echo get_the_date(); ?></div>

			<h3><?php the_title(); ?></h3>

			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			<?php edit_post_link('Edit this entry','','.'); ?>

		<?php endwhile; endif; ?>

		</div>

		<?php get_sidebar('news'); ?>

	</div>
</div>
<?php get_footer(); ?>