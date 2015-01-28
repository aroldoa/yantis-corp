<?php
/**
 * Template Name: Commercial Projects
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
					'order' => 'ASC',
					'category_name' => 'commercial-projects'

				);

				$get_resources = new WP_Query( $args );
			?>
<?php
	 if ( $get_resources->have_posts() ) : ?>


		<div id="grid_container" class="sixteen columns content projects">

			<h2><span><?php the_title(); ?></span></h2>
			<h3>Land Development Projects</h3>

			<p>Over the years, Yantis Company has been involved in numerous high-profile, commercial and industrial projects around San Antonio including Sea World and Six Flags Fiesta Texas. Yantis Company can team with the general contractor or work directly for the commercial project developer to deliver turn-key civil construction. Yantis Company’s philosophy on commercial projects is to be efficient in production and get off the site quickly, allowing the vertical construction components of the project to begin. Yantis Company provides a unique niche to commercial developers and general contractors because of its ability to self-perform all aspects of the civil scope which allows for streamlined coordination between trades.</p>

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
													// the_post_thumbnail('', array(
													// 	'class'     =>  'scale-with-grid ',
													// 	 'data-src' =>  $url)
													// );
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
													// the_post_thumbnail('', array(
													// 	'class'     =>  'scale-with-grid ',
													// 	 'data-src' =>  $url)
													// );
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
													// the_post_thumbnail('', array(
													// 	'class'     =>  'scale-with-grid ',
													// 	 'data-src' =>  $url)
													// );
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
													// the_post_thumbnail('', array(
													// 	'class'     =>  'scale-with-grid ',
													// 	 'data-src' =>  $url)
													// );
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
													// the_post_thumbnail('', array(
													// 	'class'     =>  'scale-with-grid ',
													// 	 'data-src' =>  $url)
													// );
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
