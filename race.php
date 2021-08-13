<?php
 $connection = mysqli_connect("localhost","root","","formula1");
 $idrace = $_GET["idrace"];
 $result = mysqli_query($connection, "SELECT * FROM racelist WHERE idrace=$idrace");

 $race = mysqli_fetch_object($result);
 echo json_encode($race);

include './includes/dbcon.inc.php';
$getlap = "CALL getfastestlap($idrace)";
$fastestlap = mysqli_query($connection, $getlap);

?>
