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
                <div>
                    <h1 class="h2">Users</h1>
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

            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Madison Lee</td>
                            <td>MadisonLee@gmail.com</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete User</button>
                                <button class="btn btn-success btn-sm">Send Email</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Brody</td>
                            <td>Brody723@gmail.com</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete User</button>
                                <button class="btn btn-success btn-sm">Send Email</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Jody</td>
                            <td>JodyCeaser@gmail.com</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete User</button>
                                <button class="btn btn-success btn-sm">Send Email</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Lester</td>
                            <td>Lesterwester@gmail.com</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete User</button>
                                <button class="btn btn-success btn-sm">Send Email</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection
