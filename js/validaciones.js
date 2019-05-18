function validaciones() {
valido = false;

if(document.getElementById('id').value == "") {
	swal("","El campo Id es Requerido","warning");
}
else if (document.getElementById('nombre').value == "") {
 swal("","El campo Nombre es Requerido","warning");
}
else if (document.getElementById('apellido').value == "") {
 swal("","El campo apellido es Requerido","warning");
}
else if (document.getElementById('edad').value == "") {
 swal("","El campo edad es Requerido","warning");
}
else {

	swal("","Informacion Enviada con Exito","success");
	valido = true;
}
return valido;
}
function confirmarAvance() {
	swal({
  title: "Estas Seguro?",
  text: "si decide avanzar es bajo su consentimiento",
  icon: "warning",
  buttons: true,
  dangerMode: true,
}).then((willDelete) => {
  if (willDelete) {
    window.location.href= 'index.php';
  } 
	});
}