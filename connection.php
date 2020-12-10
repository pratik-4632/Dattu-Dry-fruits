<?php
$conn = mysqli_connect("localhost","root","","dryfruits");
if($conn){
    echo "Connected";
}
else{
    echo "Not connected";
}
?>