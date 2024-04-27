@extends('layout.dashboard')
@section('content')
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                        </li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-activities.html" class="dropdown-item has-icon">
                                <i class="fas fa-bolt"></i> Activities
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a>Infaq Wikrama</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div>
                    <ul class="sidebar-menu">
                        <ul class="sidebar-menu">
                            <li class="dropdown">
                                <a href="/DashboardUser"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                            </li>
                            <li class="dropdown">
                                <a href="/RiwayatUser"><i class="fas fa-database"></i> <span>Riwayat</span></a>
                            </li>
                            <li class="dropdown ">
                                <a href="/TagihanUser"><i class="fas fa-user-graduate"></i> <span>Tagihan
                                    Siswa</span></a>
                            </li>
                            <li class="dropdown active">
                                <a href="/UploadUser"><i class="fa fa-upload"></i> <span>Upload</span></a>
                            </li>
                        </ul>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Upload</h1>
                    </div>

                    <div class="section-body">
                        <div class="card">
                            <div class="card-header">
                                <h4>Hi, User</h4>
                            </div>
                            <div class="card-body">
                                <p>Silahkan upload apa saja yang anda mau hehe</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="main-content" style="margin-top: -18%; position: relative;">
            </div>


            <div class="main-content" style="margin-top:-43%;">
                <section class="section">
                    <br>
                    <div class="section-body">
                        <form action="#" method="post" novalidate class="needs-validation">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>Silahkan Upload</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-5">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                required>
                                            <div class="invalid-feedback">
                                                Please fill in your name
                                            </div>
                                        </div>
                                       
                                        <div class="form-group col-5">
                                            <label for="address">Address</label>
                                            <textarea type="text" class="form-control" name="address" id="address" required></textarea>
                                        </div>
                                        <div class="form-group col-5">
                                            <label for="phone">No Handphone</label>
                                            <input type="number" class="form-control" name="phone" id="phone"
                                                required>
                                            <div class="invalid-feedback">
                                                Please fill in your phone
                                            </div>
                                        </div>
                                        <div class="form-group col-5">
                                            <label for="">Upload Image</label>
                                            <input type="file" name="image" id="image" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                {{-- <a href="#" class="btn btn-danger"> <i class="fas fa-arrow-left"></i> Back</a> --}}
                                <button class="btn btn-primary"><i class="fa fa-plus"></i> Create</button>
                            </div>
                    </div>
                    </form>
            </div>
            </section>
        </div>

        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                    Nauval Azhar</a>
            </div>
        </footer>
    </div>
    </div>
@endsection
