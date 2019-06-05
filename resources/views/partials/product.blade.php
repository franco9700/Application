@foreach ($product_search as $product)
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
                            </div>
                    </div>
                    <div class="col" style="max-width: 10rem;">
                        <img src="https://static.grainger.com/rp/s/is/image/Grainger/6CTF0_AS02?$zmmain$" alt="imagen de prueba" class="img-fluid">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col col-lg-10 col-md-8 col-sm-2">
                        <button type="button" class="btn btn-warning disabled"><link href="#" rel="stylesheet">Add to shopping list</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach