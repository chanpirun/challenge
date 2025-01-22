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

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Contents</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="/email" class="btn btn-sm btn-outline-secondary"> 
                           <i class="fas fa-bell"></i> <span class="badge badge-pill badge-danger">2</span>
                        </a>
                        <img src="image/john.png" alt="Profile" class="img-fluid rounded-circle" width="50">
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="/mapping" class="image-link">
                                <img src="image/map.png" alt="Map" class="img-fluid mb-3 dashboard-image">
                                <h5 class="card-title overlay-title">Update Mapping</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="/graph" class="image-link">
                                <img src="image/graph.png" alt="Graph" class="img-fluid mb-3 dashboard-image">
                                <h5 class="card-title overlay-title">Update Graph Info</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="/contentedit" class="image-link">
                                <img src="image/posts.png" alt="Posts" class="img-fluid mb-3 dashboard-image">
                                <h5 class="card-title overlay-title">Update Site Info</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

<style>
    .dashboard-image {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .dashboard-image:hover {
        transform: scale(1.05);
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
    }

    .overlay-title {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
        border-radius: 5px;
        opacity: 0;
        transition: opacity 0.2s;
    }

    .image-link {
        position: relative;
        display: inline-block;
    }

    .image-link:hover .overlay-title {
        opacity: 1;
    }

    .card {
        overflow: hidden;
    }
</style>
