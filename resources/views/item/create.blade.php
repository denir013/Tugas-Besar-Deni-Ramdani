@extends('layouts.app')
@section('content')

<br>
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h5 class="card-header">
            <a href="{{ route('item.index') }}" class="float-right btn btn-primary btn-floating">Kembali</a>
            <b>Tambah Data</b></h5>
			<form action="{{ route('item.store') }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">

					<div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
						<label>Kode</label>
						<input type="text" class="form-control" name="code" required>
						@if ($errors->has('code'))
							<span class="help-block">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
					</div>

                    <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                        <label for="inputType">Jenis</label>
                            <select name="type" id="inputType" class="form-control" required>
                                <option selected></option>
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
                                <option selected></option>
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
                                <option selected></option>
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
			  			<input type="text" class="form-control" name="weight" required>
			  			@if ($errors->has('weight'))
                            <span class="help-block">
                                <strong>{{ $errors->first('weight') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="number" class="form-control" name="price" required>
			  			@if ($errors->has('price'))
                            <span class="help-block">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
                    

			  		<div class="form-group">
			  			<button type="button submit" class="btn btn-success btn-rounded btn-floating">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
</section>
@endsection