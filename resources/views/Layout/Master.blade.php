<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
        }
        *{
            transition: 200ms;
        }
        .text-color-primary{
            color: #26C6DA;
        }
        .text-color-secondary{
            color: #FF9800;
        }
        .text-color-dark{
            color: #121212;
        }
        .text-color-light{
            color: #F5F5F5;
        }
        .bg-color-primary{
            background-color: #26C6DA;
        }
        .bg-color-secondary{
            background-color: #FF9800;
        }
        .bg-color-dark{
            background-color: #121212;
        }
        .bg-color-light{
            background-color: #F5F5F5;
        }
        .btn-color-primary{
            background-color: #26C6DA;
        }
        .btn-color-secondary{
            background-color: #FF9800;
        }
        .btn-color-dark{
            background-color: #121212;
        }
        .btn-color-light{
            background-color: #F5F5F5;
        }
        .btn-color-primary:hover{
            background-color: #80DEEA;
        }
        .btn-color-secondary:hover{
            background-color: #FFCC80;
        }
        .btn-color-dark:hover{
            background-color: #4a4a4a;
        }
        .btn-color-light:hover{
            background-color: #cbcbcb;
        }

        .logo-group{
            margin-top: 2%;
            margin-bottom: 2.5%;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .logo-group > a{
            display: block;
            width: 2.5rem;
            height: 2.5rem;
            margin-left: 2.5%;
            margin-right: 2.5%;
        }

        .media-logo {
            width: 100%;
            height: 100%;
            -webkit-filter: grayscale(1);
            cursor: pointer;
            background-size: 100% 100%;
        }

        .media-logo:hover{
            -webkit-filter: grayscale(0);
        }

        footer{
            padding-top: 1%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-left: 3%;
            padding-right: 3%;
            flex-direction: column;
        }

        .copyright{
            margin-bottom: 1%;
        }

        .wrapper{
            height: 95vh;
        }

    </style>
    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-color-primary">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler my-2 my-lg-0" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-color-light btn-sm ml-2" type="submit">Sign Up</button>
                <button class="btn btn-color-light btn-sm ml-2" type="submit">Login</button>
                <button class="btn btn-color-light btn-sm ml-2" type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid wrapper">
        @yield('content')
    </div>

    <footer class="bg-color-primary text-color-light">
        <h2>Follow my social media</h2>
        <div class="logo-group">
            <a href="https://www.facebook.com/rick.skid" target="_blank" >
                <img src="{{asset('storage/assets/facebook.png')}}" alt="not found" class="media-logo">
            </a>
            <a href="https://www.instagram.com/aiq____/" target="_blank" >
                <img src="{{asset('storage/assets/instagram.png')}}" alt="not found" class="media-logo">
            </a>
            <a href="https://twitter.com/Aiq__" target="_blank">
                <img src="{{asset('storage/assets/linkedin.png')}}" alt="not found" class="media-logo">
            </a>
            <a href="https://id.linkedin.com/in/muhammad-filardi-31907a183" target="_blank">
                <img src="{{asset('storage/assets/twitter.png')}}" alt="not found" class="media-logo">
            </a>
        </div>
        <div class="copyright">copyright by &copy Muhammad At Thariq Filardi</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
