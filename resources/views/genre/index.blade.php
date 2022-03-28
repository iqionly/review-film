@extends('layouts.master')

@section('title')
    List Genre
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

                        <a href="/genre/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/genre/{{ $value->id }}" method="post" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger btn-delete" value="DELETE">
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

            $('.btn-delete').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                const deleteModal = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                deleteModal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        deleteModal.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                })
            });
        </script>
    @endpush
@endsection
