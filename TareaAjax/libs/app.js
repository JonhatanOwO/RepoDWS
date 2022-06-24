personas=[];
rutaJSON="http://localhost/";
window.onload=iniciarApp;
function iniciarApp()
{
    console.log("cargando datos...");
    url=rutaJSON+"personas/json.php";
    $.getJSON(url, function(data, status){
      localStorage.setItem('personas',JSON.stringify(data));
    });
    personas=JSON.parse(localStorage.getItem('personas'));
    if (personas==null)
    {
      personas=[];
    }
}