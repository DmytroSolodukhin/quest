function TableVisitViewModel(time_visit, visit, quest_id, params) {
    "use strict";
    var that = this,
        days = {
            1: 'пн',
            2: 'вт',
            3: 'ср',
            4: 'чт',
            5: 'пт',
            6: 'сб',
            0: 'вс'
        },
        mounths = {
            1: 'Январь',
            2: 'Февраль',
            3: 'Март',
            4: 'Апрель',
            5: 'Май',
            6: 'Июнь',
            7: 'Июль',
            8: 'Август',
            9: 'Сентябрь',
            10: 'Октябрь',
            11: 'Ноябрь',
            12: 'Декабрь'
        };

    that.Array = [];
    that.maxPrice = ko.observable('400');

    for(var i = 0; i < visit.length; i++) {
        if(visit[i].price > that.maxPrice() && visit[i].title != '23:59'){
            that.maxPrice(visit[i].price);
        }
    }

if(that.maxPrice() == 500){
that.maxPrice(600);
}

    that.manthArray    = {};
    that.visit_table   = ko.observableArray([]);
    that.returnArray   = ko.observableArray([]);
    that.showBilling   = ko.observable(false);
    that.curentPrice   = ko.observable([]);
    that.fir           = ko.observable(true);
    that.phone         = ko.observable('');
    that.count         = ko.observable(4);
    that.price         = ko.observable(800);
    that.name          = ko.observable('');
    that.description   = ko.observable('');
    that.error         = ko.observable('');
    that.success       = ko.observable(false);

    var dat = new Date(),
        curent_mounth = dat.getMonth()+1;
    if(curent_mounth == 13){
        curent_mounth = 1;
    }

    that.selected_day = ko.observable(curent_mounth  + '_' + dat.getDate()+ '_' + dat.getFullYear());

    that.manthArray[(dat.getMonth()+1)+'_'+dat.getDate() + '_' + dat.getFullYear()] = {
        mounth: dat.getMonth()+1,
        date:  dat.getDate(),
        year: dat.getFullYear(),
        title: mounths[dat.getMonth() + 1],
        name: days[dat.getDay()]
    };

    for(var i = 0; i < 10; i++){
        dat.setTime( dat.getTime() + 86400000);
        that.manthArray[(dat.getMonth()+1)+'_'+dat.getDate() + '_' + dat.getFullYear()] = {
            mounth: dat.getMonth() + 1,
            year: dat.getFullYear(),
            date:  dat.getDate(),
            name: days[dat.getDay()],
            title: mounths[dat.getMonth() + 1]
        };
    }

    that.mounthList = function(){
        var list = [];

        for (var i in that.manthArray) {

            if (that.manthArray.hasOwnProperty(i)) {
                list.push({
                    key: i,
                    value: that.manthArray[i]
                });
            }
        }

        return list;
    };

    that.curentDate = function(){
        var date = that.selected_day().split('_');

        return date[1] + '/' + date[0] + '/' + date[2];
    };

    that.selectDay = function(date){
        $('.day').removeClass('current_day');
        $('#day_'+date).addClass('current_day');
        $('button').attr({'disable': false});
        that.selected_day(date);
    };

    that.removeTime = function(){
        var request = {
            id: that.curentPrice().select_id
        };

        $.ajax({
            method: 'DELETE',
            url: '/restapi/remove_time',
            async: true,
            data: request
        }).done(function (data) {
            if (data) {
                if(data['success']){
                    location.reload()
                }
            }
        });

    };

    that.sendReserv = function(){

        var request = {
            name:        that.name(),
            phone:       that.phone(),
            quest:       quest_id,
            visit:       that.curentPrice().id,
            count:       that.curentPrice().count,
            time:        that.curentPrice().title,
            date:        that.curentDate(),
            price:       that.curentPrice().price
        };

        $.ajax({
            method: 'POST',
            url: '/restapi/set/reserved',
            async: true,
            data: request
        }).done(function (data) {
            if (data) {
                that.closePopup();
                if(data['success']){
                    $('#success').show();

                }else{
                    that.error('Извините, но на это время уже записалась другая комманда!');
                    $('#errorSuccess').show();
                }
                that.success(data['success']);

            }else{
                that.error('Извините, на данный момент у нас технические неполадки, возможно будет лучше позванить нам!')
                $('#errorSuccess').show();
            }
        });

    };

    that.closeerrorSuccess = function(){
        $('#errorSuccess').hide();

    };

    that.closeSuccessPopup = function(){
        $('#success').hide();
        if(that.success()) {
            location.reload();
        }
    };

    $('#Price').on('change', function(){
        var pri = that.curentPrice();
        pri.price = $(this).val();
        that.curentPrice(pri);
    });

    that.selectVisit = function(data, id){

        for(var i = 0; i < that.Array[data].length; i++){
            if(that.Array[data][i].id == id){
                that.phone(that.Array[data][i].phone);
                that.name(that.Array[data][i].name);
                that.count(that.Array[data][i].count);
                that.price(that.Array[data][i].price);
                that.selected_day(data);
                that.curentPrice(that.Array[data][i]);
                $('#billing_popup').show();

                return;
            }
        }
    };

    that.closePopup = function(){
        that.curentPrice([]);
        $('.curentPrice').removeClass('RedPrice');
        $('#numberUser').val(params.count);
        $('#billing_popup').hide();
        $('html, body').attr('style','');
    };

    that.respArray = function(data){

        var curArray = that.manthArray[data],
            vis = [],
            date = new Date();

        for(var i = 0; i < visit.length; i++){
            vis[i] = {};
            vis[i] = {
                id: visit[i].id,
                price: visit[i].price,
                title: visit[i].title,
                count: 4,
                selected: false
            };

            if ((curArray.name == 'сб' || curArray.name == 'вс') && vis[i].title != '23:59') {
                vis[i].price = that.maxPrice();
            }

            for (var m = 0; m < params.primeDate.length; m++) {
                if (curArray.mounth + '_' + curArray.date + '_' + curArray.year == params.primeDate[m].date) {
                    vis[i].price = params.primeDate[m].price;
                }
            }

            for(var f = 0; f < time_visit.length; f++){

                if(data == time_visit[f].date &&
                    time_visit[f].time == vis[i].title) {
                    vis[i].selected = true;
                    vis[i].select_id = time_visit[f].id;
                    vis[i].phone = time_visit[f].phone;
                    vis[i].name = time_visit[f].title;
                    vis[i].count = time_visit[f].count;
                    vis[i].price = time_visit[f].price;
                }
            }
        }
        that.Array[data] = vis;

        return vis;
    };

    $('#numberUser').on('change', function(){
        if($(this).val() > params.count || that.curentPrice().count > params.count){
            var pri = that.curentPrice();
            if($(this).val() > pri.count){
                pri.price += params.pay;
                $('.curentPrice').addClass('RedPrice');
            }else if($(this).val() < pri.count){
                pri.price -= params.pay;
            }
            pri.count = $(this).val();
            that.curentPrice(pri);
        }
    });
}
