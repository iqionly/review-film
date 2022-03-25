@extends('layouts.master')

@section('title')
    List Film
@endsection

@section('content')
    @push('styles')
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}" />

        {{-- CSRF META TOKEN --}}
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    @endpush

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-11">
            <a href="/film/create" class="btn btn-primary mb-2">Tambah</a>
        </div>
        <div class="col-1 text-right">
            <a href="/film/export" class="btn btn-info mb-2">Export</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table id="table-film" class="table table-bordered table-striped">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Poster</th>
                        <th>Judul</th>
                        <th>Genre</th>
                        <th>Tahun</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($query as $key=>$value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>Poster</td>
                            <td>{{ $value->judul }}</td>
                            <td>{{ $value->genre->nama }}</td>
                            <td>{{ $value->tahun }}</td>
                            <td>
                                <a onclick="showData('/film/{{ $value->id }}')" class="btn btn-info">Show</a>
                                <a href="/film/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                                <button type="button" class="btn btn-danger"
                                    onclick="showModal('/film/{{ $value->id }}')">DELETE</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No data</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Poster</th>
                        <th>Judul</th>
                        <th>Genre</th>
                        <th>Tahun</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    @push('scripts')
        <!-- SweetAlert2 -->
        <script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

        <script>
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            function showModal(link) {
                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: link,
                            type: 'DELETE',
                            data: {
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(result) {
                                swalWithBootstrapButtons.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                ).then(function() {
                                    window.location.reload()
                                })
                            },
                            error: function(result) {
                                swalWithBootstrapButtons.fire(
                                    'Gagal!',
                                    'Try again later.',
                                    'error'
                                ).then(function() {
                                    window.location.reload()
                                })
                            }
                        })
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Ufh.... Don\'t do that again :)',
                            'error'
                        )
                    }
                })
            }

            async function showData(link) {
                const inputValue = fetch(link)
                    .then(response => response.json())
                    .then(data => data[0])
                    .then((data) => {
                        Swal.fire(`${data.judul} <i>(${data.tahun})</i> <br>${data.ringkasan}<br>`)
                })
            }
        </script>

        <!-- DataTables  & Plugins -->
        <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

        <!-- Page specific script -->
        <script>
            $(function() {
                $('#table-film').DataTable();
            });
        </script>
    @endpush
@endsection
