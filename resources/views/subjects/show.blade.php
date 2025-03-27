@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $subject->name }}</h1>
        <p><strong>Description:</strong> {{ $subject->description }}</p>
        <p><strong>Teacher:</strong> {{ $subject->teacher->name }}</p>
    </div>
@endsection
