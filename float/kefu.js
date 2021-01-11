(function($){
    for (var i=0; i<online.length; i++) {
        if (online[i]) jQuery("#box-kefu .qq").eq(i).addClass("online");
    }
    var _open = $("#box-kefu").find(".kefu-open"),
        _close = $("#box-kefu").find(".kefu-close");
    _open.find("a").hover(function(){
        $(this).stop(true,true).animate({paddingLeft:20},200).find("i").stop(true,true).animate({left:75},200);
    },function(){
        $(this).stop(true,true).animate({paddingLeft:35},200).find("i").stop(true,true).animate({left:10},200);
    });
    

    _open.find(".close").click(function(){
        _open.animate({width:148},200,function(){
            _open.animate({width:0},200,function(){
                _close.animate({width:34},200);

            });
        });
    });
    _close.click(function(){
        _close.animate({width:44},200,function(){
            _close.animate({width:0},200,function(){
                _open.animate({width:138},200);
            });
        });
    });
})(jQuery)