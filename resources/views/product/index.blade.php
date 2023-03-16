@extends('layouts.app')

@section('title', 'Data Product')

@section('content')

<div class="container">
    <a href="/admin/products/create" class="btn btn-primary mb-3">Tambah Data</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <div>{{ $message }}</div>
        </div>
    @endif

    <div class="table-responsive">
        <table id="myTable" class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th style="width: 75px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($products as $product)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <img src="/image/{{ $product->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td class="text-center">
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</div>

@endsection