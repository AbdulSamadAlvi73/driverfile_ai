<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARTCDLING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{asset('assets/css/mainstyle.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.map"></script>
    <link rel="shortcut icon" href="{{asset('assets/img/Logo.png')}}" type="image/x-icon">
    <style>
        .text-danger{
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="container row w-100 p-0 m-0" style="min-height: 100vh; max-width: none !important;">
        <div class="leftSection p-3 py-5 col-lg-6 col-12 m-0 d-flex flex-column gap-5 justify-content-center align-items-start">
            <div class="position-absolute top-0 start-0 d-flex align-items-center m-3">
                <img src="{{asset('assets/img/Logo.png')}}" style="width:10rem;"  alt="">
                {{-- <h1 class="ms-1 mb-0 text-primary">STARTCDLING</h1> --}}
            </div>

            <div class="heading-wrapper" style="margin-top: 5rem;">
                <h1 class="text-primary">Everything You Need<br>to hire & manage your team</h1>
                <h4 class="text-warning">
                    Simplify and save time with hiring fatkes, Send forms, sign documents, save and archive and manage
                    driver's documents All in one place.
                </h4>
            </div>
            <a href="{{url('/applyNow')}}" class="btn text-light rounded rounded-pill text-decoration-none mx-auto px-3 p-2"
                style="background-color: #6DB4F5">
                Drivers Apply Here
            </a>
        </div>
        <div class="rightSection col-lg-6 col-12 bg-primary p-lg-0 py-4 m-0 d-flex justify-content-center align-items-center">
            <div class="form-container p-xl-5 p-lg-2 p-0" style="width:85%;">
                
                <ul class="nav nav-tabs gap-1 border-0">
                    <li class="nav-item">
                        <a class="btn {{ old('activeTab') == 'login' || !session('activeTab') ? 'active' : '' }} p-2 text-light login-tab selected-tab"
                            style="border-radius: 20px 20px 0px 0px; background-color: #6DB4F5" data-bs-toggle="tab"
                            href="#login">Company Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn {{ old('activeTab') == 'signup' || session('activeTab') == 'signup' ? 'active' : '' }} p-2 text-light register-tab unselected-tab"
                            data-bs-toggle="tab" style="border-radius: 20px 20px 0px 0px; background-color: #6DB4F5;" href="#signup">Company
                            Register</a>
                    </li>
                </ul>
        
                <div class="tab-content p-lg-5 p-4 bg-white" style="border-radius: 0px 20px 20px 20px">
                    <div class="tab-pane w-100 p-md-3 p-0 fade show {{ !$errors->has('activeTab') && !session('activeTab') || $errors->has('loginactiveTab') ? 'active' : '' }}" id="login">
                        <div class="form-wrapper">
                            <form id="myForm" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username_or_email" class="form-label m-0 text-primary fw-bold">Username or Email</label>
                                    <input type="text" class="form-control rounded-pill border-2 p-2 px-3 border-primary" id="username_or_email" name="username_or_email" value="{{ old('username_or_email') }}">
                                @error('username_or_email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                    <span class="username_or_email_err text-danger"></span>
                                </div>
                                <div class="mb-3">
                                    <div class="label-wrapper d-flex justify-content-between align-items-center">
                                        <label for="password" class="form-label m-0 text-primary fw-bold">Password</label>
                                        <a href="#" class="link text-decoration-none fs-0" style="color: #6DB4F5">Forgot Password</a>
                                    </div>
                                    <input type="password" class="form-control rounded-pill border-2 p-2 px-3 border-primary" id="password" name="password">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                    <span class="password_err text-danger"></span>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" style="border-color: #6DB4F5" id="rememberMe">
                                    <label class="form-check-label text-primary" for="rememberMe">Remember Me</label>
                                    <span class="checkbox_err text-danger"></span>
                                </div>
                                <button type="submit" class="btn px-3 w-100 p-2 rounded-pill d-block mx-auto text-light fw-bold" style="background-color: #6DB4F5">Login</button>
                                @if ($errors->has('login_error'))
                                <p class="text-danger mt-2">{{ $errors->first('login_error') }}</p>
                            @endif
                            
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane w-100 p-lg-0 p-md-3 p-0 fade show {{ ($errors->has('activeTab') || session('activeTab') == 'signup') && !$errors->has('login_error') ? 'active' : '' }}" id="signup">
                        <div class="form-wrapper  w-100">
                            <form  id="registerForm" action="{{route('register')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <label for="name" class="form-label m-0 text-primary fw-bold">Username*</label>
                                        <input type="text"
                                            class="form-control rounded-pill border-2 p-2 px-3 border-primary" id="username" name="username"
                                            value="{{ old('username') }}">
                                        @error('username')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <label for="email" class="form-label m-0 text-primary fw-bold">Email*</label>
                                        <input type="email"
                                            class="form-control rounded-pill border-2 p-2 px-3 border-primary"
                                            id="email" name="email"  value="{{ old('email') }}" >
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <span class="email_err text-danger"></span>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <label for="signup-password"
                                            class="form-label m-0 text-primary fw-bold">Password*</label>
                                        <input type="password"x
                                            class="form-control rounded-pill border-2 p-2 px-3 border-primary"
                                            id="signup-password" name="password" minlength="8">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <span class="password_err text-danger" style="display: none;">Password must be
                                            at least 8 characters long</span> <!-- Error message span -->
                                    </div>
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <label for="signup-conpassword"
                                            class="form-label m-0 text-primary fw-bold">Confirm Password*</label>
                                        <input type="password"
                                            class="form-control rounded-pill border-2 p-2 px-3 border-primary"
                                            id="signup-conpassword" name="password_confirmation"  minlength="8">
                                        <span class="conpassword_err text-danger"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <label for="signup-phone" class="form-label m-0 text-primary fw-bold">Phone
                                            Number*</label>
                                        <input type="text"
                                            class="form-control rounded-pill border-2 p-2 px-3 border-primary"
                                            id="signup-phone" name="phone_no" value="{{ old('phone_no') }}">
                                        @error('phone_no')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <span class="phone_err text-danger"></span>
                                    </div>

                                    <div class="mb-3 col-md-6 col-sm-12">
                                        <label for="signup-zipcode"
                                            class="form-label m-0 text-primary fw-bold">Zipcode*</label>
                                        <input type="number"
                                            class="form-control rounded-pill border-2 p-2 px-3 border-primary"
                                            id="signup-zipcode" name="zipcode" value="{{ old('zipcode') }}"  minlength="5" maxlength="5">
                                        @error('zipcode')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <span class="zipcode_err text-danger"></span>
                                    </div>  
                                    <input type="hidden" class="form-control" id="company_code" name="company_code">
                                    @error('company_code')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <button type="submit" class="mt-3 btn px-3 w-100 p-2 rounded-pill d-block mx-auto text-light fw-bold" style="background-color: #6DB4F5">Create Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <script>



// Function to generate a random 6-digit code
function generateCompanyCode() {
    var code = '';
    var characters = '0123456789';
    for (var i = 0; i < 6; i++) {
        code += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return code;
}

// Execute this function when the document is ready
document.addEventListener('DOMContentLoaded', function() {
    // Get the hidden input field for company code
    var companyCodeInput = document.getElementById('company_code');

    // Generate a unique 6-digit code
    var code = generateCompanyCode();

    // Set the generated code to the input field
    companyCodeInput.value = code;
});


function formatPhoneNumber(input) {
        var cleaned = ('' + input).replace(/\D/g, '');
        var match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);
        if (match) {
            return '(' + match[1] + ') ' + match[2] + '-' + match[3];
        }
        return null;
    }

    document.getElementById("signup-phone").addEventListener("input", function() {
        var input = this.value;
        var formatted = formatPhoneNumber(input);
        var regex = /^[0-9]+$/;

        if (formatted) {
            this.value = formatted;
            document.querySelector('.phone_err').innerText = '';
        } else {
            if (!regex.test(input)) {
                document.querySelector(".phone_err").innerText = "Only numeric characters are allowed.";
            } else {
                document.querySelector(".phone_err").innerText = "Please enter a valid American phone number";
            }
        }
    }); 
       function checkPasswordMatch() {
        var password = document.getElementById("signup-password").value;
        var confirmPassword = document.getElementById("signup-conpassword").value;

        if (password != confirmPassword) {
            document.querySelector('.conpassword_err').innerText = 'Passwords do not match';
            return false;
        } else {
            document.querySelector('.conpassword_err').innerText = '';
            return true;
        }
    }

    document.getElementById("signup-conpassword").addEventListener("input", function() {
        checkPasswordMatch();
    });

    document.getElementById("signup-password").addEventListener("focus", function() {
        if (this.value.length < 8) {
            document.querySelector('.password_err').style.display = 'block';
        } else {
            document.querySelector('.password_err').style.display = 'none';
        }
    });
    document.getElementById("signup-zipcode").addEventListener("input", function() {
        var input = this.value;
        var regex = /^\d{5}$/;

        if (!regex.test(input)) {
            document.querySelector(".zipcode_err").innerText = "Please enter a 5-digit zipcode.";
        } else {
            document.querySelector(".zipcode_err").innerText = "";
        }
    });

    document.getElementById("email").addEventListener("input", function() {
        var input = this.value;
        var errorSpan = document.querySelector(".email_err");

        if (!isValidEmail(input)) {
            errorSpan.textContent = "Please enter a valid email address.";
        } else {
            errorSpan.textContent = "";
        }
    });

    function isValidEmail(email) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }


$(document).ready(function () {
    $(".nav-tabs a").click(function() {
        // Remove selected and unselected classes from all tabs
        $(".nav-tabs a").removeClass("selected-tab unselected-tab");
        
        // Add selected class to the clicked tab
        $(this).addClass("selected-tab");
        
        // Add unselected class to the unclicked tab
        $(this).parent().siblings().find("a").addClass("unselected-tab");
    });
});

    </script>

    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>