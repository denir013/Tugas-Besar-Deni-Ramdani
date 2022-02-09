@extends('layouts.app')
@section('content')

<br>
<section class="page-content container-fluid">
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<h5 class="card-header">
            <b>Add Transaction</b></h5>
                <div class="row">
                <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                <form action="{{ route('transaction.store') }}" method="post">
				    {{ csrf_field() }}
				
                    

					<div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
						<label>Item Code</label>
						<select name="selectcode" id="select_code" class="form-control form-control-sm" required>
                            <option value="">KBK04</option>
                                @foreach ($item as $items)
                                    <option value="{{$items->id}}">{{$items->code}}</option>
                                @endforeach
                        </select>
                        @if ($errors->has('code'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('code') }}</strong>
                                </span>
                            @endif
					</div>
                    <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                        <label>Item Type</label>
                        <input class="form-control form-control-sm" type="text"  value="Kayu" readonly>
                    </div>

                    <div class="form-group {{ $errors->has('size') ? ' has-error' : '' }}">
                        <label>Item Size</label>
                        <input class="form-control form-control-sm" type="text" value="Besar" readonly>
                    </div>

                    <div class="form-group {{ $errors->has('unit') ? ' has-error' : '' }}">
                        <label>Item Unit</label>
                        <input class="form-control form-control-sm" type="text" value="Kresek" readonly>
                    </div>

                    <div class="form-group {{ $errors->has('weight') ? ' has-error' : '' }}">
                        <label>Item Weight</label>
                        <input class="form-control form-control-sm" type="text" value="4 kg" readonly>
                    </div>

                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                        <label>Item Price</label>
                        <input class="form-control form-control-sm" type="number" value="25000" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantity</label>
                        <input type="number" class="form-control form-control-sm" value="2">
                    </div>
                    
                    <div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                        <label>Total Price</label>
                        <input class="form-control form-control-sm" type="number" value="50000" readonly>
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
                        
                    <div class="form-group">
                        <label>Date</label>
                        <input class="form-control form-control-sm" type="date" value="2022-02-09">
                    </div>

                    <div class="form-group">
                        <label>Customer Name</label>
                        <input class="form-control form-control-sm" type="text" value="Deni Ramdani">
                    </div>

                    <div class="form-group">
                        <label>Subtotal</label>
                        <input class="form-control form-control-sm" type="number"  readonly value="50000"> 
                    </div>

                    <div class="form-group">
                        <label for="bayar">Pay</label>
                        <input type="number" class="form-control form-control-sm" id="bayar" aria-describedby="bayar" value="50000">
                    </div>
                    
                    <div class="form-group">
                        <label>Kembali</label>
                        <input class="form-control form-control-sm" type="number" value="0"  readonly>
                    </div>
                    <div class="form-group">
			  			<button type="button submit" class="btn btn-success btn-rounded btn-floating">Count</button>
			  		</div>
                        </div>
                        </div>
                        
                    </div>

                    

                    </div>
                    <div class="row">
                             <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-primary">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Code</th>
                                                    <th>Item Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total Price</th>
                                                    <td align=center><b>Action</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>1</td>
                                                <td>KBK04</td>
                                                <td>25000</td>
                                                <td>2</td>     
                                                <td>50000</td>
                                                <td><button type="submit" class="btn btn-danger" onclick="return confirm('Menghapus Data?')">Hapus</button></td>
              
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                        </br>
                                        </br>
                                        </br>
                                        <div class="form-group">
			  			                    <button type="button submit" class="btn btn-success btn-rounded btn-floating">Finish</button>
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