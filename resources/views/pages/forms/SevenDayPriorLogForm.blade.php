<!doctype html>
<html lang="en">

<head>
    <title>SEVEN-DAY PRIOR LOG FORM</title>
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
                <h4 class="text-light p-3">SEVEN-DAY PRIOR LOG FORM</h4>
            </div>
            <p class="mt-3">Motor  carriers,  when  using  a  driver  for  the  first  time  or  intermittently,  must  obtain from  the  driver  a  signed  statement  giving  the  driver’s  total  time  on-duty  during  the  immediately preceding 7 days and the time at which the driver was last relieved from duty prior to beginning work for  the  carrier,  as  required  by Section  395.8(j)(2)  of  the  Federal  Motor  Carrier  Safety  Regulations.</p>
            <p>NOTE: Hours for any work during the preceding 7 days, including any compensated work for a non-motor carrier, must be recorded on this form.</p>
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
                        <label for="completeaddress" class="form-label">Phone Number</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div
                        class="table-responsive"
                    >
                        <table
                            class="table table-bordered align-middle"
                        >
                            <thead class="">
                                <tr>
                                    <th style="background-color: gray; color:white;"></th>
                                    <th style="background-color: gray; color:white;">Date & Day of Week</th>
                                    <th style="background-color: gray; color:white;">Hours Worked</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <tr
                                    class=""
                                >
                                    <td><input type="text" value="Day 1 (Yesterday)"></td>
                                    <td><input type="text"></td>
                                    <td><input type="text"></td>
                                </tr>
                                <tr
                                class=""
                            >
                                <td><input type="text" value="Day 2"></td>
                                <td><input type="text"></td>
                                <td><input type="text"></td>
                            </tr>
                            <tr
                            class=""
                        >
                            <td><input type="text" value="Day 3"></td>
                            <td><input type="text"></td>
                            <td><input type="text"></td>
                        </tr>
                        <tr
                        class=""
                    >
                        <td><input type="text" value="Day 4"></td>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    <tr
                    class=""
                >
                    <td><input type="text" value="Day 5"></td>
                    <td><input type="text"></td>
                    <td><input type="text"></td>
                </tr>
                <tr
                class=""
            >
                <td><input type="text" value="Day 6"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
            </tr>
            <tr
            class=""
        >
            <td><input type="text" value="Day 7"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
        </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label">Total Hours Worked Above? *</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label">I was relieved from duty at (Time): *</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>

                    <div class="row">
                        <div class="mb-3 col-12 col-lg-12">
                            <label for="city" class="form-label">AM or PM?</label>
                            <div class="card p-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> 
                                    AM </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="typeofwork" id="" />
                                <label class="form-check-label" for=""> PM </label>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="completeaddress" class="form-label">Date Relieved From Duty:</label>
                        <input type="text" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    
                    <p>I certify that the total hours on-duty for the seven (7) days listed above are true and correct.</p>
                    <p class="">Signature *</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">

                            </div>
                            <p class="fw-bold text-primary">Help's</p>
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