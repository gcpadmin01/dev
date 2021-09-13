var showTooltipResortFlight = function (form, customClass) {
    var blockForm = false;
    var dateIn  = $(form).find('[name="aDate"]').datepicker( "getDate" );
    var inst = $(form).find('[name="dDate"]');
    var limit = new Date('2020-06-12 23:00:00');
    var limitTrc = new Date('2020-06-19 23:00:00');
    var limitGr = new Date('2020-07-03 23:00:00');
    var limitCuracao = new Date('2020-05-10 23:00:00');
    var limitCancun = new Date('2020-06-12 23:00:00');
    var limitStmarteen = new Date('2020-05-10 23:00:00');
    var limitSands = new Date('2020-07-31 23:00:00');

    if(typeof inst.data('config_tootltip') == 'undefined'){
        return false;
    }

    var excepts = {
        '10730' : 'The Royal Islander',
        '10727' : 'The Royal Cancun',
        '10732' : 'Grand Residences Riviera Cancun',
        '10731' : 'The Royal Haciendas',
        '10728' : 'The Royal Sands Resort'
    }

    var curacao = {
        '10734' : 'Villas at Simpson Bay Resort',
        '10733' : 'Simpson Bay Resort',
        '10735' : 'The Royal Sea Aquarium Resort'
    }
    
    var idn = $(form).find('[name="hotel"]').val();
    
    if(dateIn.getTime() <= limitCancun.getTime() && typeof excepts[idn] != 'undefined'){
        blockForm = true;
        inst.attr('data-original-title',inst.data('cancun').replace('<<hotel>>',excepts[idn]));
        inst.tooltip('show');
    }

    /*GR*/
    if(dateIn.getTime() <= limitGr.getTime() && idn == '10732' ){
        blockForm = true;
        inst.attr('data-original-title',inst.data('gr').replace('<<hotel>>',excepts[idn]));
        inst.tooltip('show');
    }

    /*TRC*/
    if(dateIn.getTime() <= limitTrc.getTime() && idn == '10727' ){
        blockForm = true;
        inst.attr('data-original-title',inst.data('trc').replace('<<hotel>>',excepts[idn]));
        inst.tooltip('show');
    }

    /*TRS*/
    if(dateIn.getTime() <= limitSands.getTime() && idn == '10728' ){
        blockForm = true;
        inst.attr('data-original-title',inst.data('sands').replace('<<hotel>>', 'The Royal Sands Resort' ));
        inst.tooltip('show');
    }

    /*TRA*/
    if(dateIn.getTime() <= limitCuracao.getTime() && idn == '10735' ){
        blockForm = true;
        inst.attr('data-original-title',inst.data('curacao_2').replace('<<hotel>>', 'The Royal Sea Aquarium Resort'));
        inst.tooltip('show');
    }

    /*TRA exception*/
    if(dateIn.getTime() <= limitStmarteen.getTime() && idn != '10735' ){
        if(typeof curacao[idn] != 'undefined'){
            blockForm = true;
            inst.attr('data-original-title',inst.data('curacao').replace('<<hotel>>',curacao[idn]));
            inst.tooltip('show');
        }
    }

    var tooltipId = inst.attr('aria-describedby');
    if(typeof customClass !== 'undefined'){
        $('#'+tooltipId).addClass('tooltip-strong');
    }else{
        $('#'+tooltipId).removeClass('tooltip-strong');
    }

    return blockForm;
}

var showTooltipResortHotel = function (form, customClass) {

    //var customClass = (typeof customClass !== 'undefined') ?  customClass : "";
    var blockForm = false;
    var today = new Date();
    var dateIn  = $(form).find('[name="datein"]').datepicker( "getDate" );
    var inst = $(form).find('[name="dateout"]');
    var limitCuracao = new Date('2020-05-10 23:00:00');
    var limit = new Date('2020-06-12 23:00:00');
    var limitCancun = new Date('2021-05-29 00:00:00');
    var limitGr = new Date('2020-07-03 23:00:00');
    var limitTrc = new Date('2020-06-19 23:00:00')
    var diffDays = Math.ceil( Math.abs(dateIn - today) / (1000 * 60 * 60 * 24)  );
    var limitStmarteen = new Date('2020-05-10 23:00:00');
    var limitSands = new Date('2020-07-31 23:00:00');
        
    if(typeof inst.data('config_tootltip') == 'undefined'){
        return false;
    }


    var excepts = {
        '86182' : 'The Royal Islander',
        '73601' : 'The Royal Cancun',
        '95939' : 'Grand Residences Riviera Cancun',
        '86184' : 'The Royal Haciendas',
        '86169' : 'The Royal Sands Resort'
    }

    var curacao = {
        '86180' : 'The Villas at Simpson Bay Beach Resort & Marina',
        '86179' : 'Simpson Bay Beach Resort & Marina',
        '86181' : 'The Royal Sea Aquarium Resort'
    }


    //$('body').tooltip('dispose');
    //if(typeof customClass !== 'undefined'){
    //    console.log('reset');
    //    inst.attr('data-template', '<div class="tooltip tooltip-ebb '+customClass+'" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>');
    //}else{
    //    inst.attr('data-template', '<div class="tooltip tooltip-ebb" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>');
    //}

    var idn = $(form).find('.hotel-id').val()+"";
 

    if (diffDays >= 150) {
        inst.attr('data-original-title',inst.data('ebb'));
        inst.tooltip('show');
    } else{
        if(dateIn.getTime() <= limitCancun.getTime() && typeof excepts[idn] != 'undefined'){
            blockForm = true;
            inst.attr('data-original-title',inst.data('cancun').replace('<<hotel>>',excepts[idn]));
            inst.tooltip('show');
        }

        /*TRS*/
        if(dateIn.getTime() <= limitSands.getTime() && idn == '86169' ){
            blockForm = true;
            inst.attr('data-original-title',inst.data('sands').replace('<<hotel>>','The Royal Sands Resort'));
            inst.tooltip('show');
        }

        /*GR*/
        if(dateIn.getTime() <= limitGr.getTime() && idn == '95939' ){
            blockForm = true;
            inst.attr('data-original-title',inst.data('gr').replace('<<hotel>>',excepts[idn]));
            inst.tooltip('show');
        }

        /*TRC*/
        if(dateIn.getTime() <= limitTrc.getTime() && idn == '73601' ){
            blockForm = true;
            inst.attr('data-original-title',inst.data('trc').replace('<<hotel>>',excepts[idn]));
            inst.tooltip('show');
        }

        /*TRA*/
        if(dateIn.getTime() <= limitCuracao.getTime() && idn == '86181' ){
            blockForm = true;
            inst.attr('data-original-title',inst.data('curacao_2').replace('<<hotel>>', 'The Royal Sea Aquarium Resort'));
            inst.tooltip('show');
        }

        /*TRA*/
        if(dateIn.getTime() <= limitStmarteen.getTime() && idn != '86181'  ){
            if(typeof curacao[idn] != 'undefined'){
                blockForm = true;
                inst.attr('data-original-title',inst.data('curacao').replace('<<hotel>>',curacao[idn]));
                inst.tooltip('show');
            }
        }
    }

    
    var tooltipId = inst.attr('aria-describedby');
    if(typeof customClass !== 'undefined'){
        $('#'+tooltipId).addClass('tooltip-strong');
    }else{
        $('#'+tooltipId).removeClass('tooltip-strong');
    }

    return blockForm;
}

var changeLabelsBooking = function (resort, container){
    let tag_adult =  $('#tag_adult').val();
    let tag_adult2 = $('#tag_adult2').val();
    let tag_adult3 = $('#tag_adult3').val();
    let tag_adult4 = $('#tag_adult4').val();
    let tag_teen = $('#tag_teen').val();

    let tag_children = $('#tag_children').val();
    let tag_children2 = $('#tag_children2').val();
    let tag_children3 = $('#tag_children3').val();
    let tag_children4 = $('#tag_children4').val();
    let tag_children5 = $('#tag_children5').val();

    let resortId = resort+"";


    switch(resortId){
        /*GR TRCC CCR*/
        case '95939':
        case '86175':
        case '106514':
            container.find('.teenBox').hide();
            container.find('.spChildren').text(tag_children);
            container.find(".spAdults").text(tag_adult2);
            break;

        /*TRS TRI TRC TRH*/
        case '86169':
        case '86182':
        case '73601':
        case '86184':
            container.find('.teenBox').hide();
            container.find('.spChildren').text(tag_children5);
            container.find(".spAdults").text(tag_adult2);
            break;

        /*TRC TRS TRH  TEMPORAL PUEDE ACTIVARSE*/
        /*
        case '73601':
        case '86169':
        case '86184':
            container.find('.teenBox').hide();
            container.find('.spChildren').text(tag_teen);
            container.find(".spAdults").text(tag_adult);
            break;*/

        /*TRC TRS SBR TVSBR TSA TRH*/
        /*case  '73601':*/
        /*case  '86169':*/
        case  '86179':
        case  '86180':
        case  '86181':
        /*case  '86184':*/
            container.find('.teenBox').show();
            container.find('.teenBoxLabel').text(tag_children);
            container.find('.spChildren').text(tag_teen);
            container.find(".spAdults").text(tag_adult);

            break;

        /*ANCORA DELMAR  ALSOL*/
        case '85285' :
        case '86117' :
        case '103541':

            break;

        /*RUNO*/
        case '110441':
            container.find('.teenBox').hide();
            container.find('.spChildren').text(tag_children3);
            container.find(".spAdults").text(tag_adult4);
            break;

        /*HOTEL + VUELO*/

        /*TRC TRS TRI TRH SBR TVSBR TSA*/
        case '10727':
        case '10728':
        case '10730':
        case '10731':
        case '10733':
        case '10734':
        case '10735':
            container.find('#spChildrenB,.spChildrenB').text(tag_children5);
            container.find("#spAdultsB,.spAdultsB").text(tag_adult);
            break;

        /*GR*/
        case '10732':
                container.find('#spChildrenB,.spChildrenB').text(tag_children4);
                container.find("#spAdultsB,.spAdultsB").text(tag_adult2);
            break;

        default: // Destino
            container.find('.teenBox').hide();
            container.find('.spChildren').text(tag_children);
            container.find(".spAdultsB").text(tag_adult4);
            break;
    }
    /*
    if (resort == '95939' || resort == '86182' || resort == '86175' || resort == '106514') {
        container.find(".children2B").val(0);
        container.find('.teenBoxB').hide();
        container.find(".spAdultsB").text(tag_adult2);
        container.find(".spChildrenB").text(tag_children);
    } else {
        if (resort == '86184' || resort == '86169' || resort == '73601' || resort == '86179' || resort == '86180' || resort == '86181') {
            container.find('.teenBoxB').show();
            container.find(".spAdultsB").text(tag_adult);
            container.find(".spChildrenB").text(tag_teen);
            container.find(".spTeenB").text(tag_children);
        } else {
            if (resort == '85285' || resort == '86117' || resort == '103541') {
                container.find(".children2B").val(0);
                container.find('.teenBoxB').hide();
                container.find(".spAdultsB").text(tag_adult3);
                container.find(".spChildrenB").text(tag_children2);
            }
        }
    }

    if (resort == '110441') {    
        container.find(".children2B").val(0);
        container.find('.teenBoxB').hide();
        container.find(".spAdultsB").text(tag_adult4);
        container.find(".spTeenB").text(tag_children3);
    }
    */
}

export {
    showTooltipResortFlight,
    showTooltipResortHotel,
    changeLabelsBooking,
}