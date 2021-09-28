<style>
    .bg
</style>
@extends('layout.user')
@section('content')
    <div>
        <div class="w-full bg-cover bg-center" style="">
            <header class="relative flex items-center justify-center h-screen mb-5 overflow-hidden">
                <div
                    class="relative z-30 p-5 text-2xl text-white bg-purple-300 bg-opacity-50 rounded-xl"
                >
                    <div class="text-center">
                    <h1 class="text-white text-6xl font-bold">Welcome To Henry's Academy</h1>
                        <div class="my-3"></div>

                    <h2 class="text-red-900 text-5xl font-bold">{{Auth::user()->Fname}}</h2>

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
            <div class="w-full bg-cover bg-center" style="background-image: url(https://www.liberty.edu/wp-content/uploads/join-liberty-as-a-champion-for-christ-20190903_0386KT2.jpg);">
                <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
                    <div class="text-center">
                        <!-- light mode -->
                        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-md">
                                <!-- card header -->
                                <div class="px-6 py-4 bg-white border-b border-gray-200 font-bold uppercase">
                                    What is your looking for?
                                </div>

                                <!-- card body -->
                                <div class="p-6 bg-white border-b border-gray-200">
                                    <!-- content goes here -->
                                    Are you looking for a new skill or do you want to continue develop
                                    more to your career skills.
                                    For more Information click the button below to send message regarding base on your decision.
                                </div>

                                <!-- card footer -->
                                <div class="p-6 bg-white border-gray-200 text-right">
                                    <!-- button link -->
                                    <a class="bg-blue-500 shadow-md text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-blue-400 rounded uppercase"
                                       href="#">Click Me</a>
                                </div>
                            </div>
                        </div>

                        <!-- divider -->
                        <hr class="my-6">

                        <!-- dark mode -->
                        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-md text-gray-100">
                                <!-- card header -->
                                <div class="px-6 py-4 bg-gray-800 border-b border-gray-600 font-bold uppercase">
                                    Which path of career will you choose?
                                </div>

                                <!-- card body -->
                                <div class="p-6 bg-gray-800 border-b border-gray-600">
                                    <!-- content goes here -->
                                    Would you like to be a Technician, Accountants, Software Developer
                                    or Agent at Call Center.
                                    For more Information click the button below to send message regarding base on your decision.
                                </div>

                                <!-- card footer -->
                                <div class="p-6 bg-gray-800 border-gray-200 text-right">
                                    <!-- button link -->
                                    <a class="bg-blue-500 shadow-md text-sm text-white font-bold py-3 md:px-8 px-4 hover:bg-blue-400 rounded uppercase"
                                       href="#">Click Me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5"></div>
    <div class="bg-gray-600">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto max-w-7x1">
                <div class="flex flex-wrap w-full mb-4 p-4">
                    <div class="w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-4xl text-5xl font-medium font-bold title-font mb-2 text-gray-900">Course Available</h1>
                        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                    </div>
                </div>
                <div class="flex flex-wrap -m-4">
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white p-6 rounded-lg">
                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="https://cdn.seeklearning.com.au/media/images/career-guide/module/information-technology-technician-module.jpg" alt="Image Size 720x400">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Network Support level 2</h2>
                            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white p-6 rounded-lg">
                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://entrepreneurhandbook.co.uk/wp-content/uploads/2014/11/Smiling-customer-service-representative.jpg.webp" alt="Image Size 720x400">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Customer Service Level 2</h2>
                            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white p-6 rounded-lg">
                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://www.careermatch.com/job-prep/wp-content/uploads/sites/2/2018/09/administrative-assistant.jpg" alt="Image Size 720x400">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Administrative Assistant Level 3 </h2>
                            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white p-6 rounded-lg">
                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://futurecio.tech/wp-content/uploads/2020/09/pexels-photo-3840870.jpeg " alt="Image Size 720x400">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Customer Engagement Operations Level 2</h2>
                            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white p-6 rounded-lg">
                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://academics.lmu.edu/media/lmuacademics/extension/images/full-stack-developer.jpg " alt="Image Size 720x400">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Software Progamming Operation Level 3</h2>
                            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="bg-white p-6 rounded-lg">
                            <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://www.manateetech.edu/wp-content/uploads/2017/05/IMG_7393-e1495565046548.jpg " alt="Image Size 720x400">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">Course</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Air Condition & Refrigeration Level 2</h2>
                            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
        <!-- Foooter -->
        <section class="bg-gray-600">
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
                <p class="mt-8 text-base leading-6 text-center text-gray-400">
                    © 2021 SomeCompany, Inc. All rights reserved.
                </p>
            </div>
        </section>
    </div>
@endsection
