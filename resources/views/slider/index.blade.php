@extends('layouts.app')

@section('title', 'Data Slider')

@section('content')

<div class="container">
    <a href="/admin/sliders/create" class="btn btn-primary mb-3">Tambah Data</a>
    
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
                    <th>Judul</th> <!-- @sortablelink('title', 'Judul') -->
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th style="width: 75px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                    // $i = 1 + (($sliders->currentPage()-1) * $sliders->perPage());
                @endphp
                @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->description }}</td>
                    <td>
                        <img src="/image/{{ $slider->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td class="text-center">
                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
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
    {{--
    <div class="float-left">
        Showing
        {{ $sliders->firstItem() }}
        to
        {{ $sliders->lastItem() }}
        of
        {{ $sliders->total() }}
        entries
    </div>
    <div class="float-right"> 
        <!-- {{ $sliders->links() }} -->
        {!! $sliders->appends(Request::except('page'))->render() !!} <!-- Sorting di pagination -->
    </div>
    --}}
</div>

@endsection