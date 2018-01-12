@extends('layouts.store') @section('content')

<div class="container tope">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="jumbotron">
				<h1>Wellcome!</h1>
 
				<p>
                        Be the first to find out about our best offers and launches.</p>
				<p>
					<a class="btn btn-lg btn-primary" href="{{ url('/product') }}" role="button">View our products</a>
				</p>
			</div>
		</div>
	</div>
</div>
@endsection