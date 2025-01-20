@extends('layout.app')
@section('mainsection')

<section class="dashboard">
    <div class="top d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <h5><i class="uil uil-bars sidebar-toggle"></i></h5>
            <div class="logo-name border-bottom-0 p-0 d-md-none d-flex align-items-center">
                <div class="logo-image m-0">
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <div class="ms-auto me-4 d-flex align-items-center gap-2">
            @if($company_logo)
                <img src="{{ asset($company_logo)}}" height="40rem" alt="Logo">
            @else
                <span></span>
            @endif
            <h5 class="m-0">{{ $display_name }}</h5>
        </div>
        <div class="btn-box">
            <a name="logout" id="logout" class="logout-btn" href="{{route('logout')}}" role="button">Logout</a>
        </div>
    </div>
    

    <div class="dash-content px-md-4 py-3 p-2">
        <div class="main-content-box">
            <div class="row align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <ul class="nav nav-tabs gap-md-1 gap-1 border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active selected-tab" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="true">Profile</button>
                        </li>
                        {{-- <li class="nav-item" role="presentation">
                            <button class="nav-link unselected-tab" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">Notifications</button>
                        </li> --}}
                    </ul>
                    
                    </div>
                    {{-- <div class="col-auto">
                        <a name="logout" id="logout" class="logout-btn" href="{{route('logout')}}" role="button"><button class="add-company-btn">Add another Company</button></a>
                    </div> --}}
                </div>
            </div>
            <div class="tab-content border-0" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="form-app-box px-lg-5 py-lg-4 p-3">
                        <div class="form-content">
                            @if(Session::has('error'))
                            <p class="text-danger">{{Session::get('error')}}</p>
                            @endif
                            <form action="{{ route('companyprofilestore') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <label for="state">Username</label>
                                        </div>
                                        {{-- <label for="name">Username</label> --}}
                                        <span><br></span>
                                        <input type="text" value="{{ $username }}" name="username" class="form-control">
                                        @error('username')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>                                    
                                    <div class="col-md-4 col-sm-12">
                                        <div class="d-flex justify-content-between">
                                        <label for="name">Company legal name</label>
                                        </div>
                                        <span><br></span>
                                        <input type="text" name="legal_name" value="{{ old('legal_name') ?: $company_legal_name }}" class="form-control">
                                        @error('legal_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Company display name</label>
                                        <span>This name will show on search</span>
                                        <input type="text" name="display_name" value="{{old('display_name') ?:  $display_name }}" class="form-control">
                                        @error('display_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <label for="name">Company Code</label>
                                            <span class="gap-3 text-primary copy-icons">
                                                <i class="fa-regular fa-copy fs-6 me-2 copy-icon" style="cursor: pointer;"></i>
                                                <i class="fa fa-check fs-6 d-none me-2 check-icon"></i>
                                                {{-- <i class="fa-solid fa-arrow-up-from-bracket fs-5"></i> --}}
                                            </span>
                                        </div>
                                        <span class="ms-2">For driver to find your company</span>
                                        <input type="number"  value="{{ $company_code }}" name="company_code" class="form-control" id="companyCodeInput" readonly>
                                        @error('company_code')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>                                    
                                    <div class="col-md-4 col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <label for="name">Company URL</label>
                                            <span class="gap-3 text-primary copy-icons-url">
                                                <i class="fa-regular fa-copy fs-6 me-2 copy-icon-url"></i>
                                                <i class="fa fa-check fs-6 d-none me-2 check-icon-url"></i>
                                                {{-- <i class="fa-solid fa-arrow-up-from-bracket fs-5"></i> --}}
                                            </span>
                                        </div>
                                        <span class="ms-2">For driver to find your company</span>
                                        <input type="text" name="company_url" value="{{old('company_url') ?:  $company_url}}" class="form-control" id="companyUrlInput">
                                        @error('company_url')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    {{-- <div class="col-md-4 col-sm-12">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <label for="name">Company QR</label>
                                        </div>
                                        <span class="ms-2">For driver to find your company</span>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <div id="qrcode"></div>
                                            <span class="gap-3 text-primary">
                                                <i class="fa-regular fa-copy fs-6 me-2"></i>
                                                <i class="fa-solid fa-arrow-up-from-bracket fs-5"></i>
                                            </span>
                                        </div>
                                    </div> --}}

                                    <div class="col-md-4 col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <label for="address">Address</label>
                                        </div>
                                        <span><br></span>
                                        <input type="text" class="form-control" value="{{old('address') ?:  $address }}" id="address" name="address" autocomplete="on">
                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <label for="state">State</label>
                                        </div>
                                        <span><br></span>
                                        <input type="text" class="form-control" value="{{old('state') ?:  $state }}" id="state" name="state" readonly>
                                        @error('state')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                                                      
                                    <div class="col-md-4 col-sm-12">
                                        <div class="d-flex justify-content-between">
                                            <label for="name">Phone Number</label>
                                        </div>
                                        <span class="ms-2">Display Phone Number</span>
                                        <input type="text" id="display_phone" value="{{old('phone_no') ?:  $company_contact_number }}" name="phone_no" class="form-control">
                                        @error('phone_no')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    <span class="phone_err text-danger"></span>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label for="logo">Company Logo</label>
                                        <div id="logo-preview"></div>
                                        <input type="file" id="logo" name="logo" style="display: none;" accept="image/*">
                                        <button type="button" class="form-btn" onclick="document.getElementById('logo').click()">Upload</button>
                                        @isset($logoErrorMessage)
                                            <span class="text-danger">{{ $logoErrorMessage }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
            
                                        </div>
            
                                        <div class="col-md-6 col-sm-6" style="text-align: right;">
                                            <input type="submit" class="save-btn" value="Save">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">..weqw.</div> --}}

            </div>
        </div>
    </div>
</section>
<script>

function initAutocomplete() {
        var addressInput = document.getElementById('address');
        var stateInput = document.getElementById('state');

        var autocomplete = new google.maps.places.Autocomplete(addressInput);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();

            if (place && place.address_components) {
                place.address_components.forEach(function(component) {
                    if (component.types.includes('administrative_area_level_1')) {
                        stateInput.value = component.long_name;
                    }
                });
            }
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        initAutocomplete();
    });





    document.addEventListener('DOMContentLoaded', function() {
    const copyIcon = document.querySelector('.copy-icon');
    const checkIcon = document.querySelector('.check-icon');
    const companyCodeInput = document.getElementById('companyCodeInput');

    copyIcon.addEventListener('click', function() {
        companyCodeInput.select();
        document.execCommand('copy');
        copyIcon.classList.add('d-none');
        checkIcon.classList.remove('d-none');

        setTimeout(function() {
            checkIcon.classList.add('d-none');
            copyIcon.classList.remove('d-none');
        }, 3000);
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const copyIconUrl = document.querySelector('.copy-icon-url');
    const checkIconUrl = document.querySelector('.check-icon-url');
    const companyUrlInput = document.getElementById('companyUrlInput');

    copyIconUrl.addEventListener('click', function() {
        companyUrlInput.select();
        document.execCommand('copy');
        copyIconUrl.classList.add('d-none');
        checkIconUrl.classList.remove('d-none');

        setTimeout(function() {
            checkIconUrl.classList.add('d-none');
            copyIconUrl.classList.remove('d-none');
        }, 3000);
    });
});


document.getElementById('logo').addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '50%';
                document.getElementById('logo-preview').innerHTML = '';
                document.getElementById('logo-preview').appendChild(img);
            };
            reader.readAsDataURL(file);
        }
    });

    

    document.getElementById("display_phone").addEventListener("input", function() {
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
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdnrssnmZUvPplGu-jBMIzsj09CUh_6rQ&libraries=places"></script>
@endsection 