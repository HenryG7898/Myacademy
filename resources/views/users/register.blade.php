@extends('layout.user')
@section('content')
    <div class="grid  place-items-center">
        <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12 shadow-lg">
            <h1 class="text-2xl font-semibold text-center "> Sign-Up Form</h1>
            <form action="{{url('Signup')}}" method="post" class="mt-6 ">
                @csrf
{{--                <div class="py-3 center mx-auto">--}}
{{--                    <div class="bg-white px-4 py-5 rounded-lg shadow-lg text-center w-48">--}}
{{--                        <div class="mb-4">--}}
{{--                            <img class="w-auto mx-auto rounded-full object-cover object-center" src="https://i1.pngguru.com/preview/137/834/449/cartoon-cartoon-character-avatar-drawing-film-ecommerce-facial-expression-png-clipart.jpg" alt="Avatar Upload" />--}}
{{--                        </div>--}}
{{--                        <label class="cursor-pointer mt-6">--}}
{{--                            <span class="mt-2 text-base leading-normal px-4 py-2 bg-blue-500 text-white text-sm rounded-full" >Select Avatar</span>--}}
{{--                            <input name="profile" type='file' class="hidden" :multiple="multiple" :accept="accept" />--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="flex justify-between gap-3">
        <span class="w-1/2">
          <label for="Fname" class="block text-xs font-semibold text-gray-600 uppercase">Firstname</label>
          <input id="Fname" type="text" name="Fname" placeholder="John" autocomplete="given-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        <span class="text-red-700 text-2xs">@error('Fname') {{$message}} @enderror</span>
        </span>
                    <span class="w-1/2">
          <label for="Mname" class="block text-xs font-semibold text-gray-600 uppercase">Middle Name</label>
        <input id="Mname" type="text" name="Mname" placeholder="Doe" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
         <span class="text-red-700 text-2xs">@error('Mname') {{$message}} @enderror</span>
                </div>
                </span>
                <div class="flex justify-between gap-3">

                    <span class="w-1/2">
          <label for="Lname" class="block text-xs font-semibold text-gray-600 uppercase">Lastname</label>
        <input id="Lname" type="text" name="Lname" placeholder="Doe" autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        <span class="text-red-700 text-2xs">@error('Lname') {{$message}} @enderror</span>
                    </span>
                    <span class="w-1/2">
          <label for="Gender" class="block text-xs font-semibold text-gray-600 uppercase">Gender</label>
{{--                        <select id="gender" type="text" name="lastname"  autocomplete="family-name" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />--}}
                    <select id="Gender" name="Gender" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner">
                        <option selected></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                        <span class="text-red-700 text-2xs">@error('gender') {{$message}} @enderror</span>
                    </span>


                </div>
                <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                <input id="email" type="email" name="email" placeholder="john.doe@company.com" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <label for="DOB" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Birthday</label>
                <input id="DOB" type="date" name="DOB" placeholder="" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <span class="text-red-700 text-2xs">@error('DOB') {{$message}} @enderror</span>
                <label for="address" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Address</label>
                <input id="address" type="text" name="address" placeholder="Church Pen, Old Harbour" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <span class="text-red-700 text-2xs">@error('address') {{$message}} @enderror</span>
                <label for="parish" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Parish</label>
                <select name="parish" id="parish"  class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" style="border-color:Red;">
                    <option selected="selected" value="[Select Parish]">[Select Parish]</option>
                    <option value="Clarendon">Clarendon</option>
                    <option value="Hanover">Hanover</option>
                    <option value="Kingston">Kingston</option>
                    <option value="Manchester">Manchester</option>
                    <option value="Portland">Portland</option>
                    <option value="St. Andrew">St. Andrew</option>
                    <option value="St.Ann">St. Ann</option>
                    <option value="St. Catherine">St. Catherine</option>
                    <option value="St. Elizabeth">St. Elizabeth</option>
                    <option value="St. James">St. James</option>
                    <option value="St. Mary">St. Mary</option>
                    <option value="St. Thomas">St. Thomas</option>
                    <option value="Trelawny">Trelawny</option>
                    <option value="Westmoreland">Westmoreland</option>
                </select>
                <span class="text-red-700 text-2xs">@error('parish') {{$message}} @enderror</span>
                <label for="telephone" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Telephone</label>
                <input id="telephone" type="number" name="telephone" placeholder="8768358997" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <span class="text-red-700 text-2xs">@error('telephone') {{$message}} @enderror</span>
                <label for="trn" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">TRN#</label>
                <input id="trn" type="number" name="trn" placeholder="127-939-610" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <span class="text-red-700 text-2xs">@error('trn') {{$message}} @enderror</span>
                <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
                <input id="password" type="password" name="password" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <span class="text-red-700 text-2xs">@error('password') {{$message}} @enderror</span>
                <label for="password-confirm" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Confirm password</label>
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="********" autocomplete="new-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <button type="submit" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
                    Sign up
                </button>
                <p class="flex justify-between inline-block mt-4 text-xs text-gray-500 cursor-pointer hover:text-black">Already registered?</p>
            </form>
        </div>
    </div>
@endsection
