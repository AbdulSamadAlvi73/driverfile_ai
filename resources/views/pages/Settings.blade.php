@extends('layout.app')
@section('mainsection')
<style>
    /* Set a fixed width for each nav-item */
.nav-item {
    flex: 1;
    width: 20%; /* Adjust this value as needed */
}

/* Ensure nav-link buttons fill the width of nav-item */
.nav-link {
    width: 80%;
    text-align: center; /* Optionally, center align text */
}

</style>
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
            <ul class="nav nav-tabs gap-md-1 gap-1 border-0" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">General</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Notifications</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Security</button>
                </li>
                {{-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="plans-tab" data-bs-toggle="tab" data-bs-target="#plans-tab-pane" type="button" role="tab" aria-controls="plans-tab-pane" aria-selected="false">Plans</button>
                </li> --}}
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings-tab-pane" type="button" role="tab" aria-controls="settings-tab-pane" aria-selected="false">Applications Settings</button>
                </li>
            </ul>
            <div class="tab-content border-0" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="form-app-box px-lg-5 py-lg-4 p-3">
                        <form action="#" method="post" class="form-label p-sm-0 p-1 justify-content-sm-center d-flex flex-md-row flex-column">
                            <h6>Application Requested:</h6>
                            <div class="control-wrapper d-flex align-items-center flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        CDL
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Non CDL
                                    </label>
                                </div>
                            </div>
                        </form>
                        <div class="form-content">
                            @if(Session::has('success'))
                            <p class="text-success">{{Session::get('success')}}</p>
                            @endif
                            <form action="{{route('generalUpdate')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Contact Name</label>
                                        <span>Company's contact name</span>
                                        <input type="text" name="contact_name" value="" class="form-control">
                                        @error('contact_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Contact Email</label>
                                        <span>Company's contact email</span>
                                        <input type="email" value="{{ $email }}" name="email" class="form-control">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label for="phone">Contact Phone</label>
                                        <span>Company's contact phone</span>
                                        <input type="text" id="contact_phone" value="{{ $phone_no }}" name="phone_no" class="form-control">
                                    <span class="phone_err text-danger"></span>
                                    @error('phone_no')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>                                  
                                    <div class="col-md-4 col-sm-12">
                                        <label for="timezone">Time Zone</label>
                                        <select class="form-select form-control" id="timezone" name="timezone" onchange="updateLiveTimes()">
                                            <option value="America/New_York">EDT - Eastern Time (ET)</option>
                                            <option value="America/Chicago">CDT - Central Time (CT)</option>
                                            <option value="America/Denver">MDT - Mountain Time (MT)</option>
                                            <option value="America/Los_Angeles">PDT - Pacific Time (PT)</option>
                                        </select>
                                        <p id="live-time"></p>
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Payment Method</label>
                                        <input type="submit" class="form-btn" value="None" style="padding-top: -50px">
                                    </div>
                                    <div class="col-md-4 col-sm-12">

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
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <div class="form-app-box px-lg-5 py-lg-4 p-3 mb-4">
                        <form id="notification-form" action="#" method="post" class="form-label d-flex flex-md-row flex-column">
                            <div class="form-check">
                                <input class="form-check-input rounded" type="checkbox" name="notification" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Notify me when applications are saved
                                </label>
                            </div>
                        </form>
                        
                        <form action="#" method="post" class="form-label d-flex flex-md-row flex-column">
                            <div class="form-check">
                                <input class="form-check-input rounded" type="checkbox" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Notify me when applications are submitted
                                </label>
                            </div>
                        </form>
                        
                        <form action="#" method="post" class="form-label d-flex flex-md-row flex-column">
                            <div class="form-check">
                                <input class="form-check-input rounded noti-check" type="checkbox" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Notify me when documents are uploaded
                                </label>
                            </div>
                        </form>
                        
                        <form action="#" method="post" class="form-label mt-5 d-flex flex-md-row flex-column" style="background-color: #6DB4F5;">
                            <div class="form-check">
                                <input class="form-check-input rounded" type="checkbox" name="flexRadioDefault" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Notification send to contact email {{$email}}
                                </label>
                            </div>
                        </form>
                        <form action="#" method="post" class="form-label justify-content-center d-flex flex-md-row flex-column" style="background-color: #6DB4F5;">
                            <div class="form-check">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Add aoother email
                                </label>
                            </div>
                        </form>
                    
                        {{-- <div class="row">
                            <div class="col-md-6 col-sm-6">
                            </div>
                            <div class="col-md-6 col-sm-6" style="text-align: right;">
                                <input id="save-btn" type="submit" class="save-btn" style="background-color: gray;border:none;" value="Save" disabled>
                            </div>
                        </div> --}}
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <div class="form-app-box px-lg-5 py-lg-4 p-3">
                            <div class="form-content">
                                @if(Session::has('success'))
                                <p class="text-success">{{Session::get('success')}}</p>
                                @endif
                                <form action="{{ route('updateSettings') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label for="name">New Email</label>
                                            <span>Tap to change email</span>
                                            <input type="email" name="newemail" class="form-control">
                                            @error('newemail')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for="name">New Password</label>
                                            <span>Tap to change Password</span>
                                            <input type="password" name="newpassword" class="form-control">
                                            @error('newpassword')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for="name">Re-enter Password</label>
                                            <span>Tap to change Password</span>
                                            <input type="password" name="confirmPassword" class="form-control">
                                            @error('confirmPassword')
                                            <span class="text-danger">{{ $message }}</span>
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
                </div>
                {{-- <div class="tab-pane fade" id="plans-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="form-app-box px-lg-5 py-lg-4 p-3">
                        <div class="form-content">
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    <h3 class="text-center text-primary mt-5">Starter</h3>
                                    <div class="plan-divs orange-div">
                                        <div class="content">
                                            <p>Company's contact name</p>
                                            <p>Company's contact email</p>
                                            <p>Company's contact phone</p>
                                            <p>Company's time zone</p>
                                            <p>Payment Method: None</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12">
                                    <h3 class="text-center text-primary mt-5">Premium</h3>
                                    <div class="plan-divs orange-div">
                                        <div class="content">
                                            <p>Company's contact name</p>
                                            <p>Company's contact email</p>
                                            <p>Company's contact phone</p>
                                            <p>Company's time zone</p>
                                            <p>Payment Method: None</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <h3 class="text-center text-primary mt-5">Diamond</h3>
                                    <div class="plan-divs orange-div">
                                        <div class="content">
                                            <p>Company's contact name</p>
                                            <p>Company's contact email</p>
                                            <p>Company's contact phone</p>
                                            <p>Company's time zone</p>
                                            <p>Payment Method: None</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">

                            </div>
   
                            <div class="col-md-6 col-sm-6" style="text-align: right;">
                                <input type="submit" class="save-btn" value="Save">
                            </div>
                        </div>
                    </div>
                </div>
                </div> --}}
                <div class="tab-pane fade" id="settings-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                    tabindex="0">

                    <div class="form-app-box px-lg-5 py-lg-4 p-3 mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-primary fs-8 fw-bold">For Drivers Licence History the application should ask for</p>
                            </div>
                            <div class="col-md-6">
                                <form action="#" method="post" class="form-label d-flex flex-wrap align-items-start w-100">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            3 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            4 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            5 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            6 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                        <label class="form-check-label" for="flexRadioDefault5">
                                            7 Years
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-primary fs-8 fw-bold">For Recent Addresses the application should ask for</p>
                            </div>
                            <div class="col-md-6">
                                <form action="#" method="post" class="form-label d-flex flex-wrap align-items-start w-100">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            3 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            4 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            5 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            6 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                        <label class="form-check-label" for="flexRadioDefault5">
                                            7 Years
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-primary fs-8 fw-bold">For Accident Review History the application should ask for</p>
                            </div>
                            <div class="col-md-6">
                                <form action="#" method="post" class="form-label d-flex flex-wrap align-items-start w-100">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            3 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            4 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            5 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            6 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                        <label class="form-check-label" for="flexRadioDefault5">
                                            7 Years
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-primary fs-8 fw-bold">For Trafic Convictions and Forfeltures the application should ask for</p>
                            </div>
                            <div class="col-md-6">
                                <form action="#" method="post" class="form-label d-flex flex-wrap align-items-start w-100">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            3 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            4 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            5 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            6 Years
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                        <label class="form-check-label" for="flexRadioDefault5">
                                            7 Years
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-primary fs-8 fw-bold">Archive Electronic application after how many days</p>
                            </div>
                            <div class="col-md-6">
                                <form action="#" method="post" class="form-label d-flex flex-wrap align-items-start w-100">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Never
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            15 Days
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            30 Days
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            60 Days
                                        </label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                        <label class="form-check-label" for="flexRadioDefault5">
                                            90 Days
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <form action="#" method="post" class="form-label mt-5 d-flex flex-md-row flex-column" style="width:70%;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    Remove felony and criminal history related questions from electronic applications.
                                </label>
                            </div>
                        </form>
                        <form action="#" method="post" class="form-label d-flex flex-md-row flex-column" style="width:70%;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    For past employee make the Address feild "required". 
                                </label>
                            </div>
                        </form>
                        <form action="#" method="post" class="form-label d-flex flex-md-row flex-column" style="width:70%;">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">
                                    For past employee make the phone number feild "required". 
                                </label>
                            </div>
                        </form>
                    
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                            </div>
                            <div class="col-md-6 col-sm-6" style="text-align: right;">
                                <input type="submit" class="save-btn" value="Save">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>  
            
        </div>
    </div>
</section>

<script>



    const checkboxes = document.querySelectorAll('.form-check-input');
    const saveBtn = document.getElementById('save-btn');

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
            saveBtn.disabled = !Array.from(checkboxes).some((cb) => cb.checked);
            saveBtn.style.backgroundColor = saveBtn.disabled ? 'gray' : '#6DB4F5';
        });
    });


       // Function to handle checkbox state changes
    function handleCheckboxChange(event) {
        localStorage.setItem(event.target.id, event.target.checked);
    }

    // Add event listeners to all checkboxes
    document.querySelectorAll('.form-check-input').forEach(function(checkbox) {
        checkbox.addEventListener('change', handleCheckboxChange);
        // Restore checkbox state from localStorage
        var isChecked = localStorage.getItem(checkbox.id) === 'true';
        checkbox.checked = isChecked;
    });

    
function updateLiveTimes() {
    var selectElement = document.getElementById('timezone');
    var selectedOption = selectElement.options[selectElement.selectedIndex];
    var timeZone = selectedOption.value;
    var now = new Date();
    var time = now.toLocaleTimeString('en-US', { timeZone: timeZone });

    document.getElementById('live-time').textContent = 'Live Time: ' + selectedOption.text.split('-')[0] + '- ' + time;
}


document.getElementById("contact_phone").addEventListener("input", function() {
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
    


$(document).ready(function () {
    $(".nav-link").click(function() {
        $(".nav-link").removeClass("active"); 
        $(this).addClass("active"); 
    });
});
    
</script>

@endsection


