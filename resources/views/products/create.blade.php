@extends('layouts.store') @section('content')

<div class="container tope">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create Product</div>

				<div class="panel-body">
					<form class="form-horizontal" action="/create" method="post" enctype="multipart/form-data">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> 
                                @if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
							<label for="amount" class="col-md-4 control-label">Amount</label>

							<div class="col-md-6">
                                <input id="amount" type="number" class="form-control" name="amount" value="{{ old('amount') }}" required> 
                                @if ($errors->has('amount'))
								<span class="help-block">
									<strong>{{ $errors->first('amount') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
							<label for="description" class="col-md-4 control-label">Description</label>
							<div class="col-md-6">
                                <textarea name="description" id="description" class="form-control" cols="30" rows="3">{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
								<span class="help-block">
									<strong>{{ $errors->first('description') }}</strong>
								</span>
								@endif
							</div>
                        </div>
                        <div class="form-group{{ $errors->has('images') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Image</label>
                                <div class="col-md-6">
                                    <input type="file" name="images[]" multiple />
                                </div>
                            </div>
                        
                        <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add Product
                                    </button>

                                </div>
                            </div>

					</form>
				</div>

			</div>
		</div>
	</div>
</div>
</div>

@endsection