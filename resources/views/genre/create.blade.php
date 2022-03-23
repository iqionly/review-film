@extends('layouts.master')

@section('title')
    Tambah Data
@endsection

@section('content')
    <div>
        <form action="/genre" method="post">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Genre</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Genre...">
                @error('nama')
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