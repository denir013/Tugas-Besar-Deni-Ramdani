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
                    <a href="{{ route('item.create') }}" class="float-right btn btn-primary btn-floating"> Tambah Data</a>
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
                                                    <th>Kode</th>
                                                    <th>Jenis</th>
                                                    <th>Ukuran</th>
                                                    <th>Satuan</th>
                                                    <th>Berat</th>
                                                    <th>Harga</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($item as $data)
                                                <tr>
                                                    <td>{{$no++}}</td>
                                                    <td>{{$data->code}}</td>
                                                    <td>{{$data->type}}</td>
                                                    <td>{{$data->size}}</td>
                                                    <td>{{$data->unit}}</td>
                                                    <td>{{$data->weight}}</td>
                                                    <td>{{$data->price}}</td>
                                                    
                                                    
                                                    <td>
                                                    <form action="{{ route('item.destroy', $data->id) }}"method="POST">
                                                        @csrf @method('delete')
                                                        <a href="{{ route('item.edit',$data->id) }}" class="btn btn-warning">Ubah</a>
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