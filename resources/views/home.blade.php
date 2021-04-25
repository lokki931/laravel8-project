@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-3">
                        <h2>{{ $post->title }}</h2>
                        <img src="{{ $post->img }}" width="200" alt="{{ $post->title }}">                    
                    </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection
