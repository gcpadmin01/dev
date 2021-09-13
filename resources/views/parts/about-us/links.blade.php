@php
    $active = "about-us";
    if (isset($subinterna)){
        switch ($subinterna){
            case "why-book-with-royalreservations":
                $active = "why_book";
            break;
            case "best-deal-guaranteed":
                $active = "best_deal";
            break;
            case "terms-of-use":
                $active = "terms_of_use";
            break;
            case "privacy-policy":
                $active = "privacy_policy";
                break;
        }
    }
@endphp

<section class="pading-header">
    <div class="resorts-links-filtro d-flex d-sm-flex d-md-none">
        <div class="combo-box arrow-down select">
            <select class="form-control" name="links-about" id="links-about">
                <option value = "{{ lang_url('/'.__('routes.aboutus')) }}" >{{__('general.lb_about_us')}}</option>
                <option value = "{{ lang_url('/'.__('routes.aboutus').'/'.__('routes.why_book')) }}"  >{{__('general.lb_why_book_with_us')}}</option>
                <option value = "{{ lang_url('/'.__('routes.aboutus').'/'.__('routes.best_deal')) }}"  >{{__('general.lb_best_deal_guaranteed')}}</option>
                <option value = "{{ lang_url('/'.__('routes.aboutus').'/'.__('routes.terms_of_use')) }}"  >{{__('general.lb_terms_of_use')}}</option>
                <option value = "{{ lang_url('/'.__('routes.aboutus').'/'.__('routes.privacy_policy')) }}"  >{{__('general.lb_privacy_policy')}}</option>
                <option value="#" selected>{{__('general.select_option')}}</option>
            </select>
        </div>
    </div>

    <div class="links-resort d-none d-sm-none d-md-block d-lg-block">
        <div class="container">
            <nav class="nav d-flex flex-wrap justify-content-center align-items-center sub-navigation links-menu-gris"
                 id="menu-gris">
                <a class="nav-link {{($active == "about-us")?"active":""}}"
                   href="{{ lang_url('/'.__('routes.aboutus')) }}">{{__('general.lb_about_us')}}</a>
                <a class="nav-link {{($active == "why_book")?"active":""}}"
                   href="{{ lang_url('/'.__('routes.aboutus').'/'.__('routes.why_book')) }}">{{__('general.lb_why_book_with_us')}}</a>
                <a class="nav-link {{($active == "best_deal")?"active":""}}"
                   href="{{ lang_url('/'.__('routes.aboutus').'/'.__('routes.best_deal')) }}">{{__('general.lb_best_deal_guaranteed')}}</a>
                <a class="nav-link {{($active == "terms_of_use")?"active":""}}"
                   href="{{ lang_url('/'.__('routes.aboutus').'/'.__('routes.terms_of_use')) }}">{{__('general.lb_terms_of_use')}}</a>
                <a class="nav-link {{($active == "privacy_policy")?"active":""}}"
                   href="{{ lang_url('/'.__('routes.aboutus').'/'.__('routes.privacy_policy')) }}">{{__('general.lb_privacy_policy')}}</a>
            </nav>
        </div>
    </div>
</section>