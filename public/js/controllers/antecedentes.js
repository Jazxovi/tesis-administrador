app.controller('antecedentes', ['$scope', function($scope){


	$scope.publica = function(){
		$scope.tipo_escuela = 'Publica';
	};

	$scope.particular = function(){
		$scope.tipo_escuela = 'Particular';
	};

/*********************************************************************/

	$scope.publica2 = function(){
		$scope.tipo_escuela2 = 'Publica';
	};

	$scope.particular2 = function(){
		$scope.tipo_escuela2 = 'Particular';
	};

/*********************************************************************/

	$scope.bachillerato_cobach = function(){
		$scope.tipo_bachillerato = 'Cobach';
	};

	$scope.bachillerato_prepas = function(){
		$scope.tipo_bachillerato = 'Prepas';
	};

	$scope.bachillerato_otros = function(){
		$scope.tipo_bachillerato = '';
	};

/*********************************************************************/

	$scope.plantel_amigos = function(){
		$scope.plantel = 'Amigos';
	};

	$scope.plantel_padres = function(){
		$scope.plantel = 'Padres';
	};

	$scope.plantel_carreras = function(){
		$scope.plantel = 'Carreras';
	};

	$scope.plantel_conviccion = function(){
		$scope.plantel = 'Conviccion';
	};

	$scope.plantel_otros = function(){
		$scope.plantel = '';
	};

/*********************************************************************/

	$scope.si = function(){
		$scope.formextra = false;
		$scope.padeces_de_alguna_enfermedad_o_discapasidad = 'Si';
	};

	$scope.no = function(){
		$scope.formextra = true;
		$scope.padeces_de_alguna_enfermedad_o_discapasidad = 'No';
	};


}]);