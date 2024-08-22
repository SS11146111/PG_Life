<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | PG Life</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">

</head>
<body>
<div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="home.html">
            <img src="img/logo.png" width="120" height="60"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                        <i class="fas fa-user"></i> Signup
                    </a>
                </li>
                <div class="nav-vl"></div>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                        <i class="fas fa-sign-in-alt"></i>Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>
  </div>

  <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="signup-heading">Signup with PGLife</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <form id="signup-form" class="form" role="form">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-university"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="college_name" placeholder="College Name" maxlength="150" required>
                </div>

                <div class="form-group">
                    <span>I'm a</span>
                    <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" /> Male
                    <label for="gender-male">
                    </label>
                    <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />
                    <label for="gender-female">
                        Female
                    </label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary">Create Account</button>
                </div>
            </form>
        </div>

        <div class="modal-footer">
            <span>Already have an account?
                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login-modal">Login</a>
            </span>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login-heading">Login with PGLife</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form id="login-form" class="form" role="form">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </div>
                        <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <span>
                    <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                    to register a new account
                </span>
            </div>
        </div>
    </div>
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


    



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</body>
</html>
    
