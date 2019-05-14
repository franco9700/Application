@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Results</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-stripped">
                    	<thead>
                    		<td>Name</td>
                    		<td>Category</td>
                    		<td>Stock</td>
                    		<td>Price</td>
                    		<td>Subsidiaries</td>
                    	</thead>
                    	<tbody>
                    		@foreach ($product_search as $product)
                    		<tr>
	                    		<td>{{ $product->name }}</td>
	                    		<td>{{ $product->category->description }}</td>
	                    		<td>{{ $product->stock }}</td>
	                    		<td>{{ $product->price }}</td>
	                    		<td>{{ $product->subsidiary->name }}</td>

	                    	</tr>

                    		@endforeach
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

