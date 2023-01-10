<header>
    <div class="my-4">
        <div class="container d-flex justify-content-center">

            <nav class="d-flex align-items-center gap-4 text-uppercase">
                <a href="{{Route('home')}}" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">Home</a>
                <a href="{{Route('guest.comics.index')}}" class="{{Route::currentRouteName() === 'guest.comics.index' ? 'active' : ''}}">Comics</a>
                <a href="{{Route('news')}}" class="{{Route::currentRouteName() === 'news' ? 'active' : ''}}">News</a>
                <a href="{{Route('comics.index')}}" class="{{Route::currentRouteName() === 'comics.index' ? 'active' : ''}}">Admin Comics</a>
            </nav>

        </div>
    </div>
</header>