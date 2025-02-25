{{-- @extends('layouts.admin')

@section('content')
    <h1>Edit Project</h1>
    <form id="edit-project-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $project->name }}" required>
            <span class="error" id="name-error"></span>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required>{{ $project->description }}</textarea>
            <span class="error" id="description-error"></span>
        </div>
        <div>
            <label for="main_image">Main Image</label>
            <input type="file" name="main_image" id="main_image">
            <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{ $project->name }}" width="100">
            <span class="error" id="main_image-error"></span>
        </div>
        <div>
            <label for="images">Additional Images</label>
            <input type="file" name="images[]" id="images" multiple>
            <span class="error" id="images-error"></span>
            <div id="additional-images">
                @foreach($project->images as $image)
                    <div class="additional-image" data-id="{{ $image->id }}">
                        <img src="{{ asset('storage/' . $image->path) }}" alt="Additional Image" width="100">
                        <button type="button" onclick="removeImage(this, '{{ $image->id }}')">Remove</button>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            <label for="service_id">Service</label>
            <select name="service_id" id="service_id" required>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" {{ $project->service_id == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                @endforeach
            </select>
            <span class="error" id="service_id-error"></span>
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" id="author" value="{{ $project->author }}" required>
            <span class="error" id="author-error"></span>
        </div>
        <div>
            <label for="date">Date</label>
            <input type="date" name="date" id="date" value="{{ $project->date }}" required>
            <span class="error" id="date-error"></span>
        </div>
        <div>
            <label for="tags">Tags</label>
            <div id="tags-wrapper">
                @foreach($project->tags as $tag)
                    <div class="tag-input">
                        <input type="text" name="tags[]" value="{{ $tag }}">
                        <button type="button" onclick="removeTag(this)">Remove</button>
                    </div>
                @endforeach
            </div>
            <button type="button" onclick="addTag()">Add Tag</button>
            <span class="error" id="tags-error"></span>
        </div>
        <button type="submit">Update</button>
    </form>

    <script>
        function addTag() {
            var wrapper = document.getElementById('tags-wrapper');
            var div = document.createElement('div');
            div.className = 'tag-input';
            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'tags[]';
            var button = document.createElement('button');
            button.type = 'button';
            button.textContent = 'Remove';
            button.onclick = function() {
                removeTag(button);
            };
            div.appendChild(input);
            div.appendChild(button);
            wrapper.appendChild(div);
        }

        function removeTag(button) {
            var div = button.parentElement;
            div.remove();
        }

        function removeImage(button, imageId) {
            var div = button.parentElement;
            fetch("{{ route('admin.projects.remove-image', '') }}/" + imageId, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      div.remove();
                  } else {
                      alert('Failed to remove image');
                  }
              }).catch(error => {
                  console.error('Error:', error);
              });
        }

        document.getElementById('edit-project-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            fetch("{{ route('admin.projects.update', $project->id) }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'X-HTTP-Method-Override': 'PUT'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Project Updated Successfully');
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
            });
        });
    </script>
@endsection --}}









@extends('admin.layouts.layout')


@section('main_content')
    <div class="container-fluid">

        <div class="row page-titles mb-4 py-3">

            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Edit Project</h3>
                <div>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary me-3"><i
                            class="fa-solid fa-arrow-left-long me-2"></i>Back
                    </a>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <form id="create-counter-form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gy-3">

                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Name</label>
                                    <input type="text" name="name" id="name" class="form-control solid"
                                        placeholder="Title" required value="{{ $project->name }}">
                                    <span class="error" id="title-error"></span>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Main Image</label>

                                    <input type="file" class="form-control solid" name="main_image" id="main_image"
                                        >
                                        
                                    <span class="error" id="main_image-error"></span>
                                    
                                    <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{ $project->name }}" class="mt-3" width="100">
                                </div>

                                <div class="col-lg-6 col-12">
                                    <label class="form-label ">Additional Images</label>
                                    <input type="file" class="form-control solid" name="images[]" id="images"
                                        multiple >
                                    <span class="error" id="images-error"></span>
                                    <div id="additional-images mt-3">
                                        @foreach($project->images as $image)
                                            <div class="additional-image" data-id="{{ $image->id }}">
                                                <img src="{{ asset('storage/' . $image->path) }}" alt="Additional Image" width="100">
                                                <button type="button" class="btn btn-danger  m-3" onclick="removeImage(this, '{{ $image->id }}')">Remove</button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>


                                <div class="col-md-6 ">
                                    <label class="form-label required">Service</label>
                                    <select name="service_id" id="service_id" class="default-select wide form-control solid required" required >
                                        @foreach($services as $service)
                                        <option value="{{ $service->id }}" {{ $project->service_id == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="error" id="service_id-error"></span>
                                </div>    
 


                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Author</label>
                                    <input type="text" name="author" id="author" class="form-control solid"
                                        placeholder="Author" required value="{{ $project->author }}" >
                                    <span class="error" id="author-error"></span>
                                </div>


                                <div class="col-lg-6  col-12">
                                    <label class="form-label font-w600 required">Date</label>
                                    <div class="input-hasicon">
                                        <input name="date" type="date" value="{{ $project->date }}" required class="form-control ">
                                        <div class="icon"><i class="far fa-calendar"></i></div>
                                    </div>
                                    <span class="error" id="date-error"></span>
                                </div>




                                <div class="col-lg-6  col-12">
                                    <label class="form-label required">Tags</label>

                                   

                                    <div id="tags-wrapper">
                                        @foreach($project->tags as $tag)
                                        <div class="tag-input">
                                            <input type="text" class="form-control solid"  name="tags[]" value="{{ $tag }}">
                                            <button type="button" class="btn btn-danger me-3 mt-3"  onclick="removeTag(this)">Remove</button>
                                        </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="btn btn-primary me-3 mt-3"  onclick="addTag()"><i class="fas fa-plus me-2"></i> Add Tag</button>
                                    <span class="error" id="tags-error"></span>
                                </div>


                                <div class="col-12">
                                    <label class="form-label required">Description</label>
                                    <textarea name="description" id="description" class="form-control" rows="6" id="description">{{ $project->description }}</textarea>
                                    <span class="error" id="description-error"></span>
                                </div>



                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Update</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function addTag() {
            var wrapper = document.getElementById('tags-wrapper');
            var div = document.createElement('div');
            div.className = 'tag-input';
            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'tags[]';
            input.className = 'form-control solid';
            input.placeholder = 'Tag';
            var button = document.createElement('button');
            button.type = 'button';
            button.textContent = 'Remove';
            button.onclick = function() {
                removeTag(button);
            };
            div.appendChild(input);
            div.appendChild(button);

            wrapper.appendChild(div);
        }
        function removeTag(button) {
            var div = button.parentElement;
            div.remove();
        }


        function removeImage(button, imageId) {
            var div = button.parentElement;
            fetch("{{ route('admin.projects.remove-image', '') }}/" + imageId, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            }).then(response => response.json())
              .then(data => {
                  if (data.success) {
                      div.remove();
                  } else {
                      alert('Failed to remove image');
                  }
              }).catch(error => {
                  console.error('Error:', error);
              });
        }

        document.getElementById('create-counter-form').addEventListener('submit', function(event) {
            event.preventDefault();

            let $submitButton = $(this).find('button[type="submit"]');
            let originalText = $submitButton.html(); // Save original button text

            $submitButton.html(
                    '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                )
                .prop('disabled', true);


            var formData = new FormData(this);

            fetch("{{ route('admin.projects.update', $project->id) }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'X-HTTP-Method-Override': 'PUT'
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
                })

            ;
        });
    </script>
@endsection
