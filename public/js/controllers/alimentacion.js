app.controller('alimentacion', ['$scope', function($scope){

	$scope.siempre = function(){
		$scope.ya_consumiste_alimento = 'Siempre';
	};

	$scope.casi_siempre = function(){
		$scope.ya_consumiste_alimento = 'Casi siempre';
	};

	$scope.nunca = function(){
		$scope.ya_consumiste_alimento = 'Nunca';
	};

	$scope.carne = function(){
		$scope.consumes_alimento = 'Carne';
	};

	$scope.pollo = function(){
		$scope.consumes_alimento = 'Pollo';
	};

	$scope.huevo = function(){
		$scope.consumes_alimento = 'Huevo';
	};

	$scope.leche = function(){
		$scope.consumes_alimento = 'Leche';
	};

	$scope.verduras = function(){
		$scope.consumes_alimento = 'Verduras';
	};

	$scope.tortillas = function(){
		$scope.consumes_alimento = 'Tortillas';
	};

	$scope.pan = function(){
		$scope.consumes_alimento = 'Pan';
	};

	$scope.refresco = function(){
		$scope.consumes_alimento = 'Refresco';
	};

}]);
