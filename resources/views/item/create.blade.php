@extends('layouts.app')
@section('content')

<br>
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h5 class="card-header">
            <a href="{{ route('item.index') }}" class="float-right btn btn-primary btn-floating">Back</a>
            <b>Add Item</b></h5>
			<form action="{{ route('item.store') }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">

					<div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
						<label>Code</label>
						<input type="text" class="form-control" name="code" required>
                            @if ($errors->has('code'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('code') }}</strong>
                                </span>
                            @endif
					</div>

                    <div class="form-group {{ $errors->has('type_id') ? ' has-error' : '' }}">
                        <label for="inputType">Type</label>
                        <select name="type_id" id="inputType" class="form-control" required>
                            <option value="">Select Type</option>
                                @foreach ($type as $types)
                                    <option value="{{$types->id}}">{{$types->name}}</option>
                                @endforeach
                        </select>
                            @if ($errors->has('type_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type_id') }}</strong>
                                </span>
                            @endif
			  		</div>

                    <div class="form-group {{ $errors->has('size_id') ? ' has-error' : '' }}">
                        <label for="inputSize">Size</label>
                        <select name="size_id" id="inputSize" class="form-control" required>
                            <option value="">Select Size</option>
                                @foreach ($size as $sizes)
                                    <option value="{{$sizes->id}}">{{$sizes->name}}</option>
                                @endforeach
                        </select>
                            @if ($errors->has('size_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('size_id') }}</strong>
                                </span>
                            @endif
			  		</div>

                    <div class="form-group {{ $errors->has('unit_id') ? ' has-error' : '' }}">
                        <label for="inputUnit">Unit</label>
                        <select name="unit_id" id="inputUnit" class="form-control" required>
                            <option value="">Select Unit</option>
                                @foreach ($unit as $units)
                                    <option value="{{$units->id}}">{{$units->name}}</option>
                                @endforeach
                        </select>
                            @if ($errors->has('unit_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('unit_id') }}</strong>
                                </span>
                            @endif
			  		</div>
			  		
                      <div class="form-group {{ $errors->has('weight_id') ? ' has-error' : '' }}">
                        <label for="inputWeight">Weight</label>
                        <select name="weight_id" id="inputWeight" class="form-control" required>
                            <option value="">Select Weight</option>
                                @foreach ($weight as $weights)
                                    <option value="{{$weights->id}}">{{$weights->name}}</option>
                                @endforeach
                        </select>
                            @if ($errors->has('weight_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('weight_id') }}</strong>
                                </span>
                            @endif
			  		</div>

                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
			  			<label class="control-label">Price</label>	
			  			<input type="number" class="form-control" name="price" required>
                            @if ($errors->has('price'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('price') }}</strong>
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