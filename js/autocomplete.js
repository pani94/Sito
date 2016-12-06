$(document).ready(function($){
	$('#pos_materia').autocomplete({
		source:'autocomplete.php',
		minLength:2,
		select: function(event,ui){
             $( this ).val( ui.item.nome );
            return false;
		},
      focus: function( event, ui ) {
           $( this ).val( ui.item.nome );
              return false;
           },
	});
});
