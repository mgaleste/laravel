@extends('layout')
@section('content')
    <form method="POST" action="{{ route('posts.update', ['post'=> $post->id] ) }}">
        @csrf
        @method('PUT')
        @include('posts.partials.form')
        <input type="submit" name="update" value="Update" class="btn btn-primary btn-block"/>
    </form>
@endsection