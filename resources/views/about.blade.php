@extends('layouts.app')

@section('title', 'Data Tentang')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <strong>Berhasil</strong>
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="/admin/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @error('title')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $about->title }}">
                </div>
                @error('subtitle')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Sub Judul</label>
                    <textarea name="subtitle" id="" cols="30" rows="3" class="form-control" placeholder="Deskripsi">{{ $about->subtitle }}</textarea>
                </div>
                @error('description_1')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi 1</label>
                    <textarea name="description_1" id="" cols="30" rows="5" class="form-control" placeholder="Deskripsi">{{ $about->description_1 }}</textarea>
                </div>
                @error('description_2')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi 2</label>
                    <textarea name="description_2" id="" cols="30" rows="5" class="form-control" placeholder="Deskripsi">{{ $about->description_2 }}</textarea>
                </div>
                @error('vision')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Visi</label>
                    <textarea name="vision" id="" cols="30" rows="3" class="form-control" placeholder="Visi">{{ $about->vision }}</textarea>
                </div>
                @error('mission_1')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Misi 1</label>
                    <textarea name="mission_1" id="" cols="30" rows="3" class="form-control" placeholder="Misi 1">{{ $about->mission_1 }}</textarea>
                </div>
                @error('mission_2')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Misi 2</label>
                    <textarea name="mission_2" id="" cols="30" rows="3" class="form-control" placeholder="Misi 2">{{ $about->mission_2 }}</textarea>
                </div>
                @error('mission_3')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Misi 3</label>
                    <textarea name="mission_3" id="" cols="30" rows="3" class="form-control" placeholder="Misi 3">{{ $about->mission_3 }}</textarea>
                </div>
                @error('mission_4')
                    <small style="color:red">{{ $message }}</small>
                @enderror
                <div class="form-group">
                    <label for="">Misi 4</label>
                    <textarea name="mission_4" id="" cols="30" rows="3" class="form-control" placeholder="Misi 4">{{ $about->mission_4 }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection