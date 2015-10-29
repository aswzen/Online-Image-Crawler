app.controller("mainController", function($scope, $http){

    $scope.results = [];
	$scope.keywordsText = null;

    $scope.init = function() {	
		$scope.doSearch();
    };

    $scope.doSearch = function() {
    	$scope.results = [];
       	if($scope.keywordsText != null){
			$http.get('http://localhost/oic/cap.php?word='+$scope.keywordsText).success(function(data) {
	            angular.forEach(data['collections'], function(value, index){
	                $scope.results.push(value);
			    });
			}).error(function(error) {

			});
		}
    };


});

