<!DOCTYPE html>
<html>
<head>
	<title>Ecommerve site</title>
	<h1>Jain Flipkart</h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	{{ View::make('header')}}
	@yield('content')
	{{ view::make('footer')}}
	
	
</body>
<style type="text/css">
	img.slider-img{
		height: 500px !important; 
	}
	img.slider-img1{
		height: 250px;
		width: 250px;
	}
	.trending-item{
		float: left;
		width: 20%;
	}
	.detail-img{
		height: 700px;
		width: 500px;
	}
</style>
</html>