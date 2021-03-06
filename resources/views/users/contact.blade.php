@extends('layout.user')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c151b27f34.js" crossorigin="anonymous"></script>


    <title>Master</title>

    <style>
        .icon::after{
            content: '';
            display: block;
            position: absolute;
            border-top: 23px solid transparent;
            border-bottom: 17px solid transparent;
            border-left: 12px solid #3182ce;
            left: 100%;
            top: 0;
        }
        body{
            background-image: url("https://timstrifler.com/wp-content/uploads/sites/9/2015/11/awhCbhLqRceCdjcPQUnn_IMG_0249.jpg");
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }
    </style>

</head>

<body>
<div class="text-center">
    <div class="my-7"></div>
    <h2 class="text-blue-700 text-5xl font-bold">Contact Form</h2>
</div>
<div class="mx-auto w-5/6 shadow-lg" style="margin-top: 3%">
<form action="{{url('contact')}}" method="post" class="form bg-white p-6 my-5 relative">
@csrf
    <div class="icon bg-blue-600 text-white w-6 h-6 absolute flex items-center justify-center p-5" style="left:-40px"><i class="fal fa-phone-volume fa-fw text-2xl transform -rotate-45"></i></div>
    <h3 class="text-2xl text-gray-900 font-semibold">Let us call you!</h3>
    <p class="text-gray-600"> To help you choose your career path</p>
    <div class="flex space-x-5 mt-3">
        <input type="text" name="name" id="name" placeholder="Your Name" class="border p-2  w-1/2">
        <input type="tel" name="phone_number" id="phone_number" placeholder="Your Number" class="border p-2 w-1/2">
    </div>
    <input type="email" name="email" id="email" placeholder="Your Email" class="border p-2 w-full mt-3">
    <textarea name="describe" id="describe" cols="10" rows="3" placeholder="For more information " class="border p-2 mt-3 w-full"></textarea>
    <input type="submit" value="Submit" class="w-full mt-6 bg-blue-600 hover:bg-blue-500 text-white font-semibold p-3">

</form>
</div>
</body>
</html>
@endsection
