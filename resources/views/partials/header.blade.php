<header class="bg-white">
        <nav class="navbar-nav container navbar-light">
            <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
                <li class="nav-item mt-5 ">
                    <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
                        href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">

                  <a class="nav-link {{ Route::currentRouteName() == 'products.index' ? 'active' : '' }}"
                        href="{{ route('movie.index') }}">
                    <img src="https://t3.ftcdn.net/jpg/05/90/75/40/360_F_590754013_CoFRYEcAmLREfB3k8vjzuyStsDbMAnqC.jpg" alt="logo-movie">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteName() == 'recipes.index' ? 'active' : '' }}"
                        href="{{route('books.index')}}">
                     <img src="https://img.freepik.com/vector-premium/ilustracion-logo-libreria-aislado-blanco_101884-1489.jpg" alt="logo-book">
                    </a>
                </li>
                <li class="nav-item mt-5">
                    <a class="nav-link {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"
                        href="#">
                        Chi siamo
                    </a>
                </li>
            </ul>
        </nav>
</header>
