<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/favicon.png') }}" width="75rem"
                style="border-radius: 50px;background-color: gray; margin-right: 2%" height="75rem" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(Request()->url(), '/') ? 'active' : '' }} " aria-current="page"
                        href="{{ route('homepage') }}">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class='nav-link {{ str_contains(request()->url(), '/about-me') ? 'active' : '' }} '
                        href="{{ route('about-me') }}">Hakkımda</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
