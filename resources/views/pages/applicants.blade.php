@extends('layout.app')
@section('mainsection')

<section class="dashboard">
    <div class="top d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center gap-2">
            <h5><i class="uil uil-bars sidebar-toggle"></i></h5>
            {{-- <div class="logo-name border-bottom-0 p-0 d-md-none d-flex align-items-center">
                <div class="logo-image m-0">
                    <img src="" alt="">
                </div>
            </div> --}}
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
                            <li class="nav-item" role="presentation" style="width:100px;">
                                <button class="nav-link active selected-tab" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" type="button" role="tab"
                                    aria-controls="home-tab-pane" aria-selected="true">All</button>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="tab-content border-0" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="form-app-box px-lg-5 py-lg-4 p-3">
                        <h4 class="text-center text-primary">Search for Applicants</h4>
                        <div class="form-content">
                            <form action="#" method="#">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="search-name">
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Email</label>
                                        <input type="email" class="form-control mt-3" id="search-email">
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Phone</label>
                                        <input type="number" class="form-control" id="search-phone">
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Location</label>
                                        <input type="text" class="form-control" id="search-location">
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Position</label>
                                        <input type="text" class="form-control mt-3" id="search-position">
                                    </div>

                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Status</label>
                                        <input type="text" class="form-control" id="search-status">
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">Date Range</label>
                                        <input type="date" class="form-control" id="search-date-range">
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <label for="name">App ID</label>
                                        <input type="number" class="form-control" id="search-app-id">
                                    </div>
                                </div>
                            </form>



                            <div class="table-responsive">
                                <table class="table table-based table-hover align-middle" id="applicant-table">
                                    <thead class="text-nowrap">
                                        <tr>
                                            <th style="background-color: #6DB4F5; color:white;">App ID</th>
                                            <th style="background-color: #6DB4F5; color:white;">Date Applied</th>
                                            <th style="background-color: #6DB4F5; color:white;">Name</th>
                                            <th style="background-color: #6DB4F5; color:white;">Location</th>
                                            <th style="background-color: #6DB4F5; color:white;">Email</th>
                                            <th style="background-color: #6DB4F5; color:white;">Phone Number</th>
                                            <th style="background-color: #6DB4F5; color:white;">Position</th>
                                            <th style="background-color: #6DB4F5; color:white;">Set Status</th>
                                            <th style="background-color: #6DB4F5; color:white;">Send Form</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider text-nowrap">
                                        @foreach($driverApplications as $application)
                                        <tr data-application-id="{{ $application->id }}" class="{{ $application->isNew ? 'new-application' : '' }}">
                                            <td class="gap-3" style="height: 40px; vertical-align: middle;">
                                                <span class="dot" style="display: inline-block; margin-top: 8px;"></span>
                                                <a href="{{route('driverProfile', ['id' => $application->id])}}" target="_blank" class="text-decoration-none text-dark">
                                                    {{$application->id}}
                                                </a>
                                            </td>
                                            <td><a href="{{route('driverProfile', ['id' => $application->id])}}"
                                                    class="text-decoration-none text-dark">{{$application->date_applied}}</a>
                                            </td>
                                            <td><a href="{{route('driverProfile', ['id' => $application->id])}}"
                                                    class="text-decoration-none text-dark">{{$application->firstname}} {{$application->lastname}}</a>
                                            </td>
                                            <td><a href="{{route('driverProfile', ['id' => $application->id])}}"
                                                    class="text-decoration-none text-dark">{{$application->present_address}}</a>
                                            </td>
                                            <td><a href="{{route('driverProfile', ['id' => $application->id])}}"
                                                    class="text-decoration-none text-dark">{{$application->email_address}}</a>
                                            </td>
                                            <td><a href="{{route('driverProfile', ['id' => $application->id])}}"
                                                    class="text-decoration-none text-dark">{{$application->mobile_no}}</a>
                                            </td>
                                            <td><a href="{{route('driverProfile', ['id' => $application->id])}}"
                                                    class="text-decoration-none text-dark">{{$application->job_applied_for}}</a>
                                            </td>
                                            <td>
                                                <select class="form-select form-select-sm w-100 status-select" aria-label=".form-select-sm example" style="background-color: gray;color:white; border-radius:10px;">
                                                    <option value="Processing" {{ $application->status == 'Processing' ? 'selected' : '' }}>Processing</option>
                                                    <option value="Phone Screen" {{ $application->status == 'Phone Screen' ? 'selected' : '' }}>Phone Screen</option>
                                                    <option value="Interview" {{ $application->status == 'Interview' ? 'selected' : '' }}>Interview</option>
                                                    <option value="Orientation" {{ $application->status == 'Orientation' ? 'selected' : '' }}>Orientation</option>
                                                    <option value="Hired" {{ $application->status == 'Hired' ? 'selected' : '' }}>Hired</option>
                                                    <option value="Rejected" {{ $application->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                                                    <option value="Holed" {{ $application->status == 'Holed' ? 'selected' : '' }}>Holed</option>
                                                    <option value="Saved. Incompleted" {{ $application->status == 'Saved. Incompleted' ? 'selected' : '' }}>Saved. Incompleted</option>
                                                    <option value="Other" {{ $application->status == 'Other' ? 'selected' : '' }}>Other</option>
                                                </select>
                                            </td>
                                            <td data-application-id="{{ $application->id }}">
                                                <select id="formSelect-{{ $application->id }}" class="form-select form-select-sm w-100" aria-label=".form-select-sm example" style="background-color: gray;color:white; border-radius:10px; padding:5px;">
                                                    <option value="">Select</option>
                                                    @foreach($companyForms as $form)
                                                        @if (!in_array($form->form_name, $driverSentForms[$application->id]))
                                                            <option value="{{ $form->id }}">{{ $form->form_name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>                                              
                                            </td>                                      
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>


    document.querySelectorAll('.new-application').forEach(function (row) {
        row.addEventListener('click', function () {
            row.classList.remove('new-application');
            const dot = row.querySelector('.dot');
            if (dot) {
                dot.remove();
            }
        });
    });

    $(document).ready(function() {
        $('.status-select').on('change', function() {
        var newStatus = $(this).val();
        var applicationId = $(this).closest('tr').data('application-id');

        console.log(newStatus);
        console.log(applicationId);

        $.ajax({
            url: '/update-status/' + applicationId,
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}', // Add CSRF token for Laravel
                status: newStatus // Pass the new status here
            },
            success: function(response) {
                console.log('Application status updated successfully');
            },
            error: function(error) {
                console.error('Error updating application status:', error);
                console.error('Status:', error.status);
                console.error('Response body:', error.responseText);
            }
        });
    });
});
$(document).ready(function() {
    // Handle form submission
    $('.form-select').on('change', function() {
        var formName = $(this).find(':selected').text(); // Get the selected form name
        var applicationId = $(this).closest('td').data('application-id');

        console.log('formName:', formName);
        console.log('applicationId:', applicationId);

        if (formName && applicationId) {
            $.ajax({
                url: '/store-driver-form',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    form_name: formName,
                    application_id: applicationId
                },
                success: function(response) {
                // $('#successAlert').show(); // Show success alert
                alert("The form has been sent to the driver");
                location.reload();
                },
                error: function(xhr, status, error) {
                    console.error('Error updating application status:', error);
                    console.error('Status:', xhr.status);
                    console.error('Response body:', xhr.responseText);
                }
            });
        }
    });
});

    $(document).ready(function () {
        // Function to perform real-time filtering
        function filterTable() {
            var filters = {
                'name': $('#search-name').val().toLowerCase(),
                'email': $('#search-email').val().toLowerCase(),
                'phone': $('#search-phone').val().toLowerCase(),
                'location': $('#search-location').val().toLowerCase(),
                'position': $('#search-position').val().toLowerCase(),
                'status': $('#search-status').val().toLowerCase(),
                'dateRange': $('#search-date-range').val().toLowerCase(),
                'appId': $('#search-app-id').val().toLowerCase(),
            };

            $('#applicant-table tbody tr').each(function () {
                var row = $(this);
                var showRow = true;

                $.each(filters, function (filterKey, filterValue) {
                    if (filterKey === 'status') {
                        // Special treatment for the status dropdown
                        if (filterValue !== 'select' && row.find('td:eq(7) select').val().toLowerCase().indexOf(filterValue) === -1) {
                            showRow = false;
                            return false; // Exit each loop early if mismatch found
                        }
                    } else {
                        if (filterValue && row.find('td:eq(' + getFilterIndex(filterKey) + ')').text().toLowerCase().indexOf(filterValue) === -1) {
                            showRow = false;
                            return false; // Exit each loop early if mismatch found
                        }
                    }
                });

                if (showRow) {
                    row.show();
                } else {
                    row.hide();
                }
            });
        }

        function getFilterIndex(key) {
            switch (key) {
                case 'name':
                    return 2;
                case 'location':
                    return 3;
                case 'email':
                    return 4;
                case 'phone':
                    return 5;
                case 'position':
                    return 6;
                case 'status':
                    return 7;
                case 'dateRange':
                    return 1; // Assuming it corresponds to the Date Applied
                case 'appId':
                    return 0; // Assuming it corresponds to the ID
                default:
                    return -1;
            }
        }

        // Call filterTable function on input change
        $('.form-control').on('input', filterTable);
    });






</script>