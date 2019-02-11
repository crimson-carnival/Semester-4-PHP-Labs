<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function next()
        {
            alert("Registered");
            return true;
        }
    </script>
</head>

<body>
    <nav class="navbar navbar-fixed-top navbar-default" style="height: 5%;">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand upper">Experiment 9</a>
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Log In</a></li>
                    <li class="active"><a>Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container" style="margin-top: 10%;">
        <div class="jumbotron">
            <form action="register_sql.php" method="post" onsubmit="next()">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder='Username' name="username" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder='Password' name="password" />
                </div>
                <input type="submit" class="btn btn-primary btn-default" style="float: right;" name="submit" value="REGISTER" />
            </form>
        </div>
    </div>
</body>

</html>
