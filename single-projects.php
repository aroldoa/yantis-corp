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

		<div class="backtogallery">
			<a href="#">Back to Gallery</a>
		</div>
		<div class="sixteen columns content projects">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h2><span>
			<?php
				foreach((get_the_category()) as $category) {
				    echo $category->cat_name . ' ';
				}?>
			</span>
		</h2>
		<h3>Land Development Projects</h3>


				<section class="demo_wrapper">
			      <article class="demo_block">

			      <ul id="demo1">

		<?php
			if ( get_post_gallery() ) :
	            $gallery = get_post_gallery( get_the_ID(), false );


	            /* Loop through all the image and output them one by one */
	            foreach( $gallery['src'] AS $src )
	            {
	            	$src = str_replace('-150x150.jpg','.jpg', $src);
	                ?>

					<li><img src="<?php echo $src; ?>" class="scale-with-grid"></li>

	                <?php
	            }
	        endif;

	        ?>
				</ul>
			      </article>
			    </section>
			<h4><?php the_title();?></h4>

			<hr/>


			<div class="eight columns alpha offset-by-two projectcontent">
			<?php the_content(); ?>
			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			</div>

			<div class="three columns omega offset-by-one projectdetails">


<?php
$owner = get_post_meta($post->ID, 'Project Owner', true);
if ($owner){
echo '<STRONG>PROJECT OWNER</STRONG><BR/> ' .$owner;
echo  '<br/><br/>';
}
?>

<?php
$contractor = get_post_meta($post->ID, 'General Contractor', true);
if ($contractor){
echo '<STRONG>GENERAL CONTRACTOR</STRONG><BR/> ' .$contractor;
echo  '<br/><br/>';
}
?>



<?php
$engineer = get_post_meta($post->ID, 'Engineer', true);
if ($engineer){
echo '<STRONG>ENGINEER</STRONG><BR/> ' .$engineer;
echo  '<br/><br/>';
}
?>

<?php
$cost = get_post_meta($post->ID, 'Project Cost', true);
if ($cost){
echo '<STRONG>PROJECT COST</STRONG><BR/> ' .$cost;
}
?>

			</div>

			<div class="clear"></div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		<?php endwhile; endif; ?>

		</div><!-- end of management -->
	</div>
</div>

<div class="band projectnav">
	<div class="container">
		<div class="four columns alpha projectnavlinks">
			<?php
$prev_post = get_previous_post(true);
if (!empty( $prev_post )): ?>
  <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="left">Previous Project</a>
<?php endif; ?>

		</div>

		<div class="four columns omega offset-by-eight projectnavlinks">
						<?php
$next_post = get_next_post(true);
if (!empty( $next_post )): ?>
  <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="right">Next Project</a>
<?php endif; ?>
		</div>
	</div>
</div>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script> -->

<?php get_footer(); ?>