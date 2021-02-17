<header class="header">
    <div class="banner">
        <div class="menu-movil">
            <a href="javascript:void(0);" class="fas-link">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <div class="banner__logo">
            <a href="{{ route('home') }}" class="logo__link">
                <img class="logo" src="{{asset('storage/images/JetX.png')}}" alt="logo deportivos jetx">
                <h1>Deportivos JetX</h1>
            </a>
        </div>
        <div class="banner__iconos">
            <div class="icono__search">
                <a id="link-buscar" class="fas-link" href="#"><i class="fas fa-search"></i></a>
            </div>
            <div class="icono__car">
                <a id="link-carrito" class="fas-link" href="javascript:void(0)" title="Ver su carrito de compras">
                    <i class="fas fa-shopping-cart"></i>
                    @if (session()->has('carrito'))
                    <span class="">{{count(session('carrito'))}}</span>
                    @else
                    <span class="">0</span>
                    @endif
                </a>
            </div>
            @auth
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-4">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            {{-- <div>{{ Auth::user()->name }}</div> --}}
                            <div>
                                <img src="https://ui-avatars.com/api/?font-size=0.3&rounded=true&bold=true&format=svg&background=000&color=fff&size=35&name={{ Auth::user()->name }}" alt="Avatar usuario">
                            </div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('ingresos')">
                            {{ __('Informe de ingresos') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('rotacion')">
                            {{ __('Informe de rotación') }}
                        </x-dropdown-link>
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @endauth
            @guest
            <div class="icono__user iniciar-sesion ml-3">
                <a class="fas-link" href="{{ route('login') }}"><i class="fas fa-user"></i></a>
            </div>
            @endguest
        </div>
    </div>
    <nav class="menu-desktop">
        <ul class="menu-desktop__list menu-desktop__firstlevel">
            <li class="list-item "><a class="list-item__link home" href="{{ route('home') }}"><i class="fas fa-home"></i><span>HOME</span></a></li>
            @if(session()->has('deportes'))
            @forelse(session('deportes') as $deporte)
            <li class="list-item "><a class="list-item__link" href="{{ route('productos.indexDeporte',$deporte) }}"><span>{{ $deporte->nombre }}</span></a>
                @if(session()->has('categorias'))
                <ul class="menu-desktop__list categorias menu-desktop__secondlevel">
                @forelse(session('categorias') as $categoria)
                    <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="{{ route('productos.indexDeporteCategoria',[$deporte,$categoria]) }}"><span>{{ $categoria->nombre }}</span></a></li>
                @empty
                    <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="#"><span>No hay categorias</span></a></li>
                @endforelse
                </ul>
                @endif
            </li>
            @empty
            @endforelse
            @endif
        </ul>
    </nav>
</header>
