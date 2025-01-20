<nav
class="navbar navbar-expand-sm navbar-light bg-light"
>
<div class="container">
    <img src="{{ asset($company_logo)}}" class="" style="width: 5rem"  alt="" srcset="">
    <div class="text-center">
    <a class="navbar-brand mx-5" href="#">{{$display_name}}</a>
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