@extends('layouts.app')
@section('content')

<br>
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h5 class="card-header">
            <a href="{{ route('transaction.index') }}" class="float-right btn btn-primary btn-floating">Back</a>
            <b>Add Transaction</b></h5>
                <div class="row">
                <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                <form action="{{ route('transaction.store') }}" method="post">
				    {{ csrf_field() }}
				

					<div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
						<label>Item Code</label>
						<select name="code" id="code" class="form-control form-control-sm" required>
                            <option value="">Select</option>
                                    <option value=""></option>
                        </select>
					</div>
                    <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                        <label>Item Type</label>
                        <input class="form-control form-control-sm" type="text"  readonly>
                    </div>

                    <div class="form-group {{ $errors->has('size') ? ' has-error' : '' }}">
                        <label>Item Size</label>
                        <input class="form-control form-control-sm" type="text"  readonly>
                    </div>

                    <div class="form-group {{ $errors->has('unit') ? ' has-error' : '' }}">
                        <label>Item Unit</label>
                        <input class="form-control form-control-sm" type="text"  readonly>
                    </div>

                    <div class="form-group {{ $errors->has('weight') ? ' has-error' : '' }}">
                        <label>Item Weight</label>
                        <input class="form-control form-control-sm" type="text"  readonly>
                    </div>

                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                        <label>Item Price</label>
                        <input class="form-control form-control-sm" type="number"  readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                        <label>Total Price</label>
                        <input class="form-control form-control-sm" type="number"  readonly>
                    </div>
                    
			  		
			  		<div class="form-group">
			  			<button type="button submit" class="btn btn-success btn-rounded btn-floating">Add</button>
			  		</div>
			  	</form>
                        </div>
                        </div>
                        </div>                   
                        <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                        
                    <div class="form-group {{ $errors->has('total') ? ' has-error' : '' }}">
                        <label>Total Bayar</label>
                        <input class="form-control form-control-sm" type="number"  readonly>
                    </div>

                    <div class="form-group">
                        <label for="bayar">Bayar</label>
                        <input type="number" class="form-control form-control-sm" id="bayar" aria-describedby="bayar">
                    </div>
                    
                    <div class="form-group">
                        <label>Kembali</label>
                        <input class="form-control form-control-sm" type="number"  readonly>
                    </div>
                        </div>
                        </div>
                    </div>
                    </div>
			    </div> 
			</div>	
		</div>
	</div>
</div>
</section>
@endsection