@extends('layouts.app')
@section('content')
<br>
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
    
		<div class="card">
			<h5 class="card-header">
            <a href="{{ route('item.index') }}" class="float-right btn btn-primary btn-floating">Cancel</a>
            <b>Ubah Data</b></h5>
			<form action="{{ route('item.update',$item->id) }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">

			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			<input type="hidden" name="id" value="{{ request()->get('id') }}">

			  		<div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
			  			<label class="control-label">Code</label>	
			  			<input type="text" name="code" class="form-control" value="{{ $item->code }}"  required>
                            @if ($errors->has('code'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('code') }}</strong>
                                </span>
                            @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('type_id') ? ' has-error' : '' }}">
                        <label for="inputType">Type</label>
                        <select name="type_id" id="inputType" class="form-control" required>  
                            <option value="{{$item->type_id}}">{{$item->Type->name}}</option>
                                @foreach ($type as $types)
                                    <option value="{{$types->id}}"> {{$types->name}} </option>
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
                                <option value="{{$item->size_id}}">{{$item->Size->name}}</option>
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
                                <option value="{{$item->unit_id}}">{{$item->Unit->name}}</option>
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
			  		
                    <div class="form-group {{ $errors->has('weight') ? ' has-error' : '' }}">
			  			<label class="control-label">Weight</label>	
			  			<input type="text" name="weight" class="form-control" value="{{ $item->weight }}"  required>
                            @if ($errors->has('weight'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('weight') }}</strong>
                                </span>
                            @endif
			  		</div>

                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
			  			<label class="control-label">Price</label>	
			  			<input type="number" name="price" class="form-control" value="{{ $item->price }}"  required>
                            @if ($errors->has('price'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('price') }}</strong>
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