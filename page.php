<?php
/**
 * Template Name: Left Sidebar
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


<div class="band main" id="post-<?php the_ID(); ?>">
	<div class="container">
		<?php get_sidebar(); ?>

		<div class="eleven columns content offset-by-one leftsidebar" >
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h2><span><?php the_title(); ?></span></h2>
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		<?php endwhile; endif; ?>

		</div><!-- end of management -->
	</div>
</div>

<?php get_template_part('part','market');?>
<?php get_footer(); ?>
