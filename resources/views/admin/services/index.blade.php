{{-- @extends('layouts.admin')

@section('content')
    <h1>Services</h1>
    <button id="create-service-button">Create New Service</button>
    <table id="services-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Icon</th>
                <th>Projects Done</th>
                <th>Show on Homepage</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>

    <!-- Modal -->
    <div id="service-modal" style="display: none;">
        <div>
            <h2 id="modal-title">Create Service</h2>
            <form id="service-form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" id="form-method" value="POST">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                    <span class="error" id="name-error"></span>
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea name="description" id="description"></textarea>
                    <span class="error" id="description-error"></span>
                </div>
                <div>
                    <label for="icon">Icon</label>
                    <input type="file" name="icon" id="icon">
                    <img id="icon-preview" src="" alt="" width="100" style="display: none;">
                    <span class="error" id="icon-error"></span>
                </div>
                <div>
                    <label for="projects_done">Projects Done</label>
                    <input type="number" name="projects_done" id="projects_done" required>
                    <span class="error" id="projects_done-error"></span>
                </div>
                <div>
                    <label for="show_on_homepage">Show on Homepage</label>
                    <select name="show_on_homepage" id="show_on_homepage" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    <span class="error" id="show_on_homepage-error"></span>
                </div>
                <button type="submit" id="submit-button">Create</button>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#services-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.services.data') }}",
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'description', name: 'description' },
                    { data: 'icon', name: 'icon', render: function(data) {
                        return '<img src="{{ asset('storage') }}/' + data + '" width="50">';
                    }},
                    { data: 'projects_done', name: 'projects_done' },
                    { data: 'show_on_homepage', name: 'show_on_homepage', render: function(data) {
                        return data ? 'Yes' : 'No';
                    }},
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ]
            });

            $('#create-service-button').click(function() {
                $('#service-form')[0].reset();
                $('#modal-title').text('Create Service');
                $('#submit-button').text('Create');
                $('#form-method').val('POST');
                $('#icon-preview').hide();
                $('#service-modal').show();
            });

            $('#service-form').submit(function(event) {
                event.preventDefault();
                var formData = new FormData(this);
                var url = $('#form-method').val() === 'POST' ? "{{ route('admin.services.store') }}" : "{{ route('admin.services.update', '') }}/" + $('#service-form').data('id');
                var method = $('#form-method').val();

                fetch(url, {
                    method: method,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'X-HTTP-Method-Override': method
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Service ' + (method === 'POST' ? 'Created' : 'Updated') + ' Successfully');
                        $('#service-modal').hide();
                        $('#services-table').DataTable().ajax.reload();
                    } else {
                        // Clear previous errors
                        document.querySelectorAll('.error').forEach(function(element) {
                            element.textContent = '';
                        });

                        // Display validation errors
                        for (const [key, value] of Object.entries(data.errors)) {
                            document.getElementById(`${key}-error`).textContent = value[0];
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });

        function editService(id) {
            fetch("{{ url('admin/services') }}/" + id + "/edit")
                .then(response => response.json())
                .then(data => {
                    $('#service-form')[0].reset();
                    $('#modal-title').text('Edit Service');
                    $('#submit-button').text('Update');
                    $('#form-method').val('PUT');
                    $('#service-form').data('id', id);
                    $('#name').val(data.name);
                    $('#description').val(data.description);
                    $('#projects_done').val(data.projects_done);
                    $('#show_on_homepage').val(data.show_on_homepage);
                    if (data.icon) {
                        $('#icon-preview').attr('src', "{{ asset('storage') }}/" + data.icon).show();
                    } else {
                        $('#icon-preview').hide();
                    }
                    $('#service-modal').show();
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        function deleteService(id) {
            if (confirm('Are you sure you want to delete this service?')) {
                fetch("{{ route('admin.services.destroy', '') }}/" + id, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Service Deleted Successfully');
                        $('#services-table').DataTable().ajax.reload();
                    } else {
                        alert('Failed to delete service');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        }
    </script>
@endsection
 



 --}}










@extends('admin.layouts.layout')


@section('main_content')
    <div class="container-fluid">

        <div class="row page-titles mb-4 py-3">

            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Services</h3>
                <div>
                    <a href="{{ route('admin.services.create') }}"
                        class="btn btn-primary me-3"><i class="fas fa-plus me-2"></i>Add New Service 
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
                                        <th>Description</th>
                                        <th>Icon</th>
                                        <th>Projects Done</th>
                                        <th>Show on Homepage</th>
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
            ajax: "{{ route('admin.services.data') }}",
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                    { data: 'description', name: 'description' },
                    { data: 'icon', name: 'icon', render: function(data) {
                        return '<img src="{{ asset('storage') }}/' + data + '" width="50">';
                    }},
                    { data: 'projects_done', name: 'projects_done' },
                    { data: 'show_on_homepage', name: 'show_on_homepage', render: function(data) {
                        return data ? 'Yes' : 'No';
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
                url: `{{ url('admin/services/${id}/delete') }}`, // Your route URL
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