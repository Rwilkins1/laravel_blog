<!DOCTYPE html>
<html>
<head>
	<title>Reagan's Blog</title>
	<link rel="stylesheet" type="text/css" href="/CSS/bootstrap.css">
	<style type="text/css">
		body {
			background-color: skyblue;
		}
	</style>
	@yield('top-script')
</head>
<body>
	@yield('content')
	
	<script src="/js/jquery.js"></script>
	@yield('bottom-script')
</body>
</html>