<!doctype html>
<html lang="en">

<head>
    <title>VIOLATION AND REVIEW RECORD</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
    @include('pages.forms.partials.header')
        
    </header>
   <main class="container-fluid" style="width: 80%;">
        <div class="card mx-sm-2 mx-md-5 my-sm-2 my-md-5 p-3" style="background-color: #FCFCFC"> 
            <div class="text-center p-2" style="background-color: #6DB4F5;">
                <h4 class="text-light p-3">VIOLATION AND REVIEW RECORD</h4>
            </div>
             <form class="d-flex">
                <div class="row col-12 mt-2">
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label">First Name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label">Last Name</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label">SSN</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label">License Number</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label">Issuing State</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label">CDL Expiration Date</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <h5 class="text-center">1. CERTIFICATION OF VIOLATIONS</h5>
                    <p>I certify that the following is a true and complete list of traffic violations (other than parking violations) for which I have been convicted or forfeited bond or collateral during the past twelve months.</p>
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-bordered align-middle"
                        >
                            <thead class="">
                                <tr>
                                    <th style="background-color: gray; color:white;">Date of Offense</th>
                                    <th style="background-color: gray; color:white;">Offense</th>
                                    <th style="background-color: gray; color:white;">Location</th>
                                    <th style="background-color: gray; color:white;">Vehicle Operated</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr
                                    class=""
                                >
                                    <td><input type="text" value=""></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                </tr>
                                <tr
                                class=""
                            >
                                <td><input type="text" value=""></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr
                            class=""
                        >
                            <td><input type="text" value=""></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tr>
                        <tr
                        class=""
                    >
                        <td><input type="text" value=""></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>

                    </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>If no violations are listed above, I certify that I have not been convicted or forfeited bond or collateral on account of any violation required to be listed during the past twelve months.</p>
                    <p class="">Signature *</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">

                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                    
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label">Date</label>
                        <input type="date" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <p class="text-center">DO NOT WRITE BELOW THIS LINE</p>
                    <hr>
                    <h5 class="text-center">2. REVIEW AND EVALUATION OF DRIVERS RECORD</h5>
                    <p>In accordance with Section 391.25 - Motor Carrier Safety Regulations, all information pertinent to the above driver's safety of operations, including the list of violations furnished be him/her in accordance with Section 391.27 has been reviewed for the past twelve months.</p>
                    <p>Action taken:</p>
                    <hr>

                    <p>Reviewed by: <br> <br>
                        __________________
                    </p>
                    <p>Title: <br> <br>
                        __________________
                    </p>
                    <p>Date: <br> <br>
                        __________________
                    </p>
                    
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