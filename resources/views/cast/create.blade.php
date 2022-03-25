@extends('layouts.master')

@section('title')
    Tambah Data
@endsection

@section('content')
    <div>
        <form action="/cast" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama..."
                    value="{{ old('nama') }}">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" name="umur" id="umur" placeholder="Masukan Umur..."
                    value="{{ old('umur') }}">
                @error('umur')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Biodata</label>
                <input type="text" class="form-control" name="bio" id="bio" placeholder="Masukan Biodata..."
                    value="{{ old('bio') }}">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Tambah" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
