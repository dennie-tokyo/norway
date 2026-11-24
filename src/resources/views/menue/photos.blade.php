
<nav class="navbar navbar-default navbar-fixed-top" style="border: none;background-color: rgba(0,0,0,0);">
    <div class="container-fluid" style="background-color: rgba(0,0,0,0);">
        <div class="navbar-header">
            <button type="button" style="border-color: rgba(0,0,0,0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only" style="background-color: #FFFFFF;">Toggle navigation</span>
                <span class="icon-bar" style="background-color: #FFFFFF;"></span>
                <span class="icon-bar" style="background-color: #FFFFFF;"></span>
                <span class="icon-bar" style="background-color: #FFFFFF;"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}" style="color: #FFFFFF;">
                <strong style="font-family: 'Abril Fatface', cursive;">
                    NOR<span style="color: #c7ddae;">W</span>AY
                </strong>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">       
            <ul class="nav navbar-nav" style="padding-top: 3px;">
                <li><a href="{{url('/')}}" style="color: #FFFFFF;font-family: 'Josefin Sans', sans-serif;">HOME</a></li>
                <li><a href="{{url('/diary')}}" style="color: #FFFFFF;font-family: 'Josefin Sans', sans-serif;">DIARY</a></li>
            </ul>
        </div>        
    </div>
        
    <div style="margin-left: 4px;">
    
        <div class="dropdown">

            <button style="color:#FFFFFF; border: none;background-color: rgba(10,150,85,0);"class="text-right btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                カテゴリで絞る
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="color:#FFFFFF; background-color: rgba(0,0,0,0.3);">

                @foreach ($infos as $info)
                    @if($info->get('url_photo', "") !== "")
                        <li><a href="{{url($info->get('url_photo'))}}" style="color: #FFFFFF;">{{$info->get("category_photo_ja")}}</a></li>
                    @endif
                @endforeach

                <li role="separator" class="divider" style="color: #FFFFFF;"></li>

                @if($category->get("category_photo_ja", "") !== "")
                    <li><a href="#" style="color: #FFFFFF;">{{$category->get("category_photo_ja")}}</a></li>
                @endif
            </ul>
        </div>
    
    </div>
        
</nav>