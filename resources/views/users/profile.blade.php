@extends('layout.user')
@section('content')
    <style>
        :root {
            --main-color: #4a76a8;
        }

        .bg-main-color {
            background-color: var(--main-color);
        }

        .text-main-color {
            color: var(--main-color);
        }

        .border-main-color {
            border-color: var(--main-color);
        }
    </style>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


@auth


    <div class="bg-black">

               <div class="container p-5 mx-auto my-5">
            <div class="md:flex no-wrap md:-mx-2 ">
                <!-- Left Side -->
                <div class="w-full md:w-4/12 md:mx-2">
                    <!-- Profile Card -->
                    <div class="p-3 bg-white border-t-4 border-green-400">
                        <div class="overflow-hidden image">

                            <img class="w-screen h-96 object-cover z-10 rounded-full mx-auto"
                                 src="{{ asset('/storage/') }}"
                                 alt="Image">
                        </div>
                        <form action="{{ url('Profile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="Profile">
                            <button type="submit">Upload</button>
                        </form>
                        <h1 class="my-1 text-xl font-bold leading-8 text-gray-900">{{Auth()->user()->Fname}} {{Auth()->user()->Mname}} {{Auth()->user()->Lname}}</h1>
                        <h3 class="leading-6 text-gray-600 font-lg text-semibold">Owner at Her Company Inc.</h3>
                        <p class="text-sm leading-6 text-gray-500 hover:text-gray-600">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit.
                            Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                        <ul
                            class="px-3 py-2 mt-3 text-gray-600 bg-gray-100 divide-y rounded shadow-sm hover:text-gray-700 hover:shadow">
                            <li class="flex items-center py-3">
                                <span>Status</span>
                                <span class="ml-auto"><span
                                        class="px-2 py-1 text-sm text-white bg-green-500 rounded">{{Auth::user()->Status}}</span></span>
                            </li>
                            <li class="flex items-center py-3">
                                <span>Member since</span>
                                <span class="ml-auto">Nov 07, 2016</span>
                            </li>
                        </ul>
                    </div>
                    <!-- End of profile card -->
                    <div class="my-4"></div>
                </div>
                <!-- Right Side -->
                <div class="w-full h-64 mx-2 md:w-9/12">
                    <!-- Profile tab -->
                    <!-- About Section -->
                    <div class="p-3 bg-white rounded-sm shadow-sm">
                        <div class="flex items-center space-x-2 font-semibold leading-8 text-gray-900">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                            <span class="tracking-wide">About</span>
                        </div>
                        <div class="text-gray-700">
                            <div class="grid text-sm md:grid-cols-2">
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">First Name</div>
                                    <div class="px-4 py-2">{{Auth::user()->Fname}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Last Name</div>
                                    <div class="px-4 py-2">{{auth::user()->Lname}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Gender</div>
                                    <div class="px-4 py-2">{{auth::user()->Gender}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Contact No.</div>
                                    <div class="px-4 py-2">{{auth::user()->telephone}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Permanant Address</div>
                                    <div class="px-4 py-2">{{auth::user()->address}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Parish</div>
                                    <div class="px-4 py-2">{{auth::user()->parish}}</div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email.</div>
                                    <div class="px-4 py-2">
                                        <a class="text-blue-800" href="mailto:jane@example.com">{{auth::user()->email}}</a>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Birthday</div>
                                    <div class="px-4 py-2">{{Auth::user()->DOB}}</div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="block w-full p-3 my-4 text-sm font-semibold text-blue-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs">
                            Edit Information</button>
                    </div>
                    <!-- End of about section -->

                    <div class="my-4"></div>

                    <!-- Experience and education -->
                    <div class="p-3 bg-white rounded-sm shadow-sm">

                        <div class="grid grid-cols-2">
                            <div>
                                <div class="flex items-center mb-3 space-x-2 font-semibold leading-8 text-gray-900">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                    <span class="tracking-wide">Experience</span>
                                </div>
                                <ul class="space-y-2 list-inside">
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Owner at Her Company Inc.</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <div class="flex items-center mb-3 space-x-2 font-semibold leading-8 text-gray-900">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff"
                                              d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span>
                                    <span class="tracking-wide">Education</span>
                                </div>
                                <ul class="space-y-2 list-inside">
                                    <li>
                                        <div class="text-teal-600">Masters Degree in Oxford</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                    <li>
                                        <div class="text-teal-600">Bachelors Degreen in LPU</div>
                                        <div class="text-xs text-gray-500">March 2020 - Now</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Experience and education grid -->
                    </div>
                    <!-- End of profile tab -->
                </div>
            </div>
        </div>
    </div>
@endauth
@endsection
