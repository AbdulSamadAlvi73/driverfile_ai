<aside class="dashboard-sidebar">
    <div class="logo-name d-md-flex d-none" style="height: 8%">
        <div class="logo-image">
            <img src="{{asset('assets/img/logofordash.png')}}" alt="">
        </div>
        <span class=""><a href="{{route('companyprofile')}}" class="text-decoration-none  text-primary">
            {{-- Driver <span style="color:transparent;border:1px solid #0d6efd;">File</span>.AI --}}
            <img src="{{asset('assets/img/logo-text.png')}}" style="width:70%; margin-left:40px; margin-top:30px;" alt="">
        </a></span>
    </div>

    {{-- <div class="d-flex align-items-center gap-2 justify-content-end mt-3 me-3">
        <h4 style="cursor: pointer;"><i class="uil uil-bars sidebar-toggle"></i></h4>
        <div class="logo-name border-bottom-0 p-0 d-md-none d-flex align-items-center">
            <div class="logo-image m-0">
                <img src="" alt="">
            </div>
        </div>
    </div> --}}

    <div class="menu-items ps-md-3 p-0">
        <ul class="nav-links p-0 m-0 mx-1">
            <li>
                <a href="{{route('companyprofile')}}" class="sidebar-link">
                    {{-- <img src="./images/taska_icon.png" alt="taska_icon" style="margin-left: -13px;"> --}}
                    <i class="fa-solid fa-user mx-2"></i>
                    <span class="link-name">Company Profile</span>
                </a>
            </li>
            <li>
                <a href="{{route('forms')}}" class="sidebar-link">
                    {{-- <img src="./images/taska_icon.png" alt="taska_icon" style="margin-left: -13px;"> --}}
                    <i class="fa-solid fa-scroll mx-2"></i>
                    <span class="link-name">Forms</span>
                </a>
            </li>
            <li>
                <a href="#" class="sidebar-link">
                    {{-- <img src="./images/taska_icon.png" alt="taska_icon" style="margin-left: -13px;"> --}}
                    <i class="fa-solid fa-people-group mx-2"></i>
                    <span class="link-name">Team</span>
                </a>
            </li>
            <li>
                <a href="{{route('applicants')}}" class="sidebar-link">
                    {{-- <img src="./images/taska_icon.png" alt="taska_icon" style="margin-left: -13px;"> --}}
                    <i class="fa-solid fa-user-check mx-2"></i>
                    <span class="link-name">Applicants</span>
                </a>
            </li>
            <li>
                <a href="{{route('settings')}}" class="sidebar-link">
                    {{-- <img src="./images/taska_icon.png" alt="taska_icon" style="margin-left: -13px;"> --}}
                    <i class="fa-solid fa-gear mx-2"></i>
                    <span class="link-name">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</aside>