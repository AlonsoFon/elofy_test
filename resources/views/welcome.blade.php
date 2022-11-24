<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Elofy - Login</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

        <style>
            .form-content-box .details{
                background: #FFFFFF;
                box-shadow: 0 2px 4px 0 rgba(0,0,0,0.15);
                border-radius: 4px !important;
            }
            h2 {
                font-size: 24px;
                font-weight: bold;
            }

            .lead{
                font-size: 16px;
            }

            .bg-dark {
                background: #0A1B57 !important;
            }

            .text-dark{
                color : #06164E !important;
            }

            label {
                color : #06164E !important;
                font-weight: bold;
                font-size: 12px;
            }
            input {
                font-size: 14px;
                color : #06164E !important;
                background: #FFFFFF !important;
                border: 1px solid #E6E4D5 !important;
                box-shadow: inset 0 1px 3px 0 rgba(0,0,0,0.25) !important;
                border-radius: 8px !important;
            }

            .btn-warning{ 
                background: #FF9900;
                border-radius: 8px;
                font-weight: bold;
                padding: 14px 10px !important;
            }
        </style>
        
        <!-- Favicon icon -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >

    </head>
    <body class="bg-dark">
        <div class="contact-section" style>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pt-5">
                        <img src="{{ asset('full-logo-white.svg') }}" alt="Headversity">
                        <!-- Form content box start -->
                        <div class="form-content-box">
                            <div class="details">
                                <!-- Name -->
                                <h3>Login</h3>
                                <!-- Form start-->
                                <form action="{{ route('user.login') }}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                                    <div class="form-group text-left">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="input-text" placeholder="johndoe@hotmail.com" autocomplete="new-password">
                                    </div>
                                    <div class="form-group text-left">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="input-text" placeholder="*******" autocomplete="new-password">
                                    </div>
                                    @if(\Session::has('sucess'))
                                    <div class = "alert alert-success">
                                        <span>{{ \Session::get('sucess') }}</span>
                                    </div>
                                    @endif
                                    @if (count($errors) > 0)
                                        @foreach ($errors->all() as $error)
                                            <div class = "alert alert-danger">
                                                <ul>
                                                <li>{{ $error }}</li>
                                                </ul>
                                            </div>
                                        @endforeach
                                    @endif
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn-md btn-warning btn-block">Enter </button>
                                    </div>
                                </form>
                                <!-- Form end-->
                            </div>
                        </div>
                        <!-- Form content box end -->
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript">
            window.onload = (event) => {
              var verify_palindromo = isPalindromo("Arara");
              console.log(verify_palindromo);
            };
            function isPalindromo(value) {
                var palindromo = "";
                value = value.toLowerCase();
                for (var i = value.length - 1; i >= 0; i--) {
                    palindromo = palindromo+value[i];
                }
                if(palindromo == value){
                    return true;
                }
                return false;
            }
        </script>
    </body>
</html>
