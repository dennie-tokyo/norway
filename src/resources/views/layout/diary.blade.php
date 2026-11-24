<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="デニーのノルウェー旅行記です。">
        <meta name="keywords" content="norway,ノルウェー,一人旅,日記,フィヨルド,北欧">
        <title>ノルウェー旅日記一覧</title>
        
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Overpass+Mono" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Overpass+Mono|Playfair+Display" rel="stylesheet" type="text/css">
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- css -->
        <link href="{{url('/css/common.css')}}" rel="stylesheet">
        <link href="{{url('/css/style.css')}}" rel="stylesheet">

    </head>
    
    <body style="background-color: #018a9a;">
      
        <header>
            @include('menue.diary')
        </header>

        <main>
            @yield('content')
        </main>

        <footer>

        </footer>
        
        <!-- script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            $("#diary").fadeIn("slow");
        </script>
        
    </body>
</html>