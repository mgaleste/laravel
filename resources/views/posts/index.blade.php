@extends('layout')
@section('content')
   @forelse($posts as $post)

            <h3>
                <a href="{{ route('posts.show',['post'=>$post->id])}} ">{{ $post->title}}</a>
            </h3>
                
            <div class="mb-3">
                <a class="btn btn-primary" href="{{ route('posts.edit',['post'=>$post->id])}}" >Edit</a>
                <form class="d-inline" method="POST" action="{{ route('posts.destroy', ['post'=> $post->id] ) }}">
                @csrf
                @method('DELETE')
                <input type="submit" name="delete" value="Delete" class="btn btn-danger"/>
                </form>
            </div>

    @empty
        <h3>No Blog Posts Yet</h3>
   @endforelse
@endsection
