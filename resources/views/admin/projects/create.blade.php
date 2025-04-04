@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">
        <div class="row page-titles mb-4 py-3">
            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Create Project</h3>
                <div>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary me-3">
                        <i class="fa-solid fa-arrow-left-long me-2"></i>Back
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="create-project-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Name</label>
                                    <input type="text" name="name" id="name" class="form-control solid" placeholder="Name" required>
                                    <span class="error" id="name-error"></span>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Main Image</label>
                                    <input type="file" class="form-control solid" name="main_image" id="main_image" required>
                                    <span class="error" id="main_image-error"></span>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label class="form-label">Additional Images</label>
                                    <input type="file" class="form-control solid" name="images[]" id="images" multiple>
                                    <span class="error" id="images-error"></span>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label required">Service</label>
                                    <select name="service_id" id="service_id" class="default-select wide form-control solid required" required>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="error" id="service_id-error"></span>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Author</label>
                                    <input type="text" name="author" id="author" class="form-control solid" placeholder="Author" required>
                                    <span class="error" id="author-error"></span>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label class="form-label font-w600 required">Date</label>
                                    <div class="input-hasicon">
                                        <input name="date" type="date" required class="form-control">
                                        <div class="icon"><i class="far fa-calendar"></i></div>
                                    </div>
                                    <span class="error" id="date-error"></span>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Tags</label>
                                    <div id="tags-wrapper">
                                        <input type="text" name="tags[]" id="tags" class="form-control solid" placeholder="Tag">
                                    </div>
                                    <button type="button" class="btn btn-primary me-3 mt-3" onclick="addTag()">
                                        <i class="fas fa-plus me-2"></i> Add Tag
                                    </button>
                                    <span class="error" id="tags-error"></span>
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

    function addTag() {
        var wrapper = document.getElementById('tags-wrapper');
        var input = document.createElement('input');
        input.type = 'text';
        input.name = 'tags[]';
        input.className = 'form-control solid';
        input.placeholder = 'Tag';
        wrapper.appendChild(input);
    }

    document.getElementById('create-project-form').addEventListener('submit', function(event) {
        event.preventDefault();
        let $submitButton = $(this).find('button[type="submit"]');
        let originalText = $submitButton.html(); // Save original button text

        $submitButton.html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
        ).prop('disabled', true);

        var formData = new FormData(this);
        formData.set('long_description', editor.getData());

        fetch("{{ route('admin.projects.store') }}", {
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
                window.location.href = "{{ route('admin.projects.index') }}";
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
        })
        .finally(() => {
            $submitButton.html(originalText).prop('disabled', false);
        });
    });
</script>
@endsection
