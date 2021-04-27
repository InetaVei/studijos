@extends('layouts.app')
@section('content')

    {{-- @if ($errors->any())
            <h4 style="color: red">{{ $errors->first() }}</h4>
        @endif --}}

    <div class="container mt-5">
        <table class="table">
            <tr>
                <th>Studento vardas ir pavardė</th>
                <th>Paskaitos pavadinimas</th>
                <th>Pažymys</th>
                <th>Veiksmai</th>
            </tr>
            @foreach ($grades as $grade)
                <tr>
                    <td>{{ $grade->student->name }} {{ $grade->student->surname }}</td>
                    <td>{{ $grade->lecture->name }}</td>
                    <td>{{ $grade->grades }}</td>
                    <td>
                        <form action={{ route('grades.destroy', $grade->id) }} method="POST">
                            <a class="btn btn-success" href={{ route('grades.edit', $grade->id) }}>Redaguoti</a>
                            @csrf @method('delete')
                            <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"
                                value="Trinti" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{ route('grades.create') }}" class="btn btn-success">Add new</a>
        </div>
    </div>
    </div>
@endsection
