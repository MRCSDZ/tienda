$(document).ready(function() {

    function ConversionCaja()
	    {
            var numero1 = parseFloat(document.productos.cantidad.value);
            var numero2 = parseFloat(document.form1.dos.value);
            var Resultado = numero1 * numero2;
            document.form1.res.value= Resultado;
        }            
}