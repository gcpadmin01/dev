@section('title', '404 - Page not found')
<section class="container">
        <div class="row no-gutters">
            <div class="not-found">
                <h1 class="h1">404 - {{__('general.404')}}</h1>
                <br>
                <nav class="nav d-flex flex-wrap justify-content-center align-items-center sub-navigation links-menu-gris"
                     id="menu-gris">
                    <a class="nav-link"
                       href="{{ lang_url("/".Lang::get('routes.about_us')) }}">{{__('general.lb_about_us')}}</a>
                    <a class="nav-link"
                       href="{{ lang_url("/".Lang::get('routes.beach_destinations')) }}">{{__('header.menu.beach_destinations.self')}}</a>
                    <a class="nav-link active"
                       href="{{ lang_url("/".Lang::get('routes.beach_resorts'))}}">{{__('header.menu.resorts')}}</a>
                    <a class="nav-link"
                       href="{{ lang_url("/".Lang::get('routes.experiences')) }}">{{__('header.menu.type_of_trips.self')}}</a>
                    <a class="nav-link" href="{{ lang_url("/".__('routes.deals')) }}">{{__('header.menu.specials')}}</a>
                </nav>
            </div>
        </div>
</section>