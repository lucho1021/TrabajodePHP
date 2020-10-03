<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Talleres</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Talleres</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Punto 1 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index2.php">Punto 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index3.php">Punto 3</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index4.php">Punto 4</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</header>

<main>

<div class="container">
 <div class="row justify-content-center">
  <div class="col-4">
   <form class="mt-3" action="index.php" method="POST">
   <h4>Calculadora</h4>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Numero 1" name="numero1">
    </div>
    <div class="form-group">
    <label for="exampleFormControlSelect1"></label>
    <select class="form-control" id="exampleFormControlSelect1" name="operadores">
      <option value="1">+</option>
      <option value="2">-</option>
      <option value="3">*</option>
      <option value="4">/</option>
    </select>
  </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Numero 2" name="numero2">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3 btn-block" name="botonResultado">Resultado</button>
   </form>
    
<?php

if(isset($_POST["botonResultado"])) {

 $numeroUno=$_POST["numero1"];
 $numeroDos=$_POST["numero2"];
 
 switch($_POST["operadores"]){

  case 1: echo("$numeroUno + $numeroDos = ").matematicas::suma($numeroUno,$numeroDos);
  break;

  case 2: echo("$numeroUno - $numeroDos =").matematicas::resta($numeroUno,$numeroDos);
  break;

  case 3: echo("$numeroUno * $numeroDos =").matematicas::multiplicacion($numeroUno,$numeroDos);
break;

case 4: echo("$numeroUno / $numeroDos =").matematicas::division($numeroUno,$numeroDos);
break;

 }

}

?>

<?php

class matematicas {

public static function suma($numeroUno,$numeroDos){
  $suma=$numeroUno+$numeroDos;
  return $suma;
}

public static function resta($numeroUno,$numeroDos){
  $resta=$numeroUno-$numeroDos;
  return $resta;
}

public static function multiplicacion($numeroUno,$numeroDos){
  $multiplicacion=$numeroUno*$numeroDos;
  return $multiplicacion;
}

public static function division($numeroUno,$numeroDos){
  $division=$numeroUno/$numeroDos;
  return $division;
}

}

?>

  </div>
 </div>
</div>

</main>

 <footer>
 



 </footer>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>