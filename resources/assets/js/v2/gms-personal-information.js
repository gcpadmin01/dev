require ('./interna');
import 'jquery-mask-plugin'; 

$('.bootstrapdp').bootstrapDP({
    format:'yyyy-mm-dd',
    autoclose: true
});

$('#gms-state').select2();

$('#gms-countries').select2({
    data:countries.results
})
.on('change', function (e) {
    if ($(this).select2('data')[0] != undefined) {
        var states = $(this).select2('data')[0].states;
        $('#gms-state').select2('destroy')
        .empty()
        .select2({
            data:states,
            width:'100%'
        })
        .val($('#gms-state').attr('value'))
        .trigger('change');
    }
})
.val($('#gms-countries').attr('value'))
.trigger('change');

