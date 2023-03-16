@extends('layouts.app')

@section('title', 'Data Catalog')

@section('content')

<div class="container">
    <a href="/admin/catalogs" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('catalogs.update', $catalog->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @error('title')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $catalog->title }}">
                </div>
                @error('slug')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="Slug" value="{{ $catalog->slug }}">
                </div>
                @error('description')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $catalog->description }}</textarea>
                </div>
                @error('variation')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Variasi</label>
                    <textarea name="variation" id="" cols="30" rows="5" class="form-control" placeholder="Variasi">{{ $catalog->variation }}</textarea>
                </div>
                @error('size')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Ukuran</label>
                    <textarea name="size" id="" cols="30" rows="5" class="form-control" placeholder="Ukuran">{{ $catalog->size }}</textarea>
                </div>
                @error('image')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <img src="/image/{{ $catalog->image }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection