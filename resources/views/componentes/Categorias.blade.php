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
     text-shadow: 3px 4px 0 black;
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
<div class="col-span-12 grid grid-cols-12 h-full md:px-6 sm:px-6 lg:px-16 xl:px-16 2xl:px-16 py-36 md:pb-16">

  


  {{--  --}}
  {{-- CATS --}}
  @include('componentes.Categorias_productos.Cats_all',
  compact('tiendas'))
   {{--  --}}




</div>

 