$(document).ready(function() {
    $('._Casa').addClass('hidden');
    $('._Diseño').addClass('hidden');
    $('._Gastronomia').addClass('hidden');
    $('._Naturaleza').addClass('hidden');
    $('._Salud').addClass('hidden');
    $('._Textil').addClass('hidden');

    $('[name="Categoria_radio"]').on('change', function() {



        var Categoria_slected = $('[name="Categoria_radio"]:checked').val();
        var valor = parseInt(Categoria_slected);
        if (valor > 0) {
            switch (valor) {
                case 1:

                    $('._Casa').toggleClass('hidden', true);
                    $('._Diseño').toggleClass('hidden', false).toggleClass("border-blue-300 border-b-2");
                    toggleClass("border-blue-300 border-b-2");
                    $('._Gastronomia').toggleClass('hidden', true);
                    $('._Naturaleza').toggleClass('hidden', true);
                    $('._Salud').toggleClass('hidden', true);
                    $('._Textil').toggleClass('hidden', true);
                    console.log(valor);
                    break;
                case 2:
                    $('._Casa').toggleClass('hidden', true);
                    $('._Diseño').toggleClass('hidden', true);
                    $('._Gastronomia').toggleClass('hidden', true);
                    $('._Naturaleza').toggleClass('hidden', true);
                    $('._Salud').toggleClass('hidden', false).toggleClass("border-blue-300 border-b-2");
                    $('._Textil').toggleClass('hidden', true);

                    console.log(valor);
                    break;
                case 3:
                    $('._Casa').toggleClass('hidden', true);
                    $('._Diseño').toggleClass('hidden', true);
                    $('._Gastronomia').toggleClass('hidden', true);
                    $('._Naturaleza').toggleClass('hidden', false).toggleClass("border-blue-300 border-b-2");
                    $('._Salud').toggleClass('hidden', true);
                    $('._Textil').toggleClass('hidden', true);

                    console.log(valor);
                    break;
                case 4:

                    $('._Casa').toggleClass('hidden', false).toggleClass("border-blue-300 border-b-2");
                    $('._Diseño').toggleClass('hidden', true);
                    $('._Gastronomia').toggleClass('hidden', true);
                    $('._Naturaleza').toggleClass('hidden', true);
                    $('._Salud').toggleClass('hidden', true);
                    $('._Textil').toggleClass('hidden', true);
                    console.log(valor);
                    break;
                case 5:

                    $('._Casa').toggleClass('hidden', true);
                    $('._Diseño').toggleClass('hidden', true);
                    $('._Gastronomia').toggleClass('hidden', false).toggleClass("border-blue-300 border-b-2");
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
                    $('._Textil').toggleClass('hidden', false).toggleClass("border-blue-300 border-b-2");
                    console.log(valor);
                    break;


            }

        }
    })

});