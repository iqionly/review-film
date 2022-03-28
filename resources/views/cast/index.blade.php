@extends('layouts.master')

@section('title')
    List Casts
@endsection

@section('content')
    @push('styles')
        {{-- CSRF META TOKEN --}}
        <meta name="csrf-token" content="{{ csrf_token() }}" />

    @endpush

    <div class="row">
        <div class="col-11">
            <a href="/cast/create" class="btn btn-primary mb-2">Tambah</a>
        </div>
        <div class="col-1">
            <a href="/cast/export" class="btn btn-info mb-2">Export</a>
        </div>
    </div>
    <div class="row">
        <div class="col">

            {{-- Table Cast --}}
            <table class="table" id="table-cast">
                <thead class="thead-light">
                    <tr>
                        <th class="col-1">#</th>
                        <th class="col-2">Nama</th>
                        <th class="col-1">Umur</th>
                        <th class="col-4">Bio</th>
                        <th class="col-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($casts as $key=>$value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value->nama }}</td>
                            <td>{{ $value->umur }}</td>
                            <td class="text-truncate" style="max-width: 300px">{{ $value->bio }}</td>
                            <td>
                                {{-- <form action="/cast/{{ $value->id }}" method="post"> --}}
                                <a href="/cast/{{ $value->id }}" class="btn btn-info">Show</a>
                                <a href="/cast/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                                <button type="button" class="btn btn-danger" value="{{ $value->id }}"
                                    onclick="showModal('/cast/{{ $value->id }}')">DELETE</button>
                                {{-- </form> --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">No data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>

    @push('scripts')
        <!-- SweetAlert2 -->
        {{-- <script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script> --}}

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
        </script>

        <!-- DataTables  & Plugins -->
        <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

        <!-- Page specific script -->
        <script>
            $(function() {
                $('#table-cast').DataTable();
            });
        </script>
    @endpush
@endsection
