<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Visit Indonesia</title>
</head>
<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/layout.css">
<body>
<script type="text/javascript" src="js/jquery.js"></script>
<div class="header">
	<div class="row">
	<div class="container">
		<div class="col-2"><div class="logo">Visit Indonesia</div></div>	
		<div class="col-7">
			<div class="menu">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Articles</a></li>
					<li><a href="#">Pages</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Login</a></li>
				</ul>
			</div>
		</div>
		<div class="col-3">
			<div class="search">
				<form>
					<input type="text" class="form-control" name="search" placeholder="Search Something...">
				</form>
			</div>
		</div>	
	</div>
	</div>
</div>
<div class="slide">
	<div class="slider">
		<img src="5ea63f912c239b124a52f847a2d7e72d4215500f-4ee3d.jpg">
		<img src="f387e367ac97b4995dd9ba88e0d5cffa3006e8e9-f6abc.jpg">
		<img src="060162620f736554667b6af2f6a76c6f466a7873-a9de5.jpg">
	</div>
	<div class="tagline">
		<span>Visit Indonesia</span>
		<span>Found The New Adventure</span>
		<span>Taste The New Experiences</span>
	</div>
	<img src="5ea63f912c239b124a52f847a2d7e72d4215500f-4ee3d.jpg">
</div>
<div>
	<div class="text"></div>
</div>
<script type="text/javascript">
	$(function(){
		$('.slider img:gt(0)').hide();
		$('.tagline span:gt(0)').hide();
			var text = " ";
		setInterval(function (){
			var first = $('.slider :first-child');
			var tag = $('.tagline :first-child');
			first.fadeOut("slow");
			tag.fadeOut("slow");
			first.next('img').fadeIn("slow");
			tag.next('span').fadeIn("slow");
			first.appendTo('.slider');
			tag.appendTo('.tagline');
		},3000);
		setInterval(function() {
			text += " Lorem Ipsum";
			$('.text').text(text);
		},10);
	});
</script>

</body>
</html>