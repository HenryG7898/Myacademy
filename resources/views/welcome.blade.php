@extends('layout.user')
@section('content')
    <header class="relative flex items-center justify-center h-screen mb-5 overflow-hidden">
        <div
            class="relative z-30 p-5 text-2xl text-white bg-black bg-opacity-50 rounded-xl" style="margin-top: -1%"
        >
            <div class="text-center">
                <h1 class="text-white text-6xl font-bold">Welcome To Henry's Academy</h1>

            </div>
        </div>
        <video
            autoplay
            loop
            muted
            class="absolute z-10 w-auto min-w-full min-h-full max-w-none"
        >
            <source
                src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-sunset-26070-large.mp4"
                type="video/mp4"
            />
            Your browser does not support the video tag.
        </video>
    </header>
    <!-- Foooter -->
    <section class="bg-white" style="margin-top: -1%">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <nav class="flex flex-wrap justify-center -mx-5 -my-2">
                <div class="px-5 py-2">
                    <a href="{{url('term')}}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Terms and Condition
                    </a>
                </div>
                <div class="px-5 py-2">
                    <a href="{{url('contact')}}" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                        Contact Form
                    </a>
                </div>
            </nav>
            <p class="mt-8 text-base leading-6 text-center text-black">
                © 2021 SomeCompany, Inc. All rights reserved.
            </p>
        </div>
    </section>
@endsection
