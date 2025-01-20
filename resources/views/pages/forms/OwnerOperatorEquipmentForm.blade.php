<!doctype html>
<html lang="en">

<head>
    <title>Owner Operator Equipment Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav
            class="navbar navbar-expand-sm navbar-light bg-light"
        >
            <div class="container">
                <img src="{{asset('./assets/img/Logo.png')}}" class="" style="width: 5rem"  alt="" srcset="">
                <div class="text-center">
                <a class="navbar-brand mx-5" href="#">Company Name</a>
            </div>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            {{-- <a class="nav-link active" href="#" aria-current="page"
                                >Home
                                <span class="visually-hidden">(current)</span></a
                            > --}}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
   <main class="container-fluid" style="width: 80%;">
        <div class="card mx-sm-2 mx-md-5 my-sm-2 my-md-5 p-3" style="background-color: #FCFCFC"> 
            <div class="text-center p-3" style="background-color: #6DB4F5;">
                <h4 class="text-light p-2">Owner Operator Equipment Form</h4>
            </div>
            <hr>
            <form class="d-flex">
                <div class="row col-12">
                    <div class="mb-3 col-lg-6 col-12">
                        <label for="firstname" class="form-label fw-bold">First Name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-lg-6 col-12">
                        <label for="lastname" class="form-label fw-bold">Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Complete  Address</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Phone Number</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label fw-bold">Email Address</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p>Please provide a list of equipment you own.</p>
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-bordered  align-middle"
                        >
                            <thead class="">
                                <tr>
                                    <th style="background-color: skyblue;color:white;">Equipment</th>
                                    <th style="background-color: skyblue;color:white;">Make</th>
                                    <th style="background-color: skyblue;color:white;">Model</th>
                                    <th style="background-color: skyblue;color:white;">Year</th>
                                    <th style="background-color: skyblue;color:white;">VIN#</th>
                                    <th style="background-color: skyblue;color:white;">Mileage</th>
                                    <th style="background-color: skyblue;color:white;">Plate#</th>
                                    <th style="background-color: skyblue;color:white;">Length</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr
                                    class=""
                                >
                                    <td scope="row"><input type="text" class="w-100" value="Tractor"></td>
                                    <td><input type="text" class="w-100" value=""></td>
                                    <td><input type="text" class="w-100" value=""></td>
                                    <td><input type="text" class="w-100" value=""></td>
                                    <td><input type="text" class="w-100" value=""></td>
                                    <td><input type="text" class="w-100" value=""></td>
                                    <td><input type="text" class="w-100" value=""></td>
                                    <td><input type="text" class="w-100" value=""></td>
                                </tr>
                                <tr
                                class=""
                            >
                                <td scope="row"><input type="text" class="w-100" value="Trailer"></td>
                                <td><input type="text" class="w-100" value=""></td>
                                <td><input type="text" class="w-100" value=""></td>
                                <td><input type="text" class="w-100" value=""></td>
                                <td><input type="text" class="w-100" value=""></td>
                                <td><input type="text" class="w-100" value=""></td>
                                <td><input type="text" class="w-100" value=""></td>
                                <td><input type="text" class="w-100" value=""></td>
                            </tr>
                            <tr
                            class=""
                        >
                            <td scope="row"><input type="text" class="w-100" value="Straight Truck"></td>
                            <td><input type="text" class="w-100" value=""></td>
                            <td><input type="text" class="w-100" value=""></td>
                            <td><input type="text" class="w-100" value=""></td>
                            <td><input type="text" class="w-100" value=""></td>
                            <td><input type="text" class="w-100" value=""></td>
                            <td><input type="text" class="w-100" value=""></td>
                            <td><input type="text" class="w-100" value=""></td>
                        </tr>
                        <tr
                        class=""
                    >
                        <td scope="row"><input type="text" class="w-100" value="Cargo Van"></td>
                        <td><input type="text" class="w-100" value=""></td>
                        <td><input type="text" class="w-100" value=""></td>
                        <td><input type="text" class="w-100" value=""></td>
                        <td><input type="text" class="w-100" value=""></td>
                        <td><input type="text" class="w-100" value=""></td>
                        <td><input type="text" class="w-100" value=""></td>
                        <td><input type="text" class="w-100" value=""></td>
                    </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <p class="fw-bold">Signature*</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">
    
                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                                    
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="state" class="form-label fw-bold">Date</label>
                            <input type="date" name="state" id="state" class="form-control" placeholder=""
                                aria-describedby="helpId" />
                        </div>
                    </div>
                    <a name="" id="" class="btn btn-danger float-end col-2 m-2" href="#" role="button">SUBMIT</a>

                </div>
            </form>




        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>