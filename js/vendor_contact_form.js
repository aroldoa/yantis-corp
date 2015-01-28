//vendor contact form
		$form = $('#vendor_form');

		$('#vendor_form').on('click',function(){
			$form.submit(function(e){
				e.preventDefault();

			});
		});
		$form.on('submit',function(){

			$name = $('#name').val();
			$cname = $('#cname').val();
			$email = $('#email').val();
			$phone = $('#phone').val();
			$human = $('#h').val();
			$capabilities = $('#capabilities').val();
			$certification = $('#certification').val();
			$about = $('#about').val();


			if($name == '' || $name == null){
				$('#name_notification').fadeIn(300).html('Please type in a name').delay(1000).fadeOut(600);
				return false;
			}
			if($cname == '' || $cname == null){
				$('#cname_notification').fadeIn(300).html('Please type in a company name').delay(1000).fadeOut(600);
				return false;
			}
			if($phone == '' || $phone == null){
				$('#phone_notification').fadeIn(300).html('Please type in a phone number').delay(1000).fadeOut(600);
				return false;
			}
			if($email == '' || $email == null){
				$('#email_notification').fadeIn(300).html('Please type in an email').delay(1000).fadeOut(600);
				return false;
			}else{
				var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				$email_test = (regex.test($email));

				if($email_test == false){
					$('#email_notification').fadeIn(300).html('Not a valid email').delay(1000).fadeOut(600);
					return false;
				}
			}

			if($capabilities == '' || $capabilities == null){
				$('#capabilities_notification').fadeIn(300).html('Please type capabilities').delay(1000).fadeOut(600);
				return false;
			}
			if($certification == '' || $certification == null){
				$('#certification_notification').fadeIn(300).html('Please type in a certification').delay(1000).fadeOut(600);
				return false;
			}
			if($about == '' || $about == null){
				$('#about_notification').fadeIn(300).html('Please write something about your company').delay(1000).fadeOut(600);
				return false;
			}

			$.ajax({
				type: 'post',
				url: 'http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/wp-content/themes/yantis/inc/vendor_mail_contact.php',
				data: 'name=' + $name + '&cname=' + $cname + '&email=' + $email + '&phone=' + $phone + '&human=' + $human + '&capabilities=' + $capabilities  + '&certification=' + $certification  + '&about=' + $about,

				success: function(result){
					$form.fadeOut(500);
					$('#result').fadeIn(1000).html(result).delay(3000).fadeOut(1000);
				}
			});
			return false;
		});