<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="デニーによる旅総合サイトです。">
        <meta name="keywords" content="norway,ノルウェー,一人旅,フィヨルド,北欧">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ノルウェー海外旅行一人旅 PHOTO</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Overpass+Mono" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Overpass+Mono|Playfair+Display" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            
        <link href="{{url('/css/common.css')}}" rel="stylesheet">
        <link href="{{url('/css/style.css')}}" rel="stylesheet">
        <link href="{{url('/css/lity.min.css')}}" rel="stylesheet">
        <link href="{{url('/css/lightbox.css')}}" rel="stylesheet">
        
    </head>
    
    <body style="background-color: #cba777;">
      
        <header>
            @include('menue.photos')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>

        </footer>
        
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="{{url('/js/lity.min.js')}}" type="text/javascript"></script>
        <script src="{{url('/js/jquery.lazyload.js')}}"></script>
        <script src="{{url('/js/lightbox.js')}}"></script>
        <script src="{{url('/js/jquery.bottom.js')}}"></script>
        <script src="{{url('/js/dennie.js')}}"></script>
        
        <script>
            $("#photos").fadeIn(2000);
        </script>
        <script>
            $(function() {
                $("img.lazy").lazyload();
            });
        </script>
        
    </body>
</html>