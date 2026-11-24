@extends('layout.smart.diary_detail')

@section('content')

@if($flg)
<div class="cd-fixed-bg cd-bg-1" style="background-image: url({{url($data->get("backImg"))}});position: relative;background-attachment: fixed;">
@else
<div class="cd-fixed-bg cd-bg-1" style="background-image: url({{url($data->get("backImg"))}});position: relative;">
@endif
    
    <div style="position: absolute;height: 100%;width: 100%;background-color: rgba(0,0,0,0.3);">
    <h1 style="font-size: 300%;">{{$data->get("category")}}</h1>
    </div>
</div>

<div class="cd-scrolling-bg" style="background-color: #FFFFFF;color: #666666;">
        <div class="cd-container">
            
            <div class="col-sm-10 col-sm-offset-1">
            
                <h2 style="margin-top: 0px;">{{$data->get("title")}}</h2>
                <p style=""><span class="label label-success">TRIP DATE</span> <span class="label" style="color: #000000;">{{$data->get("tripdate")}}</span></p>
                <hr>

                @include($data->get("body"))

                <nav aria-label="..." style="margin-bottom: 100px;">
                  <ul class="pager">
                    @if($data->get("backUrl") !== "")
                        <li><a href="{{url($data->get('backUrl') . '?mode=smf')}}" style="padding-left: 20px;padding-right: 20px;background-color:rgba(176,233,80,0.5); color: #ffffff;border: none;">戻る</a></li>
                    @endif
                        <li><a href="{{url('/')}}" style="padding-left: 20px;padding-right: 20px;background-color:rgba(100,100,100,0.8); color: #ffffff;border: none;">HOME</a></li>
                    @if($data->get("nextUrl") !== "")
                        <li><a href="{{url($data->get('nextUrl') . '?mode=smf')}}" style="padding-left: 20px;padding-right: 20px;background-color:rgba(233,70,154,0.5); color: #ffffff;border: none;">次へ</a></li>
                    @endif
                  </ul>
                </nav>
                
            </div>
            
        </div>
    </div>

@endsection