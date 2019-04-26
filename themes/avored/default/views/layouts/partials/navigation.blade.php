<nav class="navbar navbar-light navbar-expand-md bg-light justify-content-center">
    <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
        <ul class="navbar-nav mx-auto text-center">
            @include('layouts.partials.menu-tree', ['menus' => $menus])
        </ul>
        <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">
            <div class="dropdown">
                <i class="fas fa-shopping-cart dropdown-toggle" data-toggle="dropdown"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    @include('layouts.partials.cart-tree', ['menus' => $menus])
                </div>
            </div>
            <div class="dropdown">
                <i class="fas fa-user dropdown-toggle" data-toggle="dropdown"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    @if(Auth::check())
                        <a class="nav-link" href="{{ route('my-account.home') }}">My Account</a>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">{{ __('auth.signin') }}</a>
                        <a class="nav-link" href="{{ route('register') }}">{{ __('auth.create') }}</a>
                    @endif
                </div>
            </div>
        </ul>
    </div>
</nav>
