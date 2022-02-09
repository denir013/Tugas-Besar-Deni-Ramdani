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
                    
                    <a href="{{ route('item.create') }}" class="float-right btn btn-primary btn-floating"> Add Item</a>
                    <h5><b>Item</b></h5>
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
                                                    <th>Type</th>
                                                    <th>Size</th>
                                                    <th>Unit</th>
                                                    <th>Weight</th>
                                                    <th>Price</th>
                                                    <td align=center><b>Action</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($item as $data)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$data->code}}</td>
                                                    <td>{{$data->Type->name}}</td>
                                                    <td>{{$data->Size->name}}</td>
                                                    <td>{{$data->Unit->name}}</td>
                                                    <td>{{$data->Weight->name}}</td>
                                                    <td>{{$data->price}}</td>
                                                    
                                                    <td align=center>
                                                        <form action="{{ route('item.destroy', $data->id) }}"method="POST">
                                                            @csrf @method('delete')
                                                            <a href="{{ route('item.edit',$data->id) }}" class="btn btn-warning"><img height="25" width="25" src="{{ ('img/update.png ') }}"></a>
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Ingin Menghapus Item?')"><img height="25" width="25" src="{{ ('img/delete.png ') }}"></button>
                                                            
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