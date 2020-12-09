<?php
    //$_SESSION['alert']= '';
    $username =$_POST['username'];
    $password =$_POST['password'];

    if($username = 'abc' && $password = '123'){

      echo "Succesfully logged in"  ;
    }
    else{
        echo "Check your username and password";
    }
?>