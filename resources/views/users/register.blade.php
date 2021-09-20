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
                <div class="flex justify-between gap-3">
                    </span>
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
                <span class="text-red-700 text-2xs">@error('email') {{$message}} @enderror</span>
                <label for="address" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Address</label>
                <input id="address" type="text" name="address" placeholder="Church Pen, Old Harbour" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
                <span class="text-red-700 text-2xs">@error('address') {{$message}} @enderror</span>
{{--                <label for="country" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Country</label>--}}
{{--                <select name="country" id="country" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" style="border-color:Red;">--}}
{{--                    <option value="[Select Country]">[Select Country]</option>--}}
{{--                    <option value="0008">Afghanistan</option>--}}
{{--                    <option value="0009">Albania</option>--}}
{{--                    <option value="0010">Algeria</option>--}}
{{--                    <option value="0011">Andorra</option>--}}
{{--                    <option value="0012">Angola</option>--}}
{{--                    <option value="0013">Argentina</option>--}}
{{--                    <option value="0014">Armenia</option>--}}
{{--                    <option value="0015">Australia</option>--}}
{{--                    <option value="0016">Austria</option>--}}
{{--                    <option value="0017">Azerbaijan</option>--}}
{{--                    <option value="0018">Bahamas</option>--}}
{{--                    <option value="0019">Bahrain</option>--}}
{{--                    <option value="0020">Bangladesh</option>--}}
{{--                    <option value="0002">Barbados</option>--}}
{{--                    <option value="0021">Belarus</option>--}}
{{--                    <option value="0022">Belgium</option>--}}
{{--                    <option value="0023">Belize</option>--}}
{{--                    <option value="0024">Benin</option>--}}
{{--                    <option value="0025">Bhutan</option>--}}
{{--                    <option value="0026">Bolivia</option>--}}
{{--                    <option value="0027">Bosnia-Herzegovina</option>--}}
{{--                    <option value="0028">Botswana</option>--}}
{{--                    <option value="0029">Brazil</option>--}}
{{--                    <option value="0030">Britain</option>--}}
{{--                    <option value="0031">Brunei</option>--}}
{{--                    <option value="0032">Bulgaria</option>--}}
{{--                    <option value="0033">Burkina</option>--}}
{{--                    <option value="0034">Burma</option>--}}
{{--                    <option value="0035">Burundi</option>--}}
{{--                    <option value="0036">Cambodia</option>--}}
{{--                    <option value="0037">Cameroon</option>--}}
{{--                    <option value="0005">Canada</option>--}}
{{--                    <option value="0038">Cape Verde Islands</option>--}}
{{--                    <option value="0179">Cayman Island</option>--}}
{{--                    <option value="0039">Chad</option>--}}
{{--                    <option value="0040">Chile</option>--}}
{{--                    <option value="0041">China</option>--}}
{{--                    <option value="0042">Colombia</option>--}}
{{--                    <option value="0043">Congo</option>--}}
{{--                    <option value="0044">Costa Rica</option>--}}
{{--                    <option value="0045">Croatia</option>--}}
{{--                    <option value="0046">Cuba</option>--}}
{{--                    <option value="0047">Cyprus</option>--}}
{{--                    <option value="0048">Czech Republic</option>--}}
{{--                    <option value="0049">Denmark</option>--}}
{{--                    <option value="0050">Djibouti</option>--}}
{{--                    <option value="0051">Dominica</option>--}}
{{--                    <option value="0052">Dominican Republic</option>--}}
{{--                    <option value="0053">Ecuador</option>--}}
{{--                    <option value="0054">Egypt</option>--}}
{{--                    <option value="0055">El Salvador</option>--}}
{{--                    <option value="0003">England</option>--}}
{{--                    <option value="0056">Eritrea</option>--}}
{{--                    <option value="0057">Estonia</option>--}}
{{--                    <option value="0058">Ethiopia</option>--}}
{{--                    <option value="0059">Fiji</option>--}}
{{--                    <option value="0060">Finland</option>--}}
{{--                    <option value="0061">France</option>--}}
{{--                    <option value="0062">Gabon</option>--}}
{{--                    <option value="0063">Gambia, the</option>--}}
{{--                    <option value="0064">Georgia</option>--}}
{{--                    <option value="0065">Germany</option>--}}
{{--                    <option value="0066">Ghana</option>--}}
{{--                    <option value="0067">Greece</option>--}}
{{--                    <option value="0068">Grenada</option>--}}
{{--                    <option value="0069">Guatemala</option>--}}
{{--                    <option value="0070">Guinea</option>--}}
{{--                    <option value="0071">Guyana</option>--}}
{{--                    <option value="0072">Haiti</option>--}}
{{--                    <option value="0073">Holland</option>--}}
{{--                    <option value="0074">Honduras</option>--}}
{{--                    <option value="0075">Hungary</option>--}}
{{--                    <option value="0076">Iceland</option>--}}
{{--                    <option value="0077">India</option>--}}
{{--                    <option value="0078">Indonesia</option>--}}
{{--                    <option value="0079">Iran</option>--}}
{{--                    <option value="0080">Iraq</option>--}}
{{--                    <option value="0081">Ireland, Republic of</option>--}}
{{--                    <option value="0082">Italy</option>--}}
{{--                    <option value="0001">Jamaica</option>--}}
{{--                    <option value="0083">Japan</option>--}}
{{--                    <option value="0084">Jordan</option>--}}
{{--                    <option value="0085">Kazakhstan</option>--}}
{{--                    <option value="0086">Kenya</option>--}}
{{--                    <option value="0087">Kuwait</option>--}}
{{--                    <option value="0088">Laos</option>--}}
{{--                    <option value="0089">Latvia</option>--}}
{{--                    <option value="0090">Lebanon</option>--}}
{{--                    <option value="0091">Liberia</option>--}}
{{--                    <option value="0092">Libya</option>--}}
{{--                    <option value="0093">Lithuania</option>--}}
{{--                    <option value="0094">Macedonia</option>--}}
{{--                    <option value="0095">Madagascar</option>--}}
{{--                    <option value="0096">Malawi</option>--}}
{{--                    <option value="0097">Malaysia</option>--}}
{{--                    <option value="0098">Maldives</option>--}}
{{--                    <option value="0099">Mali</option>--}}
{{--                    <option value="0100">Malta</option>--}}
{{--                    <option value="0101">Mauritania</option>--}}
{{--                    <option value="0102">Mauritius</option>--}}
{{--                    <option value="0103">Mexico</option>--}}
{{--                    <option value="0104">Moldova</option>--}}
{{--                    <option value="0105">Monaco</option>--}}
{{--                    <option value="0106">Mongolia</option>--}}
{{--                    <option value="0107">Montenegro</option>--}}
{{--                    <option value="0108">Morocco</option>--}}
{{--                    <option value="0109">Mozambique</option>--}}
{{--                    <option value="0110">Namibia</option>--}}
{{--                    <option value="0111">Nepal</option>--}}
{{--                    <option value="0112">Netherlands</option>--}}
{{--                    <option value="0113">New Zealand</option>--}}
{{--                    <option value="0114">Nicaragua</option>--}}
{{--                    <option value="0115">Niger</option>--}}
{{--                    <option value="0116">Nigeria</option>--}}
{{--                    <option value="0117">North Korea</option>--}}
{{--                    <option value="0118">Norway</option>--}}
{{--                    <option value="0119">Oman</option>--}}
{{--                    <option value="0120">Pakistan</option>--}}
{{--                    <option value="0121">Panama</option>--}}
{{--                    <option value="0122">Papua New Guinea</option>--}}
{{--                    <option value="0123">Paraguay</option>--}}
{{--                    <option value="0124">Peru</option>--}}
{{--                    <option value="0126">Poland</option>--}}
{{--                    <option value="0127">Portugal</option>--}}
{{--                    <option value="0128">Qatar</option>--}}
{{--                    <option value="0129">Romania</option>--}}
{{--                    <option value="0130">Russia</option>--}}
{{--                    <option value="0131">Rwanda</option>--}}
{{--                    <option value="0132">Saudi Arabia</option>--}}
{{--                    <option value="0133">Scotland</option>--}}
{{--                    <option value="0134">Senegal</option>--}}
{{--                    <option value="0135">Serbia</option>--}}
{{--                    <option value="0136">Seychelles, the</option>--}}
{{--                    <option value="0137">Sierra Leone</option>--}}
{{--                    <option value="0138">Singapore</option>--}}
{{--                    <option value="0139">Slovakia</option>--}}
{{--                    <option value="0140">Slovenia</option>--}}
{{--                    <option value="0141">Somalia</option>--}}
{{--                    <option value="0142">South Africa</option>--}}
{{--                    <option value="0143">South Korea</option>--}}
{{--                    <option value="0144">Spain</option>--}}
{{--                    <option value="0145">Sri Lanka</option>--}}
{{--                    <option value="0177">St Kitts and Nevis</option>--}}
{{--                    <option value="0007">St Lucia</option>--}}
{{--                    <option value="0146">Sudan</option>--}}
{{--                    <option value="0147">Suriname</option>--}}
{{--                    <option value="0148">Swaziland</option>--}}
{{--                    <option value="0149">Sweden</option>--}}
{{--                    <option value="0150">Switzerland</option>--}}
{{--                    <option value="0151">Syria</option>--}}
{{--                    <option value="0152">Taiwan</option>--}}
{{--                    <option value="0153">Tajikistan</option>--}}
{{--                    <option value="0154">Tanzania</option>--}}
{{--                    <option value="0155">Thailand</option>--}}
{{--                    <option value="0125">the Philippines</option>--}}
{{--                    <option value="0156">Togo</option>--}}
{{--                    <option value="0006">Trinidad</option>--}}
{{--                    <option value="0157">Tunisia</option>--}}
{{--                    <option value="0158">Turkey</option>--}}
{{--                    <option value="0159">Turkmenistan</option>--}}
{{--                    <option value="0160">Tuvalu</option>--}}
{{--                    <option value="0161">Uganda</option>--}}
{{--                    <option value="0162">Ukraine</option>--}}
{{--                    <option value="0163">United Arab Emirates (UAE)</option>--}}
{{--                    <option value="0164">United Kingdom (UK)</option>--}}
{{--                    <option value="0165">Uruguay</option>--}}
{{--                    <option value="0004">USA</option>--}}
{{--                    <option value="0166">Uzbekistan</option>--}}
{{--                    <option value="0167">Vanuatu</option>--}}
{{--                    <option value="0168">Venezuela</option>--}}
{{--                    <option value="0169">Vietnam</option>--}}
{{--                    <option value="0178">Virgin Islands</option>--}}
{{--                    <option value="0170">Wales</option>--}}
{{--                    <option value="0171">Western Samoa</option>--}}
{{--                    <option value="0172">Yemen</option>--}}
{{--                    <option value="0173">Yugoslavia</option>--}}
{{--                    <option value="0174">Zaire</option>--}}
{{--                    <option value="0175">Zambia</option>--}}
{{--                    <option value="0176">Zimbabwe</option>--}}

{{--                </select>--}}
{{--                <span class="text-red-700 text-2xs">@error('country') {{$message}} @enderror</span>--}}
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
