<!doctype html>
<html lang="en">

<head>
    <title>STARTCDLING</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="shortcut icon" href="{{asset('assets/img/Logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/css/mainstyle.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        label {
            font-size: 15px
        }
    </style>
</head>

<body>
    {{-- <header>
        <nav class="navbar navbar-expand navbar-light " style="background-color:#0c89e24b;">
            <div class="container-fluid">
                <img src="{{asset('assets/img/Logo.png')}}" width="100rem" height="100rem" alt="">
                <a class="navbar-brand m-2 text-primary fw-bold" style="font-size: 35px;" href="#">STARTCDLING</a>
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Active
                            <span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>

    </header> --}}
    <main>
        <div class="container">
            <div class="card mt-3 mb-3">
                <div class="row justify-content-between mt-3 m-0">
                    <div class="col-sm-8 col-md-6 col-lg-4 text-start">
                        <img src="{{asset($company_logo)}}" alt="" class="img-fluid" style="width:60%;">
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4 mt-4 text-center">
                        <h5 class="text-center">Application For Employment</h5>
                        <div class="mt-3" style="border-bottom:2px solid black;"></div>
                    </div>
                    <div class="col-sm-8 col-md-12 col-lg-4 mt-4">
                        <p class="text-center text-md-center text-lg-end">
                            {{$display_name}} <br>
                            {{$address}} <br>
                            {{$state}} <br>
                            {{$company_contact_number}}
                        </p>
                    </div>
                </div>
                <div class="m-3">
                    {{-- Main form starting --}}
                    <form action="{{route('applicationsubmition')}}" method="POST">
                        @csrf
                        <div class="row">
                            <input type="hidden" value="{{$company_id}}" name="company_id">
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Job Applied For *</label>
                                <input type="text" class="form-control app-em-custom-input" name="job_applied_for" id=""
                                    aria-describedby="helpId" placeholder="" required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">First Name *</label>
                                <input type="text" class="form-control app-em-custom-input" name="firstname" id=""
                                    aria-describedby="helpId" placeholder="" required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Last Name *</label>
                                <input type="text" class="form-control app-em-custom-input" name="lastname" id=""
                                    aria-describedby="helpId" placeholder="" required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="socialSecurityNumber" class="form-label">Social Security No. *</label>
                                <input type="text" class="form-control app-em-custom-input" name="social_security_no"
                                    id="socialSecurityNumber" aria-describedby="helpId" placeholder="XXX-XX-XXXX"
                                     maxlength="9" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Date of Birth *</label>
                                <input type="date" class="form-control app-em-custom-input" name="date_of_birth" id=""
                                    aria-describedby="helpId" placeholder="" required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="mobileNumber" class="form-label">Mobile Phone No. *</label>
                                <input type="tel" class="form-control app-em-custom-input" name="mobile_no"
                                    id="mobileNumber" aria-describedby="helpId" placeholder="XXX-XXX-XXXX" maxlength="10"
                                    required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="otherPhoneNumber" class="form-label">Other Phone No.</label>
                                <input type="tel" class="form-control app-em-custom-input" name="other_mobile_no"
                                    id="otherPhoneNumber" aria-describedby="helpId" placeholder="XXX-XXX-XXXX"
                                    maxlength="10" required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="emailAddress" class="form-label">Email Address *</label>
                                <input type="email" class="form-control app-em-custom-input" name="email_address" id="emailAddress" aria-describedby="emailError" placeholder="" required />
                                @error('email')
                                    <span id="emailError" class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">Present Address *</label>
                                <input type="text" class="form-control app-em-custom-input" name="present_address" id=""
                                    aria-describedby="helpId" placeholder="" required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">Mobile Phone No. </label>
                                <input type="number" class="form-control app-em-custom-input" name="phone_no" id=""
                                    aria-describedby="helpId" placeholder="" required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-1">
                                <label for="" class="form-label">City *</label>
                                <input type="text" class="form-control app-em-custom-input" name="city" id=""
                                    aria-describedby="helpId" placeholder="" required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">State/Province *</label>
                                <select class="form-select form-select-md w-100 app-em-custom-input"
                                    aria-label=".form-select-sm example" name="state" required>
                                    <option selected>Select State</option>
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky">Kentucky</option>
                                    <option value="Louisiana">Louisiana</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Minnesota">Minnesota </option>
                                    <option value="Mississippi">Mississippi</option>
                                    <option value="Missouri">Missouri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="New Hampshire">New Hampshire</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="New Mexico">New Mexico</option>
                                    <option value="New York">New York</option>
                                    <option value="North Carolina">North Carolina</option>
                                    <option value="North Dakota">North Dakota</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-1">
                                <label for="" class="form-label">ZIP *</label>
                                <input type="number" class="form-control app-em-custom-input" name="zip" id=""
                                    aria-describedby="helpId" placeholder="" required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">Country</label>
                                <input type="text" class="form-control app-em-custom-input" name="country" id=""
                                    aria-describedby="helpId" placeholder="" required />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">Yrs at this address *</label>
                                <input type="number" class="form-control app-em-custom-input" name="yrs_of_this_address"
                                    id="" aria-describedby="helpId" placeholder="" required />
                            </div>
                            <small>*If at current address less than 3 years, list below most recent addresses for the
                                past 3 years. (Click on the Plus sign to add additional Previous Addresses.)</small>
                        </div>
                        <div id="addressRowContainer">
                            <div class="row mt-3 address-row">
                                <div class="mb-3 col-md-6 col-lg-2">
                                    <label for="" class="form-label">Present Address *</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-2">
                                    <label for="" class="form-label">Mobile Phone No. </label>
                                    <input type="number" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-1">
                                    <label for="" class="form-label">City *</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-2">
                                    <label for="" class="form-label">State/Province *</label>
                                    <select class="form-select form-select-md w-100 app-em-custom-input"
                                        aria-label=".form-select-sm example">
                                        <option selected>Select State</option>
                                        <option value="1">Alabama</option>
                                        <option value="2">Alaska</option>
                                        <option value="3">Arizona</option>
                                        <option value="3">Arkansas</option>
                                        <option value="3">California</option>
                                        <option value="3">Colorado</option>
                                        <option value="3">Connecticut</option>
                                        <option value="3">Delaware</option>
                                        <option value="3">Florida</option>
                                        <option value="3">Georgia</option>
                                        <option value="3">Florida</option>
                                        <option value="3">Hawaii</option>
                                        <option value="3">Idaho</option>
                                        <option value="3">Illinois</option>
                                        <option value="3">Indiana</option>
                                        <option value="3">Iowa</option>
                                        <option value="3">Kansas</option>
                                        <option value="3">Kentucky</option>
                                        <option value="3">Louisiana</option>
                                        <option value="3">Maine</option>
                                        <option value="3">Maryland</option>
                                        <option value="3">Massachusetts</option>
                                        <option value="3">Michigan</option>
                                        <option value="3">Minnesota </option>
                                        <option value="3">Mississippi</option>
                                        <option value="3">Missouri</option>
                                        <option value="3">Montana</option>
                                        <option value="3">Nebraska</option>
                                        <option value="3">Nevada</option>
                                        <option value="3">New Hampshire</option>
                                        <option value="3">New Jersey</option>
                                        <option value="3">New Mexico</option>
                                        <option value="3">New York</option>
                                        <option value="3">North Carolina</option>
                                        <option value="3">North Dakota</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 col-lg-1">
                                    <label for="" class="form-label">ZIP *</label>
                                    <input type="number" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-2">
                                    <label for="" class="form-label">Country</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="col-md-6 col-lg-2">
                                    <label for="" class="form-label">Yrs at this address *</label>
                                    <div class="input-group gap-2">
                                        <input type="number" class="form-control app-em-custom-input" name="yrsAtAddress"
                                            aria-describedby="helpId" placeholder="" />
                                        <button class="btn btn-primary add-row-button" type="button"><i
                                                class="bi bi-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                </div>
            </div>
    
    
            <div class="card mt-3">
                    <div class="row justify-content-center mt-3 m-0">
                    <div class="col-sm-8 col-md-6 col-lg-4 mt-4">
                        <h5 class="text-center">Commercial Driver's License</h5>
                        <div class="mt-3" style="border-bottom:2px solid black;"></div>
                    </div>
                    </div>
    
    
                    <div class="m-3">
                        <div class="row mt-3">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">Name - Exactly as it appears on your driver's license
                                    *</label>
                                <input type="text" class="form-control app-em-custom-input" name="name" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">Maiden or other name used</label>
                                <input type="text" class="form-control app-em-custom-input" name="other_name" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label for="" class="form-label">CDL Type *</label>
                                <div class="d-flex gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cdl_type" value="A" id="cdl_type_A" />
                                        <label class="form-check-label" for="cdl_type_A">A </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cdl_type" value="B" id="cdl_type_B" />
                                        <label class="form-check-label" for="cdl_type_B">B </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cdl_type" value="C" id="cdl_type_C" />
                                        <label class="form-check-label" for="cdl_type_C">C </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="cdl_type" value="None" id="cdl_type_None" />
                                        <label class="form-check-label" for="cdl_type_None">None </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="" class="form-label">Endorsements (check all that apply)</label>
                                <div class="d-flex gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="H" name="endorsement[]" id="endorsement_H" />
                                        <label class="form-check-label" for="endorsement_H">H</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="T" name="endorsement[]" id="endorsement_T" />
                                        <label class="form-check-label" for="endorsement_T">T</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="N" name="endorsement[]" id="endorsement_N" />
                                        <label class="form-check-label" for="endorsement_N">N</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="X" name="endorsement[]" id="endorsement_X" />
                                        <label class="form-check-label" for="endorsement_X">X</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="P" name="endorsement[]" id="endorsement_P" />
                                        <label class="form-check-label" for="endorsement_P">P</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="" class="form-label">License Expiration Date*</label>
                                <input type="date" class="form-control app-em-custom-input" name="license_expiration_date" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
        
                        <div class="row">
                            <!-- Air Brake Restriction -->
                        <div class="mb-3 col-md-4">
                            <label for="" class="form-label">Air Brake Restriction? *</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Air_Brake" value="1" id="Air_Brake_Yes" />
                                    <label class="form-check-label" for="Air_Brake_Yes">Yes </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Air_Brake" value="0" id="Air_Brake_No" />
                                    <label class="form-check-label" for="Air_Brake_No">No </label>
                                </div>
                            </div>
                        </div>

                        <!-- Automatic Transmission Restriction -->
                        <div class="mb-3 col-md-4">
                            <label for="" class="form-label">Automatic Transmission Restriction</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Automatic_Transmission" value="1" id="Automatic_Transmission_Yes" />
                                    <label class="form-check-label" for="Automatic_Transmission_Yes">Yes </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="Automatic_Transmission" value="0" id="Automatic_Transmission_No" />
                                    <label class="form-check-label" for="Automatic_Transmission_No">No </label>
                                </div>
                            </div>
                        </div>
                            <!-- Years of CDL Experience -->
                            <div class="mb-3 col-md-4">
                                <label for="" class="form-label">Years of CDL Experience</label>
                                <input type="number" class="form-control app-em-custom-input" name="years_of_cdl_exp" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
        
                        <div class="row mt-3">
                            <!-- Current Driver's License Number -->
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Current Driver *</label>
                                <input type="text" class="form-control app-em-custom-input" name="current_driver" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <!-- State/Province -->
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">State/Province *</label>
                                <select class="form-select form-select-md w-100 app-em-custom-input"
                                    aria-label=".form-select-sm example" name="state">
                                    <option selected>Select Issuing State</option>
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">California</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Florida">Florida</option>
                                    <option value="Hawaii">Hawaii</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky">Kentucky</option>
                                    <option value="Louisiana">Louisiana</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Minnesota">Minnesota </option>
                                    <option value="Mississippi">Mississippi</option>
                                    <option value="Missouri">Missouri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="New Hampshire">New Hampshire</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="New Mexico">New Mexico</option>
                                    <option value="New York">New York</option>
                                    <option value="North Carolina">North Carolina</option>
                                    <option value="North Dakota">North Dakota</option>
                                </select>
                            </div>
                           <!-- Current DOT Medical Card -->
                            <div class="mb-3 col-md-3">
                                <label for="" class="form-label">Current DOT Medical Card *</label>
                                <div class="d-flex gap-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="medicaldot" value="1" id="medicaldot_Yes" />
                                        <label class="form-check-label" for="medicaldot_Yes">Yes </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="medicaldot" value="0" id="medicaldot_No" />
                                        <label class="form-check-label" for="medicaldot_No">No </label>
                                    </div>
                                </div>
                            </div>
                            <!-- DOT Medical Card Expiration Date -->
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">DOT Medical Card Expiration Date</label>
                                <input type="date" class="form-control app-em-custom-input" name="cardexpdate" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <h5>Driving/Hauling Experience</h5>
        
                        <div class="row mt-3">
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">Equipment</label>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">Yrs exp</label>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">Equipment</label>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">Yrs exp</label>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">Equipment</label>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-2">
                                <label for="" class="form-label">Yrs exp</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-4">
                                <label for="" class="form-label">Dry van :</label>
                                <input type="text" class="form-control app-em-custom-input" name="dryvan" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-4">
                                <label for="" class="form-label">Doubles:</label>
                                <input type="text" class="form-control app-em-custom-input" name="doubles" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-4">
                                <label for="" class="form-label">Flatbed:</label>
                                <input type="text" class="form-control app-em-custom-input" name="flatbed" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-4">
                                <label for="" class="form-label">Tanker :</label>
                                <input type="text" class="form-control app-em-custom-input" name="tanker" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-4">
                                <label for="" class="form-label">Reefer:</label>
                                <input type="text" class="form-control app-em-custom-input" name="reefer" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-4">
                                <label for="" class="form-label">Switching (yard tractor)</label>
                                <input type="text" class="form-control app-em-custom-input" name="switching" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-4">
                                <label for="" class="form-label">Dump :</label>
                                <input type="text" class="form-control app-em-custom-input" name="dump" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-4">
                                <label for="" class="form-label">CDL B :</label>
                                <input type="text" class="form-control app-em-custom-input" name="cdl_B" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                    </div>
            </div>
    
            <div class="card mt-3">
                <div class="row justify-content-center mt-3 m-0">
                    <div class="col-sm-8 col-md-6 col-lg-4 mt-4">
                        <h5 class="text-center">Education</h5>
                        <div class="mt-3" style="border-bottom:2px solid black;"></div>
                    </div>
                </div>
    
    
                <div class="m-3">
                    <div class="row">
                        <b>High school</b>
                        <div class="mb-3 col-md-6 col-lg-4">
                            <label for="" class="form-label">Name and Location of School</label>
                            <input type="text" class="form-control app-em-custom-input" name="school_name_and_location_of_school" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-4">
                            <label for="" class="form-label">Years Attended</label>
                            <input type="text" class="form-control app-em-custom-input" name="school_years_attended" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-4">
                            <label for="" class="form-label">Diploma/Certification</label>
                            <input type="text" class="form-control app-em-custom-input" name="school_diploma_certificate" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                    </div>
                    <div class="row">
                        <b>College</b>
                        <div class="mb-3 col-md-6 col-lg-4">
                            <label for="" class="form-label">Name and Location of School</label>
                            <input type="text" class="form-control app-em-custom-input" name="college_name_and_location_of_school" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-4">
                            <label for="" class="form-label">Years Attended</label>
                            <input type="text" class="form-control app-em-custom-input" name="college_years_attended" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-4">
                            <label for="" class="form-label">Diploma/Certification</label>
                            <input type="text" class="form-control app-em-custom-input" name="college_diploma_certificate" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                    </div>
                    <div class="row">
                        <b>Trade or Business School</b>
                        <div class="mb-3 col-md-6 col-lg-4">
                            <label for="" class="form-label">Name and Location of School</label>
                            <input type="text" class="form-control app-em-custom-input" name="business_name_and_location_of_school" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-4">
                            <label for="" class="form-label">Years Attended</label>
                            <input type="text" class="form-control app-em-custom-input" name="business_years_attended" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-4">
                            <label for="" class="form-label">Diploma/Certification</label>
                            <input type="text" class="form-control app-em-custom-input" name="business_diploma_certificate" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-12 col-lg-12">
                            <label for="" class="form-label">List special courses or training that will help you as
                                a driver:</label>
                            <input type="text" class="form-control app-em-custom-input" name="special_courses" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-12 col-lg-12">
                            <label for="" class="form-label">List driving awards held and who presented
                                them:</label>
                            <input type="text" class="form-control app-em-custom-input" name="driving_awards" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                    </div>
                </div>
    
            </div>
    
            <div class="card mt-3">
                <div class="row justify-content-center mt-3 m-0">
                    <div class="col-sm-8 col-md-6 col-lg-4 mt-4">
                        <h5 class="text-center">Additional Licenses</h5>
                        <div class="mt-3" style="border-bottom:2px solid black;"></div>
                    </div>
                </div>
    
    
                <div class="m-3">
                    <p>List ALL additional licenses held in the past 3 years and ALL unexpired commercial motor
                        vehicle operator's licenses or permits. (Click on the Plus sign to add additional
                        Licenses.) DO NOT enter current license information in this section.</p>
                    <div class="row row-additional-licenses">
                        <div class="mb-3 col-md-6 col-lg-3">
                            <label for="" class="form-label">State/Province</label>
                            <select class="form-select form-select-md w-100 app-em-custom-input"
                            aria-label=".form-select-sm example" name="state">
                            <option selected>Select Issuing State</option>
                            <option value="Alabama">Alabama</option>
                            <option value="Alaska">Alaska</option>
                            <option value="Arizona">Arizona</option>
                            <option value="Arkansas">Arkansas</option>
                            <option value="California">California</option>
                            <option value="Colorado">Colorado</option>
                            <option value="Connecticut">Connecticut</option>
                            <option value="Delaware">Delaware</option>
                            <option value="Florida">Florida</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Florida">Florida</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Idaho">Idaho</option>
                            <option value="Illinois">Illinois</option>
                            <option value="Indiana">Indiana</option>
                            <option value="Iowa">Iowa</option>
                            <option value="Kansas">Kansas</option>
                            <option value="Kentucky">Kentucky</option>
                            <option value="Louisiana">Louisiana</option>
                            <option value="Maine">Maine</option>
                            <option value="Maryland">Maryland</option>
                            <option value="Massachusetts">Massachusetts</option>
                            <option value="Michigan">Michigan</option>
                            <option value="Minnesota">Minnesota </option>
                            <option value="Mississippi">Mississippi</option>
                            <option value="Missouri">Missouri</option>
                            <option value="Montana">Montana</option>
                            <option value="Nebraska">Nebraska</option>
                            <option value="Nevada">Nevada</option>
                            <option value="New Hampshire">New Hampshire</option>
                            <option value="New Jersey">New Jersey</option>
                            <option value="New Mexico">New Mexico</option>
                            <option value="New York">New York</option>
                            <option value="North Carolina">North Carolina</option>
                            <option value="North Dakota">North Dakota</option>
                        </select>
                        </div>
                        <div class="mb-3 col-md-6 col-lg-2">
                            <label for="" class="form-label">License No. </label>
                            <input type="number" class="form-control app-em-custom-input" name="licenses_no" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-2">
                            <label for="" class="form-label">Class</label>
                            <input type="number" class="form-control app-em-custom-input" name="class" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
    
                        <div class="mb-3 col-md-6 col-lg-2">
                            <label for="" class="form-label">Endorsement(s)</label>
                            <input type="number" class="form-control app-em-custom-input" name="endorsement_license" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-3">
                            <label for="" class="form-label">Expiration Date</label>
                            <div class="input-group gap-2">
                                <input type="date" class="form-control app-em-custom-input" name="exp_date" id=""
                                    aria-describedby="helpId" placeholder="" />
                                <button type="button" class="btn btn-outline-primary add-row-button-Additional-Licenses"><i
                                        class="bi bi-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="mb-3 col-md-6 col-lg-12">
                            <label for="" class="form-label">Has any license, permit, or privilege ever been suspended, revoked, or denied? *</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="any_licenses" id="yesRadio" value="Yes">
                                <label class="form-check-label" for="yesRadio"> Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="any_licenses" id="noRadio" value="No">
                                <label class="form-check-label" for="noRadio"> No</label>
                            </div>
                        </div>
                    </div>
    
                    <div class="additional-details d-none">
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(1) Date suspended or revoked:</label>
                                <input type="date" class="form-control app-em-custom-input" name="date_suspended_1" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(1) Details</label>
                                <input type="text" class="form-control app-em-custom-input" name="details_1" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(2) Date suspended or revoked:</label>
                                <input type="date" class="form-control app-em-custom-input" name="date_suspended_2" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(2) Details</label>
                                <input type="text" class="form-control app-em-custom-input" name="details_2" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(3) Date suspended or revoked:</label>
                                <input type="date" class="form-control app-em-custom-input" name="date_suspended_3" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(3) Details</label>
                                <input type="text" class="form-control app-em-custom-input" name="details_3" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="mb-3 col-md-6 col-lg-12">
                            <label for="" class="form-label">Have you ever been convicted for driving under the influence of drugs or alcohol? *</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="convicted_for_driving" id="yesConviction" value="Yes">
                                <label class="form-check-label" for="yesConviction"> Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="convicted_for_driving" id="noConviction" value="No">
                                <label class="form-check-label" for="noConviction"> No</label>
                            </div>
                        </div>
                    </div>
    
                    <div class="d-none conviction-details">
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(1) Date of Charge:</label>
                                <input type="date" class="form-control app-em-custom-input" name="date_of_charge_1" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(1) Details</label>
                                <input type="text" class="form-control app-em-custom-input" name="convicted_details_1" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(2) Date of Charge:</label>
                                <input type="date" class="form-control app-em-custom-input" name="date_of_charge_2" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(2) Details</label>
                                <input type="text" class="form-control app-em-custom-input" name="convicted_details_2" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(3) Date of Charge:</label>
                                <input type="date" class="form-control app-em-custom-input" name="date_of_charge_3" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">(3) Details</label>
                                <input type="text" class="form-control app-em-custom-input" name="convicted_details_3" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="mb-3 col-md-6 col-lg-12">
                            <label for="" class="form-label">Have you ever tested positive or refused to test on any
                                pre-employment drug and / or alcohol test administered by an employer to which you
                                applied for but did not obtain safety sensitive transportation work covered by DOT
                                agency drug and alcohol testing rules during the past 2 years? *</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="alcohol_testing_rules" id="yesDrugTest" value="Yes" />
                                <label class="form-check-label" for="yesDrugTest"> Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="alcohol_testing_rules" id="noDrugTest" value="Yes" />
                                <label class="form-check-label" for="noDrugTest"> No</label>
                            </div>
                        </div>
                    </div>
    
                    <div class="d-none drug-test-details">
                        <div class="mb-3 col-md-6 col-lg-12">
                            <label for="" class="form-label">If you answered yes to the previous question, can you
                                provide proof that you successfully completed the DOT return to duty requirements?
                                *</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="completed_duty_requirement" id="yesReturnToDuty" value="Yes" />
                                <label class="form-check-label" for="yesReturnToDuty"> Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="completed_duty_requirement" id="noReturnToDuty" value="Yes" />
                                <label class="form-check-label" for="noReturnToDuty"> No</label>
                            </div>
                        </div>
                    </div>
    
    
                    <div class="row mt-3">
                        <div class="mb-3 col-md-6 col-lg-12">
                            <label for="" class="form-label">Have you ever been convicted of a felony or
                                misdemeanor? *</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="convicted_of_felony" id="yesConviction-second" value="Yes" />
                                <label class="form-check-label" for="yesConviction"> Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="convicted_of_felony" id="noConviction-second" value="Yes" />
                                <label class="form-check-label" for="noConviction"> No</label>
                            </div>
                        </div>
                    </div>
    
                    <div class="d-none conviction-details-second">
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">1) Description of Offense:</label>
                                <input type="text" class="form-control app-em-custom-input" name="des_of_offence_1" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">2) Description of Offense:</label>
                                <input type="text" class="form-control app-em-custom-input" name="des_of_offence_2" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">Date of Conviction:</label>
                                <input type="date" class="form-control app-em-custom-input" name="date_of_convicted_1" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">Date of Conviction:</label>
                                <input type="date" class="form-control app-em-custom-input" name="date_of_convicted_2" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">County, City, State of Conviction:</label>
                                <input type="text" class="form-control app-em-custom-input" name="country_city_state_of_convicted_1" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">County, City, State of Conviction:</label>
                                <input type="text" class="form-control app-em-custom-input" name="country_city_state_of_convicted_2" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
    
            <div class="card mt-3">
                <div class="row justify-content-center mt-3 m-0">
                    <div class="col-sm-8 col-md-6 col-lg-4 mt-4">
                        <h5 class="text-center">Accident Review for Past 3 Years</h5>
                        <div class="mt-3" style="border-bottom:2px solid black;"></div>
                    </div>
                    <p class="mt-2 text-center">If no Accidents to report, you must check this box.</p>
                </div>
    
    
                <div class="m-3">
                    <div class="row">
                        <div class="mb-3 col-md-6 col-lg-12">
                            <label for="" class="form-label"></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="noAccidentsCheckbox" id="noAccidentsCheckbox" />
                                <label class="form-check-label" for="noAccidentsCheckbox"> No Accidents to report. *
                                </label>
                            </div>
                            <!-- Here I want when the user checks the checkbox the input fields will be disabled -->
                        </div>
                        <p>Click on the Plus sign to add additional Accidents.</p>
                        <hr>
                    </div>
                    <div class="row" id="accidentDetails">
                        <p>Last Accident</p>
                        <div class="mb-3 col-md-6 col-lg-2">
                            <label for="" class="form-label">Dates</label>
                            <input type="date" class="form-control app-em-custom-input" name="date" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-3">
                            <label for="" class="form-label">Description</label>
                            <input type="text" class="form-control app-em-custom-input" name="description" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-2">
                            <label for="" class="form-label">Fatalities</label>
                            <input type="number" class="form-control app-em-custom-input" name="fatalities" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-2">
                            <label for="" class="form-label">Injuries</label>
                            <input type="number" class="form-control app-em-custom-input" name="injuries" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-3">
                            <label for="" class="form-label">Vehicle Type</label>
                            <div class="input-group gap-2">
                                <select class="form-select form-select-md app-em-custom-input"
                                    aria-label=".form-select-sm example" name="vehicle_type">
                                    <option selected>Select</option>
                                    <option value="Personal">Personal</option>
                                    <option value="Commercial">Commercial</option>
                                </select>
                                <button type="button" class="btn btn-outline-primary add-row-button-No-Accidents"><i
                                        class="bi bi-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="card mt-3">
                <div class="row justify-content-center mt-3 m-0">
                    <div class="col-sm-8 col-md-6 col-lg-6 mt-4">
                        <h5 class="text-center">Traffic Convictions & Forfeitures for Past 3 Years</h5>
                        <div class="mt-3" style="border-bottom:2px solid black;"></div>
                    </div>
                    <p class="mt-2 text-center">If no Traffic Convictions or Forfeitures to report, you must check this
                        box.</p>
                </div>
    
    
                <div class="m-3">
                    <div class="row">
                        <div class="mb-3 col-md-6 col-lg-12">
                            <label for="noTrafficCheckbox" class="form-label"></label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="no_traffic_conviction" id="noTrafficCheckbox" />
                                <label class="form-check-label" for="noTrafficCheckbox"> No Traffic Convictions or
                                    Forfeitures to report. * </label>
                            </div>
                        </div>
                        <p>Click on the Plus sign to add additional Traffic Convictions or Forfeitures.</p>
                        <hr>
                    </div>
    
                    <div class="row row-No-Traffic-Convictions" id="trafficConvictionsRow">
                        <div class="mb-3 col-md-6 col-lg-3">
                            <label for="" class="form-label">Location</label>
                            <input type="text" class="form-control app-em-custom-input" name="location" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-2">
                            <label for="" class="form-label">Date</label>
                            <input type="date" class="form-control app-em-custom-input" name="date" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-4">
                            <label for="" class="form-label">Charges (other than parking violations)</label>
                            <input type="number" class="form-control app-em-custom-input" name="charges" id=""
                                aria-describedby="helpId" placeholder="" />
                        </div>
                        <div class="mb-3 col-md-6 col-lg-3">
                            <label for="" class="form-label">Penalty</label>
                            <div class="input-group gap-2">
                                <input type="number" class="form-control app-em-custom-input" name="penalty" id=""
                                    aria-describedby="helpId" placeholder="" />
                                <button type="button"
                                    class="btn btn-outline-primary add-row-button-No-Traffic-Convictions"><i
                                        class="bi bi-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
    
    
            <div class="card mt-3 employee-history-main-card">
                <div class="row justify-content-center mt-3 m-0">
                    <div class="col-sm-8 col-md-6 col-lg-4 mt-4">
                        <h5 class="text-center">Employment History</h5>
                        <div class="mt-3" style="border-bottom:2px solid black;"></div>
                    </div>
                </div>
    
    
                <div class="m-3">
                    <p>You must provide accurate dates of employment and phone numbers covering the last ten years
                        (per DOT regulation). We cannot hire you without verifying employment. If you need to list
                        additional employers, click "Add Another Employer" below.</p>
                    <div class="mb-3 col-md-6 col-lg-4">
                        <label for="" class="form-label fw-bold">Are you currently working? </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="currently_working" id="workingYes" value="Yes" />
                            <label class="form-check-label" for="workingYes"> Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="currently_working" id="workingNo" value="No" />
                            <label class="form-check-label" for="workingNo"> No</label>
                        </div>
                    </div>
    
                    <div class="card p-3 mb-3 d-none" id="activityCard">
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-12">
                                <label for="" class="form-label">Describe what you have been doing since your most
                                    recent job ended? *</label>
                                <input type="text" class="form-control app-em-custom-input" name="recent_job" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="card p-3">
                        <div class="row">
                            <h5 class="text-danger">EMPLOYER #1</h5>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Company *</label>
                                <input type="text" class="form-control app-em-custom-input" name="company" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Supervisor's Name</label>
                                <input type="text" class="form-control app-em-custom-input" name="supervisor" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Supervisor Phone</label>
                                <input type="number" class="form-control app-em-custom-input" name="supervisor_phone" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Salary</label>
                                <input type="number" class="form-control app-em-custom-input" name="salary" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Street Address</label>
                                <input type="text" class="form-control app-em-custom-input" name="street_address" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">City</label>
                                <input type="text" class="form-control app-em-custom-input" name="employer_city" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">State/Province *</label>
                                <select class="form-select form-select-md w-100 app-em-custom-input"
                                aria-label=".form-select-sm example" name="state">
                                <option selected>Select Issuing State</option>
                                <option value="Alabama">Alabama</option>
                                <option value="Alaska">Alaska</option>
                                <option value="Arizona">Arizona</option>
                                <option value="Arkansas">Arkansas</option>
                                <option value="California">California</option>
                                <option value="Colorado">Colorado</option>
                                <option value="Connecticut">Connecticut</option>
                                <option value="Delaware">Delaware</option>
                                <option value="Florida">Florida</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Florida">Florida</option>
                                <option value="Hawaii">Hawaii</option>
                                <option value="Idaho">Idaho</option>
                                <option value="Illinois">Illinois</option>
                                <option value="Indiana">Indiana</option>
                                <option value="Iowa">Iowa</option>
                                <option value="Kansas">Kansas</option>
                                <option value="Kentucky">Kentucky</option>
                                <option value="Louisiana">Louisiana</option>
                                <option value="Maine">Maine</option>
                                <option value="Maryland">Maryland</option>
                                <option value="Massachusetts">Massachusetts</option>
                                <option value="Michigan">Michigan</option>
                                <option value="Minnesota">Minnesota </option>
                                <option value="Mississippi">Mississippi</option>
                                <option value="Missouri">Missouri</option>
                                <option value="Montana">Montana</option>
                                <option value="Nebraska">Nebraska</option>
                                <option value="Nevada">Nevada</option>
                                <option value="New Hampshire">New Hampshire</option>
                                <option value="New Jersey">New Jersey</option>
                                <option value="New Mexico">New Mexico</option>
                                <option value="New York">New York</option>
                                <option value="North Carolina">North Carolina</option>
                                <option value="North Dakota">North Dakota</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Zip Code</label>
                                <input type="number" class="form-control app-em-custom-input" name="zip_code" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">Position Held *</label>
                                <input type="text" class="form-control app-em-custom-input" name="position_held" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">From Date (mm/yyyy) *</label>
                                <input type="date" class="form-control app-em-custom-input" name="from_date" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">To Date (mm/yyyy) *</label>
                                <input type="date" class="form-control app-em-custom-input" name="to_date" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-12">
                                <label for="" class="form-label">Reason For Leaving *</label>
                                <input type="text" class="form-control app-em-custom-input" name="reason_for_leaving" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <b>Driving/Hauling Experience With This Employer</b>
                            <div class="mb-3 col-md-12 col-lg-4">
                                <label for="" class="form-label">Hauling What?</label>
                                <input type="text" class="form-control app-em-custom-input" name="hauling_what" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-12 col-lg-4">
                                <label for="" class="form-label">Number of Months:</label>
                                <input type="number" class="form-control app-em-custom-input" name="number_of_month" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-12 col-lg-4">
                                <label for="" class="form-label">Equipment</label>
                                <input type="text" class="form-control app-em-custom-input" name="equipment	" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-12">
                                <label for="" class="form-label fw-bold">Were you subject to the FMCSRs while
                                    employed by this employer? * </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="FMCSRs" id="" value="Yes" />
                                    <label class="form-check-label" for=""> Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="FMCSRs" id="" value="No"/>
                                    <label class="form-check-label" for=""> No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-12">
                                <label for="" class="form-label fw-bold">Was your job designated as a safety
                                    sensitive function in any DOT regulated mode subject to alcohol and controlled
                                    substances testing requirements as required by 49 CFR part 40? *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="CFR" id="" value="Yes" />
                                    <label class="form-check-label" for=""> Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="CFR" id="" value="No" />
                                    <label class="form-check-label" for=""> No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card p-3 mt-3 d-none" id="employmentGapCard">
                        <div class="row">
                            <h5>Employment Gap</h5>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">Description of Gap (What were you doing during this
                                    gap?) *</label>
                                <input type="text" class="form-control app-em-custom-input" name="des_of_gap" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">From Date (mm/yyyy) *</label>
                                <input type="date" class="form-control app-em-custom-input" name="from_date_gap" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">To Date (mm/yyyy) *</label>
                                <div class="input-group gap-2">
                                    <input type="date" class="form-control app-em-custom-input" name="to_date_gap" id=""
                                        aria-describedby="helpId" placeholder="" />
                                    <button type="button" class="btn btn-outline-secondary minus-gap-button"><i
                                            class="bi bi-dash-lg"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="card p-3 mt-3 d-none" id="employerCard">
                        <div class="row">
                            <h5 class="text-danger">EMPLOYER #2</h5>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Company *</label>
                                <input type="text" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Supervisor's Name</label>
                                <input type="text" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Supervisor Phone</label>
                                <input type="number" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Salary</label>
                                <input type="number" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Street Address</label>
                                <input type="text" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">City</label>
                                <input type="text" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">State/Province *</label>
                                <select class="form-select form-select-md w-100 app-em-custom-input"
                                    aria-label=".form-select-sm example">
                                    <option selected>Select State</option>
                                    <option value="1">Alabama</option>
                                    <option value="2">Alaska</option>
                                    <option value="3">Arizona</option>
                                    <option value="3">Arkansas</option>
                                    <option value="3">California</option>
                                    <option value="3">Colorado</option>
                                    <option value="3">Connecticut</option>
                                    <option value="3">Delaware</option>
                                    <option value="3">Florida</option>
                                    <option value="3">Georgia</option>
                                    <option value="3">Florida</option>
                                    <option value="3">Hawaii</option>
                                    <option value="3">Idaho</option>
                                    <option value="3">Illinois</option>
                                    <option value="3">Indiana</option>
                                    <option value="3">Iowa</option>
                                    <option value="3">Kansas</option>
                                    <option value="3">Kentucky</option>
                                    <option value="3">Louisiana</option>
                                    <option value="3">Maine</option>
                                    <option value="3">Maryland</option>
                                    <option value="3">Massachusetts</option>
                                    <option value="3">Michigan</option>
                                    <option value="3">Minnesota </option>
                                    <option value="3">Mississippi</option>
                                    <option value="3">Missouri</option>
                                    <option value="3">Montana</option>
                                    <option value="3">Nebraska</option>
                                    <option value="3">Nevada</option>
                                    <option value="3">New Hampshire</option>
                                    <option value="3">New Jersey</option>
                                    <option value="3">New Mexico</option>
                                    <option value="3">New York</option>
                                    <option value="3">North Carolina</option>
                                    <option value="3">North Dakota</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">Zip Code</label>
                                <input type="number" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="" class="form-label">Position Held *</label>
                                <input type="text" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">From Date (mm/yyyy) *</label>
                                <input type="date" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-3">
                                <label for="" class="form-label">To Date (mm/yyyy) *</label>
                                <input type="date" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-12">
                                <label for="" class="form-label">Reason For Leaving *</label>
                                <input type="text" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <b>Driving/Hauling Experience With This Employer</b>
                            <div class="mb-3 col-md-12 col-lg-4">
                                <label for="" class="form-label">Hauling What?</label>
                                <input type="text" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-12 col-lg-4">
                                <label for="" class="form-label">Number of Months:</label>
                                <input type="number" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-12 col-lg-4">
                                <label for="" class="form-label">Equipment</label>
                                <input type="text" class="form-control app-em-custom-input" name="" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-12">
                                <label for="" class="form-label fw-bold">Were you subject to the FMCSRs while
                                    employed by this employer? * </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="" id="" />
                                    <label class="form-check-label" for=""> Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="" id="" />
                                    <label class="form-check-label" for=""> No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-12">
                                <label for="" class="form-label fw-bold">Was your job designated as a safety
                                    sensitive function in any DOT regulated mode subject to alcohol and controlled
                                    substances testing requirements as required by 49 CFR part 40? *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="" id="" />
                                    <label class="form-check-label" for=""> Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="" id="" />
                                    <label class="form-check-label" for=""> No</label>
                                </div>
                                <button type="button" class="btn btn-outline-secondary minus-gap-button mt-3"><i
                                        class="bi bi-dash-lg"></i></button>
    
                            </div>
                        </div>
                    </div>
    
    
                    <div class="text-center">
                        <button type="button" class="btn btn-primary mt-3 add-employee-button">Add Another
                            Employee</button>
                        <button type="button" class="btn btn-secondary btn-sm mt-3 float-end add-gap-button">Add
                            Employment Gap</button>
                    </div>
    
                </div>
    
            </div>
    
    
            <div class="card mt-3 p-3">
                <div class="row">
                    <div class="col-12 d-flex align-items-center">
                        <label for="" class="form-label me-3">May we contact current employer?</label>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="contact_current_emp" id="" />
                            <label class="form-check-label" for="">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contact_current_emp" id="" />
                            <label class="form-check-label" for="">No</label>
                        </div>
                    </div>
                </div>
            </div>
    
    
    
            <div class="card mt-3">
                <div class="row justify-content-center mt-3 m-0">
                    <div class="col-sm-8 col-md-6 col-lg-4 mt-4">
                        <h5 class="text-center">Authorizationy</h5>
                        <div class="mt-3" style="border-bottom:2px solid black;"></div>
                    </div>
                </div>
    
    
                <div class="m-3">
                    <div class="card p-3">
                        <p>By clicking "Send" below, I certify that the facts contained in this application are true
                            and complete to the best of my knowledge and understand that, if employed, any falsified
                            statements on this application shall be grounds for dismissal. Under the provisions of
                            the Fair Credit Reporting Act, the Americans With Disabilities Act, the Drivers Privacy
                            Protection Act and all other applicable federal, state, and local laws I authorize
                            investigation of all statements contained herein as well as authorize the references and
                            employers listed to give you any and all information concerning my previous employment
                            and any pertinent information they may have, personal or otherwise.</p>
                        <p>I hereby release and hold harmless any person, firm, or entity that discloses information
                            in accordance with this authorization, as well as my prospective employer, and its
                            agents, from any liability that may otherwise result from the request for, use of, or
                            disclosure of, any or all of the foregoing information. The above-mentioned
                            investigations may include, but are not limited to, information as to my character,
                            general reputation, work history, or lifestyle, discerned through employment and
                            education verifications; personal references; personal interviews; my personal credit
                            history based on reports from any credit bureau; my driving history, including any
                            traffic citations; a social security number verification; present and former addresses;
                            criminal and civil history records; or any other public record.</p>
                        <p>I understand that consumer reports which may contain public record information may be
                            requested, at the discretion of my prospective employer, which may include names, dates
                            of employment, reason for termination, work experience, traffic records, workers
                            compensation claims, etc. I have the right, under the provisions of the Fair Credit
                            Reporting Act and the Drivers Privacy Protection Act to request all such information
                            from the reporting agency, upon proper identification, and to request the nature and
                            substance of all information; and the receipt of any reports on me, which the reporting
                            agency has, or will, furnish for the two preceding years. I am also entitled to a copy
                            of my consumer rights under the Fair Credit Reporting Act. I also understand and agree
                            that no representative of the company has any authority to enter into any agreement for
                            employment for any specified period of time, or to make any agreement contrary to the
                            forgoing, unless it is in writing and signed by an authorized company representative.
                        </p>
    
                    </div>
    
    
    
    
                    <div class="card p-3 mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="application_investigation" id="applicationInvestigationCheckbox" />
                            <label class="form-check-label" for=""> I hereby agree and consent to completing this
                                application and background investigation process electronically. I understand that I
                                will be signing this application and all forms related to this application
                                electronically and that the electronic signatures appearing on these documents are
                                the same as my handwritten signature for the purposes of validity, enforceability
                                and admissibility.</label>
                        </div>
    
                        <p class="mx-4 mt-3">You have the right to withdraw your consent to sign electronically at
                            any time by calling the number listed at the top of this page. You can print and retain
                            a copy of any electronically signed documents by clicking on the PDF symbol in the top
                            right corner of that document.</p>
    
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="additional_info" id="additionalInfoCheckbox" />
                            <label class="form-check-label" for=""> I hereby agree and consent to receiving SMS text
                                messages requesting additional information and/or providing additional instructions
                                regarding the application process, onboarding and/or my employment, if
                                applicable.</label>
                        </div>
    
                        <p class="mx-4 mt-3">You have the right to withdraw your consent to receiving SMS text
                            messages at any time by texting “STOP” in reply to any message you receive or by calling
                            888-209-7427.</p>
    
                    </div>
    
    
                    <div class="card p-3 mt-3">
    
                        <p>As part of the application process we require that the following standard consent forms
                            be completed. You do not have to fill these forms out. They will be automatically
                            completed using the information you provided above. Please review each form in its
                            entirety. After reading each form check the box next to it indicating your intention to
                            sign and submit it along with your application.</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> * Inquiry to Previous Employer <a href=""
                                    data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                                    class="text-primary text-decoration-none">Review Form</a>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> * Previous Employer Inquiry For Driving History
                                & Safety Performance <a href=""
                                    data-bs-target="#PreviousEmployerInquiryForDrivingHistorySafetyPerformance"
                                    data-bs-toggle="modal" class="text-primary text-decoration-none">Review Form</a>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> * PSP Consent Form <a href=""
                                    data-bs-target="#PSPConsentForm" data-bs-toggle="modal"
                                    class="text-primary text-decoration-none">Review Form</a> </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> * Consent for Release of Info Form <a href=""
                                    data-bs-target="#ConsentforReleaseofInfoForm" data-bs-toggle="modal"
                                    class="text-primary text-decoration-none">Review Form</a>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> * Disclosure and Authorization Form <a href=""
                                    data-bs-target="#DisclosureandAuthorizationForm" data-bs-toggle="modal"
                                    class="text-primary text-decoration-none">Review Form</a>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> * Other Disclosure and Authorization Form <a href=""
                                    data-bs-target="#OtherDisclosureandAuthorizationForm" data-bs-toggle="modal"
                                    class="text-primary text-decoration-none">Review Form</a> </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> * Pre-Employment Controlled Substance Consent
                                Form <a href="" data-bs-target="#PreEmploymentControlledSubstanceConsentForm"
                                    data-bs-toggle="modal" class="text-primary text-decoration-none">Review Form</a>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> * Drivers Rights Pertaining to Release of
                                Information under Regulation 391.23 <a href=""
                                    data-bs-target="#DriversRightsPertainingtoReleaseofInformationunderRegulation"
                                    data-bs-toggle="modal" class="text-primary text-decoration-none">Review
                                    Form</a></label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="" />
                            <label class="form-check-label" for=""> * FMCSR Clearinghouse Limited Query Consent
                                <a href="" data-bs-target="#FMCSRClearinghouseLimitedQueryConsent" data-bs-toggle="modal"
                                    class="text-primary text-decoration-none">Review Form</a>
                            </label>
                        </div>
                    </div>
                    <div class="m-2">
                        <p>This certifies that this application was completed by me and that all entries and the
                            information herein are true and complete to the best of my knowledge.</p>
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-4">
                                <label for="" class="form-label">Print Name *</label>
                                <input type="text" class="form-control app-em-custom-input" name="print_name" id=""
                                    aria-describedby="helpId" placeholder="" />
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="PayrollManagerSignature" class="form-label fw-bold">Employee's
                                    Signature*</label>
                                <canvas id="signatureCanvas" class="card"
                                    style="height: 150px; width:100%; border: 1px solid #000;"></canvas>
                                <a onclick="clearSignature()" style="cursor:pointer;">Clear</a>
                                <!-- Add a clear button -->
                                <p class="fw-bold text-primary">Help's</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="m-2">
                        <p>Click the Save button if you would like to return and complete your application at a
                            later time.</p>
                        <p class="mt-3">Once you complete your application and are ready to submit it, please click
                            "Send". You will not be able to make any further edits once you click send.</p>
                        <div class="d-flex flex-row-reverse">
                            <div class="col-6 col-lg-3 col-sm-6"> <!-- Adjusted column classes for small screens -->
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-block" id="submitBtn"
                                        style="background-color: #6DB4F5; color:white;" disabled>Submit</button>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-sm-6"> <!-- Adjusted column classes for small screens -->
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-block" id="saveBtn"
                                        style="background-color: #6DB4F5; color:white;" disabled>Save and Continue
                                        later</button>
                                </div>
                            </div>
                        </form>
                        </div>
    
    
                    </div>
                </div>
    
            </div>
            </form>
    
    
    
    
        </div>
    </main>


    <footer>
        <!-- place footer here -->
    </footer>


    {{-- Modal for Inquiry to Previous Employer --}}

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-light text-center" id="exampleModalToggleLabel">INQUIRY TO PAST
                        EMPLOYER</h1>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="p-4 rounded" style="background-color: #0c89e23a;">
                        <div class="row">
                            <div class="col-md-6 border border-dark">
                                <p class="border-bottom border-dark p-3 w-100 text-center mb-0">From - Prospective
                                    Employer
                                    {{-- / Contractor --}}
                                </p>
                                <div class="des p-3">
                                    <p><b>Company:</b> ENZ Transport LLC</p>
                                    <p><b>Individual:</b></p>
                                    <p><b>Address:</b> 4730 W NORTHERN AVE #2140</p>
                                    <p><b>City:</b> GLENDALE <b>State:</b> Arizona <b>Zip:</b> 85301</p>
                                </div>
                            </div>
                            <div class="col-md-6 border border-dark">
                                <p class="border-bottom border-dark p-3 w-100 text-center mb-0">To - Previous Employer
                                </p>
                                <div class="des p-3">
                                    <div class="mb-3 row">
                                        <label for="toCompany" class="col-sm-3 col-form-label"><b>Company:</b></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control border-0" id="toCompany"
                                                style="border-bottom: 1px solid #000;">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="Individual"
                                            class="col-sm-3 col-form-label"><b>Individual:</b></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control border-0 border-bottom"
                                                id="Individual">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="Address" class="col-sm-3 col-form-label"><b>Address:</b></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control border-0 border-bottom" id="Address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="toCity"><b>City:</b></label>
                                            <input type="text" class="form-control border-0 border-bottom" id="toCity">
                                        </div>
                                        <div class="col">
                                            <label for="toState"><b>State:</b></label>
                                            <input type="text" class="form-control border-0 border-bottom" id="toState">
                                        </div>
                                        <div class="col">
                                            <label for="toZip"><b>Zip:</b></label>
                                            <input type="text" class="form-control border-0 border-bottom" id="toZip">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p>Dear Motor Carrier: <br>
                            The person listed below has made application to this company for employment or contracting
                            as a Driver and states that he/she was employed by you as ________ from ________ to ________
                            . If these dates are not correct please provide From ________ and To ________ The applicant
                            has waived any claim of liability against you company for information submitted in response
                            to the inquiry - See release form at bottom of this page

                        </p>
                    </div>
                    <hr>
                    <div>
                        <p>Name of Applicant: ________ <br>

                            Social Security Number of Applicant: ________ Date of Birth: ________ </p>
                    </div>
                    <hr>
                    <ol>
                        <li> Is the employment record with your company, including dates, correct as stated above?
                            ________</li>
                        <li> What kind of work did applicant do? ________</li>
                        <li>If employed as a driver, Specify type of equipment ________</li>
                        <li>If Tractor-Trailer please specify type:
                            <div class="row">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkboxDryVan" />
                                        <label class="form-check-label" for="checkboxDryVan">Dry Van</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkboxTanker" />
                                        <label class="form-check-label" for="checkboxTanker">Tanker</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkboxFlatbed" />
                                        <label class="form-check-label" for="checkboxFlatbed">Flatbed</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkboxReefer" />
                                        <label class="form-check-label" for="checkboxReefer">Reefer</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkboxDump" />
                                        <label class="form-check-label" for="checkboxDump">Dump</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkboxHopper" />
                                        <label class="form-check-label" for="checkboxHopper">Hopper</label>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>Total Miles Driven ________</li>
                        <li>Number of accidents ________ Number preventable ________</li>
                        <li> Was applicant's drivers license ever suspended or revoked? ________</li>
                        <li> Reason for leaving your employ : ________ Discharged _______ Laid off ______ Resigned</li>
                        <li>Was applicant's general conduct satisfactory? ______ Yes ______ No</li>
                        <li>Is applicant competent for the position applicant is seeking? ______ Yes ______ No</li>
                        <li>. Would you re-employ? ______ Yes ______ No</li>
                        <li>. Any remarks with regard to questions 1 - 11 above? ________</li>
                        <li>Signature of person supplying information ________ Date ________ </li>
                    </ol>
                    <div class="rounded p-3" style="background-color: #0c89e23a">
                        I hereby authorize you to release all information regarding my services, character and conduct
                        while in your employ, and you are released from any and all liablility which may result from
                        furnishing such information.
                        <div class="row mt-3">
                            <div class="col text-center">
                                <div>__________________________</div>
                                <p>Applicant's Signature</p>
                            </div>
                            <div class="col text-center">
                                <div>__________________________</div>
                                <p>Date</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                        <button class="btn btn-primary" type="button">submit</button>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Previous Employer Inquiry For Driving History & Safety Performance --}}

    <div class="modal fade" id="PreviousEmployerInquiryForDrivingHistorySafetyPerformance" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-light text-center" id="exampleModalToggleLabel">Previous Employer
                        Inquiry For Driving History & Safety Performance</h1>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p>
                        <b style="color: blue">Previous Employer:</b>
                    <div class="des p-0">
                        <p><b>Name:</b> ________________</p>
                        <p><b>Address:</b>________________</p>
                        <p><b>Phone:</b> ________________</p>
                        <p><b>Email:</b> ________________</p>
                        <p><b>Fax:</b> ________________</p>
                    </div>
                    </p>
                    <div class="rounded p-3 mb-3" style="background-color: #0c89e23a">
                        <p>
                            <b style="color: blue">Applicant</b> <br>
                            Applicant Name: ________________ Social Security: ________________ Date of Birth:
                            ________________
                        <p><b style="color: blue">Date of Employment:</b> From: ________ To ________</p>
                        </p>
                    </div>
                    <div class="p-1">
                        <div class="row gap-0">
                            <div class="col-md-6 rounded" style="background-color: #0c89e23a;">
                                <div class="des p-2">
                                    <p><b style="color: blue">Prospective Employer/Contractor:</b> <br>
                                        ENZ Transport LLC <br>
                                        4730 W NORTHERN AVE #2140 GLENDALE Arizona 85301 <br>
                                        Confidential Email: <br>
                                        Confidential Fax:</p>
                                </div>
                            </div>
                            <div class="col-md-6 rounded" style="background-color: #0c89e23a;">
                                <div class="des p-2">
                                    <p>
                                        <b style="color: blue">Prospective Employer's/Contractor's Agent</b> <br>
                                        ________________
                                        ________________
                                        ________________
                                        ________________ <br>
                                        Confidential Email:
                                        Confidential Fax:
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h5 style="color: blue">Section 1 (Applicant) Applicant Authorization</h5>
                        <p>I, ________________ hereby authorize ________________ to release and forward the information
                            requested in sections2 and 3 of this document concerning my Accident History within the
                            previous 3 years to ________________ (Prospective Employer/Contractor), and/or
                            ________________ (third-party investigation firm).</p>
                        <div class="row mt-3">
                            <div class="col text-center">
                                <div>__________________________</div>
                                <p>Applicant's Signature</p>
                            </div>
                            <div class="col text-center">
                                <div>__________________________</div>
                                <p>Date</p>
                            </div>
                        </div>
                        <p>This information is being requested in compliance with 49 CFR $$ 40.25 and 391.23</p>
                        <div class="rounded p-2 mb-3" style="background-color: #0c89e23a">
                            <p>
                                In compliance with 49 CFR $$40.25(g) and 391.23(h), release of this information must be
                                made in a form that ensures confidentiality, such as fax, email, or letter.
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h5 style="color: blue">Section 2 (Previous Employer) ACCIDENT HISTORY</h5>
                        <div>
                            <p>The applicant named above was employed by you. ________ Yes ________ No</p>
                            <p>From Date (mm/yyyy) ________</p>
                            <p>To Date (mm/yyyy) ________</p>
                            <p>Did he/she drive motor vehicle for you? ________ Yes ________ No</p>
                            <p>ACCIDENTS: Complete the following for any accidents included on your accident registrar
                                ($390.15(b)) that involved the applicant in the 3 years prior to the application date
                                shown above or check here if there is no accident register data for this driver.</p>



                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-primary">
                                        <tr>
                                            <th style="background-color: blue;color:white;">Date</th>
                                            <th style="background-color: blue;color:white;">Location</th>
                                            <th style="background-color: blue ;color:white;">Number of Injuries</th>
                                            <th style="background-color: blue;color:white;">Number of Fatalities</th>
                                            <th style="background-color: blue;color:white;">Hazmat Spill</th>
                                            <th style="background-color: blue;color:white;">Preventable</th>
                                            <th style="background-color: blue;color:white;">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <tr>
                                            <td scope="row" style="height: 50px;"></td>
                                            <td style="height: 50px;"></td>
                                            <td style="height: 50px;"></td>
                                            <td style="height: 50px;"></td>
                                            <td style="height: 50px;"></td>
                                            <td style="height: 50px;"></td>
                                        </tr>
                                        <tr>
                                            <td scope="row" style="height: 50px;"></td>
                                            <td style="height: 50px;"></td>
                                            <td style="height: 50px;"></td>
                                            <td style="height: 50px;"></td>
                                            <td style="height: 50px;"></td>
                                            <td style="height: 50px;"></td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                            <p>Please provide information concerning any other accidents involving the applicant that
                                were reported to government agencies or insurers or retained under internal company
                                policies:</p>
                            <p>
                                Signature ________ <br>
                                Title ________ <br>
                                Date ________
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <h5 style="color: blue">Completed By</h5>
                        <p>
                            Name: ________ <br>
                            Company: ________ <br>
                            Street: ________ <br>
                            City, State, Zip: ________ <br>
                            Phone: ________ <br>
                            Date: ________
                        </p>
                    </div>
                    {{-- <div class="modal-footer">
                        <button class="btn btn-primary" type="button">submit</button>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- PSP Consent Form --}}

    <div class="modal fade" id="PSPConsentForm" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-light text-center" id="exampleModalToggleLabel">PSP Consent</h1>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #0c89e23a">

                    <p>
                    <h5 class="text-center mb-4">PSP Consent Form</h5>
                    <h5 class="text-center">
                        The below disclosure and authorization language is for mandatory use by all account holders
                    </h5>
                    <h5 class="text-center">Important disclosure regarding background reports from the psp online
                        service</h5>
                    </p>
                    <p>In connection with your application for employment with , Prospective Employer, its employees,
                        agents or contractors may obtain one or more reports regarding your driving, and safety
                        inspection history from the Federal Motor Carrier Safety Administration (FMCSA).</p>
                    <p>When the application for employment is submitted in person, if the Prospective Employer uses any
                        information it obtains from FMCSA in a decision to not hire you or to make any other adverse
                        employment decision regarding you, the Prospective Employer will provide you with a copy of the
                        report upon which its decision was based and a written summary of your rights under the Fair
                        Credit Reporting Act before taking any final adverse action. If any final adverse action is
                        taken against you based upon your driving history or safety report, the Prospective Employer
                        will notify you that the action has been taken and that the action was based in part or in whole
                        on this report.</p>
                    <p>When the application for employment is submitted by mail, telephone, computer, or other similar
                        means, if the Prospective Employer uses any information it obtains from FMCSA in a decision to
                        not hire you or to make any other adverse employment decision regarding you, the Prospective
                        Employer must provide you within three business days of taking adverse action oral, written or
                        electronic notification: that adverse action has been taken based in whole or in part on
                        information obtained from FMCSA; the name, address, and the toll free telephone number of FMCSA;
                        that the FMCSA did not make the decision to take the adverse action and is unable to provide you
                        the specific reasons why the adverse action was taken; and that you may, upon providing proper
                        identification, request a free copy of the report and may dispute with the FMCSA the accuracy or
                        completeness of any information or report. If you request a copy of a driver record from the
                        Prospective Employer who procured the report, then, within 3 business days of receiving your
                        request, together with proper identification, the Prospective Employer must send or provide to
                        you a copy of your report and a summary of your rights under the Fair Credit Reporting Act</p>
                    <p>Neither the Prospective Employer nor the FMCSA contractor supplying the crash and safety
                        information has the capability to correct any safety data that appears to be incorrect. You may
                        challenge the accuracy of the data by submitting a request to https://dataqs.fmcsa.dot.gov. If
                        you challenge crash or inspection information reported by a State, FMCSA cannot change or
                        correct this data. Your request will be forwarded by the DataQs system to the appropriate State
                        for adjudication.</p>
                    <p>Any crash or inspection in which you were involved will display on your PSP report. Since the PSP
                        report does not report, or assign, or imply fault, it will include all Commercial Motor Vehicle
                        (CMV) crashes where you were a driver or co-driver and where those crashes were reported to
                        FMCSA, regardless of fault. Similarly, all inspections, with or without violations, appear on
                        the PSP report. State citations associated with Federal Motor Carrier Safety Regulations (FMCSR)
                        violations that have been adjudicated by a court of law will also appear, and remain, on a PSP
                        report.</p>
                    <p>The Prospective Employer cannot obtain background reports from FMCSA without your authorization.
                    </p>
                    <h5 class="text-center">Authorization</h5>
                    <hr>
                    <p>If you agree that the Prospective Employer may obtain such background reports, please read the
                        following and sign below:</p>
                    <p>I authorize to access the FMCSA Pre-employment Screening Program (PSP) system to seek information
                        regarding my commercial driving safety record and information regarding my safety inspection
                        history. I understand that I am authorizing the release of safety and performance information
                        including crash data from the previous five (5) years and inspection history from the previous
                        three (3) years. I understand and acknowledge that this release of information may assist the
                        Prospective Employer to make a determination regarding my suitability as an employee.</p>
                    <p>I further understand that neither the Prospective Employer nor the FMCSA contractor supplying the
                        crash and safety information has the capability to correct any safety data that appears to be
                        incorrect. I understand I may challenge the accuracy of the data by submitting a request to
                        https://dataqs.fmcsa.dot.gov. If I challenge crash or inspection information reported by a
                        State, FMCSA cannot change or correct this data. I understand my request will be forwarded by
                        the DataQs system to the appropriate State for adjudication.</p>
                    <p>I understand that any crash or inspection in which I was involved will display on my PSP report.
                        Since the PSP report does not report, or assign, or imply fault, I acknowledge it will include
                        all CMV crashes where I was a driver or co-driver and where those crashes were reported to
                        FMCSA, regardless of fault. Similarly, I understand all inspections, with or without violations,
                        will appear on my PSP report, and State citations associated with FMCSR violations that have
                        been adjudicated by a court of law will also appear, and remain, on my PSP report.</p>
                    <p>I have read the above Disclosure Regarding Background Reports provided to me by Prospective
                        Employer and I understand that if I sign this Disclosure and Authorization, Prospective Employer
                        may obtain a report of my crash and inspection history. I hereby authorize Prospective Employer
                        and its employees, authorized agents, and/or affiliates to obtain the information authorized
                        above.</p>
                    <p>Name ________ Signature: ________ Date: ________</p>
                    <p><b>NOTICE:</b> This form is made available to monthly account holders by NIC on behalf of the
                        U.S. Department of Transportation, Federal Motor Carrier Safety Administration (FMCSA). Account
                        holders are required by federal law to obtain an Applicant’s written or electronic consent prior
                        to accessing the Applicant’s PSP report. Further, account holders are required by FMCSA to use
                        the language contained in this Disclosure and Authorization form to obtain an Applicant’s
                        consent. The language must be used in whole, exactly as provided. Further, the language on this
                        form must exist as one stand-alone document. The language may NOT be included with other consent
                        forms or any other language.</p>
                    <p><b>NOTICE: </b>The prospective employment concept referenced in this form contemplates the
                        definition of “employee” contained at 49 C.F.R. 383.5</p>

                    {{-- <div class="modal-footer">
                        <button class="btn btn-primary" type="button">submit</button>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>


    {{-- Consent for Release of Info Form --}}

    <div class="modal fade" id="ConsentforReleaseofInfoForm" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-light text-center" id="exampleModalToggleLabel">Applicant
                        Authorization Consent For Release of Information</h1>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p>
                    <h5 class="text-center mb-4">Applicant Authorization Consent For Release of Information Form</h5>
                    </p>
                    <p> ________ requires, as a condition of employment , and/or continued employment, that all
                        applicants consent to and authorize a verification of the information submitted on their
                        application or resume. Please read this statement carefully</p>
                    <hr>
                    <p>I, ________ do hereby certify that the information provided by me for the purpose of employment
                        is true and complete to the best of my knowledge. I understand that if I am employed any false
                        statement will be considered as cause for possible dismissal</p>
                    <hr>
                    <p>The release and authorization acknowledge that <b>ENZ TRANSPORT LLC</b> located at <b>4730 W
                            NORTHERN AVE #2140 Glendale Arizona 85301</b> may now, or at any time while I am employed,
                        conduct a verification of my education, employment history, social security, credit history,
                        motor vehicle records, contact my personal references, and receive any criminal history record
                        information pertaining to me which may be in the files of any Federal, State, or Local criminal
                        justice agency in any state, and/or other information as deemed necessary to fulfill the job
                        requirements. Also, if an offer of employment has been made, I authorize review of my worker's
                        compensation claims history.</p>
                    <p>I authorize located at to disclose orally and in writing the results of the verification process
                        to the designated authorized representative of <b>ENZ TRANSPORT LLC.</b> The results will be
                        used to determine employment eligibility under this company's employment policies.</p>
                    <p>I have read and understand this release and consent, and I authorize the background
                        verifications. I authorize persons, schools, current and former employers, and other
                        organizations and agencies to provide agents of my prospective employer with all information
                        that may be requested, and I hereby release all of the persons and agencies providing such
                        information from any and all claims and damages connected with their release of any requested
                        information. I agree that any copy of this document is as valid as the original.</p>
                    <p>I do hereby agree to forever release and discharge <b>ENZ TRANSPORT LLC,</b> and their associates
                        to the full extent permitted by-law from any claims, damages, losses, liability, costs, and
                        expenses, or any other charge or complaint filed with any agency arising from the retrieving and
                        reporting of information. According to the Federal Fair Credit Reporting Act, I am entitled to
                        know if employment was denied as a result of information obtained by my prospective employer,
                        and to receive, upon written request, a disclosure of the pubic record information and of the
                        nature and scope of the investigative report.</p>

                    <h5 class="text-center">Please provide the following information as well as addresses for the last
                        seven (7) years.</h5>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <div>__________________________</div>
                            <p>Applicant's Name - Exactly as it appears on Driver's License</p>
                        </div>
                        <div class="col text-center">
                            <div>__________________________</div>
                            <p>Maiden or other Name(s) used</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <div>__________________________</div>
                            <p>Current Address (Street, City, State, Zip)</p>
                        </div>
                        <div class="col text-center">
                            <div>__________________________</div>
                            <p>How long at this address?</p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col text-center">
                            <div>__________________________</div>
                            <p>Previous Address (Street, City, State, Zip)</p>
                        </div>
                        <div class="col text-center">
                            <div>__________________________</div>
                            <p>How long at this address?</p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col text-center">
                            <div>____________</div>
                            <p>Social Security Number</p>
                        </div>
                        <div class="col text-center">
                            <div>_____________</div>
                            <p>Driver's License Number</p>
                        </div>
                        <div class="col text-center">
                            <div>______________</div>
                            <p>Date Of Birth</p>
                        </div>
                    </div>

                    <p>Authorization to contact current employer?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="" id="" />
                        <label class="form-check-label" for="">Yes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="" id="" />
                        <label class="form-check-label" for="">No</label>
                    </div>

                    <div class="row mb-3">
                        <div class="col text-end">
                            <div>____________</div>
                            <p>Signature</p>
                        </div>
                    </div>

                    {{-- <div class="modal-footer">
                        <button class="btn btn-primary" type="button">submit</button>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>


    {{-- Disclosure and Authorization Form --}}

    <div class="modal fade" id="DisclosureandAuthorizationForm" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-light text-center" id="exampleModalToggleLabel">Disclosure and
                        Authorization</h1>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p>
                    <h5 class="text-center mb-4">ENZ Transport LLC</h5>
                    <h5 class="text-center">
                        DISCLOSURE AND AUTHORIZATION REGARDING BACKGROUND INVESTIGATION FOR EMPLOYMENT PURPOSES
                    </h5>
                    <h5 class="text-center">DISCLOSURE</h5>
                    </p>
                    <p> ________ (the “Company”) may request from a consumer reporting agency and for employment related
                        purposes, a “consumer report(s)” (commonly known as “background reports”) containing background
                        information about you in connection with your employment, or application for employment, or
                        engagement for services (including independent contractor or volunteer assignments, as
                        applicable).
                        ________ will prepare or assemble the background reports for the Company. ________ is located
                        and can be contacted at ________ , ________ , ________ .</p>
                    <p>The background report(s) may contain information concerning your character, general reputation,
                        personal characteristics, mode of living, or credit standing. The types of background
                        information that may be obtained include, but are not limited to: criminal history; litigation
                        history; motor vehicle record and accident history; social security number verification; address
                        and alias history; credit history; verification of your education, employment and earnings
                        history; professional licensing, credential and certification checks; drug/alcohol testing
                        results and history; military service; and other information.</p>
                    <h5 class="text-center">AUTHORIZATION</h5>
                    <p>I hereby authorize Company to obtain the consumer reports described above about me.</p>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <div>____________</div>
                            <p>Driver Name:</p>
                        </div>
                        <div class="col text-center">
                            <div>_____________</div>
                            <p>Signature:</p>
                        </div>
                        <div class="col text-center">
                            <div>______________</div>
                            <p>Date</p>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                        <button class="btn btn-primary" type="button">submit</button>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>


    {{-- Other Disclosure and Authorization Form--}}

    <div class="modal fade" id="OtherDisclosureandAuthorizationForm" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-light text-center" id="exampleModalToggleLabel">Other Disclosure
                        and Authorization</h1>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p>
                    <h5 class="text-center mb-4">ENZ Transport LLC</h5>
                    <h5 class="text-center">
                        OTHER DISCLOSURES, ACKNOWLEDGMENTS & AUTHORIZATIONS REGARDING BACKGROUND INVESTIGATION FOR
                        EMPLOYMENT
                    </h5>
                    <h5 class="text-center">PURPOSES</h5>
                    </p>
                    <p><span style="text-decoration: underline">Investigative Consumer Report:</span> <br>
                        ENZ Transport LLC, (the “Company”) may request an investigative consumer report about you from ,
                        a consumer reporting agency, in connection with your employment, or application for employment,
                        or engagement for services (including independent contractor or volunteer assignments, as
                        applicable). An “investigative consumer report” is a background report that includes information
                        from personal interviews (except in California, where that term includes background reports with
                        or without information obtained from personal interviews), the most common form of which is
                        checking personal or professional references through personal interviews with sources such as
                        your former employers and associates, and other information sources. The investigative consumer
                        report may contain information concerning your character, general reputation, personal
                        characteristics, mode of living, or credit standing. You may request more information about the
                        nature and scope of an investigative consumer report, if any, by contacting the Company.</p>
                    <p><span style="text-decoration: underline">Ongoing Authorization:</span> <br>
                        If the Company hires you or contracts for your services, the Company may obtain additional
                        consumer reports and investigative consumer reports about you without asking for your
                        authorization again, throughout your employment or your contract period, as allowed by law.</p>
                    <p><span style="text-decoration: underline">Additional State Law Notices:</span> <br>
                        Please see the “Additional State Law Notices” for California, Massachusetts, Minnesota, New
                        Jersey, New York, and Washington that are provided below, as applicable.</p>
                    <h5 class="text-center">Acknowledgments & Authorization</h5>
                    <p>I acknowledge that I have received and carefully read and understand the separate “Disclosure and
                        Authorization Regarding Background Investigation for Employment Purposes”; and the separate
                        “Summary of Rights under the Fair Credit Reporting Act” that have been provided to me by the
                        Company. I also acknowledge receipt of and that I have carefully read and understand (as
                        applicable), the separate California Disclosure and Summary of Rights under California Civil
                        Code Section 1786.22; the separate New York Article 23-A; and the separate San Francisco Fair
                        Chance Ordinance Official Notice that have been provided to me.</p>
                    <p>By my signature below, I authorize the preparation of background reports about me, including
                        background reports that are “investigative consumer reports” by , and to the furnishing of such
                        background reports to the Company and its designated representatives and agents, for the purpose
                        of assisting the Company in making a determination as to my eligibility for employment or
                        engagement for services (including independent contractor or volunteer assignments, as
                        applicable), promotion, retention or for other lawful employment purposes. I understand that if
                        the Company hires me or contracts for my services, my consent will apply, and the Company may,
                        as allowed by law, obtain from (or from a consumer reporting agency other than ) additional
                        background reports pertaining to me, without asking for my authorization again, throughout my
                        employment or contract period.</p>
                    <p>I understand that if the Company obtains a credit report about me, then it will only do so where
                        such information is substantially related to the duties and responsibilities of the position in
                        which I am engaged or for which I am being evaluated.</p>
                    <p>I understand that information contained in my employment (or contractor or volunteer)
                        application, or otherwise disclosed by me before or during my employment (or contract or
                        volunteer assignment), if any, may be used for the purpose of obtaining and evaluating
                        background reports on me. I also understand that nothing herein shall be construed as an offer
                        of employment or contract for services.</p>
                    <p>I understand that the information included in the background reports may be obtained from private
                        and public record sources, including without limitation and as appropriate: government agencies
                        and courthouses; educational institutions; and employers. Accordingly, I hereby authorize all of
                        the following, to disclose information about me to the consumer reporting agency and its agents:
                        law enforcement and all other federal, state and local government agencies and courts;
                        educational institutions (public or private); testing agencies; information service bureaus;
                        credit bureaus and other consumer reporting agencies; other public and private record/data
                        repositories; motor vehicle records agencies; my employers; the military; and all other
                        individuals and sources with any information about or concerning me. The information that can be
                        disclosed to the consumer reporting agency and its agents includes, but is not limited to,
                        information concerning my: employment and earnings history; education, credit, motor vehicle and
                        accident history; drug/alcohol testing results and history; criminal history; litigation
                        history; military service; professional licenses, credentials and certifications; social
                        security number verification; address and alias history; and other informatio</p>
                    <p>By my signature below, I also promise that the personal information I provide with this form or
                        otherwise in connection with my background investigation is true, accurate and complete, and I
                        understand that dishonesty or material omission may disqualify me from consideration for
                        employment.</p>
                    <p>I agree that a copy of this document in faxed, photocopied or electronic (including
                        electronically signed) form will be valid like the signed original. I further acknowledge that I
                        have received additional state law notices that I have reviewed and read.</p>
                    <div class="border p-2 rounded border-dark">
                        <p>□ California, Minnesota or Oklahoma consumers: Please check this box if you would like to
                            receive (whenever you have such right under the applicable state law) a free copy of your
                            background report if one is obtained on you by the Company.</p>
                    </div>
                    <h5 class="text-center mt-3">ADDITIONAL STATE LAW NOTICE</h5>
                    <p>Please also note the following:</p>
                    <div class="border p-2 rounded border-dark">
                        <p><b>CALIFORNIA:</b> Pursuant to section 1786.22 of the California Civil Code, you may view the
                            file maintained on you by the consumer reporting agency during normal business hours. You
                            may also obtain a copy of this file, upon submitting proper identification and paying the
                            actual copying costs, by appearing at the consumer reporting agency’s offices in person,
                            during normal business hours and on reasonable notice, or by certified mail. You may also
                            receive a summary of the file by telephone, upon submitting proper identification and
                            written request. The consumer reporting agency has trained personnel available to explain
                            your file to you, including any coded information, and will provide a written explanation of
                            any coded information contained in your file. If you appear in person, you may be
                            accompanied by one other person, provided that person furnishes proper identification.
                            “Proper identification” includes documents such as a valid driver’s license, social security
                            account number, military identification card, and credit cards. If you cannot identify
                            yourself with such information, the consumer reporting agency may require additional
                            information concerning your employment and personal or family history to verify your
                            identity. <br>

                            will prepare the background report for the Company. is located and can be contacted at ,
                        </p>
                    </div>
                    <div class="border p-2 rounded border-dark mt-3">
                        <p><b>MASSACHUSETTS:</b> Upon request to the Company, you have the right to know whether the
                            Company requested an investigative consumer report about you and, upon written request to
                            the Company, you have the right to receive a copy of any such report. You also have the
                            right to ask the consumer reporting agency for a copy of any such repor</p>
                    </div>

                    <div class="border p-2 rounded border-dark mt-3">
                        <p><b>MINNESOTA:</b> You have the right in most circumstances to submit a written request to the
                            consumer reporting agency for a complete and accurate disclosure of the nature and scope of
                            any consumer report the Company ordered about you. The consumer reporting agency must
                            provide you with this disclosure within 5 days after (i) its receipt of your request or (ii)
                            the date the report was requested by the Company, whichever date is later.</p>
                    </div>

                    <div class="border p-2 rounded border-dark mt-3">
                        <p><b>NEW JERSEY:</b> You have the right to submit a request to the consumer reporting agency
                            for a copy of any investigative consumer report the Company requested about you.</p>
                    </div>

                    <div class="border p-2 rounded border-dark mt-3">
                        <p><b>NEW YORK:</b> You have the right, upon written request to the Company, to be informed of
                            whether or not the Company requested a consumer report or an investigative consumer report
                            about you. Shown above is the address and telephone number for , the consumer reporting
                            agency used by the Company. You may inspect and receive a copy of any such report by
                            contacting that consumer reporting agency</p>
                    </div>
                    <div class="border p-2 rounded border-dark mt-3">
                        <p><b>WASHINGTON STATE:</b> If the Company requests an investigative consumer report, you have
                            the right, upon written request made to the Company within a reasonable period of time after
                            your receipt of this disclosure, to receive from the Company a complete and accurate
                            disclosure of the nature and scope of the investigation requested by the Company. You are
                            entitled to this disclosure within 5 days after the date your request is received or the
                            Company ordered the report, whichever is later. You also have the right to request a written
                            summary of your rights and remedies under the Washington Fair Credit Reporting Act.</p>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <div>____________</div>
                            <p>Driver Name:</p>
                        </div>
                        <div class="col text-center">
                            <div>_____________</div>
                            <p>Signature:</p>
                        </div>
                        <div class="col text-center">
                            <div>______________</div>
                            <p>Date</p>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                        <button class="btn btn-primary" type="button">submit</button>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    {{-- Pre-Employment Controlled Substance Consent Form--}}

    <div class="modal fade" id="PreEmploymentControlledSubstanceConsentForm" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-light text-center" id="exampleModalToggleLabel">Pre-Employment
                        Controlled Substance Consent Form</h1>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p>
                    <h5 class="text-center">
                        Pre-Employment Controlled Substance Consent Form
                    </h5>
                    </p>

                    <p>I understand that as required by the Federal Motor Carrier Safety Regulations, Title 49 United
                        States Code of Federal Regulations, Section 391.103 and <b>ENZ Transport LLC</b> company policy,
                        all prospective drivers must submit to a controlled substances test.</p>
                    <p>I agree to provide a urine sample at a location and time designated by <b>ENZ Transport LLC,</b>
                        to be tested for controlled substances.</p>
                    <p>I also understand that if I test positive for use of controlled substances, I am not medically
                        qualified to operate a commercial motor vehicle or perform safety-sensitive functions.</p>
                    <p>I also understand that the results of the controlled substances test will be examined by a
                        Medical Review Officer who will report the test results to <b>ENZ Transport LLC</b> and/or its
                        screening agents, including , ,. My results will not be released to any additional parties
                        without my written authorization.</p>
                    <p>I agree to hold harmless <b>ENZ Transport LLC</b> and its agents from any liability with regard
                        to the collection and testing of my specimens, or the use of my controlled substance test
                        results in connection with my employment or consideration for employment.</p>

                    <div class="row mt-3">
                        <div class="col text-center">
                            <div>____________</div>
                            <p>Name:</p>
                        </div>
                        <div class="col text-center">
                            <div>_____________</div>
                            <p>Signature:</p>
                        </div>
                        <div class="col text-center">
                            <div>______________</div>
                            <p>Date</p>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                        <button class="btn btn-primary" type="button">submit</button>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>


    {{-- Drivers Rights Pertaining to Release of Information under Regulation--}}

    <div class="modal fade" id="DriversRightsPertainingtoReleaseofInformationunderRegulation" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-light text-center" id="exampleModalToggleLabel">Drivers Rights
                        Pertaining to Release of Information
                        under Regulation 391.23</h1>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p class="text-center">Motor carriers have the responsibility to make the following investigations
                        and
                        inquiries with respect to each driver employed, other than a person who has been a regularly
                        employed driver of the motor carrier for a continuous period which began before January 1, 1971.
                    </p>
                    <ul>
                        <li>(a)(1) An inquiry into the driver's driving record during the preceding three years to the
                            appropriate agency of every State in which the driver held a motor vehicle operator's
                            license or
                            permit during those preceding three years.</li>
                        <li>(a)(1) An inquiry into the driver's driving record during the preceding three years to the
                            appropriate agency of every State in which the driver held a motor vehicle operator's
                            license or
                            permit during those preceding three years.</li>
                        <li>(b) A copy of the driver record(s) obtained in response to the inquiry or inquiries to each
                            State driver record agency as required must be placed in the Driver Qualification File
                            within 30
                            days of the date the driver's employment begins and be retained in compliance with 391.51.
                        </li>
                        <li>(c) Replies to the investigations of the driver's safety performance history must be placed
                            in
                            the Driver Investigation History File within 30 days of the date the driver's employment
                            begins.
                            This goes into effect after October 29, 2004.</li>
                        <li>(d) Prospective motor carrier must investigate the information from all previous employers
                            of
                            the applicant that employed the driver to operate a CMV within the previous three years.
                            This
                            information must cover general driver identification and employment verification
                            information,
                            data elements as specified in 390.15 for accident involving the driver that occurred in the
                            three-year period preceding the date of the employment application, and accidents the
                            previous
                            employer may wish to provide.</li>
                        <li>(e) Prospective motor carriers must investigate the information from all previous DOT
                            regulated
                            employers that employed the driver within the previous three years from the date of the
                            employment application in a safety-sensitive function that required alcohol and controlled
                            substance testing specified by 49 CFR Part 40.</li>
                    </ul>
                    <hr>
                    <h5>Drivers have the following rights:</h5>
                    <ol>
                        <li>The right to review information provided by previous employers</li>
                        <li>The right to have errors in the information corrected by the previous employer and for that
                            employer to resend the corrected information to the prospective employer</li>
                        <li>The right to have a rebuttal statement attached to the alleged erroneous information, if the
                            previous employer and the driver cannot agree on the accuracy of the information.</li>
                    </ol>
                    <p>Drivers who wish to review previous employer-provided information must submit a written request
                        to
                        the prospective employer when applying of as late as 30 days after employed or being notified of
                        denial of employment. The prospective employer must provide this information to the applicant
                        within
                        five business days of receiving the written request. If the driver has not arranged to pick up
                        or
                        receive the requested records within 30 days pf the prospective employer making them available,
                        the
                        prospective motor carrier may consider the driver to have waived his/her request to review the
                        records.</p>
                    <p>Drivers wishing to request correction of erroneous information in records must send the request
                        for
                        the correction to the previous employer that provided the records. After October 29, 2004, the
                        previous employer must either correct and forward the information to the prospective motor
                        carrier
                        employer or notify the driver within 15 days of receiving the driver's request to correct the
                        data
                        that it does not agree to correct the data. Drivers wishing to rebut information in records must
                        send the rebuttal to the previous employer with instructions to include the rebuttal in the
                        driver's
                        Safety Performance History</p>
                    <hr>
                    <p>I acknowledge that I have read and understand the contents of this document.</p>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <div>________________</div>
                            <p>Signature:</p>
                        </div>
                        <div class="col text-center">
                            <div>________________</div>
                            <p>Date</p>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                        <button class="btn btn-primary" type="button">submit</button>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>




    {{-- Drivers Rights Pertaining to Release of Information under Regulation--}}

    <div class="modal fade" id="FMCSRClearinghouseLimitedQueryConsent" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h1 class="modal-title fs-5 text-light text-center" id="exampleModalToggleLabel">Consent for Limited
                        Queries of the FMCSA Drug and Alcohol Clearinghouse</h1>
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p>I hereby authorize the motor carrier listed below to conduct limited annual queries of the
                        FMCSA's Commercial Driver's License Drug and Alcohol Clearinghouse (Clearinghouse) to determine
                        whether drug or alcohol violation information about me exists in the Clearinghouse. This consent
                        is valid from the date shown below until my employment with the motor carrier listed below
                        ceases or until I am no longer subject to the drug and alcohol testing rules in 49 CFR part 382
                        for the motor carrier listed below.</p>
                    <p>I understand that if the limited query conducted by this motor carrier indicates that drug or
                        alcohol violation information about me exists in the Clearinghouse, I must grant electronic
                        consent within 24 hours, via the Clearinghouse website, for the motor carrier to obtain my full
                        Clearinghouse record.</p>
                    <p>I understand that if I refuse to provide consent to conduct annual limited queries of the
                        Clearinghouse, the motor carrier must prohibit me from performing safety-sensitive functions,
                        including driving a commercial motor vehicle, as required by FMCSA's drug and alcohol program
                        regulations.</p>
                    <p>I further understand that if I refuse to grant electronic consent for my full Clearinghouse
                        record within 24 hrs of a completed limited query which reveals that drug or alcohol violation
                        information about me exist, the motor carrier must remove me from performing safety-sensitive
                        functions.</p>


                    <div class="row mt-3">
                        <div class="col text-center">
                            <b>ENZ Transport LLC</b>
                            <div>________________</div>
                            <p>Company name:</p>
                        </div>
                        <div class="col text-center">
                            <div>________________</div>
                            <p>First Name</p>
                        </div>
                        <div class="col text-center">
                            <div>________________</div>
                            <p>Last Name: </p>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col text-center">
                            <div>________________</div>
                            <p>Signature:</p>
                        </div>
                        <div class="col text-center">
                            <div>________________</div>
                            <p>Date</p>
                        </div>
                    </div>
                    {{-- <div class="modal-footer">
                        <button class="btn btn-primary" type="button">submit</button>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>


    <script>



        // Get the canvas element and its context
        var canvas = document.getElementById('signatureCanvas');
        var ctx = canvas.getContext('2d');

        // Set initial drawing properties
        ctx.lineWidth = 2;
        ctx.lineCap = 'round';
        ctx.strokeStyle = '#000';

        // Variables to store mouse movements
        var drawing = false;
        var prevX = 0;
        var prevY = 0;

        // Function to start drawing when mouse is pressed down
        canvas.addEventListener('mousedown', function (e) {
            drawing = true;
            var rect = canvas.getBoundingClientRect();
            prevX = e.clientX - rect.left;
            prevY = e.clientY - rect.top;
        });

        // Function to continue drawing when mouse is moved
        canvas.addEventListener('mousemove', function (e) {
            if (drawing) {
                var rect = canvas.getBoundingClientRect();
                var currentX = e.clientX - rect.left;
                var currentY = e.clientY - rect.top;
                drawLine(prevX, prevY, currentX, currentY);
                prevX = currentX;
                prevY = currentY;
            }
        });


        // Function to stop drawing when mouse is released
        canvas.addEventListener('mouseup', function () {
            drawing = false;
        });

        // Function to draw a line
        function drawLine(x1, y1, x2, y2) {
            ctx.beginPath();
            ctx.moveTo(x1, y1);
            ctx.lineTo(x2, y2);
            ctx.stroke();
            ctx.closePath();
        }

        // Function to clear the canvas
        function clearSignature() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }




        document.addEventListener('DOMContentLoaded', function () {
            const addEmployeeButton = document.querySelector('.add-employee-button');
            const mainCard = document.querySelector('.employee-history-main-card'); // Selecting the main card
            const container = mainCard.parentElement; // Getting the container of the main card
            let employeeCount = 2;

            addEmployeeButton.addEventListener('click', function () {
                const newCard = createCard('EMPLOYER #' + employeeCount);
                // Insert the new card after the main card
                mainCard.insertAdjacentElement('afterend', newCard);
                employeeCount++; // increment employee count for the next card
            });

            container.addEventListener('click', function (event) {
                if (event.target.classList.contains('minus-card-button')) {
                    const cardToRemove = event.target.closest('.card');
                    cardToRemove.remove(); // Use remove() instead of setting style.display to 'none'
                }
            });

            function createCard(title) {
                const card = document.createElement('div');
                card.classList.add('card', 'p-3', 'mt-3');

                const cardContent = `
            <div class="row">
                <h5 class="text-danger">${title}</h5>
                                <div class="mb-3 col-md-6 col-lg-3">
                                    <label for="" class="form-label">Company *</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-3">
                                    <label for="" class="form-label">Supervisor's Name</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-3">
                                    <label for="" class="form-label">Supervisor Phone</label>
                                    <input type="number" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-3">
                                    <label for="" class="form-label">Salary</label>
                                    <input type="number" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-3">
                                    <label for="" class="form-label">Street Address</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-3">
                                    <label for="" class="form-label">City</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-3">
                                    <label for="" class="form-label">State/Province *</label>
                                    <select class="form-select form-select-md w-100 app-em-custom-input"
                                        aria-label=".form-select-sm example">
                                        <option selected>Select State</option>
                                        <option value="1">Alabama</option>
                                        <option value="2">Alaska</option>
                                        <option value="3">Arizona</option>
                                        <option value="3">Arkansas</option>
                                        <option value="3">California</option>
                                        <option value="3">Colorado</option>
                                        <option value="3">Connecticut</option>
                                        <option value="3">Delaware</option>
                                        <option value="3">Florida</option>
                                        <option value="3">Georgia</option>
                                        <option value="3">Florida</option>
                                        <option value="3">Hawaii</option>
                                        <option value="3">Idaho</option>
                                        <option value="3">Illinois</option>
                                        <option value="3">Indiana</option>
                                        <option value="3">Iowa</option>
                                        <option value="3">Kansas</option>
                                        <option value="3">Kentucky</option>
                                        <option value="3">Louisiana</option>
                                        <option value="3">Maine</option>
                                        <option value="3">Maryland</option>
                                        <option value="3">Massachusetts</option>
                                        <option value="3">Michigan</option>
                                        <option value="3">Minnesota </option>
                                        <option value="3">Mississippi</option>
                                        <option value="3">Missouri</option>
                                        <option value="3">Montana</option>
                                        <option value="3">Nebraska</option>
                                        <option value="3">Nevada</option>
                                        <option value="3">New Hampshire</option>
                                        <option value="3">New Jersey</option>
                                        <option value="3">New Mexico</option>
                                        <option value="3">New York</option>
                                        <option value="3">North Carolina</option>
                                        <option value="3">North Dakota</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6 col-lg-3">
                                    <label for="" class="form-label">Zip Code</label>
                                    <input type="number" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-6">
                                    <label for="" class="form-label">Position Held *</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-3">
                                    <label for="" class="form-label">From Date (mm/yyyy) *</label>
                                    <input type="date" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-6 col-lg-3">
                                    <label for="" class="form-label">To Date (mm/yyyy) *</label>
                                    <input type="date" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label for="" class="form-label">Reason For Leaving *</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <b>Driving/Hauling Experience With This Employer</b>
                                <div class="mb-3 col-md-12 col-lg-4">
                                    <label for="" class="form-label">Hauling What?</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-12 col-lg-4">
                                    <label for="" class="form-label">Number of Months:</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                                <div class="mb-3 col-md-12 col-lg-4">
                                    <label for="" class="form-label">Equipment</label>
                                    <input type="text" class="form-control app-em-custom-input" name="" id=""
                                        aria-describedby="helpId" placeholder="" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label for="" class="form-label fw-bold">Were you subject to the FMCSRs while
                                        employed by this employer? * </label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" id="" />
                                        <label class="form-check-label" for=""> Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" id="" />
                                        <label class="form-check-label" for=""> No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label for="" class="form-label fw-bold">Was your job designated as a safety
                                        sensitive function in any DOT regulated mode subject to alcohol and controlled
                                        substances testing requirements as required by 49 CFR part 40? *</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" id="" />
                                        <label class="form-check-label" for=""> Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="" id="" />
                                        <label class="form-check-label" for=""> No</label>
                                    </div>
                                    <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <button type="button" class="btn btn-outline-secondary minus-card-button"><i class="bi bi-dash-lg"></i></button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="
            </div>
        `;
                card.innerHTML = cardContent;

                return card;
            }
        });

        const emailInput = document.getElementById('emailAddress');
        const submitBtn = document.getElementById('submitBtn');
        const saveBtn = document.getElementById('saveBtn');

        emailInput.addEventListener('input', function () {
            const isEmailValid = emailInput.checkValidity(); // Check if the email is valid
            if (isEmailValid) {
                submitBtn.disabled = false;
                saveBtn.disabled = false;
            } else {
                submitBtn.disabled = true;
                saveBtn.disabled = true;
            }
        });





        document.addEventListener('DOMContentLoaded', function () {
            const mobileInput = document.getElementById('mobileNumber');
            const otherPhoneInput = document.getElementById('otherPhoneNumber');

            const formatPhoneNumber = (input) => {

                const cleaned = ('' + input).replace(/\D/g, '');

                const match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);
                if (match) {
                    return match[1] + '-' + match[2] + '-' + match[3];
                }
                return input;
            };

            mobileInput.addEventListener('input', function (event) {

                this.value = this.value.replace(/\D/g, '');

                this.value = formatPhoneNumber(this.value);
            });

            otherPhoneInput.addEventListener('input', function (event) {

                this.value = this.value.replace(/\D/g, '');

                this.value = formatPhoneNumber(this.value);
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            const ssnInput = document.getElementById('socialSecurityNumber');

            ssnInput.addEventListener('input', function (event) {
                const value = this.value.replace(/\D/g, '');
                const formattedValue = value.replace(/^(\d{3})(\d{2})(\d{4})$/, '$1-$2-$3');
                this.value = formattedValue;
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const addButton = document.querySelector('.add-row-button');

            addButton.addEventListener('click', function () {
                const addressRowContainer = document.getElementById('addressRowContainer');
                const addressRows = document.querySelectorAll('.address-row');

                const newRow = addressRows[0].cloneNode(true);

                const inputs = newRow.querySelectorAll('input');
                inputs.forEach(input => {
                    input.value = '';
                });

                if (addressRows.length > 0) {
                    const plusButton = newRow.querySelector('.add-row-button');
                    plusButton.remove();
                }

                // Create a minus icon button
                const minusButton = document.createElement('button');
                minusButton.className = 'btn btn-outline-danger remove-row-button';
                minusButton.type = 'button';
                minusButton.innerHTML = '<i class="bi bi-dash-lg"></i>';

                const inputGroup = newRow.querySelector('.input-group');
                inputGroup.appendChild(minusButton);

                minusButton.addEventListener('click', function () {
                    newRow.remove();
                });

                addressRowContainer.appendChild(newRow);
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            const addButtons = document.querySelectorAll('.add-row-button-Additional-Licenses');

            addButtons.forEach(addButton => {
                addButton.addEventListener('click', function () {
                    const licenseRowContainer = this.closest('.row-additional-licenses');
                    const licenseRow = licenseRowContainer.cloneNode(true);

                    licenseRow.querySelector('.add-row-button-Additional-Licenses').remove();

                    const minusButton = document.createElement('button');
                    minusButton.type = 'button';
                    minusButton.classList.add('btn', 'btn-outline-danger', 'remove-row-button');
                    minusButton.innerHTML = '<i class="bi bi-dash-lg"></i>';

                    const inputGroup = licenseRow.querySelector('.input-group');
                    inputGroup.appendChild(minusButton);

                    minusButton.addEventListener('click', function () {
                        licenseRow.remove();
                    });

                    licenseRowContainer.parentNode.insertBefore(licenseRow, licenseRowContainer.nextSibling);
                });
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            const yesRadio = document.getElementById('yesRadio');
            const additionalDetails = document.querySelector('.additional-details');

            yesRadio.addEventListener('change', function () {
                if (this.checked) {
                    additionalDetails.classList.remove('d-none');
                    additionalDetails.classList.add('d-block');
                }
            });

            const noRadio = document.getElementById('noRadio');
            noRadio.addEventListener('change', function () {
                if (this.checked) {
                    additionalDetails.classList.remove('d-block');
                    additionalDetails.classList.add('d-none');
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            const yesRadio = document.getElementById('yesConviction');
            const additionalDetails = document.querySelector('.conviction-details');

            yesRadio.addEventListener('change', function () {
                if (this.checked) {
                    additionalDetails.classList.remove('d-none');
                    additionalDetails.classList.add('d-block');
                }
            });

            const noRadio = document.getElementById('noConviction');
            noRadio.addEventListener('change', function () {
                if (this.checked) {
                    additionalDetails.classList.remove('d-block');
                    additionalDetails.classList.add('d-none');
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            const yesRadio = document.getElementById('yesDrugTest');
            const additionalDetails = document.querySelector('.drug-test-details');

            yesRadio.addEventListener('change', function () {
                if (this.checked) {
                    additionalDetails.classList.remove('d-none');
                    additionalDetails.classList.add('d-block');
                }
            });

            const noRadio = document.getElementById('noDrugTest');
            noRadio.addEventListener('change', function () {
                if (this.checked) {
                    additionalDetails.classList.remove('d-block');
                    additionalDetails.classList.add('d-none');
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            const yesRadio = document.getElementById('yesConviction-second');
            const convictionDetails = document.querySelector('.conviction-details-second');

            yesRadio.addEventListener('change', function () {
                if (this.checked) {
                    convictionDetails.classList.remove('d-none');
                    convictionDetails.classList.add('d-block');
                }
            });

            const noRadio = document.getElementById('noConviction-second');
            noRadio.addEventListener('change', function () {
                if (this.checked) {
                    convictionDetails.classList.remove('d-block');
                    convictionDetails.classList.add('d-none');
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            const addButton = document.querySelector('.add-row-button-No-Accidents');

            addButton.addEventListener('click', function () {
                const accidentRowContainer = this.closest('.row');
                const newAccidentRow = accidentRowContainer.cloneNode(true);

                newAccidentRow.querySelector('.add-row-button-No-Accidents').remove();

                const minusButton = document.createElement('button');
                minusButton.type = 'button';
                minusButton.classList.add('btn', 'btn-outline-danger', 'remove-row-button');
                minusButton.innerHTML = '<i class="bi bi-dash-lg"></i>';

                const inputGroup = newAccidentRow.querySelector('.input-group');
                inputGroup.appendChild(minusButton);

                minusButton.addEventListener('click', function () {
                    newAccidentRow.remove();
                });

                accidentRowContainer.parentNode.appendChild(newAccidentRow);
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const addButtons = document.querySelectorAll('.add-row-button-No-Traffic-Convictions');

            addButtons.forEach(addButton => {
                addButton.addEventListener('click', function () {
                    const rowContainer = this.closest('.row-No-Traffic-Convictions');
                    const newRow = rowContainer.cloneNode(true);

                    newRow.querySelector('.add-row-button-No-Traffic-Convictions').remove();

                    const minusButton = document.createElement('button');
                    minusButton.type = 'button';
                    minusButton.classList.add('btn', 'btn-outline-danger', 'remove-row-button');
                    minusButton.innerHTML = '<i class="bi bi-dash-lg"></i>';

                    newRow.querySelector('.input-group').appendChild(minusButton);

                    minusButton.addEventListener('click', function () {
                        newRow.remove();
                    });

                    rowContainer.parentNode.insertBefore(newRow, rowContainer.nextSibling);
                });
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            const noAccidentsCheckbox = document.getElementById('noAccidentsCheckbox');
            const accidentDetailsRow = document.getElementById('accidentDetails');

            noAccidentsCheckbox.addEventListener('change', function () {
                if (this.checked) {
                    accidentDetailsRow.style.display = 'none';
                } else {
                    accidentDetailsRow.style.display = 'block';
                    accidentDetailsRow.style.display = 'flex';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const noTrafficCheckbox = document.getElementById('noTrafficCheckbox');
            const trafficConvictionsRow = document.getElementById('trafficConvictionsRow');

            noTrafficCheckbox.addEventListener('change', function () {
                if (this.checked) {
                    trafficConvictionsRow.style.display = 'none';
                } else {
                    trafficConvictionsRow.style.display = 'block';
                    trafficConvictionsRow.style.display = 'flex';
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            const workingYesRadio = document.getElementById('workingYes');
            const workingNoRadio = document.getElementById('workingNo');
            const activityCard = document.getElementById('activityCard');

            workingYesRadio.addEventListener('change', function () {
                if (this.checked) {
                    activityCard.classList.add('d-none');
                }
            });

            workingNoRadio.addEventListener('change', function () {
                if (this.checked) {
                    activityCard.classList.remove('d-none');
                }
            });
        });


        document.addEventListener('DOMContentLoaded', function () {
            const employmentGapCard = document.getElementById('employmentGapCard');
            const addGapButton = document.querySelector('.add-gap-button');
            const minusGapButton = employmentGapCard.querySelector('.minus-gap-button');

            addGapButton.addEventListener('click', function () {
                employmentGapCard.classList.remove('d-none');
            });

            minusGapButton.addEventListener('click', function () {
                employmentGapCard.classList.add('d-none');
            });
        });

    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>