app.controller('padres', ['$scope', function($scope){

	$scope.si = function(){
		$scope.padres = 'Si';
	};

	$scope.no = function(){
		$scope.padres = 'No';
	};

}]);
