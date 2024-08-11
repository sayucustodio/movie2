
function calculardiasDiscount() {
    var timeStart = new Date(document.getElementById("fecha_ini").value);
    var timeEnd = new Date(document.getElementById("fecha_fin").value);
    var actualDate = new Date();
    if (timeEnd > timeStart) {
        var diff = timeEnd.getTime() - timeStart.getTime();
        document.getElementById("dia").value = Math.round(diff / (1000 * 60 * 60 *
            24));
        console.log((Math.round(diff / (1000 * 60 * 60 *
            24))));
    } else if (timeEnd != null && timeEnd < timeStart) {
        alert("La fecha de entrega debe ser mayor a la fecha de alquiler");
        document.getElementById("dias").value = 0;
    }
}

