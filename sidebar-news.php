
<div class="four columns sidebar offset-by-one">

 <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('News Widgets')) : else : ?>
	<!-- <div id="search-2" class="widget">
		<h2>Search</h2>
		<?php get_search_form(); ?>
	</div>

	<div id="categories-2" class="widget">
		<h2>Recent News</h2>
			<ul>
			<?php
			$args = array(
			  'orderby' => 'name',
			  'order' 	=> 'ASC',
			  'include' => '1,5,7,8'
			  );
			$categories = get_categories($args);
			  foreach($categories as $category) {
					echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </li> ';
			  } ?>
			</ul>
		</div>

	<div class="widget">
		<h2>Find us online</h2>
<a href="http://www.linkedin.com/company/yantis-company">
	<img src="http://www.yantiscompany.com/wp-content/themes/yantis/images/linkedin.jpg" width="100px" border="0"/>
</a>
	</div> -->
<?php endif; ?>
</div>