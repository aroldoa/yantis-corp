<?php
/**
 * Template Name: Testimonials
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


<?php
$loop = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
?>


<div class="band main" id="post-<?php the_ID(); ?>">
	<div class="container">
		<?php get_sidebar(); ?>

		<div class="eleven columns content offset-by-one leftsidebar" >

		<h2><span>What Clients are Saying</span></h2>
		<?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
			<hr/>

		<?php endwhile; endif; ?>

		</div><!-- end of management -->
	</div>
</div>

<?php get_template_part('part','market');?>
<?php get_footer(); ?>
