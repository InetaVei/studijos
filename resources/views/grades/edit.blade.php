@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pakeisti informaciją:</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('grade.update', $grade->id) }}">
                            @csrf
                            <div class="form-group">
                                <label>Studentas: </label>
                                <select name="student_id" id="" class="form-control">
                                    <option value="" selected disabled>Pasirinkite studentą</option>
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}" @if ($student->id == app('request')->input('student_id')) selected="selected" @endif>{{ $student->name }}
                                            {{ $student->surname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Paskaita: </label>
                                <select name="lecture" id="" class="form-control">
                                    <option value="" selected disabled>Pasirinkite paskaitą</option>
                                    @foreach ($lectures as $lecture)
                                        <option value="{{ $lecture->id }}" @if ($lecture->id == app('request')->input('lecture')) selected="selected" @endif>{{ $lecture->name }}
                                            </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Įrašyti pažymį: </label>
                                <input type="number" name="grades" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection