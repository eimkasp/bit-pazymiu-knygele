@extends('layouts.app')

@section('content')
    <div class="main-content">



        <!-- CONTENT -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="canvas" style="display: block; width: 620px; height: 310px;" width="620" height="310"></canvas>
                            <script>
                                window.onload = function() {
                                    // !!! Sita dali perkela i public/app.js !!! //


                                    /*var ctx = document.getElementById('canvas');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            /!* spausdindami situs duomenis turime naudoti unescaped/ nefiltruota duomenu atvaizdavima*!/
                                            labels: {{--{!! json_encode($lecturesLabels) !!} --}},
                                            datasets: [{
                                                label: '# of Votes',
                                                data: {{--{!! json_encode($lectureGradesCount) !!}--}},
                                                borderWidth: 10
                                            }]
                                        }
                                    });*/

                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
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
                                        {{ __("Paskaitos") }}
                                    </h6>

                                    <!-- Heading -->
                                    <span class="h2 mb-0">
                                        {{ $lecturesCount }}
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
                                        Studentu
                                    </h6>

                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">

                                            <!-- Heading -->
                                            <span class="h2 mr-2 mb-0">
                                                {{ $studentsCount }} / 1000
                                            </span>

                                        </div>
                                        <div class="col">

                                            <!-- Progress -->
                                            <div class="progress progress-sm">
                                                    <div class="progress-bar {{ $studentsPercentage['class'] }}" role="progressbar" style="width: {{ $studentsPercentage['value'] }}%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
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
                                {{ __("Studentų sąrašas") }}
                            </h4>


                            <!-- Button -->
                            <a href="#!" class="btn btn-sm btn-white">
                                Studentų valdymas
                            </a>

                        </div>
                        <div class="table-responsive mb-0">
                            <table class="table table-sm table-nowrap card-table">
                                <thead>
                                <tr>
                                    <th>
                                        {{ __("Vardas") }}
                                    </th>
                                    <th>
                                        {{ __("Pažymių kiekis") }}
                                    </th>
                                    <th>
                                        {{ __("Pažymių vidurkis") }}
                                    </th>
                                    <th>
                                       {{ __("Registracijos data") }}
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>
                                        <!-- Title -->
                                        <a href="{{ route('students.show', $student->id) }}">
                                            {{ $student->name }}
                                        </a>

                                    </td>
                                    <td>
                                       {{ $student->grades->count() }}
                                    </td>
                                    <td>

                                       {{ $student->gradesAverage() }}
                                    </td>
                                    <td>
                                        {{ $student->created_at }}
                                    </td>
                                </tr>
                                    @endforeach
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