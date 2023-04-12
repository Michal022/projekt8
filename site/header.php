<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        header{
            height: 480px;
            overflow: hidden;
            position: relative;
        }
        #zd1, #zd2 ,#zd3{
            
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            min-width: 100%;
            min-height: 100%;
            opacity: 0;
            animation: slider 15s infinite linear;
        }
        
        #zd2{
            animation-delay: 5s;
        }
        #zd3{
            animation-delay: 10s;
            
        }
        #qw1, #qw2, #qw3{
            position: absolute;
            font-size: 60px;
            color: #fff;
            background-color: rgba(0, 0, 0, .6);
            padding: 20px 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            top: 30%;
            left: 10%;
            opacity: 0;
            animation: txt 15s infinite linear;
        }
        #qw1{
            left: 5%;
            top: 5%;
        }
        #qw2{
            animation-delay: 5s;
        }
        
        #qw3{
            animation-delay: 10s;
            left: 60%;
            bottom: 5%;
        }
        @keyframes slider{
        0%{
            opacity: 0;
        }
        5%{
            opacity: 1;
        }
        33.33%{
            opacity: 1;
        }
        38.33%{
            opacity: 0;
        }
        100%{
            opacity: 0;
        }
        
        
        }
        @keyframes txt{
        0%{
            opacity: 0;
        }
        5%{
            opacity: 1;
        }
        33.33%{
            opacity: 1;
        }
        38.33%{
            opacity: 0;
        }
        100%{
            opacity: 0;
        }
        
        
        }
    </style>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">LOGO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signin.php">sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
    </div>
</div>
