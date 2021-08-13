<?php
include './includes/dbcon.inc.php';
$getlap = "CALL getfastestlap(24)";
$fastestlap = mysqli_query($connection, $getlap);

while($row = mysqli_fetch_array($fastestlap)) {
?>
	<a><?php echo $row["firstname"]; ?>

<?php		
}
?>