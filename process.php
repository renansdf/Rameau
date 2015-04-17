<?php

// IN  | Nota musical que deseja a progressão harmonica
// DO  | Gera uma array de notas musicais harmonicas em relação ao IN
// OUT | Retorna a array gerada
function generateProgression($note,$modifiers){
  $biblioteca = ['C','C#','D','D#','E','F','F#','G','G#','A','A#','B'];
  // find note inside biblioteca
  $noteIndex = array_search($note,$biblioteca);
  $bibliotecaLength = count($biblioteca);
  // selecionar as notas x posições a frente

  //if( $modifiers === 'undefined' || $modifiers == '' ){ $modifiers = 'majnat' };

  switch ( $modifiers ){
    case 'minnat':
      // Escala Menor Natural T S T T S T T | binário 2 1 2 2 1 2 2
      $third = $noteIndex + 3;
      $fourth = $noteIndex + 5;
      $seventh = $noteIndex + 10;

      if ( $third >= $bibliotecaLength ){$third = $third - $bibliotecaLength;}
      if ( $fourth >= $bibliotecaLength ){$fourth = $fourth - $bibliotecaLength;}
      if ( $seventh >= $bibliotecaLength ){$seventh = $seventh - $bibliotecaLength;}

      //montar a array com as notas selecionadas
      $notesArray = [$note, $biblioteca[$third], $biblioteca[$fourth],$biblioteca[$seventh]];
    break;

    case 'majnat':
      // Escala Maior Natural T T S T T T S | binário 2 2 1 2 2 2 1
      $third = $noteIndex + 5;
      $fourth = $noteIndex + 7;
      $seventh = $noteIndex + 11;

      if ( $third >= $bibliotecaLength ){$third = $third - $bibliotecaLength;}
      if ( $fourth >= $bibliotecaLength ){$fourth = $fourth - $bibliotecaLength;}
      if ( $seventh >= $bibliotecaLength ){$seventh = $seventh - $bibliotecaLength;}

      //montar a array com as notas selecionadas
      $notesArray = [$note, $biblioteca[$third], $biblioteca[$fourth],$biblioteca[$seventh]];
    break;
  }

  // retornar array com as notas selecionadas
  return $notesArray;
}

var_dump($_POST);

generateProgression('C','majnat');
?>