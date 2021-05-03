<style>
  input[type="radio"],
  input[type="checkbox"] {
    position: relative;
    -moz-appearance: none !important;
    -webkit-appearance: none !important;
    appearance: none !important;
    outline: none !important;
  }
  .sombra-txt:hover {
    color: white;
    text-shadow: 2px 2px 2px black;
  }
  .sombra-txt {
    color: white;
     text-shadow: -4px 3px 0 black;
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
    <fieldset class="rating col-span-12 grid grid-cols-12 text-center ">

      <label class="full col-span-2 py-3 px-2 lx:px-6 md:inline-block align-middle " for="star6">
        <div class="col-span-2  text-center ">
          <strong class="uppercase  md:inline-block align-middle">
            <input type="radio" style="appearance: none !important;   -moz-appearance: none !important;
    -webkit-appearance: none !important;" name="Categoria_radio" id="star6" value="6" />Textil
          </strong>
          <div class="_Textil">
            @include('componentes.Categorias_productos.Cats_selected')

          </div>

        </div>
      </label>
      <label class="full col-span-2 py-3 px-2 lx:px-6 md:inline-block align-middle  border-blue-300 border-l-2"
        for="star5">
        <div class="col-span-2  text-center ">
          <strong class="uppercase  md:inline-block align-middle">
            <input type="radio" style="appearance: none !important;   -moz-appearance: none !important;
    -webkit-appearance: none !important;" name="Categoria_radio" id="star5" value="5" />Gastronomía
          </strong>
          <div class="_Gastronomia">
            @include('componentes.Categorias_productos.Cats_selected')

          </div>

        </div>
      </label>
      <label class="full col-span-2 py-3 px-2 lx:px-6 md:inline-block align-middle  border-blue-300 border-l-2"
        for="star4">
        <div class="col-span-2  text-center ">
          <strong class="uppercase  md:inline-block align-middle">
            <input type="radio" style="appearance: none !important;   -moz-appearance: none !important;
    -webkit-appearance: none !important;" name="Categoria_radio" id="star4" value="4" />Casa y
            Decoración
          </strong>
          <div class="_Casa">
            @include('componentes.Categorias_productos.Cats_selected')

          </div>

        </div>
      </label>
      <label class="full col-span-2 py-3 px-2 lx:px-6 md:inline-block align-middle  border-blue-300 border-l-2"
        for="star3">
        <div class="col-span-2  text-center ">
          <strong class="uppercase">
            <input type="radio" style="appearance: none !important;   -moz-appearance: none !important;
    -webkit-appearance: none !important;" name="Categoria_radio" id="star3" value="3" />Naturaleza
          </strong>
          <div class="_Naturaleza">
            @include('componentes.Categorias_productos.Cats_selected')

          </div>

        </div>
      </label>
      <label class="full col-span-2 py-3 px-2 lx:px-6 md:inline-block align-middle  border-blue-300 border-l-2"
        for="star2">
        <div class="col-span-2  text-center ">
          <strong class="uppercase">
            <input type="radio" style="appearance: none !important;   -moz-appearance: none !important;
    -webkit-appearance: none !important;" name="Categoria_radio" id="star2" value="2" />
            Salud y
            Belleza
          </strong>
          <div class="_Salud">
            @include('componentes.Categorias_productos.Cats_selected')

          </div>

        </div>
      </label>
      <label class="full col-span-2 py-3 px-2 lx:px-6 md:inline-block align-middle  border-blue-300 border-l-2"
        for="star1">
        <div class="col-span-2  text-center ">
          <strong class="uppercase">
            <input type="radio" style="appearance: none !important;   -moz-appearance: none !important;
    -webkit-appearance: none !important;" name="Categoria_radio" id="star1" value="1" />Diseño
          </strong>
          <div class="_Diseño">
            @include('componentes.Categorias_productos.Cats_selected')

          </div>

        </div>
      </label>
    </fieldset>
  </div>


  {{--  --}}
  {{-- CATS --}}
  @include('componentes.Categorias_productos.Cats_Casa',
  compact('tiendas_Casa'))
  @include('componentes.Categorias_productos.Cats_Diseño',
  compact('tiendas_Diseño'))
  @include('componentes.Categorias_productos.Cats_Gastronomia',compact('t_Gas'))
  @include('componentes.Categorias_productos.Cats_Naturaleza', compact('tiendas_Naturaleza'))
  @include('componentes.Categorias_productos.Cats_Salud',compact('tiendas_Salud'))
  @include('componentes.Categorias_productos.Cats_Textil', compact('tiendas_Textil'))

  {{--  --}}




</div>

<script src="{{ asset('js/Cats_changer.js') }}"></script>