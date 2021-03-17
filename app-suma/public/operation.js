(function($) {
    $(document).ready(function() {

        //Verificar usuario
        $("#boton").click(function() { enviardatos(); });

        //Funciones
        async function enviardatos() {

            console.log($("#numero1").val(), $("#numero2").val());
            $.ajax({
                async: true,
                type: "GET",
                timeout: 60000,
                dataType: "json",
                contentType: "application/x-www-form-urlencoded",
                url: 'recibir',
                data: JSON.stringify({ "number1": $("#numero1").val(), "number2": $("#numero2").val() }),
                beforeSend: function() {},
                success: function(datos) { alert(datos) },
                error: function(error) { alert("Operaciòn fallida") }
            });
        }

    });
})(jQuery);