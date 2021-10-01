@extends('layout.admin')
@section('content')
    <div class=" flex justify-center items-center bg-black w-full">
        <div class="my-7"></div>
        <div></div>
        <h2 class="text-red-900 text-5xl font-bold">Dashboard</h2>
    </div>
    <div class="my-5"></div>
    <table class="border-collapse w-full">
        <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Student Name</th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Course Name</th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Gender</th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Email</th>
{{--            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell"></th>--}}
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Apply Date</th>
{{--            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell"></th>--}}
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Status</th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>

        </tr>
        </thead>
        @foreach($course as $user )
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->user->Fname}} {{$user->user->Mname}} {{$user->user->Lname}}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->Course->Course}} </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->user->Gender}} </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->user->email}} </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->created_at}} </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">pending </td>
            </tr>
        @endforeach
    </table>
@endsection
