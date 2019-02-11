<?php
    session_start();
?>
<html>

<head>
    <title id="title">Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-fixed-top navbar-default" style="height: 5%">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand upper">Experiment 9</a>
            </div>
            <div>
                <ul class="navbar-nav nav navbar-right">
                    <li class="active"><a>Log In</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container" style="margin-top: 10%">
        <div class="jumbotron">
            <form action="login_sql.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Userame" name="username" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" />
                </div>
                <input type="submit" class="btn btn-primary btn-default" style="float: right;" name="submit" value="LOG IN" />
            </form>
        </div>
    </div>
</body>

</html>
