var tablaprod;

//Función que se ejecuta al foto
function init(){
	mostrarform2(false);
	listar2();

	$("#formulario2").on("submit",function(e)
	{
		guardaryeditar2(e);	
	})
		//función para edición de imagen

    $("#im5").hide();

}

//Función limpiar2
function limpiar2()
{
    $("#id_trainer").val("");
	$("#nombre").val("");
    $("#instagram").val("");
	$("#youtube_channel").val("");
	$("#email").val("");
}

//Función mostrar formulario
function mostrarform2(flag)
{
	limpiar2();
	if (flag)
	{
		$("#listadoregistros2").hide();
		$("#formularioregistros2").show();
		$("#btnGuardar2").prop("disabled",false);
		$("#btnagregar2").hide();
	}
	else
	{
		$("#listadoregistros2").show();
		$("#formularioregistros2").hide();
		$("#btnagregar2").show();
	}
}

//Función cancelarform2
function cancelarform2()
{
	limpiar2();
	mostrarform2(false);
}

//Función Listar
function listar2()
{
	tabla2=$('#tbllistado2').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
		"aServerSide": true,//Paginación y filtrado realizados por el servidor
		dom: 'Bfrtip',//Definimos los elementos del control de tabla2
		buttons: [		          
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdf'
				],
		"ajax":
				{
					url: '../ajax/productos.php?op=listar2',
					type : "get",
					dataType : "json",						
					error: function(e){
						console.log(e.responseText);	
					}
				},
		"bDestroy": true,
		"iDisplayLength": 5,//Paginación
		"order": [[ 0, "desc" ]]//Ordenar (columna,orden)
	}).DataTable();
}
//Función para guardar o editar

function guardaryeditar2(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar2").prop("disabled",true);
	var formData = new FormData($("#formulario2")[0]);

	$.ajax({
		url: "../ajax/productos.php?op=guardaryeditar2",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos)
		{                    
				bootbox.alert(datos);	          
				mostrarform2(false);
				tabla2.ajax.reload();
		}

	});
	limpiar2();
}

function mostrar2(id_trainer)
{
	$.post("../ajax/producto.php?op=mostrar2",{id_trainer : id_trainer}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform2(true);

        $("#id_trainer").val(data.id_trainer);
        $("#nombre").val(data.nombre);
        $("#instagram").val(data.instagram);
        $("#youtube_channel").val(data.youtube_channel);
        $("#im5").show();
        $("#im5").attr("src","../stuff/sitio/"+data.foto);
        $("#ia5").val(data.foto);
        $("#email").val(data.email);  
	})
}


init();