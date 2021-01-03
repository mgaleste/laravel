@extends('layout')
@section('content')
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
       @include('posts.partials.form')
        <input type="submit" name="create" value="Create" class="btn btn-primary btn-block"/>
    </form>
@endsection