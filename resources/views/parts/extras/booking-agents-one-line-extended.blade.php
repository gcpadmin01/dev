
<div class="espacio-de-booking2">
	<section class="container-fluid booking-interno-section2" id="booking-interno">
		<div class="row">
			<div class="w-100">
				<div class="container" style="margin-top: 0px;">
					<div class="contenedor-tabs">
						<div class="tab-content">
							<form class='booking' action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank" onsubmit="return changeResort();">
							<input type="hidden" name="RatePlanID" id="RatePlanID" value="">	
							<div id="je-hotels" class="tab-pane active">
								<div class="je-tab-content yellow">
									<div class="booking-interno-inputs">
										<p class="center booking-title-movil text-white">{{ __('general.booking.btn.hotel') }}</p>
										<label for="resort">{{ __('general.booking.label.like_to_go') }}</label>
										<select class="form-control combo" name="hotelId" id="hotelId" onchange="changeResort();">
												
												<optgroup label="{{ __('header.menu.beach_destinations.cancun') }}">
													<option value="86169" id="1415511">The Royal Sands Resort & Spa All Inclusive</option>
													<option value="86182" id="1402758">The Royal Islander All Suites Resort</option>
													<option value="73601" id="1415601">The Royal Cancun All Suites  Resort</option>
												</optgroup>
												
												<optgroup label="Riviera Maya">
													<option value="95939" id="1551276">Grand Residences Riviera Cancun Resort</option>
												</optgroup>
												<optgroup label="Playa del Carmen">
													<option value="86184" id="1415496">The Royal Haciendas All Suites Resort & Spa</option>
												</optgroup>
												<optgroup label="Sint Maarten">
													<option value="86179" id="1417051"> Simpson Bay Resort, Marina & Spa </option>
													<option value="86180" id="1402751">The Villas at Simpson Bay Beach Resort & Marina</option>
												</optgroup>
												<optgroup label="Curacao">
													<option value="86181" id="1402803">The Royal Sea Aquarium Resort</option>
												</optgroup>

												
										</select>
									</div>
									<div class="booking-interno-inputs">
										<label>{{ __('general.booking.label.check_in') }}</label>
										<div class="input-group date" data-provide="datepicker" id="deals1">
											<input type="text" class="form-control" id="datein" name="datein" placeholder="{{ __('general.booking.placeholder.arrival_date') }}">
											<div class="input-group-addon">
												<span class="icono-calendario"></span>
											</div>
										</div>
									</div>

									<div class="booking-interno-inputs">
										<label>{{ __('general.booking.label.check_out') }}</label>
										<div class="input-group date" data-provide="datepicker" id="deals2">
											<input type="text" id="dateout" name="dateout" class="form-control" placeholder="{{ __('general.booking.placeholder.departure_date') }}">
											<div class="input-group-addon">
												<span class="icono-calendario"></span>
											</div>
										</div>
									</div>

									<div class="booking-interno-inputs">
										<div class="combo-box arrow-down">
											<label>{{ __('general.booking.label.rooms') }}</label>
											<select class="form-control" name="rooms">
									            <option value="1">1</option>
									            <option value="2">2</option>
									            <option value="3">3</option>
									            <option value="4">4</option>
									            <option value="5">5</option>
									        </select>
										</div>
									</div>									

									<div class="booking-interno-inputs">
										<div class="combo-box arrow-down">
											<label id="spAdults">{{ __('general.booking.label.adults') }}</label>
							                  <select class="form-control" name="adults" id="adults">
							                    <option value="1">1</option>
							                    <option value="2" selected>2</option>
							                    <option value="3">3</option>
							                    <option value="4">4</option>
							                    <option value="5">5</option>
							                    <option value="6">6</option>
							                    <option value="7">7</option>
							                    <option value="8">8</option>
							                    <option value="9">9</option>
							                    <option value="10">10</option>
							                  </select>
										</div>
									</div>

									<div class="booking-interno-inputs">
										<div class="combo-box arrow-down">
											<label id="spChildren">{{ __('general.booking.label.children') }}</label>
							                  <select class="form-control" name="children" id="children">
							                    <option value="0">0</option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                    <option value="4">4</option>
							                    <option value="5">5</option>
							                  </select>
										</div>
									</div>

									<div class="booking-interno-inputs">
							            <div class="combo-box arrow-down" id="teenBox">
							              <label id="spTeen">{{ __('general.booking.label.teen') }}</label>
							              <select class="form-control" name="children2" id="children2">
							                <option value="0">0</option>
							                <option value="1">1</option>
							                <option value="2">2</option>
							                <option value="3">3</option>
							                <option value="4">4</option>
							                <option value="5">5</option> 
							              </select>
							            </div>
									</div>	
								</div>
							</div>
						</div><!--tab-content -->
						<input type="hidden" name="subchan" value="royalreservations.com">
						<input type="hidden" name="_ga" value="">
						@if (App::getLocale() == 'es')<input type="hidden" name="languageid" value="2">@endif
						<div class="boton-booking-now">
							<button type="submit" class="boton-booking-now my-4 text-uppercase bold" style="font-size: small; border:none; color:white;min-height: 100px;" id="btn-booking">{{ __('general.booking.btn.book_now') }}</button>
						</div>
						</form>
					</div><!--contenedor-tabs-->
				</div><!--class="container booking-interno-container"-->
			</div> <!--class="w-100"-->
		</div> <!-- class="row" -->
	</section>
