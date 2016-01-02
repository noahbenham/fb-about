<?php

$app_id = "553757138114424";
$app_secret = "*****";

//$response = http_get("http://facebook.com", array("timeout"=>1), $info);
//print_r($info);

?>

<!DOCTYPE html>
<html lang="en" ng-app="aboutme">

  <head>
    <meta charset="utf-8" />
    <title>About Me</title>
    <link data-require="bootstrap-css@3.0.0" data-semver="3.0.0" rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
    <script>document.write('<base href="' + document.location + '" />');</script>
    <link rel="stylesheet" href="http://yandex.st/highlightjs/7.3/styles/zenburn.min.css" />
    <script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
    <script data-require="angular.js@1.4.x" src="http://code.angularjs.org/1.4.3/angular.min.js" data-semver="1.4.3"></script>
    <script src="http://pc035860.github.io/angular-highlightjs/angular-highlightjs.min.js"></script>
    <script src="http://pc035860.github.io/angular-easyfb/angular-easyfb.min.js"></script>

    <script type="text/javascript">
	var accessToken = "<?php echo '*****' ?>";
    </script>

    <script src="aboutme.js"></script>

  </head>
  <body ng-controller="MainCtrl">
    <div class="container">
      <h2>About {{ me.name }}</h2>

      <div>
        <button class="btn btn-primary" ng-click="login()" ng-disabled="loginStatus.status == 'connected'">Connect with Facebook</button>
         &nbsp; 
        <button class="btn btn-danger" ng-click="logout()" ng-disabled="!loginStatus || loginStatus.status != 'connected'">Logout</button>
      </div>
      
      <br>

      <h4>
        Hello<span ng-show="me.name">, {{ me.name }}</span><span ng-show="me.error"></span>!
      </h4>

	<img src="http://graph.facebook.com/537548537/picture?type=large">

      <div class="row">
        <div class="col-md-6">
          <h4 class="text-info">$FB.loginStatus()</h4>
          <div class="code-block" hljs source="loginStatusJSON"></div>
        </div>
        <div class="col-md-6">
          <h4 class="text-info">$FB.api('/10154654443738538?fields=id,name,email')</h4>
          <div class="code-block" hljs source="apiResJSON"></div>
        </div>
      </div>

    </div>

  </body>

</html>
