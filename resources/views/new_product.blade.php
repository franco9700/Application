@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product data</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="get" action="{{ route('save_product') }}">
                        @csrf
    <!-- Nombre del producto    -->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="" required autofocus maxlength="30">
                            </div>
                        </div>
    <!-- Descripcion   -->
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="" required>
                            </div>
                        </div>

    <!-- Stock   -->
                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">{{ __('Stock (Test)') }}</label>

                            <div class="col-md-6">
                                <input id="stock" type="text" class="form-control" name="stock" value="" required>
                            </div>
                        </div>

    <!-- Precio   -->
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="" required>
                            </div>
                        </div>

    <!-- Imagen   -->
                        <div class="form-group row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                                <input id="img" type="file" class="" name="img" value="" required>
                            </div>
                        </div>

    <!-- Categoria   -->
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                                <input id="category" type="text" class="form-control" name="category_id" value="" required>
                            </div>
                        </div>

    <!-- Subsidiaria   -->
                        <div class="form-group row">
                            <label for="subsidiary" class="col-md-4 col-form-label text-md-right">{{ __('Subsidiary') }}</label>

                            <div class="col-md-6">
                                <input id="subsidiary" type="text" class="form-control" name="subsidiary_id" value="" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Save product') }}
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