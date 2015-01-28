<?php
/**
 * Template Name: News Page
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
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
	'post_type' => 'post',
	'posts_per_page'=> 10,
	'order' => 'DESC',
	'paged' => $paged
);



$get_resources = new WP_Query( $args ); ?>

<?php if ( $get_resources->have_posts() ) : ?>

		<div class="eleven columns content news">

		<h2><span>News</span></h2>

			<?php while ( $get_resources->have_posts() ) : $get_resources->the_post(); ?>

			<div class="news-list">

				<div id="news_thumb" class="four columns alpha">

					<?php
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('', array('class' => 'scale-with-grid alignleft '));
					} ?>
				</div>

				<div id="news_excerpt" class="seven columns omega">

					<div class="postdate"><?php echo get_the_date(); ?></div>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					<?php the_excerpt(); ?>
					<div class="readmore"><a href="<?php the_permalink(); ?>">Read Article</a></div>
				</div>

<div class="clear"></div>

			</div>


<?php endwhile; endif;

$big = 999999999; // need an unlikely integer

echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $get_resources->max_num_pages
) );

?>
<?php wp_pagenavi(); ?>


		</div><!-- end of management -->



		<?php get_sidebar('news'); ?>

	</div>
</div>


<?php get_footer(); ?>
