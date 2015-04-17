angular.module('rameauApp',[])
  .controller('rameauController',['$scope', function($scope){
    
    $scope.rameauNotas = ['C','C#','D','D#','E','F','F#','G','G#','A','A#','B'];

    $scope.rameauModfiers = {
      modes:{
        dorian:{name:'Dorian',description:'Dorian test descriptions'},
        eolian:{name:'Eolian',description:'Eolian teste description'}},
      graus:{
        minor:{name:'Minor',description:'Minor test descriptions'},
        major:{name:'Major',description:'Major teste description'}},
      tipos:{
        natural:{name:'Natural',description:'Natural test descriptions'},
        harmonic:{name:'Harmonic',description:'Harmonic teste description'},
        melodic:{name:'Melodic',description:'Melodic teste description'}}
    };

    $scope.rameauSelectedModfiers = {
      mode:'dorian',
      grau:'minor',//major, minor
      tipo:'natural'//harmonic, natural, melodic
    };

    $scope.currentDescription = $scope.rameauModfiers.modes.dorian.description;

    $scope.select = function(i) {
       $scope.selected = i;
    };

    $scope.itemClass = function(i) {
        return i === $scope.selected ? 'active' : undefined;
    };

    $scope.showDescription = function(e){
      $scope.currentDescription = e;
    };

    var biblioteca = ['C','C#','D','D#','E','F','F#','G','G#','A','A#','B'];

    // Aqui há todas as progressões das escalas
    // O retorno desse função
    function rameauLogics(){
      var l = angular.lowercase($scope.rameauSelectedModfiers.mode+$scope.rameauSelectedModfiers.grau+$scope.rameauSelectedModfiers.tipo);
      switch(l){
        case 'dorianminornatural':
          return [3,5,10];
        break;

        case 'dorianmajornatural':
          return [3,5,10];
        break;

        default:
          return 'error';
        break;
      }
    }

    $scope.generateProgression = function(n){
      $scope.output = [n];

      var noteIndex = jQuery.inArray(n,biblioteca),
      logic = rameauLogics(),
      notes = [];

      for (var i = 0; i < logic.length; i++) {
        if( logic === 'error' ){
          $scope.output = ['A combinação escolhida, '+$scope.rameauSelectedModfiers.mode+', '+$scope.rameauSelectedModfiers.grau+' e '+$scope.rameauSelectedModfiers.tipo+' não gerou resultado. Use outra combinação.'];
        } else {
          notes[i] = noteIndex + logic[i];
          if(notes[i] >= biblioteca.length){notes[i] = notes[i] - biblioteca.length}
          $scope.output.push(biblioteca[notes[i]]);
        }
      };
    }
}]);