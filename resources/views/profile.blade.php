@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h3>{{ $user['name'] }}</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        @if ($user['user_type'] === 'consumer')
        <div class="card border-light w-75">
            
            <div class="card-body">
                <a href="{{ route('provider_register') }}">
                    <h3>Wanna be a provider? Click here to register!
                        <span class="badge badge-secondary">New</span>
                    </h3>
                </a>
            </div>

        </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <div class="card border-light w-75">
            <div class="card-body">
                    
                <div class="card-title">
                    <h3>Here your information</h3>
                </div>
                <div class="card-text">
                    Aquí información general del usuario
                    <p>{{ $user['email'] }}</p>
                    <p>{{ $user['birthday'] }}</p>
                    <p>{{ $user['phone'] }}</p>
                    <p>{{ $user['neighborhood'] }}</p>
                    <p>{{ $user['county'] }}</p>
                    <p>{{ $user['neighborhood'] }}</p>
                    <p>{{ $user['user_type'] }}</p>
                </div>
                <div class="row">
                    
                    <div class="col-sm-3">
                        <a href="#" class="btn btn-primary">Edit</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection