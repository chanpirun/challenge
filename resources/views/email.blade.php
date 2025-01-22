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
                        <h1 class="h2">Email</h1>
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
                    <div class="col-md-12">
                        <div class="accordion" id="emailAccordion">
                            <!-- Sample message 1 -->
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Madison Lee - "Hi, I have a question......" - 7:40 PM
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#emailAccordion">
                                    <div class="card-body">
                                    Hello, I have a question regarding a specific specie of mushrooms that were recently discover in the Amazon Forest. The site mentioned that they were poisonous but I wonder to what extent the poison level is? Please reply to this question when you have the time to.                                                                   

                                    </div>
                                </div>
                            </div>
                            
                            <!-- Sample message 2 -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Brody - "The temp has now increase......." - 3:40 PM
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#emailAccordion">
                                    <div class="card-body">
                                        The temp has now increased to 43 degress!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <style>
        
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
