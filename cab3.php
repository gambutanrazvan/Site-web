<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$rating = $_POST['rating'];
if (!empty($FirstName)||!empty($LastName)||!empty($rating)) {
    $host = "localhost";
    $dbUsername="root";
    $dbPassword = "";
    $dbName = "database";

    //create conection
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);

   if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
   }else{
        $INSERT ="INSERT Into cab3 (FirstName,LastName,rating) values(?, ?, ?)";
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ssi",$FirstName,$LastName,$rating);
        $stmt->execute();
        echo "new record inserted succesfully!";
        $stmt->close();
        $conn->close();
   }
}
else{
    echo "All field are required";
    die();
}
?>