@foreach ($product_search as $product)
    <div class="card border-light mb-3" style="max-width:">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <hr>
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
                        <button type="button" class="btn btn-warning"><link href="https://useiconic.com/open/#" rel="stylesheet">Agregar a la lista</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach