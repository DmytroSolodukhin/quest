/**
 * Created by dss on 03.01.17.
 */
function successTime(id){
    var request = {
        id: id
    };

    $.ajax({
        method: 'POST',
        url: '/restapi/success_time',
        async: true,
        data: request
    }).done(function (data) {
        if (data) {
            if(data['success']){
                $('.zakaz_'+id).removeClass('admin_inprogress').addClass('admintable');
                $('.zakaz_'+id+' .control_btn').hide();
                $('.zakaz_'+id).prependTo( '#history_time' );
            }
        }
    });
    countTime();
}

function removeTime(id){
    var request = {
        id: id
    };
    $.ajax({
        method: 'DELETE',
        url: '/restapi/remove_time',
        async: true,
        data: request
    }).done(function (data) {
        if (data) {
            if(data['success']){
                $('.zakaz_'+id).remove();
            }
        }
    });
    countTime();
}

var para = $('.admintable');
para.prependTo( '#history_time' );