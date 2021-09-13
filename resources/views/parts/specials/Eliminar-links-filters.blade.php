

<div class="filtros-botones pb-2">

  <a class="filter-button filter-a" data-filter="all" ><div class="cell"> {{ __('general.all') }} </div></a>

  <a class="filter-button filter-b" data-filter="ca" ><div class="cell"> {{__('header.menu.beach_destinations.cancun')}} </div></a>

  <a class="filter-button filter-c" data-filter="rm"><div class="cell"> Riviera Maya </div></a>

  <a class="filter-button filter-d" data-filter="pdc"><div class="cell"> Playa del Carmen </div></a>

  <a class="filter-button filter-e" data-filter="pm"><div class="cell"> Puerto  Morelos </div></a>

  <a class="filter-button filter-f" data-filter="sm"><div class="cell"> Sint Maarten </div></a>

  <a class="filter-button filter-g" data-filter="co"><div class="cell"> Curacao </div></a>

  <a class="filter-button filter-h" data-filter="pc"><div class="cell"> Punta Cana </div></a>

</div>

<div class="special-destino-filtro d-flex d-sm-none">

        <div class="combo-box arrow-down">

          <label for="">{{ __('general.lb_filter') }}:</label>

          <select class="form-control" name="specials-destino" id="specials-destino">

              <option value="0">{{ __('general.all') }}</option>

              <option value="1">{{__('header.menu.beach_destinations.cancun')}}</option>

              <option value="2">Riviera Maya</option>

              <option value="3">Playa del Carmen</option>

              <option value="4">Puerto  Morelos</option>

              <option value="5">Sint Maarten</option>

              <option value="6">Curacao</option>

              <option value="7">Punta Cana</option>

              

          </select>

        </div>

</div>