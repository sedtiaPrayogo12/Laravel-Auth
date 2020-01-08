@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::guest())
                        Hello, stranger! <a href="{{ route('login') }}">Login</a>
                        or <a href="{{ route('register') }}">Register</a>.
                        @else
                        Welcome back, {{ Auth::user()->name }}!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
