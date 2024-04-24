





<body>
    <x-guest-layout>
        <link rel="stylesheet" href="{{asset('assets/for_company/style.css')}}">

        <div class="container">
            <header> نموذج التسجيل </header>
            <hr>
            <h2><a href="{{route('index')}}">الصفحة الرائيسية  </a> > تسجيل مورد</h2>
            <div class="progress-bar">
              <h1>logo</h1>
              </div>

              <div class="form-outer">
           <form method="POST" action="{{ route('register') }}">
            @csrf




            <div class="page slide-page">
            <!-- Name -->
            <div class="dbl-field">
            <div class="field">
                <x-input-label for="name" :value="__('اسم الشركة')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="field">
                <x-input-label for="authorized_name" :value="__('اسم المخول')" />
                <x-text-input id="authorized_name" class="block mt-1 w-full" type="text" name="authorized_name" :value="old('email')" required autocomplete="username" />
            </div>


        </div>


            <!-- Email Address -->



            <div class="dbl-field">

                <div class="mt-4">
                    <x-input-label for="phone_number" :value="__('رقم الهاتف')" />
                    <x-text-input id="phone_number" class="block mt-1 w-full" type="number"  pattern="[0-9]{1-2}-[0-9]{3}-[0-9]{4}"   name="phone_number" :value="old('phone_number')" required autocomplete="phone_number"/>
                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2"/>
                </div>


            <div class="field">
                <x-input-label for="address" :value="__('العنوان')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
            </div>

        </div>





        <div class="dbl-field">

            <div class="field">
                <x-input-label for="license_number" :value="__('رقم الرخصة التجارية')" />
                <x-text-input id="license_number" class="block mt-1 w-full" type="number" name="license_number" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="field">
                <x-input-label for="license_expiration" :value="__('تاريخ انتهاء الرخصة')" />
                <x-text-input id="license_expiration" class="block mt-1 w-full" type="date" name="license_expiration" :value="old('email')" required autocomplete="username" />
            </div>


        </div>





            <div class="dbl-field email-field">

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('البريد الالكتروني')" />

                <x-text-input id="email" placeholder="name@example.com" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

        </div>


            <!-- Password -->
            <div class="dbl-field create-password">
                <div class="mt-4">
                    <x-input-label for="password" :value="__('كلمة المرور')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        </div>



            <!-- Confirm Password -->
            <div class="dbl-field confirm-password">
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

        </div>


        <div class="ducomont">

            <label for="fileID">تحميل السجل التجاري :</label>
            <div class="drop_box">
                <div class="flex items-center justify-center w-full">
                    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400"> PDF, TEXT, DOC , DOCX   (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" accept=".doc,.docx,.pdf" class="hidden" />
                    </label>
                </div>
            </div>

      </div>




<!------------
      <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required />
        </div>
        <label for="remember" class="ms-2 text-base font-medium text-gray-900 dark:text-gray-300">أقر بأنني اطلعت على  <a  data-toggle="modal" data-target="#modal_wrapper" class="btns_done">اتفاقية الإستخدام وسياسات الخصوصية</a>. وأوافق عليها  </label>
    </div>
    -------->






        <div class="flex ">
            <button class="submit">
                {{ __('ارسال') }}
            </button>

            <a class="underline text-base my-8 text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('لديك حساب ؟') }}
            </a>
        </div>

        </div>
        </form>

    </div>
    </div>


    </x-guest-layout>

    <script src="{{asset('resources/js/script.js')}}"></script>
    <script src= "{{asset('assets/for_company/script.js')}}"></script>



    </body>
