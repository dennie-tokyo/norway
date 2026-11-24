<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="デニーによる旅総合サイトです。">
        <meta name="keywords" content="norway,ノルウェー,一人旅,フィヨルド,北欧">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ノルウェー海外旅行一人旅</title>
        
        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Overpass+Mono" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Overpass+Mono|Playfair+Display" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <link href="{{url('/css/common.css')}}" rel="stylesheet">
        <link href="{{url('/css/style.css')}}" rel="stylesheet">
        <link href="{{url('/css/drawer.min.css')}}" rel="stylesheet">
        <link href="{{url('/css/lity.min.css')}}" rel="stylesheet">
    </head>
    
    <body class="drawer drawer--left">
      
        <header role="banner">
            @include('menue.slide')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>

        </footer>
        
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="{{url('/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{url('/js/drawer.min.js')}}" charset="utf-8"></script>
        <script src="{{url('/js/lity.min.js')}}" type="text/javascript"></script>

        <script>
          $(document).ready(function() {
            $('.drawer').drawer();
          });
        </script>
        
        <script>
            $.backstretch([
              "img/P1016381.JPG"
              ], {
                fade: 750,
                duration: 4000
            });
    
        </script>
        <script>
            $("#about").click(function () {
                $("#main").fadeOut("slow");
                $("#about_").fadeIn("slow");
                $("#home").bind("click", function(){
                });
            });
        </script>
        
        <script>
            $("#home").click(function () {
                $("#about_").fadeOut("slow");
                $("#main").fadeIn("slow");
            });
        </script>
        
        <script>
           /* $("#photos").click(function () {
                $("#slide_navi_").fadeOut("slow");
                $("#main").fadeOut("slow");
                
                $("#photos_").fadeIn(2000);
                $("#close").bind("click", function(){
                });
            });*/
        </script>
        
        <script>
/*            $("#diary").click(function () {
                $("#slide_navi_").fadeOut("slow");
                $("#main").fadeOut("slow");
                
                $("#diary_").fadeIn(2000);
                $("#detail_list").fadeIn(2000);
                $("#close").bind("click", function(){
                });
            });*/
        </script>
        
        
        <script>
            /*$("#close").click(function () {
                $("#photos_").fadeOut("slow");
                $("#slide_navi_").fadeIn("slow");
                $("#main").fadeIn("slow");
            });*/
        </script>
        
        <script>
            $("#start_btn").click(function () {
                $("#start_btn").fadeOut("slow",function(){
                    $("#menue").fadeIn("slow");
                    $("#about").bind("click", function(){
                    });
                });
            });
        </script>
        
        <script>
            $(".back_img_view").click(function () {
                $("#main").fadeOut("slow",function(){
                    $("#msg").fadeIn("slow");
                });
            });
        </script>
        
        <script>
            $("#top_view").click(function () {
                $("#menue").fadeOut("slow",function(){
                    $("#start_btn").fadeIn("slow");
                });
            });
        </script>
        
        <script>
/*            $("#close_diary").click(function () {
                $("#detail_body").fadeOut("slow");
                $("#diary_").fadeOut("slow");
                $("#slide_navi_").fadeIn("slow");
                $("#main").fadeIn("slow");
            });*/
        </script>
        
    </body>
</html>