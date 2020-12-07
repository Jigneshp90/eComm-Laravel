<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Commerce Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make('header')}}
    @yield('content')
    {{ View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 600px;
        padding-top: 100px;
    }
    img.slider-img{
      height: 400px !important;
    }
    .custom-product{
      height: 500px;
      /* text-align: center; */
    }
    .custom-product a:hover{
      text-decoration: none;
    }
    .carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #000;
    text-align: center;
    text-shadow: 0 1px 2px rgb(251 251 251);
    }
    .carousel-control.right {
    right: -70px;
    left: auto;
    background: none;
    }
    .carousel-control.left {
    left: -70px;
    right: auto;
    background: none;
    }
    .carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000;
    background-color:#333;
    }
    .carousel-indicators .active {
    width: 14px;
    height: 14px;
    margin: 0;
    background-color: rgb(139, 1, 251);
    }
    .trending-img{
      height: 100px;
    }
    .trending-item{
      float: left;
      width: 20%;
    }
    .trending-wrapper{
      margin: 20px;
    }
    .detail-img{
      height: 300px;
    }
    .search-box{
      width: 500px !important;
    }
    .search-wrapper{
      text-align: left;
    }
    .cart-list-devider{
      border-bottom: 1px solid #ccc;
      padding: 10px;
    }
</style>
</html>
