<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - (Nama Aplikasi)</title>
    @include('template.head')
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{ route('dashboard') }}"><img src="{{ asset('assets/images/logo/Logo2.png') }}" alt="Logo"
                                    srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                {{-- Sidebar --}}
                @include('template.left-sidebar')
                {{-- Navbar --}}
                @include('template.navbar')
                <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="user-menu d-flex">
                            <div class="user-name text-end me-3">
                                <h6 class="mb-0 text-gray-600">{{ auth()->user()->name }}</h6>
                            </div>
                            <div class="user-img d-flex align-items-center">
                                <div class="avatar avatar-md">
                                    <img src="{{ asset('assets/images/faces/1.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <h6 class="dropdown-header">Hello, {{ auth()->user()->name }}!</h6>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                Profile</a></li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="icon-mid bi bi-box-arrow-left me-2"></i>
                                Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </nav>
        </header>
        <div id="main-content">

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>@yield('title-page')</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> @yield('title-page')
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">@yield('title')</h4>
                            @yield('button')
                        </div>
                        {{-- <div class="card-content"> --}}
                        <div class="card-body">
                          @yield('content')
                        </div>
                        {{-- </div> --}}
                    </div>
                    </div>
                </section>
            </div>

            {{-- Footer --}}
            @include('template.footer')
        </div>
    </div>
    {{-- Script JS --}}
    @include('template.script')
    @include('sweetalert::alert')
</body>

</html>
