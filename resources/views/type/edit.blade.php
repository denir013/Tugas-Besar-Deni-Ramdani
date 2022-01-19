@extends('layouts.app')
@section('content')

<br>
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h5 class="card-header">
            <a href="{{ route('type.index') }}" class="float-right btn btn-primary btn-floating">Cancel</a>
            <b>Update Type</b></h5>
			<form action="{{ route('type.update',$type->id) }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			<input type="hidden" name="id" value="{{ request()->get('id') }}">
			  		<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			  			<label class="control-label">Type</label>	
			  			<input type="text" name="name" class="form-control" value="{{ $type->name }}"  required>
							@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
                        	@endif
			  			</div>
			  			<div class="form-group">
			  				<button type="submit" class="btn btn-success">Update</button>
			  			</div>
			  		</form>
			  	</div>
			</div>	
		</div>
	</div>
</div>
</section>
@endsection