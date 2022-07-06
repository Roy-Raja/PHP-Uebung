<?php

    $name = $_POST['username'];
    $pass = $_POST['blub'];
    //echo($name.'-'.$pass);
   // echo("<br/>");
    //echo("SELECT * FROM test WHERE name =".$name." AND  password =".$pass);
    
    if(!empty($name) && !empty($pass))
    {

        if(strlen($name) >3 && strlen($pass) >3)
        {
            include("connect.php");

            $theQuery ='SELECT * FROM user WHERE  name ="'.$name.'" AND  password ="'.$pass.'"';
           // echo($theQuery);
            //$theQuery = 'Select * from user where name="test" and password="test1"';
            $resultUseres = mysqli_query($connection, $theQuery);
            $menge = mysqli_num_rows($resultUseres);

            echo($menge);
        }
        
    }
    
?>