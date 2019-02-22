//Documento esté cargado totalmente
$(function(){


	//************************* DataTables *************************

	//Table Customers
	$('#tListarProductos').DataTable({
		responsive:true,
		processing: true,
        serverSide: true,
        aaSorting: [],/*Evita ordenar por defecto primer columna*/
        ajax: {
            url: $('#tListarProductos').data('route'),
            type: "POST",
            data: {"_token":window.laravel.token}
        },
        columns: [
            { data: 'id', name: 'producto.id' },
            { data: 'nombre', name: 'producto.nombre' },
            { data: 'referencia', name: 'producto.referencia' },
            { data: 'precio', name: 'producto.precio' },
            { data: 'unidades_actuales', name: 'producto.unidades_actuales' },
            { data: 'estado.nombre', name: 'estado.nombre' }
        ],
        columnDefs: [
		    {	//Celda Consecutivo Número de Registro, OJO NO ES EL ID
		        targets: 0,
		        orderable:false,
		        createdCell: function (td, cellData, rowData, row, col) {
		        	//Como row inicia desde 0, se le incrementa 1
		            $(td).html(++row);
		        }
		    }
	    ]
	});
});