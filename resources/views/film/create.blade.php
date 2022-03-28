@extends('layouts.master')

@section('title')
    Tambah Data
@endsection

@section('content')
    @push('styles')
        <!-- Select2 -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    @endpush
    <div>
        <form action="/film" method="post">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Film</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan Judul Film..."
                    value="{{ old('judul') }}">
                @error('judul')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- textarea -->
            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <textarea id="ringkasan" name="ringkasan" class="form-control" rows="3"
                    placeholder="Enter Ringakasan/Deskripsi...">{{ old('ringkasan') }}</textarea>
                @error('ringkasan')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tahun">Tahun Film</label>
                <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Masukan Tahun Film..."
                    value="{{ old('tahun') }}">
                @error('tahun')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gambar">Gambar Poster</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Image</span>
                    </div>
                    <div class="custom-file">
                        <input name="gambar" type="file" class="custom-file-input" id="gambar" aria-describedby="gambar">
                        <label class="custom-file-label" for="gambar">Pilih file</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="genre">Genre</label>
                <select class="form-control select2" style="width: 100%;" id="genre" name="genre">
                    @isset($genre)
                        @foreach ($genre as $item)
                            <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->nama }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
                <input type="submit" value="Tambah" class="btn btn-primary">
            </div>
        </form>
    </div>
    @push('scripts')
        <!-- Select2 -->
        <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>

        <script>
            $('.select2').select2({
                theme: 'bootstrap4'
            })
        </script>
    @endpush
@endsection
