<?php require_once('header.php'); ?>

<div class="navbar navbar-inverse search-nav-bar">  
  	<div class="container_12">
  		<div class="panel-padding clearfix">
  			<div class="grid_8 alpha">
	  			<div class="search-wrapper">
			    	<input type="text" placeholder="Search a place or an activity">
			    	<input type="submit" value="Search" class="btn search-btn">
		    	</div>
	    	</div>
	    	
	    	<div class="position-right add-place-wrapper-right">Discovered an awesome getaway? <a href="#" class="btn add-place-btn">Add a place</a></div>
	    	
		</div>
	</div>
</div>

<div class="container_12">
<div class="single-post clearfix">
	<div class="block">
		<div class="user-thumbnail">
			<img src="assets/img/user-thumbnail6.jpg">
		</div>
	</div>
	<div class="grid_7 alpha">
		<h1>Harvey Katrina</h1>
		<ul class="post-sub-details">
			<li><img src="assets/img/flag/ph.gif" class="flag-icon"> Cebu, Philippines</li>
		</ul>
		<div class="block">
			<ul class="nav pillbox clearfix">
				<li class="active"><a href="#">Recommendations</a></li>
				<li><a href="#">Recent</a></li>
				<li><a href="#">Staff picks</a></li>
				<li><a href="#">Friends</a></li>				
			</ul>
		</div>
		<div class="page-results">
		<div class="block">
			<div class="feedback-content  clearfix">
				<div class="feedback-item">
					<div class="user-section-head clearfix">
						<span class="feedback-post-date">January 1</span>
						<div class="user-thumbnail">
							<img src="assets/img/user-thumbnail6.jpg">
						</div>
						<a href="#" class="feedback-username">Harvey Katrina</a>
						<div class="vote-status">voted up</div>
					</div>
					<div class="feedback-message">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis varius augue, ut bibendum leo ullamcorper eu. Praesent justo urna, malesuada facilisis venenatis quis, pretium quis sapien. Donec nec orci sed libero ornare commodo. Nunc sit amet nulla purus. Quisque tincidunt metus quis tortor blandit eu fermentum purus cursus. Nullam blandit consequat aliquam. Nullam nisl elit, pharetra ac tincidunt non, egestas eu lorem. Morbi fermentum tempus mauris non vulputate. Quisque iaculis tortor nec tellus gravida ac tincidunt sem sodales. In hac habitasse platea dictumst. Maecenas pharetra metus eget nisi vestibulum luctus. Morbi sem mi, auctor eget accumsan tempus, dapibus vel nibh. Donec sollicitudin tincidunt turpis non porttitor. Fusce vitae dui urna.
					</div>
				</div>
				<div class="feedback-item">
					<div class="user-section-head clearfix">
						<span class="feedback-post-date">January 1</span>
						<div class="user-thumbnail">
							<img src="assets/img/user-thumbnail3.jpg">
						</div>
						<a href="#" class="feedback-username">Maris Mendoza</a>
						<div class="vote-status">voted up</div>
					</div>
					<div class="feedback-message">
						Nam mattis varius augue, ut bibendum leo ullamcorper eu. Praesent justo urna, malesuada facilisis venenatis quis
					</div>
				</div>
				<div class="feedback-item">
					<div class="user-section-head clearfix">
						<span class="feedback-post-date">January 1</span>
						<div class="user-thumbnail">
							<img src="assets/img/user-thumbnail4.jpg">
						</div>
						<a href="#" class="feedback-username">Harvey Katrina</a>
						<div class="vote-status">voted down</div>
					</div>
					<div class="feedback-message">
						Maecenas pharetra metus eget nisi vestibulum luctus. Morbi sem mi, auctor eget accumsan tempus, dapibus vel nibh. Donec sollicitudin tincidunt turpis non porttitor. Fusce vitae dui urna.
					</div>
				</div>
				<div class="feedback-item">
					<div class="pagination">
					  <span href="#" class="active">1</span>
					  <a href="#">2</a>
					  <a href="#">3</a>
					  <a href="#">4</a>
					  <a href="#">5</a>
					  <a href="#">6</a>
					</div>
				</div>
			</div>


		</div>
		</div>
	</div>

	<div class="grid_4 right omega">
		<div class="sidebar">
		<h3>Your questions</h3>
		<div class="block-content nopad clearfix">
			<div class="h-block-1">
			<a href="#" class="user-thumb-container small">
				<div class="user-thumbnail"><img src="assets/img/user-thumbnail1.png"></div> 
				<span class="user-name-link">Harvey Enrile</span>
			</a>
			</div>
			<div class="question">
				I'm going to San Francisco in January 2013. I've been before, but only for a very rushed 2-day trip!
What's the best of the best in San Fran? Open to any and all suggestions!
			</div>

		</div>
			<div class="block">
			<a href="#" class="btn cta full question-btn">Ask a question</a>
			</div>
		</div>
	</div>
	
	
</div>
</div>

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

		var uploader = new qq.FileUploader({
		    // pass the dom node (ex. $(selector)[0] for jQuery users)
		    element: document.getElementById('file-uploader'),
		    // path to server-side upload script
		    action: 'uploads'
		});

		$(".vote-btn").click(function(){
			$(this).addClass('active').siblings().removeClass('active');
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