@foreach($menus as $menu)
    <li class="nav-item">
        @if($menu->route == "cart.view" || $menu->route == "checkout.index")
            @php
                if($menu->params == null || $menu->params == "") {
                    $url = route($menu->route);
                } else {
                    $url = route($menu->route, $menu->params);
                }
            @endphp

            @if($menu->route == "cart.view")
                <a class="nav-link" href="{{ $url }}">
                    {{ $menu->name }} <span class="badge badge-primary fill">{{ Cart::count() }}</span>
                </a>
            @else

                <a class="nav-link" href="{{ $url }}">
                    {{ $menu->name }}
                </a>
            @endif
        @else

        @endif
    </li>

@endforeach

@push('styles')
    <style>

        .main-navbar li {
            position: relative !important;
        }


    </style>
@endpush

@push('scripts')
    <script>
        jQuery(document).ready(function() {
            $('ul.main-navbar li.nav-item').hover(function() {

                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
            });
        });

    </script>

@endpush
