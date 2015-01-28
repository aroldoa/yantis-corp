<div class="band pre-footer centered">
	<div class="container">

		<h3 class="noline">Latest News</h3>
		<div class="subtitle">INDUSTRY, LOCAL, & CORPORATE</div>
		<div class="archive"><a href="http://www.yantiscompany.com/news/">View All News</a></div>

		<hr/>
<?php
// the query

$args = array(
	'post_type' => 'post',
	'posts_per_page'=> 2,
	'order' => 'DESC'
);




$get_resources = new WP_Query( $args ); ?>
<?php if ( $get_resources->have_posts() ) : ?>

		<?php while ( $get_resources->have_posts() ) : $get_resources->the_post(); ?>
			<div class="four columns news-listing">

				<a href="<?php the_permalink(); ?>"><?php

				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('', array('class' => 'scale-with-grid '));
				} ?></a>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<div class="readmore"><a href="<?php the_permalink(); ?>">Read Article</a></div>

			</div>
				<?php endwhile; endif; ?>
			<div class="four columns news-listing">
				<div class="fb_overlay">				
					<?php echo do_shortcode('[custom-facebook-feed ]');?>
				</div>
			</div>
			<div class="four columns news-listing linkedin">
				<?php echo do_shortcode("[li_company_updates id=269370 count=1]"); ?>
			</div>

	</div>
</div>