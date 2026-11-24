//ajaxでのcsrfトークン送信
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //"If-Modified-Since": new Date().toUTCString()
        }
});

function detail(){
    this.param = 1;
}

detail.prototype.getHtmlAjax = function getHtmlAjax(){

    var url = '/' + this.category + '/add/photos?no=' + this.param;

    $.ajax({
        url: "/norway" + url,
        datatype:"html",
        type:"get",

    }).done(function(data){
        if(data === ""){
            $('#loadimg').html('');
            $(window).unbind('bottom');
        } else {
            $('#main_photo').append(data);
        }

    }).fail(function(data){
        $("#result").text("ajax通信エラーです。");
    });

};

photos = new detail();

$(function() {

    // オプションのproximityでbottom.jsを発生する位置を指定する
    $(window).bottom({proximity: 1});

    $(window).bind('bottom', function() {

        var obj = $(this);

        // 「loading」がfalseの時に実行
        if (!obj.data('loading')) {

            // 「loading」をtrueにする
            obj.data('loading', true);

            // ローディング画像を表示
            $('#loadimg').html("<img src='../../images/loading.gif' />");

            // 追加したい処理を記述
            setTimeout(function() {

                // ローディング画像を非表示
                $('#loadimg').html('');

                // 追加するHTMLを指定
                var no = photos.param;
                no = Number(no) + 1;
                var href = window.location.href ;
                var sp = href.split("/");
                var cnt = 1;
                sp.forEach(function(value) {
                    if(cnt === 5){
                        photos.category = value;
                    }
                    cnt = cnt + 1;
                });

                photos.param = no;

                photos.getHtmlAjax();

                // 処理が完了したら「loading」をfalseにする
                obj.data('loading', false);

            }, 1500);
        }

    });

    // リロードしたときにページの先頭を表示する
    $('html,body').animate({ scrollTop: 0 }, '1');

});
