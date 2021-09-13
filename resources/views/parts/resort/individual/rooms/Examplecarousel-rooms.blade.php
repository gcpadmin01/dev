@php

  $total_rooms = count( __('resorts/'.$resort.'/rooms.rooms') ); 

@endphp

<section class="container ">

  @for ($i=0; $i<$total_rooms; $i++)

    <div class="row no-gutters resort-rooms">

      @php

      $total_amenities = count( __('resorts/'.$resort.'/rooms.rooms.'.$i.'.amenities') );

      @endphp



      <li>total_amenities: {{$total_amenities}} </li>

  @endfor

  <div class="modal fade modal-webcams modal-foor-plan" id="modal-rooms" tabindex="-1" role="dialog" aria-labelledby="rooms-modal-title"

	aria-hidden="true">

	<div class="modal-dialog modal-dialog-centered" role="document">

		<div class="modal-content" style="">

			<div class="modal-header" style="">

				<div class="w-100 text-center">

					<h5 class="modal-title av-white">
						FLOOR PLAN
					</h5>

				</div>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">

							<span aria-hidden="true">&times;</span>

						</button>

			</div>

			<div class="modal-body" style="">

				<img class="img-fluid floor-image" src="https://dummyimage.com/1920x1080/000/fff" alt="Floor Plan" />

      </div>

      <div class="py-2 text-center">

        <a class="text-uppercase bold" href="#"></a>

      </div>

		</div>

	</div>

</div>

</section>