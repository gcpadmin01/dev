@section('title', __('adicionales/assist-card.seo.title'))
@section('metadescription', __('adicionales/assist-card.seo.metadescription'))
<section class="container py-2">
  <div class="row no-gutters subinterna pb-4">
    <div class="">
        <img class="img-fluid" src="{{asset('img/adicionales/assist-card-banner.jpg')}}" alt="Assit card">
    </div>
    <div class="col-md-12 px-0">
        <a href="#" class="btn btn-warning btn-lg">{!! __('adicionales/assist-card.get_quote') !!}</a>
        <br>
        {!! __('adicionales/assist-card.descripcion_paquete') !!}
        
        <table class="table table-bordered" data-toggle="modal" data-target="#myModal">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">AC 10<br>5.60 USD {!! __('adicionales/assist-card.columna_titulo') !!}</th>
                <th scope="col">AC 15<br>7.90 USD {!! __('adicionales/assist-card.columna_titulo') !!}</th>
                <th scope="col">AC 60<br>9.90 USD {!! __('adicionales/assist-card.columna_titulo') !!}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{!! __('adicionales/assist-card.renglon_titulo_1') !!}</th>
                <td>USD 10,000</td>
                <td>USD 15,000</td>
                <td>USD 60,000</td>
              </tr>
              <tr>
                  <th scope="row" colspan="4">{!! __('adicionales/assist-card.renglon_espacio') !!}</th>
              </tr>
              <tr>
                <th scope="row">{!! __('adicionales/assist-card.renglon_titulo_2') !!}</th>
                <td>USD 10,000</td>
                <td>USD 15,000</td>
                <td>USD 60,000</td>
              </tr>
              <tr>
                <th scope="row">{!! __('adicionales/assist-card.renglon_titulo_3') !!}</th>
                <td>USD 10,000</td>
                <td>USD 15,000</td>
                <td>USD 60,000</td>
              </tr>
              <tr>
                <th scope="row">{!! __('adicionales/assist-card.renglon_titulo_4') !!}</th>
                <td>USD 300</td>
                <td>USD 500</td>
                <td>USD 1,000</td>
              </tr>
              <tr>
                <th scope="row">{!! __('adicionales/assist-card.renglon_titulo_5') !!}</th>
                <td>USD 300</td>
                <td>USD 300</td>
                <td>USD 500 (USD 300 {!! __('adicionales/assist-card.descripcion_contenido') !!})</td>
              </tr>
              <tr>
                  <th scope="row">{!! __('adicionales/assist-card.renglon_titulo_6') !!}</th>
                  <td>USD 400</td>
                  <td>USD 600</td>
                  <td>USD 2,500</td>
                </tr>
            </tbody>
          </table>
          <a href="#" class="btn btn-warning btn-lg">{!! __('adicionales/assist-card.get_quote') !!}</a>
          <br>
          FAQ's
          <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        {!! __('adicionales/assist-card.faq1_sale_question') !!}
                    </button>
                  </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                      {!! __('adicionales/assist-card.faq1_sale_answer') !!}
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        {!! __('adicionales/assist-card.faq2_sale_question') !!}
                    </button>
                  </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                      {!! __('adicionales/assist-card.faq2_sale_answer') !!}
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        {!! __('adicionales/assist-card.faq3_sale_question') !!}
                    </button>
                  </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                      {!! __('adicionales/assist-card.faq3_sale_answer') !!}
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingFour">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        {!! __('adicionales/assist-card.faq4_sale_question') !!}
                    </button>
                  </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                      {!! __('adicionales/assist-card.faq4_sale_answer') !!}
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header" id="headingFive">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        {!! __('adicionales/assist-card.faq5_sale_question') !!}
                    </button>
                  </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="card-body">
                      {!! __('adicionales/assist-card.faq5_sale_answer') !!}
                  </div>
                </div>
              </div>
              
           </div>
  </div>
</section>

 
  <!-- Modal -->
  <div class="modal fade modal-webcams" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">{!! __('adicionales/assist-card.titulo_modal') !!}</h4>
        </div>
        <div class="modal-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">AC 10<br>5.60 USD {!! __('adicionales/assist-card.columna_titulo') !!}</th>
                <th scope="col">AC 15<br>7.90 USD {!! __('adicionales/assist-card.columna_titulo') !!}</th>
                <th scope="col">AC 60<br>9.90 USD {!! __('adicionales/assist-card.columna_titulo') !!}</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon1') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_01') !!} - USD 5,000</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_01') !!} - USD 5,000</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_01') !!} - USD 5,000</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon2') !!}</strong></p></td>
              <td><p>USD 300</p></td>
              <td><p>USD 300</p></td>
              <td><p>USD 300</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon3') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_02') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_02') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_02') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon4') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_03') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_03') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_03') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon5') !!}</strong></p></td>
              <td><p>USD 100</p></td>
              <td><p>USD 100</p></td>
              <td><p>USD 300</p></td>
            </tr>
            <tr>
            <td><p><strong>{!! __('adicionales/assist-card.modal_renglon6') !!}</strong></p></td>
            <td><p>USD 3,000</p></td>
            <td><p>USD 3,000</p></td>
            <td><p>USD 10,000</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon7') !!}</strong></p></td>
              <td><p>USD 3,000 ({!! __('adicionales/assist-card.modal_04') !!})</p></td>
              <td><p>USD 3,000 ({!! __('adicionales/assist-card.modal_04') !!})</p></td>
              <td><p>USD 10,000 ({!! __('adicionales/assist-card.modal_04') !!})</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon8') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon9') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon10') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon11') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon12') !!}</strong></p></td>
              <td><p>USD 80</p></td>
              <td><p>USD 80</p></td>
              <td><p>USD 100</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon13') !!}</strong></p></td>
              <td><p>USD 320</p></td>
              <td><p>USD 320</p></td>
              <td><p>USD 400</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon14') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon15') !!}</strong></p></td>
              <td><p>USD 120</p></td>
              <td><p>USD 120</p></td>
              <td><p>USD 180</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon16') !!}</strong></p></td>
              <td><p>USD 600</p></td>
              <td><p>USD 600</p></td>
              <td><p>USD 900</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon17') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon18') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon19') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon20') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon21') !!}</strong></p></td>
              <td><p>USD 3,000</p></td>
              <td><p>USD 5,000</p></td>
              <td><p>USD 8,000</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon22') !!}</strong></p></td>
              <td><p>USD 3,000</p></td>
              <td><p>USD 5,000</p></td>
              <td><p>USD 8,000</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon23') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_05') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon24') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_06') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_06') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_06') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon25') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_07') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_07') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_08') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon26') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_09') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_09') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_09') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon27') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_10') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_10') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_10') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon28') !!}</strong></p></td>
              <td><p>USD 1,200 - USD 40 {!! __('adicionales/assist-card.modal_11') !!}</p></td>
              <td><p>USD 1,200 - USD 40 {!! __('adicionales/assist-card.modal_11') !!}</p></td>
              <td><p>USD 1,200 - USD 40 {!! __('adicionales/assist-card.modal_11') !!}</p></td>
            </tr>
            <tr>
              <td><p><strong>{!! __('adicionales/assist-card.modal_renglon29') !!}</strong></p></td>
              <td><p>{!! __('adicionales/assist-card.modal_12') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_12') !!}</p></td>
              <td><p>{!! __('adicionales/assist-card.modal_13') !!}</p></td>
            </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">{!! __('adicionales/assist-card.modal_14') !!}</button>
        </div>
      </div>
      
    </div>
  </div>
