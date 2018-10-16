<!doctype html>
<html lang="ua-UA">
<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
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
  

<div class="container-fluid">
  <div class="container">
    <div class="row text-center">
       <div class="w-100"> <h3> Всесвітня олімпіада Code ORG призначена для прививання учням бажання програмувати. Також Година Коду є глобальним заходом, який залучає десятки мільйонів учнів у більш, як 180 країнах світу. Кожен може організувати заходи в рамках Години Коду. Одно-годинний курс доступний більш, як 45 мовами. Без попередніх вимог. Для всіх віком від 4 до 104.</h3></div>
      
      <?php 


   
        $text='Так ми відпочиваємо';

      for ($i=1; $i <16 ; $i++) { 
        echo "<div class=\"col-sm-4\"><img src=\"img/i$i.jpg\" alt=\"\"class=\"d-block w-100\">$text</div>";
      };
      ?>      
    </div>
  </div>
</div>
<hr>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>