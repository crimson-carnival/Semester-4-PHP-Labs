<?php
    if(count($_POST)>0)
    {
        $M=$_POST["M"];
        $S=$_POST["S"];
        $E=$_POST["E"];
        $L=$_POST["L"];
        $MS=$_POST["MS"];
        $name=$_POST["name"];
        $roll=$_POST["roll"];
    }
    else
    {
        $M="Maths";
        $S="Science";
        $E="English";
        $L="Language";
        $MS="Moral Science";
        $name="Name";
        $roll="Roll Number";
    }
?>
<html>
    <head>
        <title>Five</title>
        <link rel="stylesheet" href="CSS/bootstrap-3.3.7-dist/css/bootstrap.css"/>
        <link rel="stylesheet" href="CSS/index.css" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand upper" href="index.html">PHP Lab</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="One.php"><span class="glyphicon glyphicon-search"></span> One</a></li>
                        <li><a href="Two.php"><span class="glyphicon glyphicon-user"></span> Two</a></li>
                        <li><a href="Three.php"><span class="glyphicon glyphicon-sort-by-order"></span> Three</a></li>
                        <li class="active"><a><span class="glyphicon glyphicon-plus"></span> Four</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br/>
        <div class="container" style="margin-top: 60px">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <form action="#" method="post">
                        <div class="form-group"><input class="form-control input-lg" type="text" placeholder="<?php echo $name; ?>" name="name" /></div>
                        <div class="form-group"><input class="form-control input-lg" type="number" placeholder="<?php echo $roll; ?>" name="roll"/></div>
                        <div class="form-group"><input class="form-control input-md" type="number" placeholder="<?php echo $M; ?>" name="M"/></div>
                        <div class="form-group"><input class="form-control input-md" type="number" placeholder="<?php echo $S; ?>" name="S"/></div>
                        <div class="form-group"><input class="form-control input-md" type="number" placeholder="<?php echo $E; ?>" name="E"/></div>
                        <div class="form-group"><input class="form-control input-md" type="number" placeholder="<?php echo $L; ?>" name="L"/></div>
                        <div class="form-group"><input class="form-control input-md" type="number" placeholder="<?php echo $MS; ?>" name="MS"/></div>
                        <div class="form-group"><input class="btn btn-primary btn-block" type=submit val="Submit"/></div>
                    </form>
<?php
if(count($_POST)>0)
{
    echo "<div class='body smb'>";
    $total=$_POST["M"]+$_POST["S"]+$_POST["E"]+$_POST["L"]+$_POST["MS"];
    $avg=$total/5;
    if($avg>=90) $grade='O';
    else if($avg>=70) $grade='A';
    else if($avg>=60) $grade='B';
    else if($avg>=50) $grade='C';
    else $grade='D';
    echo "Total: ".$total."<br/>Average: ".$avg."<br/>Grade: ".$grade."</div>";
}
?>
                </div>
            </div>
            <a href="Five.php"><p align="right"><button class="btn">Reset</button></p></a>
        </div>
    </body>
</html>