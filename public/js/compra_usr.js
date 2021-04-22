$(document).ready(function () {

    var Tipo_Entrega = $('[name="Tipo_Entrega"]:checked').val();

    $('#Tipo_Entrega[value="1"]').on('click', function () {
        if (!$('input[name="tienda_id"]').checked) {
            $('#Tipo_Entrega[value="1"]').checked = false;
        }
    })

    if (!$('input[name="Tipo_Entrega"]').checked) {
        $('#siguienteButton').attr('disabled', true);
    }

    $('#buttonSig').attr('disabled', true);

    $('input[name="tienda_id"]').on('click', function () {
        $('#Tipo_Entrega[value="1"]').checked = true;
    })

    $('#buttonSig').on('click', function () {
        var rut = $('#NuevoRut').val();
        var nom = $('#NuevoNombre').val()
        var email = $('#NuevoEmail').val()
        var apel = $('#NuevoApellido').val()
        var tel = $('#Nuevo_nmro').val()
        if (nom == "" && apel == "" && rut == "" && tel == "" && email == "") {
            toastr["warning"]("Por favor Rellene los campos");
            return false;
        }
    })


    $('#GuardarDir').on('click', function () {
        var url3 = $('#url3').val();
        var direccion = $('#NuevaDireccion').val();
        var reg = $('#regiones').val();
        var com = $('#comunas').val();

        var nom = $('#NombreDireccion').val()
        var apel = $('#ApellidoDireccion').val()
        var detalle_1 = $('#detalle_1').val()
        var detalle_2 = $('#detalle_2').val()

        var token = $("meta[name='csrf-token']").attr("content")
        $('#dirSelect').text($('#comunas').val() + ', ' + $('#regiones').val());
        $('#dirSelect1').text($('#comunas').val() + ', ' + $('#regiones').val());
        if (nom == "") {
            toastr["warning"]("Por favor ingrese su Nombre");
            return false;
        }
        if (apel == "") {
            toastr["warning"]("Por favor ingrese su Apellido");
            return false;
        }

        if (direccion == "") {
            toastr["warning"]("Por favor ingrese su Direccion");
            return false;
        }
        $.ajax({
            url: url3,
            type: 'GET',
            data: {
                _token: token,
                nom: nom,
                apel: apel,
                direccion: direccion,
                apel: apel,
                reg: reg,
                com: com,
                detalle_1: detalle_1,
                detalle_2: detalle_2,

            },
            success: function (data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Su informacion ha sido guardada correctamente");
                    console.log('data')
                    $('#siguienteButton').attr('disabled', false);
                    $('#msg').text(data.p_Despacho[0]);
                    $('#cerrar_n_direccion').click();
                } else {
                    toastr["warning"]("Ha ocurrido un problema, por favor vuelva a intentarlo");
                }
            },
            error: function (data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                )
                console.log(data);
            },
        })
    });

    $('#Seleccionar_Dir').on('click', function () {
        var url = $('#url5').val();
        var token = $("meta[name='csrf-token']").attr("content")
        var direccion = $('[name="dir_id"]:checked').val();

        if (direccion == "") {
            toastr["warning"]("Por favor ingresar Nombre");
        }
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                _token: token,
                direccion: direccion,
            },
            success: function (data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Se ha actualizado su direccion de despacho correctamente");
                    console.log('data');
                    $('#dirSelect').text(data.direccion[0].region + ', ' + data.direccion[0].comuna);
                    $('#msg').text(data.p_Despacho[0]);
                    $('#siguienteButton').attr('disabled', false);

                    $('#cerrar_s_direccion').click();
                } else {
                    toastr["warning"]("Ha ocurrido un problema, por favor vuelva a intentarlo");
                    console.log(data);
                }
            },
            error: function (data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                )
                console.log(data);
            },
        })
    });


    $('#GuardarTienda').on('click', function () {
        var url = $('#url2').val();
        var token = $("meta[name='csrf-token']").attr("content")
        var tienda = $('[name="tienda_id"]:checked').val();

        if (tienda == "") {
            toastr["warning"]("Por favor ingresar Nombre");
        }
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                _token: token,
                tienda: tienda,
            },
            success: function (data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Su informacion ha sido guardada correctamente");
                    console.log('data')
                    $('#siguienteButton').attr('disabled', false);
                    $('#cerrar_Retiro_tienda').click();
                    $('#msg').text(data.p_Despacho[0]);
                } else {
                    toastr["warning"]("Ha ocurrido un problema, por favor vuelva a intentarlo");
                    console.log(data);
                }
            },
            error: function (data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                )
                console.log(data);
            },
        })
    })

});