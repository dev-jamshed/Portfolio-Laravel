{{-- @extends('layouts.admin')

@section('content')
    <h1>Edit Client</h1>
    <form id="edit-client-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $client->name }}" required>
            <span class="error" id="name-error"></span>
        </div>
        <div>
            <label for="logo">Logo</label>
            <input type="file" name="logo" id="logo">
            <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" width="100">
            <span class="error" id="logo-error"></span>
        </div>
        <div>
            <label for="show_on_homepage">Show on Homepage</label>
            <div>
                <input type="radio" name="show_on_homepage" id="show_on_homepage_yes" value="1" {{ $client->show_on_homepage ? 'checked' : '' }}>
                <label for="show_on_homepage_yes">Yes</label>
            </div>
            <div>
                <input type="radio" name="show_on_homepage" id="show_on_homepage_no" value="0" {{ !$client->show_on_homepage ? 'checked' : '' }}>
                <label for="show_on_homepage_no">No</label>
            </div>
            <span class="error" id="show_on_homepage-error"></span>
        </div>
        <button type="submit">Update</button>
    </form>

    <script>
        document.getElementById('edit-client-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            fetch("{{ route('admin.clients.update', $client->id) }}", {
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
                    alert('Client Updated Successfully');
                    window.location.href = "{{ route('admin.clients.index') }}";
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
                <h3 class="me-auto my-0">Edit Client</h3>
                <div>
                    <a href="{{ route('admin.clients.index') }}"
                    
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
                            <div class="row gy-3">
            
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required" >Name</label>
                                        <input type="text" name="name" id="name" value="{{ $client->name }}" class="form-control solid" placeholder="Name"
                                             required>
                                            <span class="error" id="name-error"></span>
                                    </div>
                                 
                                    <div class="col-lg-6 col-12">
                                    

                                        <label class="form-label required">Logo</label>
                                                <input type="file" class="form-control solid" name="logo" id="image">
                                                <img src="{{ asset('storage/' . $client->logo) }}" alt="{{ $client->name }}" class="my-3" width="100">
                                                <span class="error" id="logo-error"></span>     
                                    </div>

                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label class="form-label required">Show on Homepage</label>
                                        <select name="show_on_homepage" class="default-select wide form-control solid required" required >
                                            <option value="1" {{ $client->show_on_homepage == 1 ? 'selected' : '' }} >Yes</option>
                                            <option value="0" {{ $client->show_on_homepage == 0 ? 'selected' : '' }}>No</option>
                                        </select>
                                        <span class="error" id="show_on_homepage-error"></span>
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

            fetch("{{ route('admin.clients.update', $client->id) }}", {
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
                    window.location.href = "{{ route('admin.clients.index') }}";
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
