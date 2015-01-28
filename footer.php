<div class="clear"></div>
<footer class="band">
	<div class="container">
		<div class="six columns copyright alpha">&copy; Copyright 2014, Yantis Company, All rights reserved.</div>
		<div class="five columns footlinks">
			<ul>
				<li><a href="/privacy-policy/">Privacy Policy</a></li>
				<li class="last-item "><a href="/contact-us/">Contact Us</a></li>
			</ul>
		</div>
		<div class="five columns primo omega">
			<a href="http://www.primomotif.com"><img src="<?php bloginfo( 'template_directory' ); ?>/images/primo.png" alt="San Antonio Web Design"/></a>
		</div>
	</div>
</footer><!-- end of footer -->
	<!-- Don't forget analytics -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script src="http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/wp-content/themes/yantis/js/unveil.js"></script>
	<script src="http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/wp-content/themes/yantis/js/slippry.min.js"></script>
	<script src="http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/wp-content/themes/yantis/js/jquery.hoverIntent.minified.js"></script>
	<script src="http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/wp-content/themes/yantis/js/jquery.slicknav.min.js"></script>
	

<script>
	(function(){
		function getRandom($num){
			var min = 0;
			if(typeof $num === 'undefined'){
				// $index = Math.floor((Math.random()*3)) + 1;
				// return $index;
				$index = Math.floor(Math.random()*(2-min+1)+min);
				return $index;
			}
			else{
				$index = Math.floor((Math.random()*3));
				if($index == $num){
					return getRandom($index);
				}
				else{
					return $index;
				}
			}
			
		}
		
		$index = getRandom();
		$market_divs = $('#market').find('div');
		$market_divs.filter(':nth-child(n+2)').hide();
		function animateMarketText(){
			//market text
			$current = $market_divs.filter(':nth-child(1)');
			$current.fadeOut(2000,function(){
			$($market_divs[$index]).fadeIn(5000, function (){
				$($market_divs[$index]).delay(250).fadeOut(2000, function (){
					// $current.fadeIn(5000, function(){
							$index2 = $index;
							$index = getRandom($index2);
							animateMarketText();
						// });
					});
				});
		    });

		}


		//slicknav
		$('nav').slicknav();


		//services grid
		$('.overlay').hoverIntent(
		function(){
			$div = $(this);
			$div.find('img').fadeTo(10,.2);
			$div.find('p').fadeIn(200);
		},
		function(){
			$div.find('p').fadeOut(100,function() {
				// $div.animate({backgroundColor:'rgba(45,55,58,0)'},300);
			});
			$div.find('img').fadeTo(200,1);



		}
		);



		//services slider
		jQuery('#demo1').slippry({
					transition: 'fade',
					useCSS: true,
					speed: 1000,
					pause: 3000,
					auto: true,
					preload: 'visible'
				});




		//senior management red-line hover
		

		animateMarketText();

	})();
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51623228-1', 'yantiscompany.com');
  ga('send', 'pageview');

</script>

	<?php wp_footer(); ?>
</body>
</html>