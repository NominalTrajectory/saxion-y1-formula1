<!DOCTYPE html>
<html>
<?php
include './includes/header.inc.php';
include './includes/dbcon.inc.php';

$getteams2013 = "SELECT * FROM teaminfo WHERE season=2013";
$getteams2014 = "SELECT * FROM teaminfo WHERE season=2014";
$getteams2015 = "SELECT * FROM teaminfo WHERE season=2015";

$teams2013 = mysqli_query($connection, $getteams2013);
$teams2014 = mysqli_query($connection, $getteams2014);
$teams2015 = mysqli_query($connection, $getteams2015);


?>


<section id="main-content">
<div class="container-lastrace">
  <h3>TEAMS INFO</h3>

  <div class="s2015">
    
    <div class="table-responsive">
        <table class="table">
            <tr><th colspan="5"><h1>Season 2015</h1></th></tr>
        <tr>
             <th width="30%">Team Name</th>
             <th width="25%">Engine</th>
             <th width="25%">Constructor</th>
             <th width="20%">Chassis</th>
             
        </tr>
        
<?php
while ($row = mysqli_fetch_array($teams2015)) 
{

?>

        <tr>
           <td><?php echo $row["teamname"]; ?></td>
           <td><?php echo $row["engine"]; ?> </td>
           <td><?php echo $row["constructor"]; ?></td>
           <td><?php echo $row["chassis"]; ?></td>
          
        </tr>

<?php
}
?>
</table>
</div>

  </div>

  <div class="s2014">
   <div class="table-responsive">
        <table class="table">
            <tr><th colspan="5"><h1>Season 2014</h1></th></tr>
        <tr>
             <th width="30%">Team Name</th>
             <th width="25%">Engine</th>
             <th width="25%">Constructor</th>
             <th width="20%">Chassis</th>
             
        </tr>
        
<?php
while ($row = mysqli_fetch_array($teams2014)) 
{

?>

        <tr>
           <td><?php echo $row["teamname"]; ?></td>
           <td><?php echo $row["engine"]; ?> </td>
           <td><?php echo $row["constructor"]; ?></td>
           <td><?php echo $row["chassis"]; ?></td>
          
        </tr>

<?php
}
?>
</table>
</div>
  </div>

  <div class="s2013">
 
<div class="table-responsive">
        <table class="table">
            <tr><th colspan="5"><h1>Season 2013</h1></th></tr>
        <tr>
             <th width="30%">Team Name</th>
             <th width="25%">Engine</th>
             <th width="25%">Constructor</th>
             <th width="20%">Chassis</th>
             
        </tr>
        
<?php
while ($row = mysqli_fetch_array($teams2013)) 
{

?>

        <tr>
           <td><?php echo $row["teamname"]; ?></td>
           <td><?php echo $row["engine"]; ?> </td>
           <td><?php echo $row["constructor"]; ?></td>
           <td><?php echo $row["chassis"]; ?></td>
          
        </tr>

<?php
}
?>
</table>
</div>
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