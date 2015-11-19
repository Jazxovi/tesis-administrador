app.controller('aspectos_familiares', ['$scope', function($scope){

	$scope.comida = function(){
		$scope.convive_familia = 'En la comida';
	};

	$scope.xy = function(){
		$scope.convive_familia = '';	
	};

	$scope.cena = function(){
		$scope.convive_familia = 'En la cena';
	};

	$scope.tv = function(){
		$scope.convive_familia = 'Viendo T.V';
	};

	$scope.cine = function(){
		$scope.lugares = 'Cine';
	};

	$scope.parque = function(){
		$scope.lugares = 'Parque';
	};

	$scope.familiares = function(){
		$scope.lugares = 'Familiares';
	};

	$scope.otros = function(){
		$scope.lugares = '';
	};

	
	$scope.comunicacion_familiar1 = function(){
		$scope.comunicacion = 'Buena';
	};

	$scope.comunicacion_familiar2 = function(){
		$scope.comunicacion = 'Regular';
	};

	$scope.comunicacion_familiar3 = function(){
		$scope.comunicacion = 'Mala';
	};

}]);





