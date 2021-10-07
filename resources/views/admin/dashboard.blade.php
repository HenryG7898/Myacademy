@extends('layout.admin')
@section('content')
    <div class=" flex justify-center items-center  w-full">
        <div class="my-7"></div>
        <div></div>
        <h2 class="text-red-900 text-6xl font-bold">Dashboard</h2>
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
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Payments</th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Action</th>

        </tr>
        </thead>
        @foreach($course as $user )
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->user->Fname}} {{$user->user->Mname}} {{$user->user->Lname}}</td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->Course->Course}} </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->user->Gender}} </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->user->email}} </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->created_at}} </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->Status}} </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->payment_status}} </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                <a href="{{url('deleteapp/'.$user->select_id)}}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Delete</a> </td>
{{--            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">--}}
{{--                <img src="{{'/storage/'.$user->profile->Profile}}" alt="Image"> </td>--}}
            </tr>
        @endforeach
    </table>
<div class="p-5 text-center text-6xl font-bold">
<h1 class="text-red-900">Courses Table</h1>
</div>
    <table class="border-collapse w-full">
        <thead>
        <tr>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Course Name</th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Award</th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Format</th>
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Modality</th>
            {{--            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell"></th>--}}
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Start Date</th>
            {{--            <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell"></th>--}}
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">End Date</th>
{{--            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Status</th>--}}
            <th class="p-3 font-bold uppercase bg-white text-gray-600 border border-gray-300 hidden lg:table-cell">Action</th>

        </tr>
        </thead>
        @foreach($course as $user)
                <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
{{--                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">--}}
{{--                        <input type="hidden" name="course_id" value="{{$user->course_id }}" class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static"></td>--}}
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->course->Course }}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->course->Award }}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->course->Format}}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->course->Modality}}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->course->Start_date}}</td>
                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">{{$user->course->End_date}}</td>
{{--                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">--}}
{{--                        <span class="rounded bg-green-500 py-1 px-3 text-xs font-bold">{{$user->Status}}</span></td>--}}
                                    <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b text-center block lg:table-cell relative lg:static">
                                        <a href="#" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >Edit<a> </td>

            </tr>
        @endforeach
    </table>
    </table>
@endsection
