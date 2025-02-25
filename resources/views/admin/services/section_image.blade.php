@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">

        <div class="row page-titles mb-4 py-3">
            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Update Service Section Image</h3>
                <div>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-primary me-3">
                        <i class="fa-solid fa-arrow-left-long me-2"></i>Back
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="update-section-image-form" action="{{ route('admin.services.update-section-image') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Service Section Image</label>
                                    <input type="file" name="service_section_image" class="form-control solid" required>
                                    @if($sectionImage)
                                        <img src="{{ asset('storage/' . $sectionImage->image_path) }}" alt="Service Section Image" width="100" class="my-3">
                                    @endif
                                    <span class="error" id="service_section_image-error"></span>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('update-section-image-form').addEventListener('submit', function(event) {
        event.preventDefault();
        let $submitButton = $(this).find('button[type="submit"]');
        let originalText = $submitButton.html(); // Save original button text

        $submitButton.html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
        ).prop('disabled', true);

        var formData = new FormData(this);

        fetch("{{ route('admin.services.update-section-image') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    title: data.message,
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                }).then(() => {
                    window.location.href = "{{ route('admin.services.index') }}";
                });
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
