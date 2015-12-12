window.onload = cargar;

function cargar() {
    var select = document.getElementById("menu");
    select.addEventListener("change", creaInput, false);
}
function generaInput(numero) {
    var option = document.createElement("input"),
        name = "equipo[" + numero + "]";
    option.setAttribute("required","required");
    option.setAttribute("type", "text");
    option.setAttribute("name", name);
    return option;
}
function generaLabel(numero) {
    var label = document.createElement("label"),
        name = document.createTextNode("Equipo " + numero);
        label.appendChild(name);
    return label;
}

function creaInput() {
    var select = document.getElementById("menu").value,
        divRep,
        div = document.getElementById("input");
        divRep = div.cloneNode(false);
        div.parentNode.replaceChild(divRep, div);
    for(var i = 0; i < select; i += 2) {
        divRep.appendChild(generaLabel(i));
        divRep.appendChild(generaInput(i));
        divRep.appendChild(generaLabel(i + 1));
        divRep.appendChild(generaInput(i + 1));
    }
}
