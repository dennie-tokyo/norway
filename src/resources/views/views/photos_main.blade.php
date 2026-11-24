@if ( $photos !== "")

        <?php $cnt = 1; ?>
        
        @foreach ($photos as $photo)
        
            @if ( $device === true)
                @if ( ($cnt % 4) === 1)
                    <div class="row" style="padding: 0px;padding-top: 1px;">
                @endif

                    <div class="col-xs-3" style="padding: 0px;padding-right: 1px;">
                        <a class="example-image-link" href="{{url('img/photos/'.$photo)}}" data-lightbox="example-1">
                            <img class="example-image img-responsive lazy" src="{{url('img/photos/square/'.$photo)}}" style="border-style: none;background-color: rgba(0,0,0,0.0);" alt="image-1" />
                        </a>
                    </div>
                
                @if ( ($cnt % 4) === 0)                    
                    </div>
                @endif
                
            @else
                @if ( ($cnt % 3) === 1)
                    <div class="row" style="padding: 0px;padding-top: 1px;">
                @endif
                
                    <div class="col-xs-4" style="padding: 0px;padding-right: 1px;">
                        <a class="example-image-link" href="{{url('img/photos/'.$photo)}}" data-lightbox="example-1">
                            <img class="example-image img-responsive lazy" src="{{url('img/photos/square/'.$photo)}}" style="padding: 0px; border-style: none;background-color: rgba(0,0,0,0.0);" alt="image-1" />
                        </a>
                    </div>

                @if ( ($cnt % 3) === 0)
                    </div>
                @endif

            @endif
                        
            <?php $cnt = $cnt + 1; ?>
            
        @endforeach
@endif