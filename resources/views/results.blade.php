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


@section('scripts')

    <!--<script>
        $(document).ready(function (){
            if (navigator.geolocation){
                navigator.geolocation.getCurrentPosition(function(position){
                    console.log(position);
                });
            }
                
            else{
                console.log("geolocation is not supported");
            }
        });

        
    </script>-->

    <script>
        var products = {!! json_encode($product_search) !!};
        console.log(products);
        
        var elements = document.getElementsByClassName('meters');

        console.log(elements);

        for(var i=0; i<elements.length; i++){
            elements[i].innerHTML = i;
        }

    </script>

    <script>
        function calculateDistance(){

        }
    </script>

@endsection