<section class="container sec-breadcrumb {{ (isset($class))?$class:"" }}">
    <div class="row no-gutters {{ (isset($class))?"pt-4":"" }}">
        <nav class="col-12" aria-label="breadcrumb" id="bread">
            <ol class="breadcrumb m-0 p-0" itemscope itemtype="http://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
                    <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{lang_url("/")}}"
                       itemid="{{lang_url("/")}}">
                        <span itemprop="name">Royal Reservations</span>
                    </a>
                    <meta itemprop="position" content="1"/>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item">
                    <a itemscope itemtype="http://schema.org/Thing" itemprop="item"
                       href="{{ lang_url('/'.__('routes.'.$page)) }}" itemid="{{ lang_url('/'.__('routes.'.$page)) }}">
                        <span itemprop="name">{{ __('breadcrumbs.'.$page) }}</span>
                    </a>
                    <meta itemprop="position" content="2"/>
                </li>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"
                    class="breadcrumb-item active">
            <span itemscope itemtype="http://schema.org/Thing" itemprop="item"
                  href="{{ lang_url('/'.__('routes.'.$page).'/'.$destino.'/'.$subinterna) }}"
                  itemid="{{ lang_url('/'.__('routes.'.$page).'/'.$destino.'/'.$subinterna) }}">
              <span itemprop="name">{{ __('breadcrumbs.'.$subinterna) }}</span>
            </span>
                    <meta itemprop="position" content="3"/>
                </li>
            </ol>
        </nav>
    </div>
</section>