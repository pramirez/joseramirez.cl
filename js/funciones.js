function cargarContenido(urlDatos){
$.get(urlDatos, function(data) {
	$('#resultado').html(data);
});
}
