<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class="flex justify-center items-center bg-blue-400 h-screen">
    <div>
        <lottie-player src="{{asset('lottie/95560-error-404.json')}}" background="transparent"  speed="1" loop autoplay></lottie-player>
        <h1 class="text-center font-medium text-4xl">Sorry !</h1>
        <p class="text-center">I can't find what you're looking for :(</p>
    </div>
</div>
<div class="absolute bottom-5 w-full">
    <div class="flex justify-center">
        <img src="{{asset('image/logohimti.png')}}" class="h-16 brightness-0 invert">
    </div>
</div>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>
</html>
