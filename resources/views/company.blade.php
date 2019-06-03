@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-6">
				<p>My company:</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h1>{{ $company->name }}</h1>
			</div>
		</div>
		<hr>
		<div class="row justify-content-around">
			<div class="col">
				<h4>My subsidiaries:</h4>
			</div>
			<div class="col-md-8 "></div>
			<div class="col">
				<a type="button" class="btn btn-warning" href="{{ route('subsidiary_register') }}">
				Add a subsidiary
				</a>
			</div>
		</div>
		<br>
		<div class="row">
			@if($error)
				@foreach ($subsidiaries as $subsidiary)
				    <div class="container">
					    <div class="row justify-content-center">
					        <div class="col-md-10">
					            <div class="card border-light">
					                <div class="card-body">
					                	<h5 class="card-title">{{ $subsidiary->name }}</h5>
					                    <div class="card-text">
					                    	<div class="row">
					                    		<div class="col-sm-3">
					                    			<h5 class="text-rigth">Address:</h5>	
					                    		</div>
					                    		<div class="col">
					                    			<p>{{ $subsidiary->address }}</p>
					                    		</div>
					                    	</div>				                    	
					                    </div>
					                    <div class="row justify-content-end">
					                    	<div class="col-sm-4">
								                <div class="card-text text-rigth">
													<button type="button" class="btn btn-warning">Add products</button>
								                </div>
					                    	</div>
					                    </div>
					                    <br>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				@endforeach
			@else
				<div class="row justify-content-center">
					You don't have any subsidiaries.
				</div>
			@endif
		</div>
	</div>
@endsection
</div>