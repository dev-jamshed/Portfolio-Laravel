@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">
        <div class="row page-titles mb-4 py-3">
            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Pricings</h3>
                <div>
                    <a href="{{ route('admin.pricings.create') }}" class="btn btn-primary me-3"><i class="fas fa-plus me-2"></i>Create New Pricing</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="data-table" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Base</th>
                                        <th>Features</th>
                                        <th>Create Date</th>
                                        <th>Update Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data will be populated by DataTables -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    let table;
    $(document).ready(function() {
        table = $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.pricings.data') }}",
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'price', name: 'price' },
                { data: 'base', name: 'base' },
                { data: 'features', name: 'features', render: function(data) {
                    return data.map(feature => `<span class="badge bg-primary">${feature.feature}</span>`).join(' ');
                }},
                { data: 'created_at' },
                { data: 'updated_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            order: [
                [0, 'desc']
            ],
            language: {
                paginate: {
                    next: '<i class="fa fa-angle-right"></i>',
                    previous: '<i class="fa fa-angle-left"></i>'
                }
            },
            lengthMenu: [
                [10, 25, 50, 100, 200],
                [10, 25, 50, 100, 200]
            ],
            pageLength: 10
        });
    });

    function destroy(id) {
        var button = document.querySelector(`button[data-delete-btn-id='${id}']`);
        button.disabled = true;
        button.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';

        $.ajax({
            url: `{{ url('admin/pricings/${id}/delete') }}`,
            type: "GET",
            success: function(response) {
                if (response.success) {
                    Toast.fire({
                        icon: "success",
                        title: response.message
                    });
                    table.ajax.reload();
                }
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessages = '';
                    $.each(errors, function(key, value) {
                        errorMessages += value[0] + '\n';
                    });
                    button.disabled = false;
                    button.innerHTML = '<i class="fa fa-trash"></i>';
                    Toast.fire({
                        icon: "error",
                        title: errorMessages
                    });
                } else {
                    Toast.fire({
                        icon: "error",
                        title: 'Something went wrong, Please Refresh Page'
                    });
                }
            }
        });
    }

    @if(session('success'))
        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
        });
    @endif
</script>
@endsection
