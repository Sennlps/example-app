
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $teacher->name }}</h1>
        <p><strong>Hobbies:</strong> {{ $teacher->hobbies }}</p>
        <h2>Subjects:</h2>
        <ul>
            @foreach ($teacher->subjects as $subject)
                <li>{{ $subject->name }} - {{ $subject->description }}</li>
            @endforeach
        </ul>
    </div>
@endsection
