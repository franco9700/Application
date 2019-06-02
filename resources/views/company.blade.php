@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
	<h1>compañia: {{ $company->name }}</h1>

	<div>
		<button type="button" class="btn btn-primary">Agregar productos a tu compañia</button>
	</div>

	<div>
		<a  href="{{ route('subsidiary_register') }}"><button type="button" class="btn btn-primary">Agregar una subsidiaria</button></a>
	</div>
	
</div>

	@if($error)
		@foreach ($subsidiaries as $subsidiary)
		    <div class="container">
			    <div class="row justify-content-center">
			        <div class="col-md-8">
			            <div class="card">
			                <div class="card-header">{{ $subsidiary->name }}</div>

			                <div class="card-body">

			                    Direccion: {{ $subsidiary->address }}

			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		@endforeach
	@else
		<div class="row justify-content-center">
			No tienes subsidiarias
		</div>
	@endif
@endsection