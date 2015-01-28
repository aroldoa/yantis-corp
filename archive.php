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
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2><span>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</span></h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2><span>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</span></h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2><span>Archive for <?php the_time('F jS, Y'); ?></span></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2><span>Archive for <?php the_time('F, Y'); ?></span></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2><span>Archive for <?php the_time('Y'); ?></span></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2><span>Author Archive</span></h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2><span>Blog Archives</span></h2>

			<?php } ?>


			<?php while (have_posts()) : the_post(); ?>

			<div class="news-list">

				<?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail('', array('class' => 'scale-with-grid alignleft'));
			} ?>


			<div class="postdate"><?php echo get_the_date(); ?></div>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
			<?php the_excerpt(); ?>
			<div class="readmore"><a href="#">Read Article</a></div>

				</div>

			<?php endwhile; ?>

			<?php else : ?>

			<h2>Nothing found</h2>

			<?php endif; ?>

	</div>

<?php get_sidebar('news'); ?>

	</div>
</div>


<?php get_footer(); ?>
