<html>

	<head>
		<title>Mayhem</title>
		<link rel="stylesheet" type="text/css" href="./src/css/style.css" />
		<link rel="icon" type="image/jpeg" href="./src/media/icon.jpg" />
		<script src="./src/js/jquery-3.2.1.min.js"></script>
		<script src="./src/js/jquery.color-2.1.2.min.js"></script>
		<script>
			var pageTitle = "-----Mayhem-----";
			function animateTitle() {
				pageTitle = pageTitle.substring(1, pageTitle.length) + pageTitle.substring(0, 1);
				document.title = pageTitle;
				setTimeout("animateTitle()", 300);
			}
			$(document).ready(function() {
				animateTitle();
				
				$(".mayhem").animate({
					opacity: 1
				}, 500, function() {
					$(".mayhemSmall").animate({
						opacity: 1
					}, 500, function() {
						$(".links").animate({
							opacity: 1
						}, 500);
					});
				});
				
				function loop() {
					$(".mayhem").animate({
						color: "#c64800"
					}, 1500, function() {
						$(".mayhem").animate({
							color: "#a8c600"
						}, 1500, function() {
							$(".mayhem").animate({
								color: "#00c67d"
							}, 1500, function() {
								$(".mayhem").animate({
									color: "#009ec6"
								}, 1500, function() {
									$(".mayhem").animate({
										color: "#7000c6"
									}, 1500, function() {
										$(".mayhem").animate({
											color: "#c6007d"
										}, 1500, function() {
											loop();
										});
									});
								});
							});
						});
					});
				}
				loop();
				
				$("a").hover(function() {
					$(this).stop();
					$(this).animate({
						color: "#b2ff00"
					}, 150);
				});
				
				$("a").mouseout(function() {
					$(this).stop();
					$(this).animate({
						color: "#ff6100"
					}, 250);
				});
			});
		</script>
		<!--[if lt IE 9]
		<script>
			document.createElement('video');
		</script>
		<![endif]-->
	</head>
	
	<body>
		<video playsinline autoplay loop poster="./src/media/video.png" id="bgvid">
			<source src="./src/media/video.mp4" type="video/mp4" />
			<script>
				$("video#bgvid").prop("volume", 0.4);
			</script>
		</video>
		<div class="centered" id="pageInfo">
			<span class="mayhem">Mayhem</span> <span class="mayhemSmall">//your #1 HvH tranny</span><br />
			<div class="links">
				<center>
					<a href="http://steamcommunity.com/id/flickz_de" target="_blank">Steam</a> • 
					<a href="http://steamcommunity.com/id/mayhemakafag" target="_blank">Steam Wingman</a> • 
					<a href="https://paste.plsrape.me/user.php?user=mayhem" target="_blank">My configs</a>
				</center>
			</div>
		</div>
	</body>

</html>