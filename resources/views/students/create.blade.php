@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Prideti studenta</h1>

                <form method="POST" action="{{ route('students.store') }}">

                    @csrf

                    <div class="form-group">
                        <label>Vardas</label>
                        <input required type="text" name="name" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Pavarde</label>
                        <input required type="text" name="surname" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>El.pastas</label>
                        <input required type="email" name="email" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Telefona</label>
                        <input type="text" name="phone" class="form-control" />
                    </div>

                    <hr>
                    <input type="submit" value="Prideti" class="btn btn-success" />
                </form>
            </div>
        </div>
    </div>
@endsection
