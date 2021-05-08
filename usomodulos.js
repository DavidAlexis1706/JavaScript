//import { validateCurp } from "javaScript/modulos.js";


function validaCurp(){
    let curp = document.getElementById("txtCurp").value;
    if (validateCurp(curp)){
        alert("La curp es correcta");
     } else {
        alert("La curp NO es correcta");
     }
}

document.getElementById("btnValidar").addEventListener("click",validaCurp);

document.getElementById("btnEstudiantes").addEventListener("click",getExternalData);

function getExternalData() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        jsonToTable(this.response);
      }
    };
    xmlhttp.open("GET", "javaScript/estudiantes.php", true);
    xmlhttp.send();
}

function jsonToTable(json){
    let estudiantes = JSON.parse(json);
    let tabla="<table border='1'>";
    estudiantes.forEach(estdte => {
        tabla +="<tr>";
        tabla +="<td>"+ estdte.nocontrol + "</td>";
        tabla +="<td>"+ estdte.nombre + "</td>";
        tabla +="<td>"+ estdte.correo + "</td>";
        tabla +="</tr>";
    });
    tabla +="</table>";
    document.getElementById("estudiantes").innerHTML=tabla;
}