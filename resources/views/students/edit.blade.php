@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Change student info</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('student.update', $student->id) }}">
                            @csrf @method("PUT")
                            <div class="form-group">
                                <label for="">Name:</label>
                                <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                            </div>
                            <div class="form-group">
                                <label for="">Surname:</label>
                                <input type="text" name="surname" class="form-control" value="{{ $student->surname }}">
                            </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="text" name="email" class="form-control" value="{{ $student->email }}">
                            </div>
                            <div class="form-group">
                                <label for="">Phone:</label>
                                <input type="number" name="phone" class="form-control" value="{{ $student->phone }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
