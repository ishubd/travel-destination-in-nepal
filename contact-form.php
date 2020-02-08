<?php

$connection = mysqli_connect('localhost','tourist','123','touristdestination');
if($connection){
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $country = $_POST['country'];
        $message = $_POST['message'];
        $sql = "INSERT INTO contact (name, country, suggestion) VALUES ('".$name."','". $country."','".$message."')";
        $result=mysqli_query($connection,$sql);
        header('Location:index.html#done');
    }   
}



?>