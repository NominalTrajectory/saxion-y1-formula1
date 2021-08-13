<!DOCTYPE html>
<html>
<?php
include './includes/header.inc.php';
?>

<section id="partners-content">
 
<div class="container-partners">
  <h3>FORMULA1 PARTNERS</h3>

<div class="col-md-12">
      <div class="row">


<div class="col-md-3" style="margin-top: 30px!important; float: left;">
          <h4>Emirates Airline</h4>
          <img class="driverphoto" src="./img/emirates.png">
          <a href="https://emirates.com"><button type="button" class="btn btn-primary right-block">Go</button></a>
</div>

<div class="col-md-3" style="margin-top: 30px!important; float: left;">
          <h4>Hotels4Hope</h4>
          <img class="driverphoto" src="./img/h4h.png">
          <a href="https://www.hotelsforhope.com"><button type="button" class="btn btn-primary right-block" onclick="#">Go</button></a>
</div>

<div class="col-md-3" style="margin-top: 30px!important; float: left;">
          <h4>FANATEC</h4>
          <img class="driverphoto" src="./img/fanatec.jpg">
          <a href="https://www.fanatec.com/eu-en/"><button type="button" class="btn btn-primary right-block" onclick="#">Go</button></a>
</div>

<div class="col-md-3" style="margin-top: 30px!important; float: left;">
          <h4>DHL</h4>
          <img class="driverphoto" src="./img/dhl.png">
         <a href="https://www.dhlexpress.nl/nl/dhl/makkelijk-een-pakket-versturen?gclid=EAIaIQobChMI4YfkvvuP3QIVDuh3Ch3ZfgqfEAAYASAAEgJlNvD_BwE"><button type="button" class="btn btn-primary right-block" onclick="#">Go</button></a>
</div>


</div>
</div>

 <img id="banner_3" src="./img/bannerads.png">


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