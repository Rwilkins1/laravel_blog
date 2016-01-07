<!DOCTYPE html>
<html>
<head>
	<title>Reagan's Blog</title>
	<link rel="stylesheet" type="text/css" href="/CSS/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/theme/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/theme/css/business-casual.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	<style type="text/css">
		body {
			background-color: skyblue;
		}
		img {
			height: 300px;
			width: 300px;
			border: 5px double black;
			border-radius: 20%;
		}
	</style>
	@yield('top-script')
</head>
<body>
	<div class="brand">Reagan Wilkins</div>
    <div class="address-bar">1009 Garraty Road | San Antonio, TX 78209 | 979-224-0816</div>
	<!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{{action('HomeController@showWelcome')}}}">Home</a>
                    </li>
                    <li>
                        <a href="{{{action('HomeController@showResume')}}}">Resume</a>
                    </li>
                    <li>
                        <a href="{{{action('HomeController@showPortfolio')}}}">Portfolio</a>
                    </li>
                    <li>
                        <a href="{{{action('HomeController@showContact')}}}">Contact Me!</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	@yield('content')
	
	<script src="/js/jquery.js"></script>
	@yield('bottom-script')
</body>
</html>