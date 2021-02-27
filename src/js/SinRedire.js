$(document).ready(function () {


    $(".formulario-contacto").bind("submit", function () {
        $(".form-boton").addClass("is-loading");


        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function (respuesta) {
                if (respuesta == '"ok"') {
                    $(".modal_true").addClass("is-active");
                    $("#limpiar-form")[0].reset();
                } else {

                    $(".modal_false").addClass("is-active");
                }
                $(".form-boton").removeClass("is-loading");

            },
            error: function () {
                $(".modal_error").addClass("is-active");
            }
        });

        return false;
    });


});
