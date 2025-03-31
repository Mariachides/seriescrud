<?php
$con=mysqli_connect('localhost', 'root','','crudseries');
if($con){
    echo"Connection succesfull";
}else{
    die(mysql_error("Error"+$con));
}

?>