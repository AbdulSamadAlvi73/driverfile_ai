<!doctype html>
<html lang="en">

<head>
    <title>WORKER'S COMPENSATION FORM</title>
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
                <h4 class="text-light p-3">SOLE PROPRIETOR/INDEPENDENT CONTRACTOR</h4>
            </div>
            <p class="mt-4"> I AM A SOLE PROPRIETOR AND I AM DOING BUSINESS AS  <input type="text" name="" id=""> <br>

                I AM PERFORMING WORK AS AN INDEPENDENT CONTRACTOR FOR ENZ TRANSPORT, LLC <br>
                
                I AM NOT THE EMPLOYEE OF ENZ TRANSPORT, LLC. <br>
                
                FOR WORKERS’ COMPENSATION PURPOSES, AND THEREFORE, I AM <br>
                
                NOT ENTITLED TO WORKERS’ COMPENSATION BENEFITS FROM ENZ TRANSPORT LLC <br>
                
                 I UNDERSTAND THAT IF I HAVE ANY EMPLOYEES  <br>
                
                WORKING FOR ME, I MUST MAINTAIN WORKERS’ COMPENSATION INSURANCE ON THEM.</p>
             <form class="d-flex">
                <div class="row col-12 mt-2">
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">INDEPENDENT CONTRACTOR'S NAME*</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <p class="fw-bold">Signature*</p>
                    <div class="row">
                        <div class="mb-3 col-12 col-lg-6">
                            <div class="card" style="height: 150px; widht:150px;">
    
                            </div>
                            <p class="fw-bold text-primary">Help's</p>
                        </div>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="completeaddress" class="form-label">Date</label>
                        <input type="date" name="completeaddress" id="completeaddress" class="form-control" placeholder=""
                            aria-describedby="helpId" />
                    </div>
                    
                    <div class="row">
                        <div class="mb-0 col-lg-12">
                            <label for="city" class="form-label fw-bold">SSN</label>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <input type="text" name="city" id="city" class="form-control" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    {{-- <a name="" id="" class="btn btn-danger float-end col-2 m-2" href="#" role="button">SUBMIT</a> --}}
                        
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