<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    @include('layouts.head')
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarContent" aria-controls="navbarCoontent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-right" id="navbarContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link navbar-text" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="#our-tours">Our Tours</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="#activities">Tours Activities</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="#holiday-packages">Holiday Package</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link navbar-text" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="flex-shrink-0">
        @yield('content')
    </main>
    <footer id='contact'>
        <h1>Contact</h1>
    </footer>
    @include('layouts.script')
</body>

</html>
