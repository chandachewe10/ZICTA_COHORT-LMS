<x-app-layout>
    <x-slot name="header">
    <div class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:18px;color:gray">
            Hi {{ Auth::user()->name }}, Welcome to Chatroom. 
            
</div>

<!DOCTYPE html>
<html>

<head>

    <title>PAREXCELLENCE::CHATROOM</title>
    <meta charset="utf-8" />
    <meta name="developer" content="Chanda Chewe" />
    <meta name="description" content="" />
    <meta name="revised" content="06/06/2021" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    

    <!--font awesome online-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
        

     <!--countdown in js-->
    <script src="{{asset('css/countdown.js')}}"></script>     
         <!--local css-->
    <link rel="stylesheet" href="{{asset('css/responsives.css')}}">
    <!--local aos-->
    <link href="css/aos.css?ver=1.2.0" rel="stylesheet">
    <!-- bootstrap font awesome -->
    <link rel="stylesheet" type="text/css" href="fontawesome/solid.min.css">
    <!-- Slide show css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slideshow.css')}}">
    <!--js slideshow-->
    <script src="{{asset('css/js/jsslide.js')}}"></script>

</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v12.0&appId=1490226147840653&autoLogAppEvents=1" nonce="3FYgyD0a"></script>


<div class="fb-comments" data-href="http://localhost/Trial/Zicta_Cohort/public/chatroom" data-width="90%" data-numposts="5"></div>
</body>
</html>
</x-app-layout>
