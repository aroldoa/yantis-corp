<?php
/**
 * Template Name: Public Projects
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

			<?php
				// the query

				$args = array(
					'post_type' => 'projects',
					'posts_per_page'=> 24,
					'order' => 'DESC',
					'category_name' => 'public-projects'

				);

				$get_resources = new WP_Query( $args );
			?>
<?php
	 if ( $get_resources->have_posts() ) : ?>


		<div id="grid_container" class="sixteen columns content projects">

			<h2><span><?php the_title(); ?></span></h2>
			<h3>Land Development Projects</h3>
			<br/>

			<?php
			$i=1;
			$j=1;
					while ( $get_resources->have_posts() ) : $get_resources->the_post();
						if($i<=2){
							if($i == 1){

			?>
								<div class="eight columns alpha row">
									<div class="overlay">
										<p><?php the_title(); ?></p>
										<a href="<?php the_permalink(); ?>">
											<?php
												if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
														$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
													$url = $thumb['0'];
													?>
													<img class="scale-with-grid wp-post-image" src='<?php echo $url;?>'></img>
													<?php
												}
											?>
										</a>
									</div>
								</div>

				<?php
							}
							elseif($i == 2){?>
								<div class="eight columns omega row">
									<div class="overlay">
										<p><?php the_title(); ?></p>
										<a href="<?php the_permalink(); ?>">
											<?php
												if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
														$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
													$url = $thumb['0'];
													?>
													<img class="scale-with-grid wp-post-image" src='<?php echo $url;?>'></img>
													<?php
												}
											?>
										</a>
									</div>
								</div>



				<?php
							}
						}else{
							if(($j % 3) == 1){?>
								<div class="one-third column alpha row">
									<div class="overlay">
										<p><?php the_title(); ?></p>
										<a href="<?php the_permalink(); ?>">
											<?php
												if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
														$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
													$url = $thumb['0'];
													?>
													<img class="scale-with-grid wp-post-image" src='<?php echo $url;?>'></img>
													<?php
												}
											?>
										</a>
									</div>
								</div>
						<?	}
							elseif(($j % 3) == 2){?>
								<div class="one-third column row">
									<div class="overlay">
										<p><?php the_title(); ?></p>
										<a href="<?php the_permalink(); ?>">
											<?php
												if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
														$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
													$url = $thumb['0'];
													?>
													<img class="scale-with-grid wp-post-image" src='<?php echo $url;?>'></img>
													<?php
												}
											?>
										</a>
									</div>
								</div>
						<?	}
							elseif(($j % 3) == 0){?>
								<div class="one-third column omega row">
									<div class="overlay">
										<p><?php the_title(); ?></p>
										<a href="<?php the_permalink(); ?>">
											<?php
												if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
														$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
													$url = $thumb['0'];
													?>
													<img class="scale-with-grid wp-post-image" src='<?php echo $url;?>'></img>
													<?php
												}
											?>
										</a>
									</div>
								</div>
						<?	}
							$j++;
						}
						$i++;
					endwhile;
	 endif;
?>

		</div><!-- end of management -->
	</div>
</div>

<?php get_footer(); ?>
