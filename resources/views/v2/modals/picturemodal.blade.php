{{--
    Modal para fotos de ofertas por resorts tablca "ConceptResort"
--}}
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="picturemodal-{{$resort->id}}" aria-hidden="true" id="picturemodal-{{$resort->id}}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title">
                    <b>{{$resort->resort->name}}</b>
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img class="w-100 lazyload" data-src="{{ asset($resort->img_big)}}" alt="{{$resort->resort->name}}" title="{{$resort->resort->name}}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>