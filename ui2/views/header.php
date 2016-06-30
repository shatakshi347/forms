<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="demo.css">
	<link rel="stylesheet" href="header.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<style>
	#button{
    padding:13px;
    width:10%;
    color:white;
    background-color:#efb507;
    border-radius:5px 5px 5px 5px;
    border-width:0px;
    outline:none;
    margin-top: 0px;
    margin-left: 40%;
    height:200%; 
    vertical-align: top;
   /* display: inline;*/

}
</style>

</head>

<body>
<header class="header-fixed header-user-dropdown header-login-signup">

	
	<div class="header-limiter">
		<!--<h1><a href="#">Company<span>logo</span></a></h1>-->
		<img src="../images/logo.png" height="35" width="35" style="position:relative;margin-left: 5%;float: left;margin: 0;">

		<nav>
			<a href="#">Welcome to Zapplon!</a>
			
		</nav>
		
		<ul>
			<li><a href="#">Login</a></li>
			<li><a href="#">Sign up</a></li>
		</ul>
		
		<!--
		 <button id="button" data-text-swap="LOGOUT">LOGIN/SIGNUP</button>
    <script>
	    $("button").on("click", function() {
	  var el = $(this);
	  if (el.text() == el.data("text-swap")) {
	    el.text(el.data("text-original"));
	  } else {
	    el.data("text-original", el.text());
	    el.text(el.data("text-swap"));
	  }
	});-->
    </script>
    	<div class="header-user-menu">
			 <i class="fa fa-cog"style="color:#cdcdcd;font-size:36px;margin-top:2.3%;"></i>
			<ul>				
				<li><a href="#" class="highlight">Settings</a></li>
			</ul>
		</div>

		<div class="header-user-menu">
			<img src="2.jpg" alt="User Image"/>
			<ul>				
				<li><a href="#" class="highlight">Logout</a></li>
			</ul>
		</div>

	</div>

</header>
<div class="header-fixed-placeholder"></div>

<!-- The content of your page would go here. -


<div class="menu">

	<img src="assets/demo-arrow.png" alt="arrow" height="120">

	<h1>Freebie: 7 Responsive Header Templates</h1>
	<h2><a href="http://tutorialzine.com/2015/02/freebie-7-responsive-header-templates/">Download</a></h2>

	<ul>
		<li><a href="index.html">Basic</a></li>
		<li><a href="header-basic-light.html">Basic Light</a></li>
		<li><a href="header-fixed.html">Fixed</a></li>
		<li><a href="header-login-signup.html">Login/Sign up</a></li>
		<li><a href="header-search.html">Search</a></li>
		<li><a href="header-second-bar.html">Second Bar</a></li>
		<li><a href="header-user-dropdown.html" class="active">User Dropdown</a></li>
	</ul>

</div>
-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){

		var userMenu = $('.header-user-dropdown .header-user-menu');

		userMenu.on('touchend', function(e){

			userMenu.addClass('show');

			e.preventDefault();
			e.stopPropagation();

		});

		// This code makes the user dropdown work on mobile devices

		$(document).on('touchend', function(e){

			// If the page is touched anywhere outside the user menu, close it
			userMenu.removeClass('show');

		});

	});

</script>
<script>

	$(document).ready(function(){

		var showHeaderAt = 150;

		var win = $(window),
				body = $('body');

		// Show the fixed header only on larger screen devices

		if(win.width() > 600){

			// When we scroll more than 150px down, we set the
			// "fixed" class on the body element.

			win.on('scroll', function(e){

				if(win.scrollTop() > showHeaderAt) {
					body.addClass('fixed');
				}
				else {
					body.removeClass('fixed');
				}
			});

		}

	});

</script>




</body>

</html>
