var tablaprod;

//Función que se ejecuta al foto
function init(){
	mostrarform1(false);
	listar1();

	$("#formulario1").on("submit",function(e)
	{
		guardaryeditar1(e);	
	})
		//función para edición de imagen

    $("#im5").hide();

}

//Función limpiar1
function limpiar1()
{
    $("#id_prod").val("");
	$("#nombre").val("");
    $("#descripcion").val("");
	$("#precio").val("");
	$("#tipo").val("");
}

//Función mostrar formulario
function mostrarform1(flag)
{
	limpiar1();
	if (flag)
	{
		$("#listadoregistros1").hide();
		$("#formularioregistros1").show();
		$("#btnGuardar1").prop("disabled",false);
		$("#btnagregar1").hide();
	}
	else
	{
		$("#listadoregistros1").show();
		$("#formularioregistros1").hide();
		$("#btnagregar1").show();
	}
}

//Función cancelarform1
function cancelarform1()
{
	limpiar1();
	mostrarform1(false);
}

//Función Listar
function listar1()
{
	tabla1=$('#tbllistado1').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
		"aServerSide": true,//Paginación y filtrado realizados por el servidor
		dom: 'Bfrtip',//Definimos los elementos del control de tabla1
		buttons: [		          
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdf'
				],
		"ajax":
				{
					url: '../ajax/productos.php?op=listar1',
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

function guardaryeditar1(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar1").prop("disabled",true);
	var formData = new FormData($("#formulario1")[0]);

	$.ajax({
		url: "../ajax/productos.php?op=guardaryeditar1",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos)
		{                    
				bootbox.alert(datos);	          
				mostrarform1(false);
				tabla1.ajax.reload();
		}

	});
	limpiar1();
}

function mostrar1(id_prod)
{
	$.post("../ajax/productos.php?op=mostrar1",{id_prod : id_prod}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform1(true);

        $("#id_uid_prod").val(data.id_prod);
        $("#nombre").val(data.nombre);
        $("#descripcion").val(data.descripcion);
        $("#precio").val(data.precio);
        $("#im5").show();
        $("#im5").attr("src","../public/images/productos"+data.foto);
        $("#ia5").val(data.foto);
        $("#tipo").val(data.tipo);  
	})
}


init();