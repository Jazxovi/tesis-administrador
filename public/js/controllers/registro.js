app.controller('registro', ['$scope', function($scope){

	$scope.tipo = 'button';

	$scope.registro = function(){
		if ($scope.nombres != null ) {
			$scope.tipo = 'submit';
		};
	};

}]);