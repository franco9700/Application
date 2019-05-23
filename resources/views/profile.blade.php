@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ $user['name'] }}

                    @if ($user['user_type'] === 'consumer')
                    <h3>Wanna be a provider? Click here to register!
                        <a href="{{ route('provider_register') }}"><span class="badge badge-secondary">New</span></a>
                    </h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection