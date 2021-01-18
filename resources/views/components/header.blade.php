<header class="header">
    <div class="banner">
        <div class="banner__logo">
            <a href="{{ route('home') }}" class="logo__link">
                <h1>Jet-X</h1>
            </a>
        </div>
        <div class="banner__iconos">
            <div class="icono__search">
                <a id="link-buscar" class="fas-link" href="#"><i class="fas fa-search"></i></a>
            </div>
            <div class="icono__user iniciar-sesion">
                <a class="fas-link" href="#login_side"><i class="fas fa-user"></i></a>
            </div>
            <div class="icono__car">
                <a id="link-carrito" class="fas-link" href="{{ route('carrito.index') }}" title="Ver su carrito de compras">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="">0</span>
                </a>
            </div>
        </div>
    </div>

    <nav class="menu-desktop">
        <ul class="menu-desktop__list menu-desktop__firstlevel">
            <li class="list-item {{ setActive('home') }}"><a class="list-item__link home" href="{{ route('home') }}"><i class="fas fa-home"></i><span>HOME</span></a></li>
            @if(session()->has('categoria'))
            <li class="list-item {{ setActive('productos.*') }}"><a class="list-item__link" href="{{ route('productos.index') }}"><span>Patinaje</span></a>
                <ul class="menu-desktop__list categorias menu-desktop__secondlevel">
            @forelse(session('categoria') as $categoria)
                <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="{{ route('productos.indexCategoria',$categoria) }}"><span>{{ $categoria->nombre }}</span></a></li>
            @empty
                <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="#"><span>No hay categorías</span></a></li>
            @endforelse
                </ul>
            </li>
            @endif
            @if(session()->has('categoria'))
            <li class="list-item {{ setActive('productos.*') }}"><a class="list-item__link" href="{{ route('productos.index') }}"><span>Fútbol</span></a>
                <ul class="menu-desktop__list categorias menu-desktop__secondlevel">
            @forelse(session('categoria') as $categoria)
                <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="{{ route('productos.indexCategoria',$categoria) }}"><span>{{ $categoria->nombre }}</span></a></li>
            @empty
                <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="#"><span>No hay categorías</span></a></li>
            @endforelse
                </ul>
            </li>
            @endif
            @if(session()->has('categoria'))
            <li class="list-item {{ setActive('productos.*') }}"><a class="list-item__link" href="{{ route('productos.index') }}"><span>Baloncesto</span></a>
                <ul class="menu-desktop__list categorias menu-desktop__secondlevel">
            @forelse(session('categoria') as $categoria)
                <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="{{ route('productos.indexCategoria',$categoria) }}"><span>{{ $categoria->nombre }}</span></a></li>
            @empty
                <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="#"><span>No hay categorías</span></a></li>
            @endforelse
                </ul>
            </li>
            @endif
            @if(session()->has('categoria'))
            <li class="list-item {{ setActive('productos.*') }}"><a class="list-item__link" href="{{ route('productos.index') }}"><span>Tennis</span></a>
                <ul class="menu-desktop__list categorias menu-desktop__secondlevel">
            @forelse(session('categoria') as $categoria)
                <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="{{ route('productos.indexCategoria',$categoria) }}"><span>{{ $categoria->nombre }}</span></a></li>
            @empty
                <li class="list-item list-item-sub cateoria"><a class="list-item__link" href="#"><span>No hay categorías</span></a></li>
            @endforelse
                </ul>
            </li>
            @endif
        </ul>
    </nav>
</header>
