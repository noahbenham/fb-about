// Graph explorer https://developers.facebook.com/tools/explorer/

var app = angular.module('aboutme', []);

app.controller('MainCtrl', function($scope) {
	var parsedJSON = JSON.parse(JSON.stringify(fbData));
	//$scope.push.apply($scope, parsedJSON);

	$scope.name = parsedJSON['name'];

});
