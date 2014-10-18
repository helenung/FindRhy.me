var app = angular.module('rhymeApp', []);
app.controller('indexCtrl', ['$scope', function($scope){

    $scope.init = function(){
        $scope.nogeo = false;
        $scope.success = false;
    };


    function getLocation(callback) {
        if (navigator.geolocation) {
            $scope.nogeo = false;
            navigator.geolocation.getCurrentPosition(callback);
        } else {
            $scope.nogeo = true;
        }
    }

    $scope.sendPoem = function(){
        getLocation($scope.send);
    };

    $scope.getPoems = function(){
        getLocation(getp);
    };

    $scope.send = function(position){
        $scope.lat = position.coords.latitude;
        $scope.long = position.coords.longitude;
        $.post('input.php', {"lat":$scope.lat, "long":$scope.long, "submission": $scope.submission, "author": $scope.author}, function(data){
            $scope.success = true;
            $scope.$apply();
            console.log("success");
        });
    }

    function getp(position) {
        $.post('output.php', {"lat":position.coords.latitude, "long":position.coords.longitude}, function(data){
            console.log(data);
        });
    }


}]);
