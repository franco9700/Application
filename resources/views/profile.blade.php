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
                    <div class="row justify-content-center">
                        <div class="col-sm-2">
                            <h5>E-mail:</h5>
                        </div>
                        <div class="col-sm-4">
                            <p class="text-left">{{ $user['email'] }}</p>
                        </div>
                        <div class="col-sm-2">
                            <h5>Phone:</h5>
                        </div>
                        <div class="col-sm-4">
                            <p class="text-left">{{ $user['phone'] }}</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-2 ">
                            <h5>Birthday:</h5>
                        </div>
                        <div class="col-sm-4">
                            <p class="text-left">{{ $user['birthdate'] }}</p>
                        </div>
                        <div class="col-sm-2">
                            <h6>Neighborhood:</h6>
                        </div>
                        <div class="col-sm-4">
                            <p class="text-left">{{ $user['neighborhood'] }}</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-2 ">
                            <h5>County:</h5>
                        </div>
                        <div class="col-sm-4">
                            <p class="text-left">{{ $user['county'] }}</p>
                        </div>
                        <div class="col-sm-2 ">
                            <h5>User type:</h5>
                        </div>
                        <div class="col-sm-4">
                            <p class="text-left">{{ $user['user_type'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-3">
                        <a href="#edit" class="btn btn-primary ">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection