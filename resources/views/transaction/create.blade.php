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
			<form action="{{ route('transaction.store') }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">

					<div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
						<label>Item Code</label>
						<select name="code" id="code" class="form-control" required>
                            <option value="">Select</option>
                                
                                    <option value=""></option>
                                
                        </select>
                            
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