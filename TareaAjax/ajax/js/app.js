document.getElementById('personasList').onclick=showListPersonas;
document.getElementById('ciudadesList').onclick=showListCiudades; // asigno la funcion limpiarTabla al evento click del boton
personas=[]; // declara el array
ciudades=[];
rutaJSON="http://localhost/";


/// procesar formulario
function showFormCiudades(){
    console.log("showFormCiudades");
    $('#datosCiudades').hide();
    $('#datosPersonas').hide();
    $('#formPersonas').hide();
    $('#formCiudades').show();
}
function showListCiudades(){
    console.log("showListCiudades");
    $('#datosCiudades').show();
    $('#datosPersonas').hide();
    $('#formPersonas').hide();
    $('#formCiudades').hide();
}
function showListPersonas(){
    console.log("ShowListCiudades");
    $('#datosCiudades').hide();
    $('#datosPersonas').show();
    $('#formPersonas').hide();
    $('#formCiudades').hide();
}
function showFormPersonas(){
    console.log("showFormPersonas");
    $('#datosCiudades').hide();
    $('#datosPersonas').hide();
    $('#formPersonas').show();
    $('#formCiudades').hide();
  }
  function iniciarApp()
  {
    console.log("inicializando app");  
    $('#formCiudades').hide();
    $('#formPersonas').hide();
    $('#datosCiudades').hide();
    $('#datosPersonas').hide();
    getCiudades();
    cargarPersonas();
    mostrarPersonas();
    mostrarCiudades();
  }
  function cleanStorage () {
    localStorage.setItem('personas', null);
    localStorage.setItem('ciudades', null);
  }

