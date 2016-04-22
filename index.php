<?php
  error_reporting(0);
  $serverIP = "Play.DeluxeFlame.com";


  require_once('assets/jsCache/jsCache.class.php');
  $players = new jsCache("players", "https://api.jack.wtf/mcplayers.php?s=" . $serverIP, 10);
  $count = $players->readData();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal | DeluxeFlame</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">	
	
<script src="http://www.google.com/jsapi"></script>
<script>
 google.load("jquery", "1");
 google.load("jqueryui", "1");
</script>


<script>
$(document).ready(function()
{
 $('body').hide().fadeIn(2000); 
});
</script>


  </head>
<body>
		
	
	
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img src="assets/img/DFPortalTRAS.png" class="logo" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-2 col-md-offset-2">
          <a href="/News">
            <div class="panel panel-extra">
              <div class="panel-body">
                <p><i class="fa fa-newspaper-o"></i></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-2">
          <a href="/Vote">
            <div class="panel panel-extra">
              <div class="panel-body">
                <p><i class="fa fa-check"></i></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-2">
          <a href="/Shop">
            <div class="panel panel-extra">
              <div class="panel-body">
                <p><i class="fa fa-shopping-cart"></i></p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-2">
          <a href="/Forums">
            <div class="panel panel-extra">
              <div class="panel-body">
                <p><i class="fa fa-comments-o"></i></p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-status">
            <div class="panel-body">
              <a  href="/staff.html" style="margin-top: 8px;">Click to view our staff members.<a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-status">
            <div class="panel-body">
              <p style="margin-top: 8px;">Join <strong><?php echo $count; ?></strong> other players at <strong id="serv"><?php echo $serverIP; ?></strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/firefly.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script>
      $.firefly({
        color: '#7a91c1',
        minPixel: 1,
        maxPixel: 3,
        total : 20,
      });
      $.firefly({
        color: '#ffff83',
        minPixel: 1,
        maxPixel: 3,
        total : 20,
      });
      $.firefly({
        color: '#6ab537',
        minPixel: 1,
        maxPixel: 3,
        total : 20,
      });
    </script>
  </body>
</html>
