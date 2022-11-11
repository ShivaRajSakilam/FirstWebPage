<?php
    $hostname="127.0.0.1";
    $username="root";
    $password="";
    $name="knowmehere";

    $Your_Name = $_POST['Your_Name'];
    $character = $_POST['character'];
    $relationship = $_POST['relationship'];
    $opinion_in_words = $_POST['opinion_in_words'];
    
    $conn=mysqli_connect($hostname, $username, $password, $name);
    if (!$conn) {
        echo "Connection failed". mysqli_connect_error();
        exit;
    }

    $sql="INSERT INTO responses (Your_Name, attitude, relationship, opinion)
    VALUES ('$Your_Name', '$character', '$relationship', '$opinion_in_words');";

    $result=mysqli_query($conn,$sql);
    if ($result) {
        echo "Responses Added Successfully";
    }else{
        echo "Entry Failed". mysqli_error($conn);
        exit;
    }
    mysqli_close($conn);
    
    
?>