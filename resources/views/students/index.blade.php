@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Studentu sarasas</h1>

                <table class="table table-striped">
                    @foreach($students as $student)
                        <tr>
                            <td>
                                <a href="{{ route('students.show', $student->id) }}">
                                    {{ $student->name }}
                                </a>
                            </td>
                            <td>
                                {{ $student->surname }}
                            </td>
                            <td>
                                {{ $student->email }}
                            </td>

                            <td>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="X" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

                {{ $students->links() }}
            </div>
        </div>
    </div>
@endsection
