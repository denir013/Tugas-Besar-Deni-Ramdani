@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"><br>
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
            @endif  
                <div class="card">
                    <div class="card-header">
                    <a href="{{ route('transaction.create') }}" class="float-right btn btn-primary btn-floating">New Transaction</a>
                    <h5><b>Transaction</b></h5>
                    </div>
                        <div class="row">
                             <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">                                 
                                        <table class="table">
                                            <thead class="thead-primary">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Date</th>
                                                    <th>Customer Name</th>
                                                    <th>Total Items</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($transaction as $data)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$data->date}}</td>
                                                    <td>{{$data->customer_name}}</td>
                                                    <td>{{$data->total_items}}</td>
                                                    <td>{{$data->Subtotal}}</td>                                                
                                                    <td>
                                                    <form action="{{ route('transaction.destroy', $data->id) }}"method="POST">
                                                        @csrf @method('delete')
                                                        <a href="{{ route('transaction.edit',$data->id) }}" class="btn btn-warning">Ubah</a>
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Menghapus Data?')">Hapus</button>
                                                    </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection