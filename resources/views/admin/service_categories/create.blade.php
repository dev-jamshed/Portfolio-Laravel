@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">

        <div class="row page-titles mb-4 py-3">
            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Create Service Category</h3>
                <div>
                    <a href="{{ route('admin.service_categories.index') }}" class="btn btn-primary me-3">
                        <i class="fa-solid fa-arrow-left-long me-2"></i>Back
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="create-category-form">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Name</label>
                                    <input type="text" name="name" id="name" class="form-control solid" placeholder="Name" required>
                                    <span class="error" id="name-error"></span>
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
<script>
    document.getElementById('create-category-form').addEventListener('submit', function(event) {
        event.preventDefault();
        let $submitButton = $(this).find('button[type="submit"]');
        let originalText = $submitButton.html(); // Save original button text

        $submitButton.html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
        ).prop('disabled', true);

        var formData = new FormData(this);

        fetch("{{ route('admin.service_categories.store') }}", {
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
                window.location.href = "{{ route('admin.service_categories.index') }}";
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
