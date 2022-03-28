@extends('layouts.master')

@section('title')
    List Film
@endsection

@section('content')
    @push('styles')
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

        <!-- Page specific script -->
        <script>
            $(function() {

                var table = $('#table-film').DataTable({
                    processing: true,
                    serverSide: true,
                    responsive: true,
                    ordering: false,
                    ajax: "{{ route('film.index') }}",
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex'
                        },
                        {
                            data: 'judul',
                            name: 'judul'
                        },
                        {
                            data: 'ringkasan',
                            name: 'ringkasan'
                        },
                        {
                            data: 'genre',
                            name: 'genre'
                        },
                        {
                            data: 'tahun',
                            name: 'tahun'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: true,
                            searchable: true
                        },
                    ],
                })

            });

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
    @endpush
@endsection
