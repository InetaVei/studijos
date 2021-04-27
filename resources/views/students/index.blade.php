@extends('layouts.app')
@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>email</th>
                <th>phone</th>
                <th>actions</th>
            </tr>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->surname }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <form action={{ route('student.destroy', $student->id) }} method="POST">
                        <a class="btn btn-success" href={{ route('student.edit', $student->id) }}>Edit</a>
                        @csrf @method('delete')
                        <input type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" value="Delete"/>
                        <a href="{{ route('students.about', $student->id) }}" class="btn btn-primary m-1">View</a>
                    </form>
                        </td>
                       
                </tr>
            @endforeach
        </table>
        <div>
            <a href="{{ route('student.create') }}" class="btn btn-success">Add new</a>
        </div>
    </div>
@endsection
