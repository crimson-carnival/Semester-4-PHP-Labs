<?php
        $con=mysqli_connect("localhost","root","","test") or die(mysqli_erro($con));
        $drop_query = "drop table users;";
        $result = mysqli_query($con,$drop_query) or die(mysqli_error($con));
        echo $result;
        $create_query = "create table users ( user varchar(30) );";
        $result = mysqli_query($con,$create_query) or die (mysqli_error($con));
        echo $result;
        $insert_query = "insert into users values ('Maitreya');";
        $result = mysqli_query($con,$insert_query) or die(myysqli_error($con));
        echo $result;
        $select_query = "select * from users";
        $result = mysqli_query($con,$select_query) or die(myysqli_error($con));
        while(($row = mysqli_fetch_array($result))!=null) {
            foreach($row as $a=>$i) echo ("<br/>".$a."&nbsp;".$i);
        }
    ?>