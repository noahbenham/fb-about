<?php

$app_id = "553757138114424";
$app_secret = "****";

$url = "https://graph.facebook.com/10154654443738538?fields=id,name,email,link&access_token=" . $app_id . '|' . $app_secret;

$fbData = file_get_contents($url);

?>

<!DOCTYPE html>
<html lang="en" ng-app="aboutme">

  <head>
    <meta charset="utf-8" />
    <title>Contact Me</title>
    <link data-require="bootstrap-css@3.0.0" data-semver="3.0.0" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    <script data-require="angular.js@1.4.x" src="http://code.angularjs.org/1.4.3/angular.min.js" data-semver="1.4.3"></script>

    <script type="text/javascript">
	var fbData = <?php echo $fbData; ?>;
    </script>

    <script src="aboutme.js"></script>

  </head>
  <body ng-controller="MainCtrl">
    <div class="container">
      <h2>Contact {{ name }}</h2>

	<br />

	<div class="col-xs-3"><img src="http://graph.facebook.com/537548537/picture?type=large" class="img-circle" alt="Responsive image"></div>
	<div class="col-xs-6">
		<a href="mailto:{{ email }}">{{ email }}</a>
		<br /><br />
		<a href="{{ link }}" class="btn btn-primary">View on Facebook</a>
	</div>

    </div>

  </body>

</html>
