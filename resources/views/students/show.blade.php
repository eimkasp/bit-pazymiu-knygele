@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Studentas: {{ $student->name }}  {{ $student->surname }}</h1>

                <hr>
                <h3>Pazymiai</h3>
                <table class="table-striped table">
                    <tr>
                        <th>Ivertinimas</th>
                        <th>Paskaita</th>
                    </tr>
                    @foreach($student->grades as $grade)
                        <tr>
                            <td>
                                {{ $grade->grade }}
                            </td>
                            <td>
                                <a href="#">
                                    {{ $grade->lecture->name }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

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
