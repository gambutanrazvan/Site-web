<?php
$name = $_POST['name'];
$mesaj = $_POST['mesaj'];
   
    $host = "localhost";
    $dbUsername="root";
    $dbPassword = "";
    $dbName = "database";
    //create conection
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);
   if(mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
   }else{
        $INSERT ="INSERT Into form (name,mesaj) values(?, ?)";
        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("ss",$name,$mesaj);
        $stmt->execute();
        echo "new record inserted succesfully!";
        $stmt->close();
        $conn->close();
   }

?>