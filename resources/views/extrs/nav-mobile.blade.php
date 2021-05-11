<nav class="relative border-gray-300 text-gray-900 block md:hidden" style="z-index: 999; background-color: #F5DF4D"
  x-data="{ isNavbar : true}">
  <div class="container mx-auto  flex flex-wrap justify-between grid grid-cols-2">
    <div class="md:relative   p-4 lg:p-6 text-xl text-white font-bold col-span-1">MENU</div>
    <div @click="isNavbar = !isNavbar" :class="{' block': isNavbar, 'hidden': !isNavbar}"
      class="  p-4 lg:p-6 col-span-1 mx-auto">
      <button type="button"
        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
        aria-label="toggle menu">
        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
          <path fill-rule="evenodd"
            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
          </path>
        </svg>
      </button>
    </div>
    <div @click="isNavbar = !isNavbar" :class="{' hidden': isNavbar, 'block': !isNavbar}"
      class="  p-4 lg:p-6 col-span-1 mx-auto">
      <button type="button"
        class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none px-10 focus:text-gray-600 dark:focus:text-gray-400"
        aria-label="toggle menu">
        <i class="fas fa-times text-2xl"></i>
      </button>
    </div>
 
    <div class="col-span-2 grid-cols-6" :class="{' hidden': isNavbar, 'grid': !isNavbar}">
      <div></div>
      <div class="col-span-5">
        <p>Ingresa a tu cuenta para ver tus compras, favoritos, etc.</p>
      </div>
      <div class="col-span-6 grid-cols-6 grid">
        <div></div>
        <div class="col-span-2">
          <a id="navbarDropdown"
            class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
            style="border-color: #F5DF4D" href="#">
            <strong>Mi Perfil</strong>
          </a>
        </div>
        <div class="col-span-2">
          <a id="navbarDropdown"
            class="sm:text-md text-sm no-underline inline-block px-2 py-2 border-gray-50 border-2 rounded-md bg-black text-white hover:text-yellow-300 "
            style="border-color: #F5DF4D" href="#">
            <strong>Mi Perfil</strong>
          </a>
        </div>
        
        <div></div>
      </div>
    </div>
    
    <div :class="{' hidden': isNavbar, 'block': !isNavbar}"
      class="col-span-2 grid grid-cols-2 md:relative   p-6 lg:p-6 text-xl text-white font-bold ">Categorias

 
    </div>

  </div>
</nav>
<script src="{{ asset('js/alpine.js') }} "></script>