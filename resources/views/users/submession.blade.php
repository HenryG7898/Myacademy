@extends('layout.user')
@section('content')
    <div class="flex-wrap justify-center border items-center h-10/12    border-black">
        <div class="my-9">
            <h1 class="text-center text-3xl font-bold p-2">Qualification</h1>
            <form method="post" action="{{url('Qualification')}}" class="mb-4 h-full flex justify-center items-center ">
               @csrf
                <input type="text" name="Subject" placeholder="Subject/Skill Area" class="bg-gray-300 p-2 mx-1.5 w-1/4 rounded-md border-2 border-gray-400">
                <input type="text" name="Exam_body" placeholder="Examination Body" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <input type="text" name="Award_type" placeholder="Qualification/Award Type" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <input type="text" name="Grade" placeholder="Grade" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <input type="text" name="Year" placeholder="Year" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <button type="submit" class="bg-blue-700 rounded-md hover:bg-green-800 duration-100 text-white p-3 w-1/6 mx-1.5 shadow-md">Submit</button>
            </form>
        </div>

        <div  class="my-1/12">
            <h1 class="text-center text-3xl font-bold p-2">Work Experience</h1>
            <form method="post" action="{{url('Experience')}}" class="mb-4 h-full flex justify-center items-center ">
               @csrf
                <input type="text" name="Company_nm" placeholder="Company Name" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <input type="text" name="Position" placeholder="Position" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <input type="date" name="Start_date" placeholder="Start Date" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <input type="date" name="End_date" placeholder="End Date" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <button type="submit" class="bg-blue-700 rounded-md hover:bg-green-800 duration-100 text-white p-3 w-1/6 mx-1.5 shadow-md">Submit</button>
            </form>
        </div>

        <div class="my-1/12">
            <h1 class="text-center text-3xl font-bold p-2">Education</h1>
            <form method="post" action="{{url('Education')}}" class="mb-4 h-full flex justify-center items-center ">
               @csrf
                <input type="text" name="School_nm" placeholder="School Name" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <input type="text" name="School_type" placeholder="School Type" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <input type="text" name="Start_year" placeholder="Start Date" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400">
                <input type="text" name="End_year" placeholder="End Date" class="bg-gray-300 p-2 w-1/4 mx-1.5 rounded-md border-2 border-gray-400"><br>
                <button type="submit" class="bg-blue-700 rounded-md hover:bg-green-800 duration-100 text-white p-3 w-1/6 mx-1.5 shadow-md">Submit</button>
            </form>
        </div>
    </div>
@endsection
