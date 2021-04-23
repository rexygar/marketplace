      <nav class="col-span-2 col-start-1 bg-black  h-screen px-4 text-gray-900 border border-yellow-500">
        <div class="flex flex-wrap mt-4">
            <div class="w-4/6 mx-auto">
              <a href="{{ route('admin.index') }}">
                <img src="{{ asset('img/logo_tecno.png') }}" alt="">
              </a>
            </div>
        </div>
        <div class="flex flex-wrap mt-8">
          <div class="w-1/2">
            <span class="font-semibold text-white">{{ Auth::user()->name }}</span>
          </div>
          <div class="left-4 py-2">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="bg-blue-500 text-white hover:bg-red-600 p-2 rounded-md focus:outline-none"><span class="font-semibold text-white">cerrar sesión</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
          </div>
        </div>
        <div class="mt-10 mb-4">
          <ul class="ml-4">
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-white   hover:bg-blue-500  hover:font-bold rounded rounded-lg">
              <span>
                <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                  <path
                    d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
                        4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
                        4h4v-4h-4M4 8h4V4H4v4z"
                  ></path>
                </svg>
              </span>
              <a href="#">
                <span class="ml-2 font-bold">Inicio</span>
              </a>
            </li>
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-white   hover:bg-blue-500  hover:font-bold rounded rounded-lg">
              <a href="#"><i class="fa fa-folder"></i><span class="ml-2 font-bold">Listar Categorias</span>
              </a>
            </li>
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-white   hover:bg-blue-500  hover:font-bold rounded rounded-lg">
              <a href="#"><i class="fas fa-store"></i><span class="ml-2 font-bold">Listar Tiendas</span>
              </a>
            </li>
            <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-white   hover:bg-blue-500  hover:font-bold rounded rounded-lg">
              <a href="#"><i class="fas fa-shopping-basket"></i><span class="ml-2 font-bold">Listar Productos</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
 