@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <a href="/new_product"><button type="button" class="btn btn-primary">Nuevo producto</button></a>

            @if ($error)
                @foreach ($products as $product)
                <div class="card border-light mb-3" style="max-width:">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">
                                        {{$product->description}}
                                        <br>
                                        Precio: ${{ $product->price }}</p>
                                        
                                </div>
                                <div class="col" style="max-width: 10rem;">
                                    <img src="https://static.grainger.com/rp/s/is/image/Grainger/6CTF0_AS02?$zmmain$" alt="imagen de prueba" class="img-fluid">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-lg-10 col-md-8 col-sm-2">
                                    <button type="button" class="btn btn-warning"><link href="https://useiconic.com/open/#" rel="stylesheet">Boton</button>
                                </div>
                            </div>
                      </div>
                    </div>
                </div>
            @endforeach
            @else
                <h2>No hay productos registrados.</h2>
                <h4>Haz click <a href="/new_product">aqui</a> para agregar productos.</h4> 
            @endif

        
        </div>
    </div>
</div>
@endsection