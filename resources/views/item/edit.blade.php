@extends('layouts.app')
@section('content')
<br>
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
    
		<div class="card">
			<h5 class="card-header">
            <a href="{{ route('item.index') }}" class="float-right btn btn-primary btn-floating">Batal</a>
            <b>Ubah Data</b></h5>
			<form action="{{ route('item.update',$item->id) }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">

			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
        			<input type="hidden" name="id" value="{{ request()->get('id') }}">

			  		<div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
			  			<label class="control-label">Kode</label>	
			  			<input type="text" name="code" class="form-control" value="{{ $item->code }}"  required>
			  			@if ($errors->has('code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                        <label for="inputType">Jenis</label>
                        <select name="type" id="inputType" class="form-control" required>
                        <option selected>{{ $item->type }}</option>
                                <option value="kayu">kayu</option>
                                <option value="batok">batok</option>
                            </select>
			  			@if ($errors->has('type'))
                            <span class="help-block">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                        @endif
			  		</div>

                     
                    <div class="form-group {{ $errors->has('size') ? ' has-error' : '' }}">
                        <label for="inputSize">Ukuran</label>
                        <select name="size" id="inputSize" class="form-control" required>
                                <option selected>{{ $item->size }}</option>
                                <option value="besar">besar</option>
                                <option value="sedang">sedang</option>
                                <option value="kecil">kecil</option>
                                <option value="campur">campur</option>
                            </select>
			  			@if ($errors->has('size'))
                            <span class="help-block">
                                <strong>{{ $errors->first('size') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('unit') ? ' has-error' : '' }}">
                    <label for="inputUnit">Satuan</label>
                            <select name="unit" id="inputUnit" class="form-control" required>
                                <option selected>{{ $item->unit }}</option>
                                <option value="kresek">kresek</option>
                                <option value="karung">karung</option>
                            </select>
			  			@if ($errors->has('unit'))
                            <span class="help-block">
                                <strong>{{ $errors->first('unit') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
                    <div class="form-group {{ $errors->has('weight') ? ' has-error' : '' }}">
			  			<label class="control-label">Berat</label>	
			  			<input type="text" name="weight" class="form-control" value="{{ $item->weight }}"  required>
			  			@if ($errors->has('weight'))
                            <span class="help-block">
                                <strong>{{ $errors->first('weight') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="number" name="price" class="form-control" value="{{ $item->price }}"  required>
			  			@if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-success">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
</section>
@endsection