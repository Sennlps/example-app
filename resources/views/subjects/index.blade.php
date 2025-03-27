@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Subjects</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Teacher</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->description }}</td>
                        <td>{{ $subject->teacher->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
