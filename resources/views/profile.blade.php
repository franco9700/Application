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

                    Here's your profile information pal.

                    <h3>Wanna be a provider? Click here to register!<span class="badge badge-secondary">New</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection