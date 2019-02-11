<?php
    $val="";
    if(count($_POST)>0)
    {
        $val=$_POST["array"];
        $a=explode(" ",$val);
        $l=$s=$a[0];
        foreach($a as $i)
        {
            if($l<$i) $l=$i;
            else if($s>$i) $s=$i;
        }
    }
?>
    <html>

    <head>
        <title>One</title>
        <link rel="stylesheet" href="CSS/bootstrap-3.3.7-dist/css/bootstrap.css" />
        <link rel="stylesheet" href="CSS/index.css" type="text/css" />
        <script src="CSS/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="CSS/bootstrap-3.3.7-dist/js/jquery.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my">
                        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand upper" href="index.html">PHP Lab</a>
                </div>
                <div class="collapse navbar-collapse" id="my">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a><span class="glyphicon glyphicon-search"></span> One</a></li>
                        <li><a href="Two.php"><span class="glyphicon glyphicon-user"></span> Two</a></li>
                        <li><a href="Three.php"><span class="glyphicon glyphicon-sort-by-order"></span> Three</a></li>
                        <li><a href="Five.php"><span class="glyphicon glyphicon-plus"></span> Four</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br/>
        <div class="container" style="margin-top: 60px">
            <div class="row">
                <div class="col-xs-6">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="array">Enter a list of numbers separated by spaces:&nbsp;</label>
                            <input type=text class="form-control input-md" name="array" placeholder="<?php echo $val; ?>" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary btn-block" />
                        </div>
                    </form>
                    <?php if(count($_POST)>0) 
            echo "<div class='body'>
                Largest: ".$l."<br/>Smallest: ".$s.
            "</div>" ?>
                </div>
            </div>
            <a href="One.php">
                <p align="right"><button class="btn">Reset</button></p>
            </a>
        </div>
    </body>

    </html>
