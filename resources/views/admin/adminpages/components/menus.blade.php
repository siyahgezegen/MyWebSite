<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(Request()->url(), '/admin/board') ? 'active' : '' }}"
                        aria-current="page" href="{{ route('adminboard') }}">İlerleme</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ str_contains(Request()->url(), '/admin/add-content') ? 'active' : '' }}"
                        href='{{ route('add.content') }}''>Kitap Ekle</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
