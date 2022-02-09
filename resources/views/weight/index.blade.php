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
                    <a href="{{ route('weight.create') }}" class="float-right btn btn-primary btn-floating"> Add Weight</a>
                    <h5><b>Weight</b></h5>
                    </div>
                        <div class="row">
                             <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-primary">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Weight</th>
                                                    <td align=center><b>Action</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($weight as $data)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$data->name}}</td>
                                                    <td align=center>
                                                        <form action="{{ route('weight.destroy', $data->id) }}"method="POST">
                                                            @csrf @method('delete')
                                                            <a href="{{ route('weight.edit',$data->id) }}" class="btn btn-warning"><img height="25" width="25" src="{{ ('img/update.png ') }}"></a>
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Ingin Menghapus Weight?')"><img height="25" width="25" src="{{ ('img/delete.png ') }}"></button>
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