var tablaprod;

//Función que se ejecuta al foto
function init(){
	mostrarform(false);
	listar();

	$("#formulario").on("submit",function(e)
	{
		guardaryeditar(e);	
	})
		//función para edición de imagen

    $("#im5").hide();

}

//Función limpiar
function limpiar()
{
    $("#id_user").val("");
	$("#nombre").val("");
    $("#username").val("");
	$("#email").val("");
	$("#password").val("");
	$("#tipo").val("");
}

//Función mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if (flag)
	{
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled",false);
		$("#btnagregar").hide();
	}
	else
	{
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();
	}
}

//Función cancelarform
function cancelarform()
{
	limpiar();
	mostrarform(false);
}

//Función Listar
function listar()
{
	tabla=$('#tbllistado').dataTable(
	{
		"aProcessing": true,//Activamos el procesamiento del datatables
		"aServerSide": true,//Paginación y filtrado realizados por el servidor
		dom: 'Bfrtip',//Definimos los elementos del control de tabla
		buttons: [		          
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdf'
				],
		"ajax":
				{
					url: '../ajax/usuarios.php?op=listar',
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

function guardaryeditar(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnGuardar").prop("disabled",true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/usuarios.php?op=guardaryeditar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos)
		{                    
				bootbox.alert(datos);	          
				mostrarform(false);
				tabla.ajax.reload();
		}

	});
	limpiar();
}

function mostrar(id_user)
{
	$.post("../ajax/usuarios.php?op=mostrar",{id_user : id_user}, function(data, status)
	{
		data = JSON.parse(data);		
		mostrarform(true);

        $("#id_uid_user").val(data.id_user);
        $("#nombre").val(data.nombre);
        $("#username").val(data.username);
        $("#email").val(data.email);
        $("#password").val(data.password);
        $("#tipo").val(data.tipo);  
	})
}


init();