@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company data</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="get" action="{{ route('company_register') }}">
                        @csrf
    <!-- Nombre de la compañia    -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus maxlength="30">
                            </div>
                        </div>
    <!-- RFC    -->
                        <div class="form-group row">
                            <label for="rfc" class="col-md-4 col-form-label text-md-right">{{ __('RFC') }}</label>

                            <div class="col-md-6">
                                <input id="rfc" type="text" class="form-control" name="rfc" value="" required maxlength="15">
                            </div>
                        </div>
    <!-- Imagen de perfil   -->
                        <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Profile picture') }}</label>

                            <div class="input-group col-md-6 custom-file">
                                <input id="picture" type="file" class="" name="img" value=""  maxlength="15">
                            </div>

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register as a provider') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection