<?php
if(isset($_GET['city'])){

  $urlContent=file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$_GET['city'].'&appid=55b94904c9c205bd69fbc7aba2873dbe');
  $forcastArray = json_decode($urlContent, true);
  print_r($forcastArray);
  $weather = $forcastArray['weather'][0]['description'];
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="styles/style.css" rel="stylesheet">
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container" id="mainDiv">
      <h1>Weather in your city</h1>
   
    <form>
  <div class="mb-3">
    <label for="city" class="form-label">Enter the city</label>
    <input class="form-control" id="city" name = "city" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div id="forecastDiv">

 <?php 
 if($weather){
  echo('<div class="alert alert-primary" role="alert">'.'The weather in '.$_GET['city'].' is '.$weather.'</div>');

 }

 ?>


</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>