</div>

  <input type="hidden" name="tag_adult"     id="tag_adult"     value="{{ __('general.booking.label.adults') }}">
  <input type="hidden" name="tag_adult2"    id="tag_adult2"    value="{{ __('general.booking.label.adults1') }}">
  <input type="hidden" name="tag_adult3"    id="tag_adult3"    value="{{ __('general.booking.label.adults2') }}">
  <input type="hidden" name="tag_teen"      id="tag_teen"      value="{{ __('general.booking.label.teen') }}">
  <input type="hidden" name="tag_children"  id="tag_children"  value="{{ __('general.booking.label.children') }}">
  <input type="hidden" name="tag_children2" id="tag_children2" value="{{ __('general.booking.label.children1') }}">

<script type="text/javascript">

function changeResort(resort){ //oculto casillas de edades, cambio etiquetas de edad del form principal de landing oferta
  var tag_adult  = $('#tag_adult').val();
  var tag_adult2 = $('#tag_adult2').val();
  var tag_adult3 = $('#tag_adult3').val();
  var tag_teen  = $('#tag_teen').val();
  var tag_children = $('#tag_children').val();
  var tag_children2 = $('#tag_children2').val();

  if(resort==undefined){
    //var resort = document.getElementById("hotelId").value;
    var resort = $('select option:selected').attr('value');
  }
  var ihotelier = $('select option:selected').attr('id');
  if (resort=='95939' || resort=='86182' || resort=='86175' || resort=='106514'){
    $("#children2").val(0);
    $('#teenBox').hide();
    $("#spAdults").text(tag_adult2);
    $("#spChildren").text(tag_children);
    $("#RatePlanID").val(ihotelier);
    $("#packageId").val(ihotelier);
  }else{

	  if (resort=='86184' || resort=='86169' || resort=='73601' || resort=='86179' || resort=='86180' || resort=='86181'){
	    $('#teenBox').show();
	    $("#spAdults").text(tag_adult);
	    $("#spChildren").text(tag_teen);
	    $("#spTeen").text(tag_children);
	    $("#RatePlanID").val(ihotelier);
    	$("#packageId").val(ihotelier);
	  }else{
	  	  if (resort=='85285' || resort=='86117' || resort=='103541'){
		    $("#children2").val(0);
		    $('#teenBox').hide();
		    $("#spAdults").text(tag_adult3);
		    $("#spChildren").text(tag_children2);
		    $("#RatePlanID").val(ihotelier);
		    $("#packageId").val(ihotelier);
		  } 
	  }
  }
}
</script>