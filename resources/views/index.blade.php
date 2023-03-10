@extends('master')
@section('title') Sample Blog Home @endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card my-4">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-content-center">
                            <div class="">
                                <h1 class="mb-0">Hello ....</h1>
                                <p class="mb-0 text-black-50">What's on your mind?</p>
                            </div>
                            <div class="">
                                <a href="{{ route('post.create') }}" class="btn btn-lg btn-outline-primary">Create Post</a>
                            </div>
                        </div>
                    </div>
                </div>

                        @if(session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                            @endif

                        @foreach($posts as $post)
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4 class="card-title fw-bold">{{ $post->title }}</h4>
                                    <p class="card-text text-black-50"> {{ Str::words($post->description,20,'>>>') }}</p>

                                    <div class="d-flex justify-content-between">
                                        <p> {{ $post->created_at->format("j F Y | H : i A") }}</p>
                                        <div>

                                            <form action="{{ route('post.destroy',$post->id) }}" class="d-inline-block" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-danger">Del</button>
                                            </form>
                                            <a href="{{ route('post.edit',$post->id) }}" class="btn btn-outline-info">Edit</a>
                                            <a href="{{ route('post.show',$post->id) }}" class="btn btn-outline-primary">See More</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                <div>
                     {{$posts->links()}}   {{-- for pagination ui --}}
                </div>

            </div>
        </div>
    </div>

@endsection
