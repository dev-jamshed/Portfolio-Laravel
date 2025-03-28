{{-- @extends('layouts.admin')

@section('content')
    <h1>Edit Social Media Link</h1>
    <form id="edit-social-media-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $socialMedia->name }}" required>
            <span class="error" id="name-error"></span>
        </div>
        <div>
            <label for="url">URL</label>
            <input type="url" name="url" id="url" value="{{ $socialMedia->url }}" required>
            <span class="error" id="url-error"></span>
        </div>
        <div>
            <label for="icon">Icon</label>
            <input type="file" name="icon" id="icon">
            <img src="{{ asset('storage/' . $socialMedia->icon) }}" alt="{{ $socialMedia->name }}" width="100">
            <span class="error" id="icon-error"></span>
        </div>
        <button type="submit">Update</button>
    </form>

    <script>
        document.getElementById('edit-social-media-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            fetch("{{ route('admin.social_media.update', $socialMedia->id) }}", {
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
                    alert('Social Media Link Updated Successfully');
                    window.location.href = "{{ route('admin.social_media.index') }}";
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
@endsection






 --}}





@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">

        <div class="row page-titles mb-4 py-3">

            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Edit Social Media Link</h3>
                <div>
                    <a href="{{ route('admin.social_media.index') }}"
                    
                        class="btn btn-primary me-3"><i class="fa-solid fa-arrow-left-long me-2"></i>Back
                    </a>
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <form id="create-banner-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="row gy-3">
            
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required">Name</label>
                                        <input type="text" name="name" id="name" value="{{ $socialMedia->name }}" class="form-control solid" placeholder="Name"
                                             required>
                                            <span class="error" id="name-error"></span>
                                    </div>
                                   
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required">URL</label>
                                        <input type="url" name="url" id="url" class="form-control solid" value="{{ $socialMedia->url }}" placeholder="Name"
                                             required>
                                            <span class="error" id="url-error"></span>
                                    </div>
                                 
                                    <div class="col-lg-6 col-12">
                                    

                                        <label class="form-label required">icon</label>
                                                <input type="file" class="form-control solid" name="icon" id="image">
                                                <img src="{{ asset('storage/' . $socialMedia->icon) }}" class="my-3" alt="{{ $socialMedia->name }}" width="100">
                                                <span class="error" id="icon-error"></span>
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
 

        document.getElementById('create-banner-form').addEventListener('submit', function(event) {
            event.preventDefault();
            let $submitButton = $(this).find('button[type="submit"]');
        let originalText = $submitButton.html(); // Save original button text
       
        $submitButton.html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                    )
                    .prop('disabled', true);


            var formData = new FormData(this);

            fetch("{{ route('admin.social_media.update', $socialMedia->id) }}", {
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
                    window.location.href = "{{ route('admin.social_media.index') }}";
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
            })  .finally(()=>{
            $submitButton.html(originalText).prop('disabled', false);
        });
        });
</script>
     
@endsection
