import 'select2/dist/js/select2.full';

$(document).ready(function () {
    function formatState (state) {
      if (!state.id) {
        return state.text;
      }
      var baseUrl = "/user/pages/images/flags";
      var $state = $(
        '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
      );

      return $state; 
    };

    $('.combo-booking').select2({
        width: '100%',
        closeOnSelect:true,
        dropdownCssClass:'combo-booking-result',
        templateResult: function (state, container) {
            var clase='';
            if (state.element) {
                clase=$(state.element).attr("class");
            }
            if (!state.id) {
                return state.text;
            }
            var baseUrl = "/user/pages/images/flags";
            var $state = $('<span class="'+clase+'">' + state.text + '</span>');
            return $state;
        },
    });

    var select2 = $('.combo-booking-modal');

    $.each(select2, function(key, element){
        var modal = element.closest('.modal');
        $(element).select2({
            width: '100%',
            closeOnSelect:true,
            dropdownCssClass:'combo-booking-result',
            dropdownParent: $(modal)
        });
    });

    $('.select-airports').on('change', function (){
        var url = "/reservhotel_countries/" + $(this).val() + ".html";
        var cities = $(this).closest('form').find('[name="airport"]');

        $.get(url,function (data) {
            cities.html(data);
            cities.trigger('change.select2');
        });
    });
});