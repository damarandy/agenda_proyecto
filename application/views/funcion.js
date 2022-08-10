
$('#Enviar').click(regresar);
function regresar()
{
$.ajax({
	url:'recibe_datos.php',
	type:'POST',
	contenType:'aplication/json;charset=utf_8',
	dataType:'json',

	data{
		nombre:$('#nombre').value(),
		apellido:$('#apellido').value(),
	}
})
.done(function(data){
	$('salida').append(data[0][0]);
	$('#nombre').value();
	$('#apellido').value();
});

}