$(document).ready(function() {
    $('._Casa').addClass('hidden');
    $('._Diseño').addClass('hidden');
    $('._Gastronomia').addClass('hidden');
    $('._Naturaleza').addClass('hidden');
    $('._Salud').addClass('hidden');
    $('._Textil');

    $('[name="Categoria_radio"]').on('change', function() {



        var Categoria_slected = $('[name="Categoria_radio"]:checked').val();
        var valor = parseInt(Categoria_slected);
        if (valor > 0) {
            switch (valor) {
                case 1:

                    $('._Diseño').toggleClass('hidden', false);
                    $('._Casa').toggleClass('hidden', true);
                    $('._Gastronomia').toggleClass('hidden', true);
                    $('._Naturaleza').toggleClass('hidden', true);
                    $('._Salud').toggleClass('hidden', true);
                    $('._Textil').toggleClass('hidden', true);
                    console.log(valor);
                    break;
                case 2:
                    $('._Casa').toggleClass('hidden', true);
                    $('._Salud').toggleClass('hidden', false);
                    $('._Diseño').toggleClass('hidden', true);
                    $('._Gastronomia').toggleClass('hidden', true);
                    $('._Naturaleza').toggleClass('hidden', true);
                    $('._Textil').toggleClass('hidden', true);

                    console.log(valor);
                    break;
                case 3:
                    $('._Casa').toggleClass('hidden', true);
                    $('._Diseño').toggleClass('hidden', true);
                    $('._Naturaleza').toggleClass('hidden', false);
                    $('._Gastronomia').toggleClass('hidden', true);
                    $('._Salud').toggleClass('hidden', true);
                    $('._Textil').toggleClass('hidden', true);

                    console.log(valor);
                    break;
                case 4:

                    $('._Diseño').toggleClass('hidden', true);
                    $('._Gastronomia').toggleClass('hidden', true);
                    $('._Naturaleza').toggleClass('hidden', true);
                    $('._Casa').toggleClass('hidden', false);
                    $('._Salud').toggleClass('hidden', true);
                    $('._Textil').toggleClass('hidden', true);
                    console.log(valor);
                    break;
                case 5:

                    $('._Casa').toggleClass('hidden', true);
                    $('._Diseño').toggleClass('hidden', true);
                    $('._Gastronomia').toggleClass('hidden', false);
                    $('._Naturaleza').toggleClass('hidden', true);
                    $('._Salud').toggleClass('hidden', true);
                    $('._Textil').toggleClass('hidden', true);
                    console.log(valor);
                    break;
                case 6:

                    $('._Casa').toggleClass('hidden', true);
                    $('._Diseño').toggleClass('hidden', true);
                    $('._Gastronomia').toggleClass('hidden', true);
                    $('._Naturaleza').toggleClass('hidden', true);
                    $('._Salud').toggleClass('hidden', true);
                    $('._Textil').toggleClass('hidden', false);
                    console.log(valor);
                    break;


            }

        }
    })

});