<div style="color: #FFFFFF;position: fixed;margin-top: 10px;height: 500px;width: 100%;">
    <div class="" style="padding: 3%;margin-top: 1%;">

        <h1>{{$data->get("category")}}</h1>
        <p>{{$data->get("category_ja")}}</p>
                
        <div style="margin-left: -10px;margin-top: 30px;">
            <a href="{{url('/')}}" class="btn" style="color: #FFFFFF;font-family: 'Josefin Sans', sans-serif;">HOME</a>
        </div>
        <div style="margin-left: -10px;">
            <a href="{{url('/diary')}}" class="btn" style="color: #FFFFFF;font-family: 'Josefin Sans', sans-serif;">DIARY</a>
        </div>
        <div style="margin-left: -8px;">
            <a href="{{url($data->get("kind").'/non/photos?no=1')}}" class="btn btn-success" style="border: none;background-color: rgba(10,150,85,0);color: #FFFFFF;font-family: 'Josefin Sans', sans-serif;">PHOTO</a>
        </div>
        
        @if($flg)
            <div><a href="{{url(Request::path().'?mode=smf')}}" class="btn btn-success" style="margin-top: 30px;color: #FFFFFF;font-family: 'Josefin Sans', sans-serif;">OTHER DESIGN</a></div>
        @endif
        
        <div style="margin-top: 30px;">
            <div class="dropdown">
                <button style="color:#FFFFFF; border: 1px solid #FFFFFF;;background-color: rgba(10,150,85,0);"class="text-right btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    その他の日記
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="color:#FFFFFF; background-color: rgba(0,0,0,0.3);">
                    @foreach ($infos as $info)
                        @if($info->get('url', "") !== "")
                        <li><a href="{{url($info->get('url'))}}" style="color: #FFFFFF;">{{$info->get("category_ja")}}</a></li>
                        @endif
                    @endforeach
                    <li role="separator" class="divider" style="color: #FFFFFF;"></li>
                    @if($data->get("category_ja", "") !== "")
                        <li><a href="#" style="color: #FFFFFF;">{{$data->get("category_ja")}}</a></li>
                    @endif
                </ul>
            </div>
        </div>
        
    </div>
</div>