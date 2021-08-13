<!DOCTYPE html>

<?php
include './includes/header.inc.php';
?>
<html>


<section id="main-content">
<div class="container-lastrace">
  <h3>CHECK RACE RESULT</h3>


  <h4 id="input-h">Enter race number: </h4>
  <form action="raceresult.php" method="post">
<input type="text" name="racename" class="form-control" />
<input type="submit" name="check" class="btn btn-primary left-block" value="Check" />
</form>
 
        
<?php

include './includes/dbcon.inc.php';

if(isset($_POST["check"])) {
	$sql = "CALL getraceresults('".$_POST["racename"]."')";
	$result = mysqli_query($connection, $sql);
	echo '<div class="table-responsive">
        <table class="table">
            <tr><th colspan="5"><h1>Race Results</h1></th></tr>
        <tr>
             <th width="10%">Position</th>
             <th width="30%">Driver</th>
             <th width="20%">Team</th>
             <th width="20%">Laps</th>
             <th width="20%">Result</th>
        </tr>';
while ($row = mysqli_fetch_array($result)) 
{ 


        echo '<tr>';
        echo '<td>'; echo $row["position"]; echo '</td>';
           echo '<td>'; echo $row["firstname"]; echo "  "; echo $row["lastname"]; echo '</td>';
           echo '<td>'; echo $row["teamname"]; echo '</td>';
           echo '<td>'; echo $row["laps"]; echo '</td>';
           echo '<td>'; echo $row["result"]; echo '</td>';
        echo '</tr>'; 


}
echo '</table>';
include './includes/dbcon.inc.php';
$getlap = "CALL getfastestlap('".$_POST["racename"]."')";
$fastestlap = mysqli_query($connection, $getlap);

while ($row = mysqli_fetch_array($fastestlap)) { 
echo '<div class="fastestlap">';
  echo '<h3>Fastest lap driven by: <a>'; echo $row["firstname"]; echo " "; echo $row["lastname"]; echo '</a></h3>';
  echo '<h3>From: <a>'; echo $row["teamname"]; echo '</a></h3>';
  echo '<h3>Laptime: <a>'; echo $row["laptime"]; echo '</a></h3>';

}
}
?>

</div>
</div>
</section>




<script src="js/jquery.backgroundvideo.min.js"></script>
    <script>
  $(document).ready(function() {
    var videobackground = new $.backgroundVideo($('body'), {
      "align": "centerXY",
      "width": 1280,
      "height": 720,
      "path": "img/",
      "filename": "backloop",
      "types": ["mp4","ogg","webm"],
      "preload": true,
      "autoplay": true,
      "loop": true
    });
  });
</script>

</body>
</html>