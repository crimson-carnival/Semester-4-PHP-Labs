<?php
    session_start();
    if(isset($_COOKIE['username'])) $_SESSION['username']=$_COOKIE['username'];
?>
    <html>

    <head>
        <title id="title">Experiment 9</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-fixed-top" style="height: 5%;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand upper" href="index.php">Experiment 9</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <?php
                            if(isset($_SESSION['username'])) echo "<a href='destroy.php'>Log Out</a>";
                            else echo "<a href='login.php'>Log In</a></li><li><a href='register.php'>Register</a>";
                        ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container" style="margin-top: 10%;">
            <div class="jumbotron">
                <p>This is Experiment 9. SQL, sessions, and cookies have been played with, here.</p>
                <?php if(isset($_SESSION['username'])) echo "<p>The cookie ages in 60 seconds.</p>"; ?>
            </div>
        </div>
    </body>

    </html>
