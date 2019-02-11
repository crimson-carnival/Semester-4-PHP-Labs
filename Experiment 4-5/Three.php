<?php $s=(count($_POST)>0)?$_POST["array"]:""; ?>
<html>
    <head>
        <title>Three</title>
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
                        <li class="active"><a><span class="glyphicon glyphicon-sort-by-order"></span> Three</a></li>
                        <li><a href="Five.php"><span class="glyphicon glyphicon-plus"></span> Four</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br/>
        <div class="container" style="margin-top: 60px">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="array">Enter a list of numbers separated by spaces:</label>
                            <input required type=text class="form-control input-md" name="array" placeholder="<?php echo $s; ?>" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Submit"/>
                        </div>
                    </form>
<?php
if(count($_POST)>0) {
    echo "<div class='body smb'>";
    $n=explode(" ",$s);
    function sorta($arr)
    {
        $e=$o=NULL;
        foreach($arr as $i)
        {
            if($i%2==0) $e[]=$i;
            else $o[]=$i;
        }
        sort($e);
        sort($o);
        $arr=array_merge($e,$o);
        return $arr;
    }
    $n=sorta($n);
    foreach($n as $i) echo $i." ";
    echo "</div>";
}
?>
                </div>
            </div>
            <a href="Three.php"><p align="right"><button class="btn">Reset</button></p></a>
        </div>
    </body>
</html>