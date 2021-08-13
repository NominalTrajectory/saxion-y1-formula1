<!DOCTYPE html>
<html>
<?php
include './includes/dbcon.inc.php';
include './includes/header.inc.php';

$getdrivers = "SELECT * FROM driverdetails";
$drivers = mysqli_query($connection, $getdrivers);

?>

<section id="drivers-content">
 
<div class="container-drivers">
  <h3>FORMULA1 DRIVERS</h3>
  <div class="col-md-12">

      <div class="row">

<?php 
while($row = mysqli_fetch_array($drivers)) {
?>

<div class="col-md-3" style="margin-top: 30px!important; float: left;">
          <form method="post">
          <h4><?php echo $row["firstname"]; echo " "; echo $row["lastname"]; ?></h4>
          <img class="driverphoto" src="./img/<?php echo $row["photo"] ?>">
          <button type="button" class="btn btn-primary right-block" data-toggle="modal" data-target="#details" id="<?php echo $row["iddriver"]; ?>" onclick="showDetails(this);">Details</button>
      </form>
</div>


<?php
}
?>

<?php
       include 'details-modal.php';
?>

<script>
function showDetails(button) {
  var iddriver = button.id;
  $.ajax({
    url: "driver.php",
    method: "GET",
    data: {"iddriver": iddriver},
    success: function(response) {
      var driver = JSON.parse(response);

      $("#nationality").text(driver.nationality);
      $("#dateofbirth").text(driver.dateofbirth);
      $("#teamname").text(driver.teamname);
      $("#season").text(driver.season);
      $("#drivername").text(driver.firstname +" "+ driver.lastname);
      $("#photo").attr('src', "./img/"+driver.photo);
      


    }
  });
}
</script>

</div>
</div>
</div>
</section>







      <img id="banner_2" src="./img/bannerads.png">













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