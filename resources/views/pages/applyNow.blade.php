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
</head>

<body class="bg-primary">
    <div class="container row w-100 p-0 m-0" style="min-height: 100vh; max-width: none !important;">
        <div class="col-3"></div>
        <div
            class="leftSection p-3 py-5 col-lg-6 col-12 m-0 d-flex flex-column gap-5 justify-content-center align-items-start">
            <div class="position-absolute top-0 start-4 d-flex align-items-center m-3">
                <img src="{{asset('assets/img/Logo.png')}}" style="width:10rem;"  alt="">
                {{-- <h1 class="ms-1 mb-0 text-primary">STARTCDLING</h1> --}}
            </div>

            <div class="heading-wrapper mt-5 text-center">
                <h1 class="text-primary fw-bold">Apply Now</h1>
                <h4 class="text-warning">
                    Enter a Carrier Code provided to you by the company you wish to apply for
                </h4>
            </div>
            <script>
                @if(session('success'))
                    alert("{{ session('success') }}");
                @endif
            </script>
        
        <form action="{{ route('applicationForEmployee') }}" method="POST" class="mx-auto">
            @csrf
            <div class="mb-3">
                <input type="number" minlength="6" required class="form-control rounded-pill border-2 p-2 px-3 border-primary text-center" id="company_code" name="company_code" placeholder="Enter company code">
            </div>
            @if(session('error'))
            <p class="text-danger">{{ session('error') }}</p>
            @endif
            <button type="submit" class="btn px-3 w-100 p-2 rounded-pill d-block mx-auto text-light fw-bold" style="background-color: #6DB4F5">Apply</button>
        </form>
        
        </div>
        <div class="col-3"></div>

       
        
    </div>

    {{-- <script>
$(document).ready(function () {
    $("#myForm").submit(function (e) {
        e.preventDefault();

        // Disable submit button to prevent multiple submissions
        var submitBtn = $(this).find("button[type='submit']");
        submitBtn.prop('disabled', true);

        var _token = $(this).find("input[name='_token']").val();
        var email = $(this).find("#username").val();
        var password = $(this).find("#password").val();

        $.ajax({
            url: "{{ route('validateForm') }}",
            type: "POST",
            data: { _token, email, password, },
            success: function (data) {
                if (data.success) {
                    $('.email_err').text('');
                    $('.password_err').text('');

                    // Redirect to company profile page
                    window.location.href = "/companyprofile";
                }
                else {
                    $('.email_err').text(data.error.email ? data.error.email[0] : '');
                    $('.password_err').text(data.error.password ? data.error.password[0] : '');
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            },
            complete: function () {
                // Re-enable submit button after request is complete
                submitBtn.prop('disabled', false);
            }
        });
    });
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
        var regex = /^\d{6}$/;

        if (!regex.test(input)) {
            document.querySelector(".zipcode_err").innerText = "Please enter a 6-digit zipcode.";
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

    </script> --}}

    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>