<nav class="navbar fixed-top navbar-expand-lg">
    <div class="container">

        <a href="index.html" class="navbar-brand">
            <i class="bi-layers"></i> Tween
        </a>

        <a href="#" class="custom-btn btn btn-lg d-lg-none ms-auto me-4">
            Download
            <i class="bi-download ms-2"></i>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link" href="#section_1">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#section_2">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#section_3">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#section_4">Our Work</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#section_5">Pricing</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#section_6">Contact</a>
                </li>
            </ul>

            <div class="ms-auto d-none d-lg-block">
                <a href="{{ route('dashboard') }}" class="custom-btn btn btn-lg">
                    Dashboard
                    <i class="bi-speedometer2 ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
