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


<div class="band main" id="post-<?php the_ID(); ?>">
	<div class="container">
		<?php get_sidebar(); ?>

		<div class="eleven columns content offset-by-one leftsidebar" >

	<h2><span>Error 404 - Page Not Found</span></h2>

	</div><!-- end of management -->
	</div>
</div>

<?php get_template_part('part','market');?>
<?php get_footer(); ?>
