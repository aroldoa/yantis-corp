
<div class="four columns sidebar">

 <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Management Widgets')) : else : ?>

			<div class="widget">
			<h2>About Yantis Company</h2>
			<nav>
				<ul>
					<li><a href="#">Senior Management Team</a></li>
					<li><a href="#">History</a></li>
					<li><a href="#">Financial Strength</a></li>
					<li><a href="#">Safety</a></li>
					<li><a href="#">Client Testimonials</a></li>
				</ul>
			</nav>
			</div>

			<div class="widget">
				<h2>Client Testimonials</h2>
				<blockquote>
					I only use the best, and Yantis is the best.
				</blockquote>
				<cite>Marty Wender</cite>
			</div>

			<div class="widget">
				<h2>Recent Projects</h2>
				<img class="scale-with-grid" src="images/recentproject.jpg" alt="Recent Project"/>
			</div>


<?php endif; ?>
</div>