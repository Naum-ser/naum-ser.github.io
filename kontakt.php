<!doctype html>
<html lang="ua-UA">
<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Вчителям інформатики на підмогу</title>
  </head>
  <body>
     <!-- Меню navbar-->
         <?php
            $text=file_get_contents('navbar.php');
            echo $text;
         ?> 
      <!-- Карусель з фоток carousel -->

<div class="container-fluid">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li class="active" data-target="#carouselExampleIndicators" data-slide-to="0">				
			</li>
			<li 'data-target="#carouselExampleIndicators"data-slide-to="1">				
			</li>
			<li 'data-target="#carouselExampleIndicators"data-slide-to="2">				
			</li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/1.png" alt=""class="d-block w-100">
			</div>
			<div class="carousel-item">
				<img src="img/2.png" alt=""class="d-block w-100">
			</div>
			<div class="carousel-item">
				<img src="img/3.png" alt=""class="d-block w-100">
			</div>			
		</div>
		<a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true">
			</span>
			<span class="sr-only">Previous</span>
		</a>
		<a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true">
			</span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<div class="container-fluid">
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-4">a</div>
      <div class="col-sm-4">a</div>
      <div class="col-sm-4">a</div>
    </div>
  </div>
</div>
<hr>
<div class="container-fluid">
  <div class="container">
    <div class="row text-center">
      <div class="col"><img src="img/4.png" class="w-100"></div>
      <div class="col"><img src="img/4.png" class="w-100"></div>
      <div class="w-100"></div>
      <div class="col"><img src="img/4.png" class="w-100"></div>
      <div class="col"><img src="img/4.png" class="w-100"></div>
    </div>
  </div>
</div>
<hr>
<div class="container-fluid">
  <div class="container">
    <div class="row text-center justify-content-center">
      <div class="col-xs-12 col-sm-4 col-lg-3"><img src="img/4.png" class="w-100"></div>
      <div class="col-xs-12 col-sm-4 col-lg-3"><img src="img/4.png" class="w-100"></div>
      <div class="col-xs-12 col-sm-4 col-lg-3"><img src="img/4.png" class="w-100"></div>
      <div class="col-xs-12 col-sm-4 col-lg-3"><img src="img/4.png" class="w-100"></div>
      <div class="col-xs-12 col-sm-4 col-lg-3"><img src="img/4.png" class="w-100"></div>
      <div class="col-xs-12 col-sm-4 col-lg-3"><img src="img/4.png" class="w-100"></div>
      <div class="col-xs-12 col-sm-4 col-lg-3"><img src="img/4.png" class="w-100"></div>
      <div class="col-xs-12 col-sm-4 col-lg-3"><img src="img/4.png" class="w-100"></div>
    </div>
  </div>
</div>


  
    <div class="conteiner">
      <h1> hello world!</h1>
      <BUTTON class="btn btn-success">BUTTON</BUTTON>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>