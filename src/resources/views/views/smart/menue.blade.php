        <div id="start_btn" class="row" style="margin-top: 50px;position: relative;">
            <div class="col-xs-12 text-center">
                <a id="start" class="btn" role="button" style="padding: 20px;background-color:#ff0066; color: #ffffff;">START</a>
            </div>
            <div class="col-xs-12 text-center" style="padding-top: 30px;">
                <a class="back_img_view btn" style="color: #FFFFFF;" role="button">背景の写真を見る</a>
            </div>
        </div>

        <div id="menue" style="margin-top: 50px;position: relative;display: none">

            <div class="row">
                <div class="col-xs-6 text-center">
                    <a id="about" href="" class="btn" role="button" style="padding: 20px;background-color:#00ccff; color: #ffffff;" data-toggle="modal" data-target="#contactModal">
                        ABOUT
                    </a>
                </div>

                <div class="col-xs-6 text-center">
                    <a href="{{url('/diary')}}" class="btn" role="button" style="padding: 20px;color:#FFFFFF; border-color: #FFFFFF;">
                        DIARY
                    </a>
                </div>
            </div>

            <div class="row" style="padding-top: 10px;">
                <div class="col-xs-6 text-center">
                    <a href="{{url('all/non/photos?no=1')}}" class="btn" role="button" style="padding: 20px;padding-left: 15px;padding-right: 15px;background-color:#000000; color: #FFFFFF;">
                        PHOTOS
                    </a>
                </div>
                <div class="col-xs-6 text-center">
                    <a id="top_view" class="btn" role="button" style="padding: 20px;padding-left: 30px;padding-right: 30px;background-color:#ff66ff; color: #ffffff;">
                        TOP
                    </a>
                </div>
            </div>

        </div>
