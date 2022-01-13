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
                    <a href="{{ route('type.create') }}" class="float-right btn btn-primary btn-floating"> Tambah Data</a>
                    <h5><b>Data</b></h5>
                    </div>
                        <div class="row">
                             <div class="col-md-12">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="thead-primary">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Jenis</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($type as $data)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$data->name}}</td>
                                                    <td>
                                                    <form action="{{ route('type.destroy', $data->id) }}"method="POST">
                                                        @csrf @method('delete')
                                                        <a href="{{ route('type.edit',$data->id) }}" class="btn btn-warning">Ubah</a>
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