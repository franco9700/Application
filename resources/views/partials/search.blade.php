<form action="{{ route('results') }}" method="get" accept-charset="utf-8">
	@csrf

	<div class="input-group">
	    <input name="product_name" type="text" class="form-control" placeholder="Search bar" aria-label="Search bar" aria-describedby="basic-addon2">
	    <div class="input-group-append">
	        <button class="btn btn-primary" type="button submit">Search</button>
	    </div>
	</div>
</form>
	
