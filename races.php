<!DOCTYPE html>
<html>
<?php
include './includes/header.inc.php';
include './includes/dbcon.inc.php';

$getracelist = "SELECT * FROM racelist WHERE season BETWEEN 2013 AND 2015 ORDER BY date DESC";
$racelist = mysqli_query($connection, $getracelist);
?>

<section id="races-content">
<div class="container-races">
  <h3>RACES AND TRACKS</h3>


<div class="table-races">
        <table class="table">
            <tr><th colspan="5"><h1></h1></th></tr>
        <tr>
             <th width="10%">Race N</th>
             <th width="10%">Date</th>
             <th width="10%">Season</th>
             <th width="20%">Race Name</th>
             <th width="20%">Track</th>
             <th width="10%">Country</th>
             <th width="10%">City</th>
             <th width="10%"></th>
        </tr>


<?php
while($row = mysqli_fetch_array($racelist)) {
?>

 <tr>
           <td><?php echo $row["idrace"]; ?></td>
           <td><?php echo $row["date"]; ?></td>
           <td><?php echo $row["season"]; ?></td>
           <td><?php echo $row["name"]; ?> </td>
           <td><?php echo $row["trackname"]; ?></td>
           <td><?php echo $row["country"]; ?></td>
           <td><?php echo $row["city"]; ?></td>
           <td><button type="button" class="btn btn-primary right-block" data-toggle="modal" data-target="#details" id="<?php echo $row["idrace"]; ?>" onclick="showDetails(this);">Details</button></td>
        </tr>

<?php 
}
?>

<?php
include './includes/dbcon.inc.php';
$getlap = "CALL getfastestlap($idrace)";
$fastestlap = mysqli_query($connection, $getlap);

?>

<?php
       include 'racedetails_modal.php';
?>



<script>
function showDetails(button) {
  var idrace = button.id;
  $.ajax({
    url: "race.php",
    method: "GET",
    data: {"idrace": idrace},
    success: function(response) {
      var race = JSON.parse(response);

      
    $("#racename").text(race.name);
      $("#layout").attr('src', "./img/"+race.layout);
      $("#trackname").text(race.trackname);
      $("#length").text(race.length);
      $("#laps").text(race.laps);

    }
  });
}
</script>



</table>
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