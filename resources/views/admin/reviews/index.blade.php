{{-- @extends('layouts.admin')

@section('content')
    <h1>Reviews</h1>
    <a href="{{ route('admin.reviews.create') }}">Create New Review</a>
    <table id="reviews-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Review</th>
                <th>Service</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>

    <script>
        $(document).ready(function() {
            $('#reviews-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.reviews.data') }}",
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'review', name: 'review' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'image', name: 'image', render: function(data) {
                        return '<img src="{{ asset('storage') }}/' + data + '" width="50">';
                    }},
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endsection --}}








@extends('admin.layouts.layout')


@section('main_content')
    <div class="container-fluid">

        <div class="row page-titles mb-4 py-3">

            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Reviews</h3>
                <div>
                    <a href="{{ route('admin.reviews.create') }}"
                        class="btn btn-primary me-3"><i class="fas fa-plus me-2"></i>Create New Review
                    </a>
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
                                        <th>Name</th>
                                        <th>Review</th>
                                        <th>Service</th>
                                        <th>Image</th>
                                        <th>Create Date</th>
                                        <th>Update Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

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
    let table
    $(document).ready(function() {


        table =  $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.reviews.data') }}",
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                    { data: 'review', name: 'review' },
                    { data: 'service_name', name: 'service_name' },
                    { data: 'image', name: 'image', render: function(data) {
                        return '<img src="{{ asset('storage') }}/' + data + '" width="50">';
                    }},
                { data: 'created_at' },
                { data: 'updated_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ],
            order: [
                    [0, 'desc']
                ], // Default order by ID descending
                language: {
                    paginate: {
                        next: '<i class="fa fa-angle-right"></i>',
                        previous: '<i class="fa fa-angle-left"></i>'
                    }
                },
               
                // dom: '<"top"lf>rt<"bottom"ip><"clear">',
                lengthMenu: [
                    [10, 25, 50, 100, 200, ],
                    [10, 25, 50, 100, 200]
                ],
                pageLength: 10
        });
    });



    function destroy(id) {
            var button = document.querySelector(`button[data-delete-btn-id='${id}']`);
            button.disabled = true;
            button.innerHTML =
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';


            $.ajax({ 
                url: `{{ url('admin/reviews/${id}/delete') }}`, // Your route URL
                type: "GET",

                success: function(response) {


                    if (response.success) {
                        Toast.fire({
                            icon: "success",
                            title: response.message
                        });

                        table.ajax.reload();
                        // Optionally, reload data in your table or update the view
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
                        button.innerHTML =
                            '<i class="fa fa-trash"></i>';

                        Toast.fire({
                            icon: "error",
                            title: errorMessages
                        });
                        // alert(errorMessages);
                    } else {
                        Toast.fire({
                            icon: "error",
                            title: 'Something went wrong, Please Refresh Page'
                        });
                    }
                },

            });

        }
</script>
     
@endsection