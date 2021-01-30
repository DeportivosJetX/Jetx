<header class="header">
    <div class="banner">
        <div class="menu-movil">
            <a href="javascript:void(0);" class="fas-link">
                <i class="fas fa-bars"></i>
            </a>
        </div>
        <div class="banner__logo">
            <a href="{{ route('home') }}" class="logo__link">
                <img class="logo" src="{{asset('../storage/images/JetX.png')}}" alt="logo deportivos jetx">
                <h1>Deportivos JetX</h1>
            </a>
        </div>
        <div class="banner__iconos">
            <div class="icono__search">
                <a id="link-buscar" class="fas-link" href="#"><i class="fas fa-search"></i></a>
            </div>
            <div class="icono__user iniciar-sesion">
                <a class="fas-link" href="{{ route('login') }}"><i class="fas fa-user"></i></a>
            </div>
            <div class="icono__car">
                <a id="link-carrito" class="fas-link" href="javascript:void(0)" title="Ver su carrito de compras">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="">0</span>
                </a>
            </div>
        </div>
    </div>
    <nav class="menu-desktop">
        <ul class="menu-desktop__list menu-desktop__firstlevel">
            <li class="list-item "><a class="list-item__link home" href="{{ route('home') }}"><i class="fas fa-home"></i><span>HOME</span></a></li>
            @if(session()->has('deportes'))
            @forelse(session('deportes') as $deporte)
            <li class="list-item "><a class="list-item__li.index') }}"><span>{{ $deporte->nombre }}</span></a>
                @if(session()->has('categorias'))
                <ul class="menu-desktop__list categorias menu-desktop__secondlevel">
                @forelse(session('categorias') as $categoria)
                    <li class="list-item list-item-sub cateoria"><a class="list-item__link"><span>{{ $categoria->nombre }}</span></a></li>
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
