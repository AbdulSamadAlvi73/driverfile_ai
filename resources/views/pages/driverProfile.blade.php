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
    <header>
       
    </header>
    <main>

        <section class="main-section">
            <div class="container bg-primary p-0">
                <div class="noor-navbar">
                    <div class="noor-logo">
                        <img src="{{asset('assets/img/Logo.png')}}" alt="">
                    </div>
                    <div class="noor-btns">
                        <a href="{{route('applicants')}}" class="text-decoration-none text-dark"><button class="btn">Home</button></a>
                        <button class="btn">Logout</button>
                    </div>
                </div>
    
                <div class="noor-infobox">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="noor-infobg">
                                <div class="info-head">
                                    <h5 class="px-5">Information</h5>
                                </div>
                                <div class="row noorinfo-form pt-2">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="info-text">
                                            <h6>Name:</h6>
                                            <p>{{ $driver->firstname }} {{ $driver->lastname }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="info-text">
                                            <h6>Date Of Birth:</h6>
                                            <p>{{ $driver->date_of_birth }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="info-text">
                                            <h6>Phone Num:</h6>
                                            <p>{{ $driver->mobile_no }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="info-text">
                                            <h6>Date Of Apply:</h6>
                                            <p>{{ $driver->date_applied }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="info-text">
                                            <h6>Email Address:</h6>
                                            <p>{{ $driver->email_address }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="info-text">
                                            <h6>Status:</h6>
                                            <p>{{ $driver->status }}</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="noor-info-btns">
                        <div class="noor-btn1">
                            <button class="cl-btn">Clearinghouse</button>
                        </div>
                        <div class="noor-btn2">
                            <button class="tl-btn">Text Message To Dealer</button>
                            <button class="tl-btn">Email All Forms</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
    
                            <div class="dash-content">
                                <div class="main-content-box">
                                    <ul class="nav nav-tabs gap-md-2 gap-2 border-0" id="myTab" role="tablist">
    
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active px-5" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home-tab-pane" type="button" role="tab"
                                                aria-controls="home-tab-pane" aria-selected="true">Forms</button>
                                        </li>
    
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-5" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                                aria-controls="profile-tab-pane" aria-selected="false">Sent Forms</button>
                                        </li>
    
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link px-5" id="contact-tab" data-bs-toggle="tab"
                                                data-bs-target="#contact-tab-pane" type="button" role="tab"
                                                aria-controls="contact-tab-pane" aria-selected="false">Other Forms</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content border-0" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="noortab-box">
                                                <h4>click document name to view. click pencil icon to edit fillable forms(if
                                                    any)</h4>
                                                <div class="noor-tab-btns">
                                                    <div class="noor-btn1">
                                                        <button class="cl-btn">Clearinghouse</button>
                                                        <button class="cl-btn">Clearinghouse</button>
                                                        <button class="cl-btn">Clearinghouse</button>
                                                    </div>
                                                    <div class="noor-btn2">
                                                        <button class="tl-btn">Text Message To Dealer</button>
                                                        <button class="tl-btn">Email All Forms</button>
                                                    </div>
                                                </div>
                                                <div class="noor-tab-text">
                                                    <div class="row noortab-scroll">
                                                        <div class="col-md-12 col-sm-12">
                                                            <p>Driver Application</p>
                                                        </div>
                                                        <div class="text-center pb-3">
                                                            <button class="vl-btn">View All</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                            aria-labelledby="profile-tab" tabindex="0">
                                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="noortab-box">
                                                <h4>click document name to view. click pencil icon to edit fillable forms(if
                                                    any)</h4>
                                                <div class="noor-tab-btns">
                                                    <div class="noor-btn1">
                                                        <button class="cl-btn">Clearinghouse</button>
                                                        <button class="cl-btn">Clearinghouse</button>
                                                        <button class="cl-btn">Clearinghouse</button>
                                                    </div>
                                                    <div class="noor-btn2">
                                                        <button class="tl-btn">Text Message To Dealer</button>
                                                        <button class="tl-btn">Email All Forms</button>
                                                    </div>
                                                </div>
                                                <div class="noor-tab-text">
                                                    <div class="row noortab-scroll">
                                                        @foreach($driverForms as $driverform)
                                                        <div class="col-md-12 col-sm-12">
                                                            <p>{{$driverform->form_name}}</p>
                                                        </div>
                                                    @endforeach
                                                        <div class="text-center pb-3">
                                                            <button class="vl-btn">View All</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                            aria-labelledby="contact-tab" tabindex="0">
                                            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                            aria-labelledby="home-tab" tabindex="0">
                                            <div class="noortab-box">
                                                <h4>click document name to view. click pencil icon to edit fillable forms(if
                                                    any)</h4>
                                                <div class="noor-tab-btns">
                                                    <div class="noor-btn1">
                                                        <button class="cl-btn">Clearinghouse</button>
                                                        <button class="cl-btn">Clearinghouse</button>
                                                        <button class="cl-btn">Clearinghouse</button>
                                                    </div>
                                                    <div class="noor-btn2">
                                                        <button class="tl-btn">Text Message To Dealer</button>
                                                        <button class="tl-btn">Email All Forms</button>
                                                    </div>
                                                </div>
                                                <div class="noor-tab-text">
                                                    <div class="row noortab-scroll">
                                                    @foreach($companyForms as $forms)
                                                        <div class="col-md-12 col-sm-12">
                                                            <p>{{$forms->form_name}}</p>
                                                        </div>
                                                    @endforeach
                                                        <div class="text-center pb-3">
                                                            <button class="vl-btn">View All</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
    
    </main>
    <footer></footer>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>