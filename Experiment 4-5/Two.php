<?php $name2=(count($_POST)>0)?$_POST["name"]:"Name"; ?>
<html>
    <head>
        <title>Two</title>
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
                        <li class="active"><a><span class="glyphicon glyphicon-user"></span> Two</a></li>
                        <li><a href="Three.php"><span class="glyphicon glyphicon-sort-by-order"></span> Three</a></li>
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
                            <input type="text" required class="form-control input-md" name="name" placeholder="<?php echo $name2; ?>" />
                        </div>
                        <div class="form-group">
                            <center>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="M" required="true" <?php if(count($_POST)>0 && $_POST["gender"]=='M') echo "checked" ?> /> Male
                                    </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name="gender" value="F" <?php if(count($_POST)>0 && $_POST["gender"]=='F') echo "checked" ?>/> Female
                                    </label>
                                </div>
                            </center>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary btn-block"/>
                        </div>
                    </form>
<?php
if(count($_POST)>0) {
    echo "<div class='body smb'>";
    $name=explode(" ",$name2);
    $fname=$name[0];
    $mname=(count($name)==3)?$name[1]:"";
    $lname=$name[count($name)-1];
    echo "First name: ".$fname."<br/>Middle name: ".$mname."<br/>Last name: ".$lname."<hr/>";
    
    $c1=$c2=0;
    for($i=0;$i<strlen($name2);$i++)
    {
        if($name2[$i]=='a' || $name2[$i]=='e' || $name2[$i]=='i' || $name2[$i]=='o' || $name2[$i]=='u' || $name2[$i]=='A' || $name2[$i]=='E' || $name2[$i]=='I' || $name2[$i]=='O' || $name2[$i]=='U') $c1++;
        if($name2[$i]==' ') $c2++;
    }
    echo "Vowels: ".$c1."<br/>White spaces: ".$c2."<hr/>";

    $newname=strtoupper($name2);
    echo $newname."<hr/>";

    $g=$_POST["gender"];
    if($g=='M') echo "Mr. ";
    else echo "Ms. ";
    echo $name2."<hr/>";

    if (preg_match("/^[a-zA-Z ]*$/",$name2)) echo "Only characters are present.";
    echo "</div>";
}
?>
                </div>
            </div>
            <a href="Two.php"><p align="right"><button class="btn">Reset</button></p></a>
        </div>
    </body>
</html>