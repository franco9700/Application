@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <a href="/new_product" type="button" class="btn btn-success btn-large btn-block">New Product</a>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">


            @if ($error)
                @foreach ($products as $product)
                <div class="card border-light mb-3" style="max-width:">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title">{{ $product->name }}</h3>
                                    <hr>
                                    <p class="card-text">
                                        <div class="row">
                                            <div class="col-auto">
                                                {{$product->description}}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-lg-2 col-sm-6">
                                                <h5>Precio:</h5>
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <p>${{ $product->price }}</p>
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <h5>Stock:</h5>
                                            </div>
                                            <div class="col-lg-2 col-sm-6">
                                                <p>{{ $product->stock }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <h5>Category:</h5>
                                            </div>
                                            <div class="col">
                                                <p>{{ $product->category_id }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <h5>Subsidiary:</h5>
                                            </div>
                                            <div class="col">
                                                <p>{{ $product->subsidiary_id }}</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="col" style="max-width: 10rem;">
                                    <img src="https://static.grainger.com/rp/s/is/image/Grainger/6CTF0_AS02?$zmmain$" alt="imagen de prueba" class="img-fluid">
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col col-sm-3 col-md-4 col-lg-3">
                                    <button type="button" class="btn btn-warning btn-block disabled"><link href="#" rel="stylesheet">Edit</button>
                                </div>
                            </div>
                      </div>
                    </div>
                </div>
            @endforeach
            @else
                <h2>No products registered yet.</h2>
                <h4>Click <a href="/new_product">here</a> to add new products.</h4> 
            @endif

        
        </div>
    </div>
</div>
@endsection