@extends('layout')
@section('content')
    
        <h1>{{ $posts->title}}</h1>
        <p>{{ $posts->content}}</p>


    
    <p>Added {{ $posts->created_at->diffForHumans() }}</p>
    
    @if ((new Carbon\Carbon())->diffInMinutes($posts->created_at) < 1000)
        <div class="alert alert-info">New!</div>
    @endif
@endsection
