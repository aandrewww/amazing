<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="auto-info">
	    <meta name="author" content="Andrew Avdeev">

	    <title>Auto-info.by</title>

	    <!-- Bootstrap core CSS -->
		<link href="../application/vendor/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

		<!-- Custom Google Web Font -->
	    <link href="../application/vendor/font-awesome/css/font-awesome.css" rel="stylesheet">
	    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

	    <!-- Add custom CSS here -->
		<link href="../application/css/main.css" rel="stylesheet">
	</head>

	<body>

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		    <div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="/">Auto-info</a>
		        </div>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
		            <ul class="nav navbar-nav">
		                <li><a href="#about">About</a>
		                </li>
		                <li><a href="#services">Services</a>
		                </li>
		                <li><a href="#contact">Contact</a>
		                </li>
		            </ul>
		        </div>
		        <!-- /.navbar-collapse -->
		    </div>
		    <!-- /.container -->
		</nav>

		<!-- include content -->
		<?php 
			//подключаем вьюшку
			if(file_exists(ROOT_DIR.'/system/views/'.$view.'.php')) {
				include ROOT_DIR.'/system/views/'.$view.'.php';
			}else{
				include ROOT_DIR.'/application/views/'.$view.'.php';
			}
		?>

		<!-- Footer -->
		<footer>
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-12">
		                <ul class="list-inline">
		                    <li><a href="#home">Home</a>
		                    </li>
		                    <li class="footer-menu-divider">&sdot;</li>
		                    <li><a href="#about">About</a>
		                    </li>
		                    <li class="footer-menu-divider">&sdot;</li>
		                    <li><a href="#services">Services</a>
		                    </li>
		                    <li class="footer-menu-divider">&sdot;</li>
		                    <li><a href="#contact">Contact</a>
		                    </li>
		                </ul>
		                <p class="copyright text-muted small">Copyright &copy; Your Company 2013. All Rights Reserved</p>
		            </div>
		        </div>
		    </div>
		</footer>

		<!-- JavaScript -->
		<script type="text/javascript" src="../application/vendor/jquery/dist/jquery.js"></script>
		<script type="text/javascript" src="../application/vendor/bootstrap/dist/js/bootstrap.js"></script>
		<script type="text/javascript" src="../application/js/main.js"></script>
	</body>
</html>