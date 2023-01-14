<?php
    $hostname="127.0.0.1";
    $username="root";
    $password="";
    $name="knowmehere";

    // $Your_Name = $_POST['Your_Name'];
    // $character = $_POST['character'];
    // $relationship = $_POST['relationship'];
    // $opinion_in_words = $_POST['opinion_in_words'];
    
    $conn=mysqli_connect($hostname, $username, $password, $name);
    if (!$conn) {
        echo "Connection failed". mysqli_connect_error();
        exit;
    }

    $sql="SELECT * FROM responses;";

    $result=mysqli_query($conn,$sql);
    if ($result) {
        echo "Responses from viewers"."<br>";
        while($row = $result->fetch_assoc()) {
            echo $row["Your_Name"]."-->"
            .$row["attitude"]." +"
            .$row["relationship"]." +"
            .$row["opinion"]
            ."<br>";
        }
    }else{
        echo "Fetching Failed". mysqli_error($conn);
        exit;
    }
    mysqli_close($conn);
    
    
?>