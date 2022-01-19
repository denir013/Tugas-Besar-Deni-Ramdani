@extends('layouts.app')
@section('content')

<br>
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h5 class="card-header">
            <a href="{{ route('size.index') }}" class="float-right btn btn-primary btn-floating">Back</a>
            <b>Add Size</b></h5>
				<form action="{{ route('size.store') }}" method="post">
					{{ csrf_field() }}
					<div class="card-body">
						<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
							<label>Type</label>
								<input type="text" class="form-control" name="name" required>
									@if ($errors->has('name'))
										<span class="help-block">
                                			<strong>{{ $errors->first('name') }}</strong>
                            			</span>
                        			@endif
							</div>
			  			<div class="form-group">
			  				<button type="button submit" class="btn btn-success btn-rounded btn-floating">Add</button>
			  			</div>
			  		</form>
			  	</div>
			</div>	
		</div>
	</div>
</div>
</section>
@endsection