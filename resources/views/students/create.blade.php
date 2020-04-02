@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @isset($student->id)
                    <h1>Redaguoti studenta</h1>
                @else
                    <h1>Prideti studenta</h1>
                @endisset

                @include('components.errors-list')

                @isset($student->id)
                    <form method="POST" action="{{ route('students.update', $student->id) }}">
                        @method('PUT')
                        @else
                            <form method="POST" action="{{ route('students.store') }}">
                                @endisset

                                @csrf
                                <div class="form-group">
                                    <label>Vardas</label>
                                    <input type="text" value="{{ old('name', $student->name) }}" name="name"
                                           class="form-control"/>
                                </div>


                                <div class="form-group">
                                    <label>Pavarde</label>
                                    <input required type="text" value="{{ old('surname', $student->surname) }}"
                                           name="surname" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label>El.pastas</label>
                                    <input required type="email" value="{{ old('email', $student->email) }}"
                                           name="email" class="form-control"/>
                                </div>

                                <div class="form-group">
                                    <label>Telefonas</label>
                                    <input type="text" name="phone" value="{{ old('phone', $student->phone) }}"
                                           class="form-control"/>
                                </div>

                                <hr>
                                @isset($student->id)
                                    <input type="submit" value="Issaugoti" class="btn btn-success"/>

                                @else
                                    <input type="submit" value="Prideti" class="btn btn-success"/>

                                @endisset
                            </form>
            </div>
        </div>
    </div>
@endsection
