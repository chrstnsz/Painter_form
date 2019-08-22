"use strict";

$(function(){
	$('#shapes').change(function(){

		var shape = $('#shapes').val();
			$("label[for=rotation], #rotation").show();

		switch(shape){
			case 'square':
			$.get('php/form/square.formdata.php', function(data){
				$('.points').html(data);
			});
			break;

			case 'rectangle':
			$.get('php/form/rectangle.formdata.php', function(data){
				$('.points').html(data);
			});
			break;

			case 'triangle':
			$.get('php/form/triangle.formdata.php', function(data){
				$('.points').html(data);
			});
			$("label[for=rotation], #rotation").hide();
			break;

			case 'elipse':
			$.get('php/form/elipse.formdata.php', function(data){
				$('.points').html(data);
			});
			break;

			case 'circle':
			$.get('php/form/circle.formdata.php', function(data){
				$('.points').html(data);
			});
			break;
		}

	});
});
