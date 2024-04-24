<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>login for company</title>
    <link rel="stylesheet" href="{{asset('assets/for_company/style.css')}}">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <!-- Fontawesome CDN Link -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  </head>



  <body>
    <div class="container">
      <header> نموذج التسجيل </header>
      <hr>
      <h2><a href="{{route('service_register')}}"> خدمات التسجيل </a> > تسجيل مورد</h2>
      <div class="progress-bar">
        <h1>logo</h1>
        </div>




        <div class="form-outer">
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <div class="page slide-page">
                <div class="dbl-field">
                  <div class="field">
                      <label for="name">اسم الشركة :</label>
                      <input type="text" name="name"  name="name" :value="old('name')" required autofocus autocomplete="name">
                  </div>


                    <div class="field">
                      <label for="name_aut"> اسم المخول :</label>
                      <input type="text" name="authorized_name" id="authorized_name" required autofocus autocomplete="authorized_name">
                  </div>

              </div>


              <div class="dbl-field">
                  <div class="field">
                      <label for="phone">رقم الهاتف :</label>
                      <input type="number" name="phone_number" id="phone_number" required autocomplete="phone_number">
                  </div>

                  <div class="field">
                      <label for="address">عنوان الشركة :</label>
                      <input type="text" name="address" id="address" required autocomplete="address" >
                  </div>

              </div>



              <div class="dbl-field">
                  <div class="field">
                      <label for="licens_number"> رقم الرخصة التجارية :</label>
                      <input type="number" name="license_number" id="license_number" required autocomplete="license_number" >
                  </div>

                  <div class="field">
                      <label for="license_expiration">تاريخ الرخصة التجارية :</label>
                      <input type="date" name="license_expiration" id="date" required autocomplete="license_expiration" >
                  </div>
              </div>

              <div class="field email-field">
                <div class="input-field">
                  <label for="">البريد الالكتروني :</label><br>
                  <input type="email" class="email" name="email" :value="old('email')" required autocomplete="username"  />
                </div>
                <span class="error email-error">
                  <i class="bx bx-error-circle error-icon"></i>
                  <p class="error-text">Please enter a valid email</p>
                </span>
              </div>



              <div class="field create-password">
                <div class="input-field">
                  <label for="password">كلمة المرور :</label><br>
                  <input type="password" class="password"  name="password"
                  required autocomplete="new-password" id="password"/>
                </div>
                <span class="error password-error">
                  <i class="bx bx-error-circle error-icon"></i>
                  <p class="error-text">
                    Please enter atleast 8 charatcer with number, symbol, small and
                    capital letter.
                  </p>
                </span>


              </div>


              <div class="field confirm-password">
                <div class="input-field">
                  <label for="">تأكيد كلمة المرور :</label><br>
                  <input
                    type="password"
                    class="cPassword"
                    name="password_confirmation" required autocomplete="new-password" id="password_confirmation"
                  />
                </div>
                <span class="error cPassword-error">
                  <i class="bx bx-error-circle error-icon"></i>
                  <p class="error-text">Password don't match</p>
                </span>
              </div>



              <div class="ducomont">

                <label for="fileID">تحميل السجل التجاري :</label>
                <div class="drop_box">
                  <header>
                    <h4>Select File here</h4>
                  </header>
                  <p>Files Supported: PDF, TEXT, DOC , DOCX</p>
                  <input type="file" hidden accept=".doc,.docx,.pdf" id="fileID" name="upload_file" style="display:none;"  >
                  <button class="btn">Choose File</button>
                </div>

          </div>




          <div class="input-button">


            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
            <button class="sub" href="{{route('register')}}">ارسال</button>
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
          </div>
              </div>


            </form>
          </div>
        </div>

    <script src="{{asset('assets/for_company/script.js')}}"></script>



  </body>
</html>
