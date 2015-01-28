//contact form
		$form = $('#contact_form');

		$('#contact_submit').on('click',function(){
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
			$comments = $('#comments').val();


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

			if($comments == '' || $comments == null){
				$('#comments_notification').fadeIn(300).html('Please type in a comment').delay(1000).fadeOut(600);
				return false;
			}

			$.ajax({
				type: 'post',
				url: 'http://www.yantiscompany.com.php53-8.dfw1-2.websitetestlink.com/wp-content/themes/yantis/inc/mail_contact.php',
				data: 'name=' + $name + '&cname=' + $cname + '&email=' + $email + '&phone=' + $phone + '&human=' + $human + '&comments=' + $comments,

				success: function(result){
					$form.fadeOut(500);
					$('#result').fadeIn(1000).html(result).delay(3000).fadeOut(1000);
				}
			});
			return false;
		});