@extends('layout.photos')

@section('content')
<div class="container-fluid" id="photos" style="display: none;height: 100%;">

    <div class="row" style="background-color: #cba777;color: #FFFFFF;height: 100%;">
        <div class="col-sm-5" style="height: 100%;">
            <div class="row">
                <div class="text-center" style="margin-top: 200px;">
                    <h2><span style="font-family: 'Caveat Brush', cursive;padding-bottom: 10px;border-bottom: 5px solid #b88b26;">Photo Library</span></h2>  
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center" style="margin-top: 50px;padding-bottom: 100px;margin-left: 10px;margin-right: 10px;">
                        <p style="">旅行した時の写真集。</p>
                        <p>今は</p>
                        
                        @if($category->get("category_photo_ja", "") !== "")
                            <p><span style="color: #6591b6;font-size: 1.3em;">{{$category->get("category_photo_ja")}}</span></p>
                        @endif
                        
                        <p>を表示してます。</p>
                    </div>
                </div>                
            </div>
        </div>

        <div class="col-sm-7" style="background-color: #FFFFFF;">
            <div id="main_photo">        
                @include('photos_main')
            </div>
        </div>
    <div id="loadimg" class='text-center' style='margin-top: 30px;margin-bottom: 30px;'></div>
</div>
@endsection