<!DOCTYPE html>
<html>

<head>
    <title>The Consultum for Educational Evaluators, Researchers and Statisticians </title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link type="text/css" rel="stylesheet" href="./css/froala_blocks.css">

    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <style>
    body {
        font-family: 'Bree Serif', serif;
    }

    .headerintro {
        font-size: 25px;
        color: white
    }

    .whitetext {
        color: white;
    }

    #hero {
        height: auto;
        padding: 100px 0px;
    }

    .innerhero {
        padding-top: 0px;
        margin-top: 0px;
        margin-bottom: 0px
    }

    .bodytext {
        color: black;
    }

    .iconcolor {
        color: teal;
    }

    #navigator {
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    #navigator .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    @media (max-width: 720px) {
        #navigator {
            border-bottom: 1px solid #ccc;
        }
    }

    #navigator a {
        font-size: 14px;
    }
    </style>
</head>

<body>
    <header style="background: whitesmoke;">

        <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
            <a href="index.php">
                <img src="imgs/tceerslogo.png" width="140">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            JOURNALS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">JOCASE</a>
                            <a class="dropdown-item" href="#">SEERS</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.php">TEAM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contributors.php">CONTRIBUTORS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#!">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            SEARCH
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <input type="text" class="dropdown-item form-control col-md-10"
                                placeholder="Search for articles, journals, ...">
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" target="_blank"><button class="btn bg-info">LOG IN</button></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>