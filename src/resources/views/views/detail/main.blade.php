@extends('layout.diary_detail')

@section('content')
<div class="container-fluid" id="detail" style="display: none;background-color: rgba(0,0,0,0.1);">

    <div class="row">
    
        <div class="col-xs-4">
            @include('detail.header')
        </div>

        <div class="col-xs-8" style="background-color: #FFFFFF;">
            
            <div class="col-sm-8 col-sm-offset-2">
            
                <header>
                    <h1 style="margin-top: 100px;">{{$data->get("title")}}</h1>
                    <p><span class="label label-success">TRIP DATE</span> <span class="label" style="color: #000000;">{{$data->get("tripdate")}}</span></p>
                    <hr>
                </header>
                
                <main>
                    @include($data->get("body"))
                    <nav aria-label="..." style="margin-bottom: 100px;">
                      <ul class="pager">
                        @if($data->get("backUrl") !== "")
                            <li><a href="{{url($data->get('backUrl'))}}" style="padding-left: 20px;padding-right: 20px;background-color:rgba(176,233,80,0.5); color: #ffffff;border: none;">戻る</a></li>
                        @endif
                            <li><a href="{{url('/')}}" style="padding-left: 20px;padding-right: 20px;background-color:rgba(100,100,100,0.8); color: #ffffff;border: none;">HOME</a></li>
                        @if($data->get("nextUrl") !== "")
                            <li><a href="{{url($data->get('nextUrl'))}}" style="padding-left: 20px;padding-right: 20px;background-color:rgba(233,70,154,0.5); color: #ffffff;border: none;">次へ</a></li>
                        @endif
                      </ul>
                    </nav>
                </main>
        
            </div>
        </div>      
    </div>    
</div>
@endsection