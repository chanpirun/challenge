@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <img src="image/logo.png" alt="Logo" class="img-fluid rounded-circle">
                                <span class="ml-2">EcoTrack Admin Page</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard_page">
                                <i class="fas fa-home"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/users">
                                <i class="fas fa-users"></i> Users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contents">
                                <i class="fas fa-file-alt"></i> Contents
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/email">
                                <i class="fas fa-envelope"></i> Email
                            </a>
                        </li>
                        <li class="nav-item mt-auto">
                            <a class="nav-link text-danger" href="#">
                                <i class="fas fa-sign-out-alt"></i> Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 position-relative">
                <div class="background-image"></div>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <div>
                        <h1 class="h2">Dashboard</h1>
                        <p class="lead">Welcome, Johnny John</p>
                    </div>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <a href="/email" class="btn btn-sm btn-outline-secondary"> 
                                <i class="fas fa-bell"></i> <span class="badge badge-pill badge-danger">2</span>
                            </a>
                            <img src="image/john.png" alt="Profile" class="img-fluid rounded-circle" width="50">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Active Users</h5>
                                <p class="card-text">4</p>
                                <canvas id="activeUsersChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">Total Concurrent Users</h5>
                                <p class="card-text display-1 font-weight-bold">10</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <a href="/contents" class="image-link">
                                    <img src="image/mapdash.png" alt="Map" class="img-fluid mb-3 dashboard-image">
                                    <h5 class="card-title overlay-title">Manage Mapping</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <a href="/users" class="image-link">
                                    <img src="image/userdash.png" alt="Users" class="img-fluid mb-3 dashboard-image">
                                    <h5 class="card-title overlay-title">Manage Users</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <style>
        .background-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/image/wildlife.png') no-repeat center center;
            background-size: cover;
            opacity: 0.5;
            z-index: -1;
        }
        .sidebar-sticky {
            position: sticky;
            top: 0;
        }
        .dashboard-image {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .dashboard-image:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }
        .overlay-title {
            position: absolute;
            bottom: 15px;
            left: 15px;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
        .image-link {
            position: relative;
            display: block;
        }
    </style>
@endsection
