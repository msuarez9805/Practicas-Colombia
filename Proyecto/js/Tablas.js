<!-- Funciones para nuevos empleos -->

function agregarFila(){
	var empresa = document.getElementById("empresa").value;
	var ciudad = document.getElementById("ciudad").value;
	var facultad = document.getElementById("carrera").value;

	document.getElementById("tablaprueba").insertRow(-1).innerHTML = ('<td>'+ empresa +'</td><td>'+ ciudad +'</td><td>'+ facultad +'</td>');
}

	function eliminarFila(){
	var table = document.getElementById("tablaprueba");
	var rowCount = table.rows.length;
	if(rowCount <= 1)
		alert('No se puede eliminar el encabezado');
	else
		table.deleteRow(rowCount -1);
}


<!-- Funciones para buscar empleos -->

(function(document){
 'use strict';

 var TableFilter = (function(Arr){
	var _input;
	function _onInputEvent(e){
		_input = e.target;
		var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
		Arr.forEach.call(tables, function(table){
			Arr.forEach.call(table.tBodies, function(tbody){
				Arr.forEach.call(tbody.rows, _filter);
		    	});
		});
	}

	function _filter(row){
		var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
		row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
	}
	return{
		init: function(){
			var inputs = document.getElementsByClassName('table-Filter');
			Arr.forEach.call(inputs, function(input){
				input.oninput = _onInputEvent;
			});
		}
	};
})(Array.prototype);
document.addEventListener('readystatechange',function(){
	if (document.readyState === 'complete'){
		TableFilter.init();
	}
});

})(document);
