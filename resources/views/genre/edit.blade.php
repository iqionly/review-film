@extends('layouts.master')

@section('title')
    Edit Genre {{ $genre->nama }}
@endsection

@section('content')
    <div>
        @error('status')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

        <form action="/genre/{{ $genre->id }}" method="post">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama">Nama Genre</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan Nama Genre..."
                    value="{{ $genre->nama }}">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" value="Edit" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
