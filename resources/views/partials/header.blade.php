<header>
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() === 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() === 'guest.comics.index' ? 'active' : '' }}" href="{{ ('guest.comics.index') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() === 'admin.comics.index' ? 'active' : '' }}" href="{{ route('guest.comics.index') }}">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.index') }}">Admin Comics</a>
            </li>
        </ul>
    </nav>
</header>