<?php require_once('header.php'); ?>



<div class="container_12">
<div class="page-results clearfix">
	<h1>Add a place</h1>

	
	<div class="grid_5 alpha">
		
	
		<div class="block">
			<div class="block-content add-place-block">
				<div class="form-block large">
					<fieldset>
						<label>Where is it?</label>
						<input type="text" class="full">
					</fieldset>
					<fieldset>
						<label>Name of Place or Activity</label>
						<input type="text" class="full">
					</fieldset>
					<fieldset>
						<button type="submit" class="btn cta full">Add</button>
					</fieldset>
          		</div>
			</div>
		</div>
		
	</div>

	
	
	
</div>
</div>

<div class="modal hide signin" id="signupModal">
	<div class="modal-header">
		<h3>Create an account</h3>
	</div>
	<div class="modal-body clearfix">
		<div class="modal-section-1 bordered">
			<div class="form-block large">
				<fieldset>
					<label>First Name</label>
					<input type="text" class="full">
				</fieldset>
				<fieldset>
					<label>Last Name</label>
					<input type="text" class="full">
				</fieldset>
				<fieldset>
					<label>Email Address</label>
					<input type="text" class="full">
				</fieldset>
				<fieldset>
					<label>New Password</label>
					<input type="password" class="full">
				</fieldset>
				<fieldset>
					<button class="btn cta signup-btn" type="submit">Create account</button>
				</fieldset>
			</div>
		</div>
		<div class="modal-section-2" style="text-align:center">
			<h5>Sign up using facebook</h5>
			<a class="fb-connect-btn"></a>
			<div class="block"><a href="#" id="login2">Already a member?</a></div>
		</div>
	</div>
</div>


<div class="modal signin hide" id="loginModal">
	<div class="modal-header">
		<h3>Login to Blablabla</h3>
	</div>
	<div class="modal-body clearfix">
		<div class="modal-section-1 bordered">
			<div class="form-block large">
				<fieldset>
					<label>Email address</label>
					<input type="text" class="full">
				</fieldset>
				<fieldset>
					<label>Password</label>
					<input type="password" class="full">
				</fieldset>
				<fieldset>
					<button class="btn cta signup-btn" type="submit">Log In</button>
					<a href="#" id="signup2">Create a new account</a>
				</fieldset>
			</div>
		</div>
		<div class="modal-section-2" style="text-align:center">
			<h5>Log in using facebook</h5>
			<a class="fb-connect-btn"></a>
		</div>
	</div>
</div>


<div class="modal-overlay hide"></div>

<script type="text/javascript">

	$(window).scroll(function() {    
	    // find the li with class 'active' and remove it
	    // $("ul.menu-bottom li.active").removeClass("active");
	    // get the amount the window has scrolled
	    var scroll = $(window).scrollTop();
	    // add the 'active' class to the correct li based on the scroll amount
	    if (scroll >= 51	) {
	        $(".search-nav-bar").addClass('sticky');
	    }
	    else {
	        $(".search-nav-bar").removeClass('sticky');
	    }
	});
	$(document).ready(function(){
		$('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 0,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
		$("#loginBtn").click(function(){
			$("#loginModal").fadeIn('fast');
			$('.modal-overlay').fadeIn('fast');
		});
		$("#signupBtn").click(function(){
			$("#signupModal").fadeIn('fast');
			$('.modal-overlay').fadeIn('fast');
		});
		$("#login2").click(function(){
			$("#signupModal").hide();
			$("#loginModal").show();
		});
		$("#signup2").click(function(){
			$("#loginModal").hide();
			$("#signupModal").show();
		});
		$(".home-features-nav a").click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active');
		});

		$('.modal-overlay').click(function(){
			$(this).fadeOut('fast');
			$('.modal').fadeOut('fast');
		});

	});
</script>
</body>
</html>