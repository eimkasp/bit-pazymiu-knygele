@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <img src="{{ $student->photo }}" style="width: 200px; height: 200px; border-radius: 100%;"/>
                <h1>Studentas: {{ $student->name }}  {{ $student->surname }}</h1>

                <hr>
                <h3>Pazymiai</h3>
                <table class="table-striped table">
                    <tr>
                        <th>Ivertinimas</th>
                        <th>Paskaita</th>
                        <th>Destytojas</th>
                    </tr>
                    @foreach($student->grades as $grade)
                        <tr>
                            <td>
                                {{ $grade->grade }}
                            </td>
                            <td>
                                <a href="{{ route('lectures.show', $grade->lecture->id) }}">
                                    {{ $grade->lecture->name }}
                                </a>
                            </td>
                            <td>
                                {{  $grade->user->name }}
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <!-- List group -->
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h5 class="mb-0">
                                            El.pastas
                                        </h5>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Time -->
                                        <time class="small text-muted" datetime="1988-10-24">
                                            {{ $student->email }}
                                        </time>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h5 class="mb-0">
                                            Registracijos data
                                        </h5>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Time -->
                                        <time class="small text-muted" datetime="2018-10-28">
                                            {{ $student->created_at  }}
                                        </time>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h5 class="mb-0">
                                            Location
                                        </h5>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Text -->
                                        <small class="text-muted">
                                            Los Angeles, CA
                                        </small>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col">

                                        <!-- Title -->
                                        <h5 class="mb-0">
                                            Website
                                        </h5>

                                    </div>
                                    <div class="col-auto">

                                        <!-- Link -->
                                        <a href="#!" class="small">
                                            themes.getbootstrap.com
                                        </a>

                                    </div>
                                </div> <!-- / .row -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4>Studento informacija</h4>

                        <ul>
                            <li>

                            </li>
                            <li>
                                Telefonas: {{ $student->phone }}
                            </li>

                            <li>
                                Registruotas nuo: {{ $student->created_at->format('Y F d') }}
                            </li>
                        </ul>

                        <hr>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="btn btn-danger" value="X"/>
                        </form>
                        <hr>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning text-white">
                            Redaguoti
                        </a>

                        <a href="{{ route('grades.create') }}" class="btn btn-success">
                            Prideti pazymi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
