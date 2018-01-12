@extends('layouts.store') 
@section('content')
<div class="container tope">
	<h4>Products</h4>
	<div class="row">
		<div class="col-lg-10">
			<div class="row">

				@foreach ($products as $product)
				
					<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
						<div class="tile">
							<img src="http://lorempixel.com/111/112/food/producto%201" alt="Compas" class="tile-image big-illustration rounded">
							<h3 class="tile-title">{{$product->name}}</h3>
							<p>{{$product->description}}</p>
							<a class="btn btn-primary btn-large btn-block" href="http://designmodo.com/flat"><i class="fa fa-shopping-cart" aria-hidden="true"></i> {{" - "}} $ {{$product->amount}} </a>
						</div>
					</div>
	
				@endforeach
				 

				</div>
            </div>
		</div>
	</div>
</div>
@endsection