@extends('layout.user')
@section('content')
    <div class="py-6">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block lg:w-1/2 bg-cover" style="background-image:url('https://images.unsplash.com/photo-1546514714-df0ccc50d7bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=667&q=80')"></div>
            <div class="w-full p-8 lg:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Welcome back!</h2>
                <p class="text-xl text-gray-600 text-center">To</p>
                <p class="text-xl text-gray-600 text-center">Henry's Academy</p>
                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-gray-500 uppercase">login with email</a>
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                </div>
                <form action="{{ url('Login') }}" method="post">
                    @csrf
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                        <input name="email" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="email">
                        <span class="text-red-700 text-2xs">@error('email') {{$message}} @enderror</span>
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                            <a href="#" class="text-xs text-gray-500">Forget Password?</a>
                        </div>
                        <input name="password" class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none" type="password">
                        <span class="text-red-700 text-2xs">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="mt-8">
                        <button type="submit" class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Login</button>
                    </div>
                </form>
                <div class="mt-4 flex items-center justify-between">
                    <span class="border-b w-1/5 md:w-1/4"></span>
                    <a href="{{url('Signup')}}" class="text-xs text-gray-500 uppercase">or sign up</a>
                    <span class="border-b w-1/5 md:w-1/4"></span>
                </div>
            </div>
        </div>
    </div>
@endsection
