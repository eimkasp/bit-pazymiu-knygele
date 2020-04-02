@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1> Prideti pazymi </h1>

                @include('components.errors-list')

                <form method="post" action="{{ route('grades.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Pasirinkitie studenta</label>
                                <select name="student_id" required class="form-control">
                                    @foreach($students as $student)
                                        <option value="{{ $student->id }}">
                                            {{ $student->name }} {{ $student->surname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Pasirinkitie paskaita</label>
                                <select name="lecture_id" required class="form-control">
                                    @foreach($lectures as $lecture)
                                        <option value="{{ $lecture->id }}">
                                            {{ $lecture->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Ivertinimas</label>
                                <input class="form-control" value="{{ old('grade') }}" name="grade" type="number" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <input type="submit" value="Prideti pazymi" class="btn btn-success"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
