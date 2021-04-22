<style>
  input[type="radio"],
  input[type="checkbox"] {
    position: relative;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    outline: none;
  }

  input[type="checkbox"]+span:before {
    width: 16px;
    height: 16px;
    border: 1px solid #000;
    content: "\2714";
    color: transparent;
    display: inline-block;
    font-size: 13px;
    margin-right: 5px;
    text-align: center;
    /* new code notice me! */
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }
</style>
<div class="col-span-12 grid grid-cols-12 h-full md:px-6 lg:px-16 xl:px-16 2xl:px-16 py-36">



  <div class="col-span-12 grid grid-cols-12 col-start-1 text-left    text-black">
    <fieldset class="rating col-span-12 grid grid-cols-12 text-center">

      <div class="col-span-2">
        <h5><strong class="uppercase py-3 px-6"> <label class="full" for="star6"> <input type="radio"
                name="Categoria_radio" id="star6" value="6" />Textil</label></strong></h5>
      </div>
      <div class="col-span-2">
        <h5><strong class="uppercase border-blue-300 border-l-2 checked:border-blue-500 checked:border-b-2 py-3 px-6">
            <label class="full" for="star5"> <input type="radio" name="Categoria_radio" id="star5"
                value="5" />Gastronomia</label></strong></h5>
      </div>
      <div class="col-span-2">
        <h5><strong class="uppercase border-blue-300 border-l-2 checked:border-blue-500 checked:border-b-2 py-3 px-6">
            <label class="full" for="star4"> <input type="radio" name="Categoria_radio" id="star4" value="4" />Casa y
              Decoración</label></strong></h5>
      </div>
      <div class="col-span-2">
        <h5><strong class="uppercase border-blue-300 border-l-2 checked:border-blue-500 checked:border-b-2 py-3 px-6">
            <label class="full" for="star3"><input type="radio" name="Categoria_radio" id="star3"
                value="3" />Naturaleza</label></strong></h5>
      </div>
      <div class="col-span-2">
        <h5><strong class="uppercase border-blue-300 border-l-2 checked:border-blue-500 checked:border-b-2 py-3 px-6">
            <label class="full" for="star2"><input type="radio" name="Categoria_radio" id="star2" value="2" />Salud y
              Belleza </label></strong></h5>
      </div>
      <div class="col-span-2">
        <h5><strong class="uppercase border-blue-300 border-l-2 checked:border-blue-500 checked:border-b-2 py-3 px-6">
            <label class="full" for="star1"> <input type="radio" name="Categoria_radio" id="star1"
                value="1" />Diseño</label></strong></h5>
      </div>
    </fieldset>
  </div>


  {{--  --}}
  {{-- CATS --}}
  @include('componentes.Categorias_productos.Cats_Casa')
  @include('componentes.Categorias_productos.Cats_Diseño')
  @include('componentes.Categorias_productos.Cats_Gastronomia')
  @include('componentes.Categorias_productos.Cats_Naturaleza')
  @include('componentes.Categorias_productos.Cats_Salud')
  @include('componentes.Categorias_productos.Cats_Textil')

  {{--  --}}




</div>

<script src="{{ asset('js/Cats_changer.js') }}"></script>