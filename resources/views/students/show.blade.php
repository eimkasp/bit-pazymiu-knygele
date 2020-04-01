@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Studentas: {{ $student->name }}  {{ $student->surname }}</h1>

            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Studento informacija</h4>

                        <ul>
                            <li>
                               El.pastas: {{ $student->email }}
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
                            <input type="submit" class="btn btn-danger" value="X" />
                        </form>
                        <hr>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning text-white">
                            Redaguoti
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
