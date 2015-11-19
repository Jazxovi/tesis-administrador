app.controller('formulario-registro', ['$scope', function($scope){

	$scope.m = function(){
		$scope.sexo = 'Masculino';
	};

	$scope.f = function(){
		$scope.sexo = 'Femenino';
	};

	$scope.soltero = function(){
		$scope.estado = 'Soltero';
	};

	$scope.casado = function(){
		$scope.estado = 'Casado';
	};

}]);