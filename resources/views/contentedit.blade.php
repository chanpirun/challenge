@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <span>EcoTrack Admin Page</span>
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
                        <h1 class="h2">Manage Contents</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-sun"></i></span>
                            <input type="text" class="form-control" placeholder="Input New Number">
                            <button class="btn btn-success" type="button">Update</button>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-thermometer-half"></i></span>
                            <input type="text" class="form-control" placeholder="Input New Number">
                            <button class="btn btn-success" type="button">Update</button>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-tint"></i></span>
                            <input type="text" class="form-control" placeholder="Input New Number">
                            <button class="btn btn-success" type="button">Update</button>
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
            background: url('/image/background.png') no-repeat center center;
            background-size: cover;
            opacity: 0.5;
            z-index: -1;
        }
        .sidebar-sticky {
            position: sticky;
            top: 0;
        }
        .input-group {
            display: flex;
            align-items: center;
        }
        .input-group .input-group-text {
            background: none;
            border: none;
        }
        .input-group input {
            flex: 1;
        }
        .input-group .btn {
            margin-left: 10px;
        }
        @media (max-width: 767px) {
            .input-group {
                flex-direction: column;
            }
            .input-group .btn {
                margin-left: 0;
                margin-top: 10px;
            }
        }
    </style>
@endsection
