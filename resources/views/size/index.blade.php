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
                    <a href="{{ route('size.create') }}" class="float-right btn btn-primary btn-floating"> Add Size</a>
                    <h5><b>Size</b></h5>
                    </div>
                        <div class="row">
                             <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-primary">
                                                <tr>
                                                    <th>No</th>
                                                    <th>SIze</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($size as $data)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$data->name}}</td>
                                                    <td>
                                                        <form action="{{ route('size.destroy', $data->id) }}"method="POST">
                                                            @csrf @method('delete')
                                                            <a href="{{ route('size.edit',$data->id) }}" class="btn btn-warning">Update</a>
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Menghapus Data?')">Delete</button>
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