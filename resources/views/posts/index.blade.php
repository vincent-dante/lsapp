@extends('layouts.app')

@section('content')
  <h1>Post</h1>
  @if (count($posts) > 0 )
      @foreach ($posts as $post)
          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h5><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h5>
              </div>
            </div>
            <div class="card-footer text-muted">
              <small>{{ $post->created_at }}</small>
            </div>
          </div>
      @endforeach
      <br>
      {{ $posts->links() }} {{-- for pagination --}}
  @else 
    <p>No post found!</p>
  @endif
@endsection