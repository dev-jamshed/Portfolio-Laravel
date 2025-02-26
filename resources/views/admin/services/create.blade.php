@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">

        <div class="row page-titles mb-4 py-3">

            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Create Service</h3>
                <div>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-primary me-3"><i
                            class="fa-solid fa-arrow-left-long me-2"></i>Back
                    </a>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <form id="create-service-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-3">

                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Name</label>
                                    <input type="text" name="name" id="name" class="form-control solid"
                                        placeholder="Name" required>
                                    <span class="error" id="name-error"></span>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Projects Done</label>
                                    <input type="number" name="projects_done" id="projects_done" class="form-control solid"
                                        placeholder="Projects Done" required>
                                    <span class="error" id="projects_done-error"></span>
                                </div>


                                <div class="col-lg-6 col-12">


                                    <label class="form-label required">Image</label>
                                    <input type="file" class="form-control solid" name="icon" id="icon" required>
                                    <span class="error" id="icon-error"></span>
                                </div>


                                <div class="col-12">
                                    <label class="form-label required">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="6"></textarea>
                                    <span class="error" id="description-error"></span>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Long Description</label>
                                    <textarea name="long_description" id="long_description" class="form-control" rows="6"></textarea>
                                    <span class="error" id="long_description-error"></span>
                                </div>


                                <div class="col-lg-6 col-12 mb-4">
                                    <label class="form-label required">Show on Homepage</label>
                                    <select name="show_on_homepage" class="default-select wide form-control solid required"
                                        required>
                                        <option value="1" selected>Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                    <span class="error" id="show_on_homepage-error"></span>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <label class="form-label">Show Latest Service</label>
                                    <select name="show_latest_service" class="default-select wide form-control solid">
                                        <option value="1">Yes</option>
                                        <option value="0" selected>No</option>
                                    </select>
                                    <span class="error" id="show_latest_service-error"></span>
                                </div>

                                <div class="col-lg-6 col-12 mb-4">
                                    <label class="form-label required">Category</label>
                                    <select name="category_id" class="default-select wide form-control solid required"
                                        required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="error" id="category_id-error"></span>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Create</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script>
        let editor;
        ClassicEditor
            .create(document.querySelector('#long_description'))
            .then(newEditor => {
                editor = newEditor;
            })
            .catch(error => {
                console.error(error);
            });

        document.getElementById('create-service-form').addEventListener('submit', function(event) {
            event.preventDefault();
            let $submitButton = $(this).find('button[type="submit"]');
            let originalText = $submitButton.html(); // Save original button text

            $submitButton.html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                )
                .prop('disabled', true);


            var formData = new FormData(this);
            formData.set('long_description', editor.getData());

            fetch("{{ route('admin.services.store') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Toast.fire({
                            icon: "success",
                            title: data.message
                        });
                        window.location.href = "{{ route('admin.services.index') }}";
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
                }).finally(() => {
                    $submitButton.html(originalText).prop('disabled', false);
                });
        });
    </script>
@endsection
