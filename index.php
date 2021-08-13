<!DOCTYPE html>
<?php
session_start();
include './includes/dbcon.inc.php';

$sql = "SELECT * FROM actualorupcomingrace";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);
$idrace = $row["idrace"];


$getraceresult = "CALL getraceresults($idrace)";
$raceresult = mysqli_query($connection, $getraceresult);


?>

<html>
<?php 
include './includes/header.inc.php';
?>


<section id="main-content">
<div class="container-lastrace">
  <h3>ACTUAL (LAST) RACE RESULT</h3>

<?php
include './includes/dbcon.inc.php';
$sql = "SELECT * FROM actualorupcomingrace";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_array($result)) 
{
?>

<h1 class="racename"><?php echo $row["name"]; ?></h1>
<div class="clearfix">
<div class="racebox">
<h2 class="raceinfo">Date: <?php echo $row["date"]; ?> </h2>
<h2 class="raceinfo">Track: <?php echo $row["trackName"]; ?> </h2>
<h2 class="raceinfo">Country: <?php echo $row["country"]; ?> </h2>
<h2 class="raceinfo">City: <?php echo $row["city"]; ?> </h2>
<h2 class="raceinfo">Length: <?php echo $row["length"]; ?> </h2>
<h2 class="raceinfo">Laps: <?php echo $row["laps"]; ?> </h2>
</div>
<div class="racebox">
<img class="imgtrack" src="./img/<?php echo $row["layout"] ?>">
</div>
</div>
<?php
}
?>


        <div class="table-responsive">
        <table class="table">
            <tr><th colspan="5"><h1>Race Results</h1></th></tr>
        <tr>
             <th width="10%">Position</th>
             <th width="30%">Driver</th>
             <th width="20%">Team</th>
             <th width="20%">Laps</th>
             <th width="20%">Result</th>
        </tr>
        
<?php
while ($row = mysqli_fetch_array($raceresult)) 
{

?>

        <tr>
           <td><?php echo $row["position"]; ?></td>
           <td><?php echo $row["firstname"]; echo "  "; echo $row["lastname"]; ?> </td>
           <td><?php echo $row["teamname"]; ?></td>
           <td><?php echo $row["laps"]; ?></td>
           <td><?php echo $row["result"]; ?></td>
        </tr>

<?php
}
?>
</table>
</div>


<div class="fastestlap">


<?php
include './includes/dbcon.inc.php';
$sql = "SELECT * FROM actualorupcomingrace";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_array($result);
$raceid = $row["idrace"];

$getlap = "CALL getfastestlap($raceid)";
$fastestlap = mysqli_query($connection, $getlap);

while ($row = mysqli_fetch_array($fastestlap)) { 

  echo '<h3>Fastest lap driven by: <a>'; echo $row["firstname"]; echo " "; echo $row["lastname"]; echo '</a></h3>';
  echo '<h3>From: <a>'; echo $row["teamname"]; echo '</a></h3>';
  echo '<h3>Laptime: <a>'; echo $row["laptime"]; echo '</a></h3>';

}
?>
</div>
</div>
</section>

</div>
 </div>

 <section id="boxes">
      <div class="container">
        <div class="box">
          <a href="https://www.motorsport.com/f1/news/"><img src="./img/f1logo.png"></a>
          <h3>NEWS</h3>
          <p>Read latest news about Formula1 World.</p>
        </div>
        <div class="box">
          <a href="https://www.youtube.com/user/Formula1"><img src="./img/f1vid.png"></a>
          <h3>VIDEOS</h3>
          <p>Check our video channel to see Formula1 clips.</p>
        </div>
        <div class="box">
          <img src="./img/f1merch.png">
          <h3>MERCH</h3>
          <p>Coming soon. Purchase official Formula1 merchandise.</p>
        </div>
      </div>
    </section>

    <section>
    	<img id="banner" src="./img/bannerads.png">
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

<footer>
<p>Developed by Ivan Shishkalov, Di-Qi Sun, Andrey Kurochkin | Project Formula One &copy; 2018</p>
<p>Mobile version is temporarily unavailable</p>
</footer>

</body>
</html>
