
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
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
                    <h1 class="h2">Graph Management</h1>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <canvas id="chartCanvas"></canvas>
                    </div>
                    <div class="col-md-4">
                        <form id="chartForm">
                            <div class="form-group">
                                <label for="yearSelect">Select Year</label>
                                <select class="form-control" id="yearSelect" name="year">
                                    @for ($year = 2015; $year <= 2024; $year++)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="chartTypeSelect">Select Chart Type</label>
                                <select class="form-control" id="chartTypeSelect" name="chartType">
                                    <option value="rainforest">Rainforest</option>
                                    <option value="temperature">Temperature</option>
                                    <option value="pollution">Pollution</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="newNumberInput">Input New Number</label>
                                <input type="number" class="form-control" id="newNumberInput" name="newNumber">
                            </div>
                            <button type="button" class="btn btn-primary" id="updateChartButton">Update Chart</button>
                        </form>
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
    </style>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('chartCanvas').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['A', 'B', 'C', 'D'],
                    datasets: [{
                        label: 'Data',
                        data: [10, 50, 30, 20],
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });

            document.getElementById('updateChartButton').addEventListener('click', function () {
                var newYear = document.getElementById('yearSelect').value;
                var newChartType = document.getElementById('chartTypeSelect').value;
                var newNumber = document.getElementById('newNumberInput').value;

                // Update chart data 
                chart.data.datasets[0].data.push(newNumber);
                chart.update();
            });
        });
    </script>
@endsection