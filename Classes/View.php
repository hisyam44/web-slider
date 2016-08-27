<?php
	class View{
		public function header(){
			echo '<!DOCTYPE>
					<html>
					<head>
						<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
						<title>Visit Indonesia</title>
					</head>
					<link rel="stylesheet" type="text/css" href="http://localhost/visit/css/css.css">
					<link rel="stylesheet" type="text/css" href="http://localhost/visit/css/layout.css">
					<body>

					<script type="text/javascript" src="http://localhost/visit/js/jquery.js"></script>
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
					</div>';
		}
		public function footer(){
			echo '<div class="row">
						<div class="container space">
							<div class="footer">sd.fkjsdlkfjn sdljkfhnsd ljfnsdjkfnlsdjfhn dlfhlsd hflkdsjh</div>
						</div>
					</div>

					</body>
					</html>';
		}
	}
?>