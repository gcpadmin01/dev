<section class="{{ ($atribs != '' && $atribs != 'specials' && $atribs != 'about')? 'pading-header':''  }} links-resort links-resort-light">
    <div class="resorts-links-filtro d-flex d-sm-flex d-md-none">
        <div class="combo-box arrow-down select">
            <select class="form-control" name="links-resorts" id="links-resorts">
                <option value="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$rhome) }}"  {{($atribs == "")?'selected':''}}>{{__('general.lb_about')}}</option>
                <option value="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$rooms)}}"  {{($atribs == "habitaciones")?'selected':''}} >{{__('general.booking.label.rooms')}}</option>
                <option value="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$amenities)}}"  {{($atribs == "actividades")?'selected':''}} >{{__('general.lb_room_amenities')}}</option>
                <option value="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$restaurants)}}"  {{($atribs == "restaurantes")?'selected':''}} >{{__('general.lb_dining_option')}}</option>
                <option value="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$specials)}}"  {{($atribs == "specials")?'selected':''}} >{{__('general.lb_deals')}}</option>
                @if($resort != 'royal-uno')
                <option value="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$reviews)}}"  {{($atribs == "reviews")?'selected':''}} >{{__('general.lb_reviews')}}</option>
                @endif
                <option value="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$gallery)}}"  {{($atribs == "galeria")?'selected':''}} >{{__('general.lb_gallery')}}</option>
            </select>
        </div>
    </div>

    <div class="d-none d-sm-none d-md-block d-lg-block">
        <div class="container">
            <nav class="nav d-flex flex-wrap justify-content-center align-items-center sub-navigation links-menu-gris"
                 id="menu-gris">
                <a class="nav-link {{($atribs == "")?'active':''}} "
                   href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$rhome) }}">
                    {{__('general.lb_about')}}</a>
                <a class="nav-link {{($atribs == "habitaciones")?'active':''}} "
                   href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$rooms)}}">
                    {{__('general.booking.label.rooms')}}
                </a>
                <a class="nav-link {{($atribs == "actividades")?'active':''}} "
                   href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$amenities)}}">
                    {{__('general.lb_room_amenities')}}
                </a>
                <a class="nav-link {{($atribs == "restaurantes")?'active':''}} "
                   href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$restaurants)}}">
                    {{__('general.lb_dining_option')}}
                </a>
                <a class="nav-link {{($atribs == "specials")?'active':''}} "
                   href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$specials)}}">
                    {{__('general.lb_deals')}}
                </a>

                @if($resort != 'royal-uno')
                    <a class="nav-link {{($atribs == "reviews")?'active':''}} "
                       href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$reviews)}}">
                        {{__('general.lb_reviews')}}
                    </a>
                @endif

                <a class="nav-link {{($atribs == "galeria")?'active':''}} "
                   href="{{ lang_url('/'.__('routes.beach_resorts').'/'.$resort.'/'.$gallery)}}">
                    {{__('general.lb_gallery')}}
                </a>
            </nav>
        </div>
    </div>
</section>
