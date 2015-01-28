<?php
/**
 * Template Name: Custom Home Page
 *
 * A custom Home Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */
get_header(); ?>

<div class="band showcase">
<?php putRevSlider("homepage") ?>
</div><!-- end of showcase -->

		<div class="leadin">
			<h1>“Nobody Can Build it Faster”</h1>
		</div>

<div class="band intro">
	<div class="container">



		<div class="one-third column box alpha">
			<h2>COMMERCIAL/INDUSTRIAL</h2>
			<span>LAND PROJECTS</span>
			<p>Yantis Company’s philosophy on commercial projects is to be efficient in production and get off the site quickly, allowing vertical construction to begin. Yantis can team with the general contractor or work directly with the developer.</p>
			<a href="http://www.yantiscompany.com/industries-serviced/commercial-projects/">View Projects</a>
		</div>
		<div class="one-third column box">
			<h2>Residential</h2>
			<span>LAND PROJECTS</span>
			<p>Yantis provides turn-key management of a subdivision development from clearing to the finished, paved product. Ninety-five percent of Yantis Company’s projects are produced with its own crews and
equipment. Learn more about our completed projects.</p>
			<a href="http://www.yantiscompany.com/industries-serviced/residential-projects/">View Projects</a>
		</div>
		<div class="one-third column box omega">
			<h2>Public</h2>
			<span>LAND PROJECTS</span>
			<p>Yantis Company owns one of the largest fleets of equipment in South Texas and has a team of experienced construction and design professionals capable of handling any type of civil construction project. Click below to view our most recent projects.</p>
			<a href="http://www.yantiscompany.com/industries-serviced/public-projects/">View Projects</a>
		</div>

		<!--<ul class="box">
			<li>
			<h2>COMMERCIAL</h2>
			<span>LAND PROJECTS</span>
			<p>Yantis Company’s philosophy on commercial projects is to be efficient in production and get off the site quickly, allowing the vertical construction components of the project to begin. Yantis can team with the general contractor or work directly with the developer.</p>
			<a href="http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/industries-serviced/commercial-projects/">View Projects</a>
			</li>

			<li>
			<h2>Residential</h2>
			<span>LAND PROJECTS</span>
			<p>Yantis provides turn-key management of a subdivision development from clearing to the finished, paved product. Ninety-five percent of Yantis Company’s projects are produced with its own crews and
equipment.</p>
			<a href="http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/industries-serviced/residential-projects/">View Projects</a>
			</li>

			<li>
			<h2>Public</h2>
			<span>LAND PROJECTS</span>
			<p>Yantis Company owns one of the largest fleets of equipment in South Texas and has a team of experienced construction and design professionals capable of handling any type of civil construction project.
</p>
			<a href="http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/industries-serviced/public-projects/">View Projects</a>
			</li>

		</ul> -->


		</div>
</div><!-- end of promo -->

<div class="band market">
	<div class="container">
		<div class="nine columns offset-by-three">

			<h2>How it all began</h2>
			<p>Since it was founded, Yantis has performed billions of dollars’ worth of  infrastructure projects for various public entities and private developers. Today, Yantis Company is still a family-owned business that has three generations of the Yantis family involved in the management of the company. Headquartered in San Antonio, Yantis Company serves our clients in the San Antonio area, Eagle Ford region and the I-35 north corridor to Austin.</p>

			<a href="/about-yantis/our-history/"><span>Learn More</span></a>
			<a href="http://www.yantiscompany.com/wp-content/themes/yantis/docs/Yantis_pamphlet.pdf"><span>Company Brochure</span></a>

		</div>
		<div class="four columns">
			<img class="scale-with-grid" src="<?php bloginfo( 'template_directory' ); ?>/images/johnyantis.png" alt="Yantis Company"/>
		</div>
	</div>
</div><!-- end of Marketing Area -->

<?php get_template_part('part','recentnews');?>

<!-- end of pre-footer -->

<?php get_footer(); ?>
