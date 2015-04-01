// IN  | Nota musical que deseja a progressão harmonica
// DO  | Gera uma array de notas musicais harmonicas em relação ao IN
// OUT | Retorna a array gerada
function generateProgression(note,modifiers){
  var biblioteca = ['C','C#','D','D#','E','F','F#','G','G#','A','A#','B'];
  // find note inside biblioteca
  var noteIndex = jQuery.inArray(note,biblioteca),
      bibliotecaLength = biblioteca.length;
  // selecionar as notas x posições a frente

  if( modifiers === undefined || modifiers.length == 0 ){ modifiers = ['majnat'] }

  switch ( modifiers.join('') ){
    case 'minnat':
      // Escala Menor Natural T S T T S T T | binário 2 1 2 2 1 2 2
      var third = noteIndex + 3,
          fourth = noteIndex + 5,
          seventh = noteIndex + 10;

      if ( third >= bibliotecaLength ){var third = third - bibliotecaLength;}
      if ( fourth >= bibliotecaLength ){var fourth = fourth - bibliotecaLength;}
      if ( seventh >= bibliotecaLength ){var seventh = seventh - bibliotecaLength;}

      //montar a array com as notas selecionadas
      var notesArray = [note, biblioteca[third], biblioteca[fourth],biblioteca[seventh]];
    break;

    case 'majnat':
      // Escala Maior Natural T T S T T T S | binário 2 2 1 2 2 2 1
      var third = noteIndex + 5,
          fourth = noteIndex + 7,
          seventh = noteIndex + 11;

      if ( third >= bibliotecaLength ){var third = third - bibliotecaLength;}
      if ( fourth >= bibliotecaLength ){var fourth = fourth - bibliotecaLength;}
      if ( seventh >= bibliotecaLength ){var seventh = seventh - bibliotecaLength;}

      //montar a array com as notas selecionadas
      var notesArray = [note, biblioteca[third], biblioteca[fourth],biblioteca[seventh]];
    break;
  }

  // retornar array com as notas selecionadas
  return notesArray;
}
// IN  | Array de notas musicais a serem servidas para o usuário
// DO  | Cria dinâmicamente uma lista de elementos html
// OUT | Injeta o html na página
function printResult(notesArray){
  // pra cada nota dentro de notesArray gerar uma <li> com a note dentro
  // inserir essa array na página
  console.log(notesArray);
}

function getNoteAndSemitone(){
  console.log('get note and semitone start');
  var nota;
  $('#notas li').each(function(){
    if( $(this).hasClass('active') ) {
        console.log('#notas li iteration found active');
        nota = $(this).attr('data-nota');
        console.log(nota);
      }
  });
  if( typeof(nota) == 'undefined' ){
    nota = 'C';
    $('#notas li[data-nota="C"]').addClass('active');
  }
  $('#semitons li').each(function(){
    if( $(this).hasClass('active') ) {
        nota = nota+$(this).attr('data-modificador');
        console.log(nota);
      }
  });
  console.log('get note and semiton end');
}

jQuery(document).ready(function($) {
  $('li').click(function(){
    $(this).addClass('active');
    console.log($(this));
    getNoteAndSemitone();
    // var modifiers = [];
    // $('#diatonic li').each(function(){
    //   if( $(this).hasClass('active') ) {
    //     modifiers.push($(this).attr('data-modificador'));
    //   }
    // });
    // $('#semitons li').each(function(){
    //   if( $(this).hasClass('active') ) {
    //     modifiers.push($(this).attr('data-modificador'));
    //   }
    // });
    // printResult(generateProgression($(this).attr('data-nota'),modifiers));
  });
});