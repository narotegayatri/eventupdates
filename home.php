<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .text-block{
    height: 200px;
    text-align: center;
    margin-top: 200px;
    
}
        .card-img{
            width:1515px;
            height: 800px;;
            
        }
        @keyframes slide-up {
    from {
      padding-top: 100px;
      opacity: .25;
      line-height: 80px;
    }
    to {
      padding-top: 0;
      opacity: 1;
      line-height: 25px;
    }
  }
      
  .slide-up {
    animation: slide-up 1.5s;
  }
  .btn{
    display:flex;
    justify-content: center;
  }
 button{
   background-color:black;
   width:8%;
   margin:1%;
 }
  a{
    text-decoration:None;
    color:white;

  }
        </style>
    <title>course </title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">DYPEVENTS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      
     
    </ul>
  </div>
</nav>
<div class="card  text-dark ">
  <img src="img.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
  <div class="text-block slide-up ">
                    <h1>WELCOME TO  EVENTS OF DYPCOE!!</h1>

                  <h3>For Event Updates Please LOGIN!</h3>
                  <div class="btn">
                        <button id="last-button"><a href="login.php">LOGIN</a></button>
                        <button id="last-button"><a href="register.php">REGISTER</a></button>
                  </div>
                    
                    
                  </div>
                </div>
  </div>
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