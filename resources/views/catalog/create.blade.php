@extends('layouts.app')

@section('title', 'Data Catalog')

@section('content')

<div class="container">
    <a href="/admin/catalogs" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('catalogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @error('title')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                @error('slug')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="Slug">
                </div>
                @error('description')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                @error('variation')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Variasi</label>
                    <textarea name="variation" id="" cols="30" rows="5" class="form-control" placeholder="Variasi"></textarea>
                </div>
                @error('size')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Ukuran</label>
                    <textarea name="size" id="" cols="30" rows="5" class="form-control" placeholder="Ukuran"></textarea>
                </div>
                @error('image')
                    <small style="color:red">{{ $message }}</small>
                @enderror
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

<script>
    $('#title').change(function(e) {
      $.get('{{ route('catalogs.checkSlug') }}',
        { 'title':$(this).val() },
        function( data ) {
          $('#slug').val(data.slug);
        }
      );
    });
</script>

@endsection