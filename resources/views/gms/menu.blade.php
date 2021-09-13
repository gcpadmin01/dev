<ul>
    <li class=" {{ ($page == 'gms.dashboard')? 'active': '' }} ">
        <a href="{{route('gms.dashboard')}}" class="menu-text">
            {{__('gms.Inicio')}}
        </a>
    </li>
    <li class=" {{ ($page == 'gms-reservations')? 'active': '' }} ">
        <a href="{{route('gms.reservations')}}" class="menu-text"
           data-layer_toggle="click"
           data-layer_category="GMS"
           data-layer_action="click"
           data-layer_label="dashboard reservations">
            {{__('gms.Reservas')}}
        </a>
    </li>
    <li class=" {{ ($page == 'gms-personal-information')? 'active': '' }} ">
        <a href="{{ route('gms.personal-information') }}" class="menu-text">
            {{__('gms.Personal information')}}
        </a>
    </li>
    <li>
        <a href="{{ route('site.deals') }}" class="menu-text"
           data-layer_toggle="click"
           data-layer_category="GMS"
           data-layer_action="click"
           data-layer_label="dashboard special offers">
            {{__('gms.Ofertas')}}
        </a>
    </li>
    <li class=" {{ ($page == 'gms-account-management')? 'active': '' }} ">
        <a href="{{route('gms.account-management')}}" class="menu-text">{{__('gms.Manejo de cuenta')}}</a>
    </li>
    <li>
        <a href="{{__('general.checkin.link')}}" target="__blank" class="menu-text"
           data-layer_toggle="click"
           data-layer_category="GMS"
           data-layer_action="click"
           data-layer_label="dashboard pre check-in">{{__('gms.Precheckin')}}</a>
    </li>
    <li>
        <a href="{{route('gms.log-out')}}" class="menu-text"
           data-layer_toggle="click"
           data-layer_category="GMS"
           data-layer_action="log out"
           data-layer_label="dashboard">
            {{__('gms.Exit')}}
        </a>
    </li>
</ul>