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
		<?php get_sidebar(); ?>

		<div class="eleven columns content offset-by-one management">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<h2><span><?php the_title(); ?></span></h2>
			<h3><?php
				$title = get_post_meta($post->ID, 'Title', true);
				if ($title){
					echo $title;
				}
		?></h3>
			<div class="seven columns alpha">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				<div class="clear"></div>

				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>

			<div class="three columns offset-by-one omega">
				<?php
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('', array('class' => 'scale-with-grid'));
				} ?>

			</div>


<div class="clear"></div>


			<div id="mini-pagination">
				<div class="mini-left">
					<?php
						$prev_post = get_adjacent_post(false, '', true);

						if(!empty($prev_post)) {
							$title = get_post_meta($prev_post->ID, 'Title', true);
							$image = wp_get_attachment_url( get_post_thumbnail_id($prev_post->ID, 'thumbnail') );

							echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">
									<div class="mini-name-title_prev">
										<p class="mini-title">' . $prev_post->post_title . '</p>
										<p>' . $title . '</p>
									</div>';
									if(!empty($image)){
										echo '<div id="circular_portrait_prev" style="background-image: url(' . $image . ')"></div>';
									}
							echo '</a>';

						}

					 ?>

				</div>
				<div class="mini-list">
				</div>

				<div class="mini-right">
					<?php
						$next_post = get_adjacent_post(false, '', false);
						if(!empty($next_post)) {
							$title = get_post_meta($next_post->ID, 'Title', true);
							$image = wp_get_attachment_url( get_post_thumbnail_id($next_post->ID, 'thumbnail') );

							echo '<a href="' . get_permalink($next_post->ID) . '" title="' . $next_post->post_title . '">';
									if(!empty($image)){
												echo '<div id="circular_portrait_next" style="background-image: url(' . $image . ')"></div>';
											}
							  echo '<div class="mini-name-title_next">
										<p class="mini-title">' . $next_post->post_title . '</p>
										<p>' . $title . '</p>
									</div>';

							echo '</a>';
						}

					?>
				</div>

				<?php endwhile; endif; ?>

			</div><!-- end of management -->
		</div>
	</div>
</div>

<?php get_template_part('part','market');?>

<?php get_footer(); ?>