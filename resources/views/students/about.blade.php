@extends('layouts.app')
@section('content')
    <div class="card-body">

        <h2>{{ $student_name->name}} {{ $student_name->surname}}</h2>
        <table class="table">
            <tr>
                {{-- <th>Studento vardas ir pavardė</th> --}}
                <th>Paskaita</th>
                <th>Pažymys</th>
            </tr>
            @foreach ($student_grades as $value) 
                <tr>
                    {{-- <td>{{ $student->name }} {{ $student->surname }}</td> --}}
                    <td>{{ ($value->name) }} </td>
                    <td> {{ ($value->grades) }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection



