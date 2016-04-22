<?php

// Autoloader. Use SPL in a real project.
foreach(array('Server', 'Stats', 'StatsException') as $file) {
	include sprintf('../MCServerStatus/Minecraft/%s.php', $file);
}

$servers = array(
	"play.deluxeflame.com",
);

?><!DOCTYPE html>
<html lang="en">

<head>
    <title>Play | DeluxeFlame</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Minecraft Server">
    <meta name="author" content="Jerred Shepherd">
    <link rel="shortcut icon" href="img/favicon.ico">

    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel='stylesheet' type='text/css'>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<style>tr td,tr th {text-align:center !important}tr td.motd,tr th.motd{text-align:left !important;}</style>
	<style>.status{width:50px;}</style>
	<!-- HTML5 shim -->
    <!--[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<!-- Navbar Start -->

<body>
    <div class="navbar-wrapper">

            <div class="navbar navbar-default navbar-fixed navbar-static-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand accent" href="">DeluxeFlame Network</a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/index.php"><i class="fa fa-home"></i> Portal</a>
                            </li>
							
	                        <li><a href="/News"><i class="fa fa-newspaper-o"></i> News</a>
                            </li>
							
						    <li><a href="/Vote"><i class="fa fa-check-square-o"></i> Vote</a>
                            </li>
							
						    <li><a href="/Shop"><i class="fa fa-shopping-cart"></i> Shop</a>
                            </li>	
							
                            <li><a href="/Forums"><i class="fa fa-comments-o"></i> Forums</a>
                            </li>
							
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Account <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Login</a>
                                    </li>
                                    <li><a href="#">Register</a>
                                    </li>
                                </ul>
                            </li>
                            <a href="play.php" class="btn btn-info navbar-btn navbar-right hidden-sm hidden-xs">IP: Play.DeluxeFlame.com</a>
                        </ul>
                    </div>
                </div>
            </div>

    <!-- Here is the actual page -->

    <div class="container">
	<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
	<div style="bottom: 15%;" class="hidden-xs connect" align="center">
            <h1>Join us at <div style="cursor:pointer;" class="accent" style="cursor:pointer;">Play.DeluxeFlame.com</div>!</h1>
	<br>

	<div class="container">
		<div class="row" style="margin:15px 0;">
			<h1>Server Status</h1>
			<p>This will show the servers that are online and who is on them.</p>
		</div>
		<div class="row">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class="status">Status</th>
						<th class="motd">Server</th>
						<th>Players</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($servers as $server): ?>
					<?php $stats = \Minecraft\Stats::retrieve(new \Minecraft\Server($server)); ?>
					<tr>
						<td>
							<?php if($stats->is_online): ?>
							<span class="badge badge-success"><i class="icon-ok icon-white"></i></span>
							<?php else: ?>
							<span class="badge badge-important"><i class="icon-remove icon-white"></i></span>
							<?php endif; ?>
						</td>
						<td class="motd"><?php echo $stats->motd; ?> <code><?php echo $server; ?></code></td>
						<td><?php printf('%u/%u', $stats->online_players, $stats->max_players); ?></td>
					</tr>
					<?php unset($stats); ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="row">
			<p>This page is using PHP to check if Minecraft servers are online and query their listing information. <a href="http://www.webmaster-source.com/?p=4730">Read more about redwallhp's original PHP 5.2 implementation here.</a></p>
			<iframe src="http://ghbtns.com/github-btn.html?user=redwallhp&repo=MCServerStatus&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>
			<iframe src="http://ghbtns.com/github-btn.html?user=redwallhp&repo=MCServerStatus&type=fork&count=true"allowtransparency="true" frameborder="0" scrolling="0" width="95" height="20"></iframe>
		</div>
	</div>
</body>
</html>