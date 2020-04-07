@extends('layouts.app')

@section('content')
    <div class="main-content">



        <!-- CONTENT -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        {{ __("Studentai") }}
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                      {{ $studentsCount }}
                    </span>

                                    <!-- Badge -->
                                    <span class="badge badge-soft-success mt-n1">
                      +3.5%
                    </span>

                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                                </div>
                            </div> <!-- / .row -->

                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Total Hours
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                      763.5
                    </span>

                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                                </div>
                            </div> <!-- / .row -->

                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Progress
                                    </h6>

                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">

                                            <!-- Heading -->
                                            <span class="h2 mr-2 mb-0">
                          84.5%
                        </span>

                                        </div>
                                        <div class="col">

                                            <!-- Progress -->
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->

                                </div>
                                <div class="col-auto">

                                    <!-- Icon -->
                                    <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                                </div>
                            </div> <!-- / .row -->

                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-xl">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">

                                    <!-- Title -->
                                    <h6 class="text-uppercase text-muted mb-2">
                                        Cost/Unit
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                      $5.50
                    </span>

                                </div>
                                <div class="col-auto">

                                    <!-- Chart -->
                                    <div class="chart chart-sparkline"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                        <canvas class="chart-canvas chartjs-render-monitor" id="sparklineChart" width="75" height="35" style="display: block; width: 75px; height: 35px;"></canvas>
                                    </div>

                                </div>
                            </div> <!-- / .row -->

                        </div>
                    </div>

                </div>
            </div> <!-- / .row -->
            <div class="row">
                <div class="col-12 col-xl-8">

                    <!-- Performance -->
                    <div class="card">
                        <div class="card-header">

                            <!-- Title -->
                            <h4 class="card-header-title">
                                Performance
                            </h4>


                            <!-- Button -->
                            <a href="#!" class="btn btn-sm btn-white">
                                Export
                            </a>

                        </div>
                        <div class="table-responsive mb-0">
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>
                                        Member
                                    </th>
                                    <th>
                                        Schedule
                                    </th>
                                    <th>
                                        Hours Billed
                                    </th>
                                    <th>
                                        Completion
                                    </th>
                                    <th>
                                        Effective Rate
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>

                                        <!-- Avatar -->
                                        <a href="profile-posts.htmL" class="avatar avatar-xs d-inline-block mr-2">
                                            <img src="assets/img/avatars/profiles/avatar-1.jpg" alt="..." class="avatar-img rounded-circle">
                                        </a>

                                        <!-- Title -->
                                        <span>Dianna Smiley</span>

                                    </td>
                                    <td>
                                        <span class="text-success">●</span> On Schedule
                                    </td>
                                    <td>
                                        271
                                    </td>
                                    <td>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <!-- Value -->
                                                <span class="mr-2">55%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </td>
                                    <td>
                                        $55.25%
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <!-- Avatar -->
                                        <a href="profile-posts.html" class="avatar avatar-xs d-inline-block mr-2">
                                            <img src="assets/img/avatars/profiles/avatar-2.jpg" alt="..." class="avatar-img rounded-circle">
                                        </a>

                                        <!-- Title -->
                                        <span>Ab Hadley</span>

                                    </td>
                                    <td>
                                        <span class="text-warning">●</span> Delayed
                                    </td>
                                    <td>
                                        44
                                    </td>
                                    <td>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <!-- Value -->
                                                <span class="mr-2">25%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </td>
                                    <td>
                                        $122.52%
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <!-- Avatar -->
                                        <a href="profile-posts.html" class="avatar avatar-xs d-inline-block mr-2">
                                            <img src="assets/img/avatars/profiles/avatar-3.jpg" alt="..." class="avatar-img rounded-circle">
                                        </a>

                                        <!-- Title -->
                                        <span>Adolfo Hess</span>

                                    </td>
                                    <td>
                                        <span class="text-success">●</span> On Schedule
                                    </td>
                                    <td>
                                        271
                                    </td>
                                    <td>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <!-- Value -->
                                                <span class="mr-2">55%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </td>
                                    <td>
                                        $55.25%
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <!-- Avatar -->
                                        <a href="profile-posts.html" class="avatar avatar-xs d-inline-block mr-2">
                                            <img src="assets/img/avatars/profiles/avatar-4.jpg" alt="..." class="avatar-img rounded-circle">
                                        </a>

                                        <!-- Title -->
                                        <span>Daniela Dewitt</span>

                                    </td>
                                    <td>
                                        <span class="text-warning">●</span> Delayed
                                    </td>
                                    <td>
                                        44
                                    </td>
                                    <td>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <!-- Value -->
                                                <span class="mr-2">25%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </td>
                                    <td>
                                        $122.52%
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                        <!-- Avatar -->
                                        <a href="profile-posts.html" class="avatar avatar-xs d-inline-block mr-2">
                                            <img src="assets/img/avatars/profiles/avatar-5.jpg" alt="..." class="avatar-img rounded-circle">
                                        </a>

                                        <!-- Title -->
                                        <span>Miyah Myles</span>

                                    </td>
                                    <td>
                                        <span class="text-success">●</span> On Schedule
                                    </td>
                                    <td>
                                        271
                                    </td>
                                    <td>
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-auto">

                                                <!-- Value -->
                                                <span class="mr-2">55%</span>

                                            </div>
                                            <div class="col">

                                                <!-- Progress -->
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>

                                            </div>
                                        </div> <!-- / .row -->
                                    </td>
                                    <td>
                                        $55.25%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-xl-4">

                    <!-- Latest Files -->
                    <div class="card">
                        <div class="card-header">

                            <!-- Title -->
                            <h4 class="card-header-title">
                                Latest Files
                            </h4>

                            <!-- Link -->
                            <a href="#!" class="small">View all</a>

                        </div>
                        <div class="card-body">

                            <!-- List group -->
                            <div class="list-group list-group-flush my-n3">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <a href="#!" class="avatar">
                                                <img src="assets/img/files/file-1.jpg" alt="..." class="avatar-img rounded">
                                            </a>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="mb-1">
                                                <a href="#!">Launchday Logo</a>
                                            </h4>

                                            <!-- Time -->
                                            <p class="card-text small text-muted">
                                                2.5kb SVG
                                            </p>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#!" class="dropdown-item">
                                                        Action
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Another action
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Something else here
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <a href="#!" class="avatar">
                                                <img src="assets/img/files/file-2.jpg" alt="..." class="avatar-img rounded">
                                            </a>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="mb-1">
                                                <a href="#!">Example Grid</a>
                                            </h4>

                                            <!-- Time -->
                                            <p class="card-text small text-muted">
                                                1.5mb PNG
                                            </p>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#!" class="dropdown-item">
                                                        Action
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Another action
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Something else here
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <a href="#!" class="avatar">
                                                <div class="avatar-title rounded bg-white text-secondary">
                                                    <span class="fe fe-folder"></span>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="mb-1">
                                                <a href="#!">Screenshot Collection</a>
                                            </h4>

                                            <!-- Time -->
                                            <p class="card-text small text-muted">
                                                6.9mb directory
                                            </p>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#!" class="dropdown-item">
                                                        Action
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Another action
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Something else here
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">

                                            <!-- Avatar -->
                                            <a href="#!" class="avatar">
                                                <img src="assets/img/files/file-3.jpg" alt="..." class="avatar-img rounded">
                                            </a>

                                        </div>
                                        <div class="col ml-n2">

                                            <!-- Title -->
                                            <h4 class="mb-1">
                                                <a href="#!">Launchday Cover</a>
                                            </h4>

                                            <!-- Time -->
                                            <p class="card-text small text-muted">
                                                750kb JPG
                                            </p>

                                        </div>
                                        <div class="col-auto">

                                            <!-- Dropdown -->
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#!" class="dropdown-item">
                                                        Action
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Another action
                                                    </a>
                                                    <a href="#!" class="dropdown-item">
                                                        Something else here
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                            </div>

                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->

                </div>
            </div> <!-- / .row -->
        </div>
    </div>
@endsection