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
                    <h1 class="h2">Manage Mapping</h1>
                    <p class="lead">Select input type and mark locations on the map</p>
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
            <div class="row my-3">
                <div class="col-md-4">
                    <select class="form-control" id="inputType">
                        <option value="forest">Forest Area</option>
                        <option value="lake">Lake</option>
                        <option value="river">River</option>
                        <option value="road">Road</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary" id="updateMap">Update Map</button>
                    <button class="btn btn-danger" id="removeArea">Remove Marked Area</button>
                </div>
            </div>
            <div id="map"></div>
        </main>
    </div>
</div>

<style>
    #map {
        height: 500px;
    }
    .sidebar-sticky {
        position: sticky;
        top: 0;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var map = L.map('map').setView([11.5564, 104.9282], 10); // Centered on Phnom Penh


        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var inputType = document.getElementById('inputType');
        var updateMapButton = document.getElementById('updateMap');
        var removeAreaButton = document.getElementById('removeArea');
        var markedArea = null;
        var latlngs = [];

        function getColor(type) {
            switch(type) {
                case 'forest': return 'green';
                case 'lake': return 'blue';
                case 'river': return 'cyan';
                case 'road': return 'red';
                default: return 'transparent';
            }
        }

        function onMapClick(e) {
            latlngs.push([e.latlng.lat, e.latlng.lng]);
            if (markedArea) {
                map.removeLayer(markedArea);
            }
            var color = getColor(inputType.value);
            if (inputType.value === 'road') {
                markedArea = L.polyline(latlngs, {color: color}).addTo(map);
            } else {
                markedArea = L.polygon(latlngs, {color: color}).addTo(map);
            }
        }

        map.on('click', onMapClick);

        updateMapButton.addEventListener('click', function() {
            alert('Map updated with ' + inputType.value);
        });

        removeAreaButton.addEventListener('click', function() {
            if (markedArea) {
                map.removeLayer(markedArea);
                markedArea = null;
                latlngs = [];
                alert('Marked area removed');
            } else {
                alert('No marked area to remove');
            }
        });
    });
</script>
@endsection
