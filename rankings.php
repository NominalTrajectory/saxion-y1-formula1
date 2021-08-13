<!DOCTYPE html>
<html>
<?php
include './includes/header.inc.php';


?>


<section id="main-content">
<div class="container-lastrace">
  <h3>RANKINGS</h3>

  <h3 id="currentleaders">CURRENT LEADERS: </h3>


<?php
include './includes/dbcon.inc.php';
$leader = 1;
$getcurrentleaders = "SELECT * FROM rankings WHERE season=2015 AND TotalPoints>0 LIMIT 3";
$currentleaders = mysqli_query($connection, $getcurrentleaders);
while ($row = mysqli_fetch_array($currentleaders)) 
{

?>

<h3 id="currentleaders"><?php echo $leader; echo '. '; echo $row["firstname"]; echo "  "; echo $row["lastname"]; ?></h3>

<?php
$leader++;
}
?>







<div class="table-responsive">
        <table class="table">
            <tr><th colspan="5"><h1>Season 2015</h1></th></tr>
        <tr>
             <th width="10%">Position</th>
             <th width="30%">Driver</th>
             <th width="20%">Team</th>
             <th width="20%">Total Points</th>
             
        </tr>
        
<?php
include './includes/dbcon.inc.php';

$getrankings2015 = "SELECT * FROM rankings WHERE season=2015 AND TotalPoints>0";
$rankings2015 = mysqli_query($connection, $getrankings2015);
$position = 1;
while ($row = mysqli_fetch_array($rankings2015)) 
{

?>

        <tr>
           <td><?php echo $position ?></td>
           <td><?php echo $row["firstname"]; echo "  "; echo $row["lastname"]; ?> </td>
           <td><?php echo $row["teamname"]; ?></td>
           <td><?php echo $row["TotalPoints"]; ?></td>
          
        </tr>

<?php
$position++;
}
?>
</table>
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