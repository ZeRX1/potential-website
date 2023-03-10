<?php
   session_start();
   ?>
<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta name="author" content="Bootstrap, anxs, DJOhayo">
    <title>Żółty bambus</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/res/logo.jpg" sizes="180x180">
    <link rel="icon" href="/res/logo.jpg" sizes="32x32" type="image/png">
    <link rel="icon" href="/res/logo.jpg" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/res/logo.jpg">
    <meta name="theme-color" content="#7952b3">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link rel="stylesheet" href="/css/index.css">
    <link href="/css/navbar-top-fixed.css" rel="stylesheet">
    <link href="/css/headers.css" rel="stylesheet">
    <link href="/css/navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .dropdown-text {
        color: rgba(255, 255, 255, 1);
        background-color: rgba(255, 0, 0, 0);
        padding: 0.3rem 1rem 0.4rem 0.7rem;
        border: none;
        height: 100%;
        pointer-events: none;
    }

    .dropdown {
        text-align: center;
        float: right;
        margin-right: 1rem;
        position: relative;
        display: block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        border-radius: 5px;
        width: 100%;
    }

    .dropdown-content p {
        margin: 0.7rem;

        padding-bottom: 0.3rem;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top" aria-label="Second navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bambus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02"
                aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://duckduckgo.com/">Search engine</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <!-- navbar login -->
                    <?php if( isset($_SESSION['login']) && !empty($_SESSION['login']) )
                     {
                     ?>
                    <div class="dropdown">
                        <button class='dropdown-text'>Logged in as: <?php echo $_SESSION['login']; ?></button>
                        <div class="dropdown-content">
                            <!-- dropdown content -->
                            <p>Profile</p>
                            <p>Settings</p>
                            <p>Friends</p>
                        </div>
                    </div>
                    <a href="/php/logout.php">
                        <button type="button" class="btn btn-danger">Logout</button>
                    </a>
                    <?php }else{ ?>
                    <a href="login.html">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                    </a>
                    <a href="register.html">
                        <button type="button" class="btn btn-warning">Sign-up</button>
                    </a>
                    <?php } ?>
                </form>
            </div>
        </div>
    </nav>
    <main>
        <iframe height="500rem" width="100%" src="/res/clicker.php" name="targetframe" allowTransparency="True" scrolling="no" style="border:2px solid red;"></iframe>
        <footer>
            
        </footer>
    </main>
</body>
</html>