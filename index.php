<!doctype html>
<html lang="ua-UA">
<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
  <?php
$fp = fopen('User.dat', 'a+');
if (count($_POST)>0){
  if(strlen($_POST['lastname'])<2 && strlen($_POST['firstname'])<2 && !is_numeric($_POST['phone']) && strlen($_POST['phone'])<7){
    $lastname=$_POST['lastname'];$firstname=$_POST['firstname'];$phone=$_POST['phone'];

  }else{$test = fwrite($fp, $_POST['lastname'].'=>'. $_POST['firstname'].'=>'. $_POST['phone'].','.date("Y-m-d H:i:s")."\r\n");
        if (!$test) echo 'Ошибка при записи в файл.'; }}
fclose($fp); 
?>


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Вчителям інформатики на підмогу</title>
  </head>
  <body class="body-style">
  <!-- Меню navbar-->
  <?php
    $navbar=file_get_contents('navbar.php');
    echo $navbar;
  ?>    
  
  <!-- Карусель з фоток carousel -->
  <?php
    $carousel=file_get_contents('container-fluid.php');
    echo $carousel;
  ?> 
  

 <!-- Колонки з фоток container -->

<hr>
<div class="container-fluid">
  <div class="container">
    <div class="row text-center justify-content-center">
      <div class="w-75"> <h4>Доброго Дня! Ви потрапили на сторінку Наумчука Сергія Васильовича. <br> 
        Я викладаю Ліцеї №28 Львівської Міської Ради. <br> Я закінчив Львівський Національний Університет ім. Івана Франка. <br>
        Кафедру Теорії оптимальних процесів. <br><br> На даному ресурсі ви зможете отримати інформацію для вчителів всіх рівнів викладання інформатики.
      </h4></div>
      <div class="w-25"><img src="img/my.jpg" class="w-75"></div>
      <!--<div class="col-xs-12 col-sm-4 col-lg-3"><img src="img/4.png" class="w-100"></div>-->
      
    </div>
  </div>
</div>


  
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>