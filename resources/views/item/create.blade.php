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

                      <div class="form-group {{ $errors->has('size') ? ' has-error' : '' }}">
                      <label for="inputSize">Size</label>
                            <select name="size" id="inputSize" class="form-control" required>
                                <option selected></option>
                                <option value="besar">Besar</option>
                                <option value="sedang">Sedang</option>
                                <option value="kecil">Kecil</option>
                                <option value="campur">Campur</option>
                            </select>
			  			@if ($errors->has('size'))
                            <span class="help-block">
                                <strong>{{ $errors->first('size') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('unit') ? ' has-error' : '' }}">
                    <label for="inputUnit">Unit</label>
                            <select name="unit" id="inputUnit" class="form-control" required>
                                <option selected></option>
                                <option value="kresek">Kresek</option>
                                <option value="karung">Karung</option>
                            </select>
			  			@if ($errors->has('unit'))
                            <span class="help-block">
                                <strong>{{ $errors->first('unit') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
                    <div class="form-group {{ $errors->has('weight') ? ' has-error' : '' }}">
			  			<label class="control-label">Weight</label>	
			  			<input type="text" class="form-control" name="weight" required>
			  			@if ($errors->has('weight'))
                            <span class="help-block">
                                <strong>{{ $errors->first('weight') }}</strong>
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