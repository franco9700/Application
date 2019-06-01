@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($error)
                        @include('partials.product')
                    @else
                        <h2>No se encontro tu producto.</h2>
                        <h4>Por favor revisa tu busqueda.</h4> 
                    @endif

        
        </div>
    </div>
</div>
@endsection