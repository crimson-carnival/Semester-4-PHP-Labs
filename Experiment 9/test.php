<!DOCTYPE html>
<html>

<head>
    <title></title>
    <script type="text/javascript">
        function myfun(value,e)
        {
            document.getElementById("o").innerHTML = e.which;
        }
    </script>
</head>

<body>
    <?php
    /*
	$a = file("text.txt");
	$x = "head";
	$flag =0;
	foreach ($a as $i) {
			$b = explode(" ",$i);
			foreach ($b as $j) {
				if($j == $x)
					$flag = 1;
			}
		}
	if ($flag == 1) echo "Search successful";
	else echo "Search unsuccessful";
    */
    /*$a = array(2,3,5,77,8);
    $l = count($a);
    for($i = 0;$i<($l/2);$i++)
    {
        $temp = $a[$i];
        $a[$i]=$a[$l-$i-1];
        $a[$l-$i-1] = $temp;
    }
    print_r($a);*/
    /*$a = array(2,3,5,77,8);
    $l = count($a);
    for($i = $l-1; $i>=0; $i--) $b[]=$a[i];
    print_r($b);
    */
    /*
    $con = mysqli_connect("localhost","root","","cvi");
    $row = mysqli_fetch_assoc(mysqli_query($con,"select count(*) from users"));
    print_r($row);*/
?>
        <form action="#" method="post">
            <input type="text" name="first[]" onkeyup="myfun(this.value, event);" />
            <input type="text" name="first[]" />
            <input type="submit" value="submit" name="submit" onmouseover="alert('hi botvh');"/>
        </form>
        <p id="o">Hi</p>
</body>

</html>

<?php
    if(isset($_POST["submit"]))
    {
        echo "OK";
        $a=$_POST["first"];
        $file = fopen("text.txt","w")or die("Unable to open file!");
        foreach($a as $i)
        {
            fputs($file, $i);
        }
    }
?>
