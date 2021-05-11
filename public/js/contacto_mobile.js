$(document).ready(function() {
    $('#enviar_mble').on('click', function() {
        var url = $('#url').val();

        var nom = $('#nombre_mble').val();
        var email = $('#correo_mble').val();
        var urls = $('#urlSitio_mble').val();
        var emp = $('#nombreEmp_mble').val();

        $.ajax({
            url: url,
            type: "POST",
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                nom: nom,
                email: email,
                urls: urls,
                emp: emp,
            },
            success: function(data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Correo enviado");
                } else {
                    toastr["warning"](
                        "Ha ocurrido un problema, por favor vuelva a intentarlo"
                    );
                    console.log(data);
                }
            },
            error: function(data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                );
                console.log(data);
            }
        })
    })
})