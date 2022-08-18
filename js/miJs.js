// REDUCIR A UNA FUNCION

function eleccion(){

}

function divaumentar(){
    if (document.getElementById("flexRadioDefault1").checked == true) {        
     
        document.getElementById("masVacantes").hidden = false;
        document.getElementById("menosVacantes").hidden = true;

        /* document.getElementById("aumentarvacante").required = true; */

        document.getElementById("aumentarvacante").disabled = false;
        document.getElementById("disminuirvacante").disabled = true;
    }
}

function divdisminuir(){
    if (document.getElementById("flexRadioDefault2").checked == true) {
        
        document.getElementById("menosVacantes").hidden = false;
        document.getElementById("masVacantes").hidden = true;

        document.getElementById("aumentarvacante").disabled = true;
        document.getElementById("disminuirvacante").disabled = false;
        /* document.getElementById("disminuirvacante").required = true; */
    }
}
