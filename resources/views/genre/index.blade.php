@extends('layouts.master')

@section('title')
    List Casts
@endsection

@section('content')
    @push('styles')
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}" />
    @endpush

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <a href="/genre/create" class="btn btn-primary mb-2">Tambah</a>
    <table id="table-genre" class="table table-bordered table-striped">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Genre</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genres as $key=>$value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>
                        <form action="/genre/{{ $value->id }}" method="post">
                            <a href="/genre/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="DELETE">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No data</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Genre</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

    @push('scripts')
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

        <!-- Page specific script -->
        <script>
            $(function() {
                $('#table-genre').DataTable();
            });
        </script>
    @endpush
@endsection
