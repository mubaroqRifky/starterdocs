<div class="d-flex justify-content-between align-items-center">
    <button class="btn btn-light">
        <i class="bi bi-list"></i>
    </button>
 
    <ul class="d-flex gap-4 align-items-center" style="--bs-scroll-height: 100px;"> 
        <li class="nav-item dropdown d-flex align-items-center gap-3">
            <a class="nav-link dropdown-toggle d-flex gap-2 align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="d-grid gap-1">
                    Hi, Mubaroq Rifky
                    {{-- <span class="text-black-50" style="font-size: .8rem">Administrator</span> --}}
                </div>
            </a>
            <button class="btn rounded-circle border d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;" role="button" data-bs-toggle="dropdown" >
                <i class="bi bi-person"></i>
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item"href="{{ route('login') }}">Login</a></li>
                <li><a class="dropdown-item"href="{{ route('register') }}">Register</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
        </li>
    </ul> 
</div>