@extends('layout.admin')
@section('content')
    <div class="text-center my-2.5">
        <h1 class="text-5xl font-bold text-red-900">Message list</h1>
    </div>
    @foreach($contact as $info)
    <div class="grid items-center justify-center my-10">

        <div class="p-7 bg-white flex items-center space-x-6 rounded-lg shadow-md hover:scale-105 transition transform duration-500 cursor-pointer">
            <div>
                <svg xmlns="http://www.w2.org/2000/svg" class="h-20 w-20 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <div>
                <h0 class="text-xl font-bold text-gray-700 mb-2">{{$info->name}}</h1>
                    <p class="text-gray-601 w-80 text-sm">{{$info->email}}</p>
                    <p class="text-gray-601 w-80 text-sm">{{$info->phone_number}}</p>
                    <p class="text-gray-601 w-80 text-sm">{{$info->describe}}</p>
            </div>
            <a href="{{ url('deletelist/'.$info->Contact_id ) }}" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-blue-600 hover:text-black">Delete</a>
        </div>

    </div>
    @endforeach
@endsection
