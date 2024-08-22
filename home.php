<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | PG Life</title>

    <?php include "./includes/links.php" ?>
    <link href="css/home.css" rel="stylesheet" />
    

</head>
<body>
    <div class="header sticky-top">
        <?php include "./includes/header.php" ?>
    </div>

    
  

<div class="screen"></div>

<div class="content">
    <div>
        <div class="search text-center">
           <h2 class="text-white">Happiness per Square Foot</h2>
           <form class="form-inline d-flex flex-row justify-content-center">
            <input class="form-control" type="search" placeholder="Enter your city to search for PGs" aria-label="Search" size="50">
            <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
        
        <div class="cities">
            <h1>Major Cities</h1>
            <div class="d-flex flex-row justify-content-center box">
                <div class="cityBox">
                    <img src="./img/mumbai.png" width="120" height="120">
                </div>
                <div class="cityBox">
                    <img src="./img/delhi.png" width="120" height="120">
                </div>
                <div class="cityBox">
                    <img src="./img/bangalore.png" width="120" height="120">
                </div>
                <div class="cityBox">
                    <img src="./img/hyderabad.png" width="120" height="120">
                </div>
            </div>
            <footer class="py-3 bg-dark">
                <ul class="nav justify-content-center pb-3">
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-white">PG in Delhi</a></li>
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-white">PG in Mumbai</a></li>
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-white">PG in Bengaluru</a></li>
                  <li class="nav-item"><a href="#" class="nav-link px-2 text-white">PG in Hyderabad</a></li>
                </ul>
                <p class="text-muted bg-dark pb-3">@2024 Copyright PG Life</p>
            </footer>
        </div>
    </div>
</div>


    
<?php include "./includes/signup_modal.php" ?>
<?php include "./includes/login_modal.php" ?>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</body>
</html>
    
