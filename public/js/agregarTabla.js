$(document).ready(function(){
    $("#agregar").click(function(){
        agregar();
    });
});

var cont=0;
total=0;
subtotal=[];
$("#guardar").hide();

function agregar(){
    pelicula_id=$("#peli_id").val();
    pelicula=$("#peli_id option:selected").text();
    price=$("#importe").val();
    if(pelicula_id != "" && price != "") {
        subtotal[cont]=price;
        total=total+subtotal[cont];

        var fila='<tr class="selected" id="fila'+cont +'"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' + cont +');"><i class="fa fa-times"></i></button></td><td><input type="hidden" name="pelicula_id[]" value="'+ pelicula_id+'">'+pelicula+'</td><td><input type="hidden" id="price[]" name="price[]" value="'+price+'"><input class="form-control"type="number" id="price[]" value="'+price+'" disabled></td><td align="right">$'+subtotal[cont]+'</td></td></tr>';
    cont++;
    limpiar();
 totales();
    evaluar();
    $("#detalles").append(fila);
    } 
}
function limpiar(){
    $("#fecha_ini").val("");
    $("#fecha_fin").val("");
   // $("#importe").val("");
}
function totales(){

    $("#total").html("$"+total);
}
function evaluar(){
    if(total>0){
        $("#guardar").show();

    }else{
        $("#guardar").hide(); 
    }
}
function eliminar(index){
total=total-subtotal[index];
 $("#total").html("$"+total);
 $("#fila"+index).remove();
 evaluar();
}
