<?php require_once 'classes/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="msapplication-tap-highlight" content="no"/>
		<meta property="og:title" content="Video Map"/>
		<meta property="og:image" content="http://videomap.peekatcode.net/screen.jpg"/>
		<meta property="og:description" content="Search for videos on map and have fun"/>
		<title>Video Map</title>
		<!-- CSS  -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
		<link href="assets/css/prism.css" type="text/css" rel="stylesheet" media="screen"/>
		<link href="assets/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen"/>
		<link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen"/>
		<link rel='stylesheet' href='assets/unitegallery/css/unite-gallery.css' type='text/css' />
		<link rel='stylesheet' href='assets/unitegallery/themes/default/ug-theme-default.css' type='text/css' />
	</head>
	<body>
		<div class="se-pre-con">
			<div class="sk-cube-grid">
				<div class="sk-cube sk-cube1"></div>
				<div class="sk-cube sk-cube2"></div>
				<div class="sk-cube sk-cube3"></div>
				<div class="sk-cube sk-cube4"></div>
				<div class="sk-cube sk-cube5"></div>
				<div class="sk-cube sk-cube6"></div>
				<div class="sk-cube sk-cube7"></div>
				<div class="sk-cube sk-cube8"></div>
				<div class="sk-cube sk-cube9"></div>
			</div>
		</div>
		<header>
			<!-- <ins class="adsbygoogle" style="display:inline-block;width:600px;height:70px;"data-ad-client="pub-2911253224693209"></ins> -->
			<div id="page"></div>
			<div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="material-icons">menu</i></a></div>
			<ul id="nav-mobile" class="side-nav fixed">
				<li class="logo">
					<a href="#">
						<img src="assets/images/vmlogo.png" alt="Home">
					</a>
				</li>
				<li class="search">
					<div class="row">
						<div class="input-field col s12">
							<input name="pac-input" id="pac-input" type="text" class="validate" placeholder=" ">
							<label for="pac-input" class="">Location</label>
						</div>
					</div>
					<form id="search-form" action="search.php" method="post">
						<div class="row">
							<div class="input-field col s12">
								<input name="q" id="q" type="text" class="validate" placeholder=" ">
								<label for="q" class="">Query</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 validate">
								<select name="order" id="order">
									<option value="date">Date</option>
									<option value="rating">Rating</option>
									<option value="relevance">Relevance</option>
									<option value="title">Title</option>
									<option value="viewCount">View Count</option>
								</select>
								<label>Sort by</label>
							</div>
						</div>
						<input id="lat" name="lat" type="hidden" value="0">
						<input id="lng" name="lng" type="hidden" value="0">
						<input id="rad" name="rad" type="hidden" value="0">
						<div class="row center-align">
							<button class="btn waves-effect waves-light blue search-button" type="submit">Search
							<i class="material-icons right">send</i>
							</button>
						</div>
					</form>
				</li>
			</ul>
		</header>
		<main>
		<div id="map">
			<div class="progress"> <div class="indeterminate"></div> </div>
		</div>
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Modal Header</h4>
				<p>A bunch of text</p>
			</div>
			<div class="modal-footer">
				<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
			</div>
		</div>
		</main>
		<!--  Scripts-->
		<script src="assets/js/jquery-2.1.1.min.js"></script>
		<script src="assets/js/prism.js"></script>
		<script src="assets/js/materialize.js"></script>
		<script src="assets/js/init.js"></script>
		<script src="assets/js/markerclusterer.js"></script>
		<script src="assets/js/actions.js"></script>
		<script type="text/javascript">
		$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");

		// load adsbygoogle.js 
		$.getScript("//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", function(){});
		});
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $config['map-api-key'];?>&libraries=geometry,places"></script>
		<script src="assets/js/map.js"></script>
		<script src='assets/unitegallery/js/unitegallery.js'></script>
		<script src='assets/unitegallery/themes/default/ug-theme-default.js'></script>
	</body>
</html>