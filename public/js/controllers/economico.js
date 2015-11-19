app.controller('economico', ['$scope', function($scope){

	$scope.padre = function(){
		$scope.sosten_economico = 'Padre';
	};

	$scope.madre = function(){
		$scope.sosten_economico = 'Madre';
	};

	$scope.ambos = function(){
		$scope.sosten_economico = 'Ambos';
	};

	$scope.familiar = function(){
		$scope.sosten_economico = 'Familiar';
	};

	$scope.el_mismo_alumno = function(){
		$scope.sosten_economico = 'El mismo alumno';
	};

	$scope.casa = function(){
		$scope.tipo_vivienda = 'Casa';
	};

	$scope.apartamento = function(){
		$scope.tipo_vivienda = 'Apartamento';
	};

	$scope.vivienda_rural = function(){
		$scope.tipo_vivienda = 'Vivienda rural';
	};
}]);