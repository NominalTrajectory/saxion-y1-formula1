<?php
 $connection = mysqli_connect("localhost","root","","formula1");
 $iddriver = $_GET["iddriver"];
 $result = mysqli_query($connection, "SELECT * FROM driverdetails WHERE iddriver=$iddriver");

 $driver = mysqli_fetch_object($result);
 echo json_encode($driver);
?>
