<?php
/**
 * Template Name: Senior Management
 *
 * A custom Home Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header(); ?>

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
		<?php get_sidebar(); ?>

		<div id="senior_portraits" class="eleven columns content offset-by-one management">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			<div class="clear"></div>

		<?php endwhile; endif; ?>

		</div><!-- end of management -->
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>
</div>
<?php get_template_part('part','market');?>
<?php get_footer(); ?>
