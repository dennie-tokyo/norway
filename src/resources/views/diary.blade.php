@extends('layout.diary')

@section('content')
<div class="container-fluid" id="diary" style="display: none;height: 100%;">
    
    <!-- 1列目 start -->
    <div class="row" style="height: 100%;background-color: #018a9a;color: #FFFFFF;">

        <div class="col-sm-5" style="height: 100%;">
            
            <div class="row">
                <div class="text-center" style="margin-top: 200px;">
                    <h2><span style="font-family: 'Caveat Brush', cursive;padding-bottom: 10px;border-bottom: 5px solid #b88b26;">DIARY</span></h2>  
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center" style="margin-top: 50px;padding-bottom: 100px;margin-left: 10px;margin-right: 10px;">
                        <p>旅行した時の日記。</p>
                        <p>大自然とヨーロッパの街並みが素敵でした。</p>
                    </div>
                </div>                
            </div>
                        
        </div>

        <div class="col-sm-7">

            <!-- 1列目 start -->
            <div class="row" style="background-color: #777777;color: #FFFFFF;">               
                <div class="col-lg-12" style="padding: 0px;">
                    <a href="{{url('departure')}}">
                        <div style="position: absolute;height: 100%;width: 100%;background-color: rgba(0,0,0,0.3);">
                        </div>
                        <div style="padding-left: 10px;padding-top: 10px;position: absolute;">
                            <p><span class="label">TRIP DATE</span> <span class="label" style="color: #FFFFFF;">2015/6/15</span></p>
                            <h4 style="color: #FFFFFF;margin-left: 7px;font-weight: bold;">出発</h4>
                        </div>
                        <img class="img-responsive" style="border-style: none;background-color: rgba(0,0,0,0.0);" src="{{url('img/diary/P1014649.JPG')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- 1列目 end -->

            <!-- 2列目 start -->
            <div class="row" style="background-color: #777777;color: #FFFFFF;">   
                <div class="col-lg-6" style="padding: 0px;">
                    <a href="{{url('oslo')}}">
                        <div style="position: absolute;height: 100%;width: 100%;background-color: rgba(0,0,0,0.3);">
                        </div>
                        <div style="padding-left: 10px;padding-top: 10px;position: absolute;">
                            <p><span class="label">TRIP DATE</span> <span class="label" style="color: #FFFFFF">2015/6/16</span></p>
                            <h4 style="color: #FFFFFF;margin-left: 7px;font-weight: bold;">オスロ</h4>
                        </div>
                        <img class="img-responsive" style="border-style: none;background-color: rgba(0,0,0,0.0);" src="{{url('img/diary/P1014690.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6" style="padding: 0px;">
                    <a href="{{url('trollstigen')}}">
                        <div style="position: absolute;height: 100%;width: 100%;background-color: rgba(0,0,0,0.5);">
                        </div>
                        <div style="padding-left: 10px;padding-top: 10px;position: absolute;">
                            <p><span class="label">TRIP DATE</span> <span class="label">2015/6/17</span></p>
                            <h4 style="color: #FFFFFF;margin-left: 7px;font-weight: bold;">ゴールデンルート</h4>
                        </div>
                        <img class="img-responsive" style="border-style: none;background-color: rgba(0,0,0,0.0);" src="{{url('img/diary/P1014911.jpg')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- 2列目 end -->
                
            <div class="row" style="background-color: #777777;color: #FFFFFF;">
                <div class="col-md-12" style="padding: 0px;">
                    <a href="{{url('geirangerfjord')}}">
                        <div style="position: absolute;height: 100%;width: 100%;background-color: rgba(0,0,0,0.5);">
                        </div>
                        <div style="padding-left: 10px;padding-top: 10px;position: absolute;">
                            <p><span class="label">TRIP DATE</span> <span class="label" style="color: #FFFFFF;">2015/6/18</span></p>
                            <h4 style="color: #FFFFFF;margin-left: 7px;font-weight: bold;">ガイランゲルフィヨルド</h4>
                        </div>
                        <img class="img-responsive" data-lity style="border-style: none;background-color: rgba(0,0,0,0.0);" src="{{url('img/diary/P1015042.jpg')}}" alt="">
                    </a>
                </div>
            </div>
            
            <div class="row" style="background-color: #777777;color: #FFFFFF;">
                <div class="col-md-6" style="padding: 0px;">
                    <a href="{{url('briksdalsbreen')}}">
                        <div style="position: absolute;height: 100%;width: 100%;background-color: rgba(0,0,0,0.5);">
                        </div>
                        <div style="padding-left: 10px;padding-top: 10px;position: absolute;">
                            <p><span class="label">TRIP DATE</span> <span class="label" style="color: #FFFFFF;">2015/6/19</span></p>
                            <h4 style="color: #FFFFFF;margin-left: 7px;font-weight: bold;">ブリクスダール氷河</h4>
                        </div>
                        <img class="img-responsive" data-lity style="border-style: none;background-color: rgba(0,0,0,0.0);" src="{{url('img/diary/P1015254.jpg')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6" style="padding: 0px;">
                    <a href="{{url('sognefjord')}}">
                        <div style="position: absolute;height: 100%;width: 100%;background-color: rgba(0,0,0,0.5);">
                        </div>
                        <div style="padding-left: 10px;padding-top: 10px;position: absolute;">
                            <p><span class="label">TRIP DATE</span> <span class="label">2015/6/20</span></p>
                            <h4 style="color: #FFFFFF;margin-left: 7px;font-weight: bold;">ソグネフィヨルド</4>
                        </div>
                        <img class="img-responsive" data-lity style="border-style: none;background-color: rgba(0,0,0,0.0);" src="{{url('img/diary/P1015514.JPG')}}" alt="">
                    </a>
                </div>
            </div>
            
            <div class="row" style="margin-top: 0px;background-color: #ff9999;">
                <div class="col-md-12" style="padding: 0px;background-color: #ff9999;">
                    <a href="{{url('stavanger')}}">
                        <div style="position: absolute;height: 100%;width: 100%;background-color: rgba(0,0,0,0.5);">
                        </div>
                        <div style="padding-left: 10px;padding-top: 10px;position: absolute;">
                            <p><span class="label">TRIP DATE</span> <span class="label" style="color: #FFFFFF;">2015/6/21</span></p>
                            <h4 style="color: #FFFFFF;margin-left: 7px;font-weight: bold;">スタバンゲル</4>
                        </div>    
                        <img class="img-responsive" data-lity style="border-style: none;background-color: rgba(0,0,0,0.0);" src="{{url('img/diary/P1015971.jpg')}}" alt="">
                    </a>
                </div>                
            </div>
            
            <!-- 3列目 start -->
            <div class="row" style="margin-top: 0px;background-color: #ff9999;">
                <div class="col-md-6" style="padding: 0px;">
                    <a href="{{url('lysefjord')}}">
                        <div style="position: absolute;height: 100%;width: 100%;background-color: rgba(0,0,0,0.5);">
                        </div>
                        <div style="padding-left: 10px;padding-top: 10px;position: absolute;">
                            <p><span class="label">TRIP DATE</span> <span class="label" style="color: #FFFFFF;">2015/6/22</span></p>
                            <h4 style="color: #FFFFFF;margin-left: 7px;font-weight: bold;">リーセフィヨルド</4>
                        </div>

                        <img class="img-responsive" data-lity style="border-style: none;background-color: rgba(0,0,0,0.0);" src="{{url('img/diary/P1016180.JPG')}}" alt="">
                    </a>
                </div>
                <div class="col-md-6" style="padding: 0px;">
                    <a href="{{url('againoslo')}}">
                        <div style="position: absolute;height: 100%;width: 100%;background-color: rgba(0,0,0,0.5);">
                        </div>
                        <div style="padding-left: 10px;padding-top: 10px;position: absolute;">
                            <p><span class="label">TRIP DATE</span> <span class="label" style="color: #FFFFFF;">2015/6/23</span></p>
                            <h4 style="color: #FFFFFF;margin-left: 7px;font-weight: bold;">再びオスロ</4>
                        </div>
                        <img class="img-responsive" data-lity style="border-style: none;background-color: rgba(0,0,0,0.0);" src="{{url('img/diary/P1016407.JPG')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- 3列目 end -->

        </div>
        
    </div>
        
</div>
@endsection