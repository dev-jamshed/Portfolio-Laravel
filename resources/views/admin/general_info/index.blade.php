@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">
        <div class="row page-titles mb-4 py-3">
            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">General Information</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="general-info-form" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gy-3">
                                <div class="col-lg-6 col-12">
                                    <label class="form-label">Logo</label>
                                    <input type="file" name="logo" id="logo" class="form-control solid">
                                    @if($generalInfo && $generalInfo->logo)
                                        <img src="{{ asset('storage/' . $generalInfo->logo) }}" alt="Logo" width="100" class="mt-3">
                                    @endif
                                    <span class="error" id="logo-error"></span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Email</label>
                                    <input type="email" name="email" id="email" class="form-control solid" value="{{ $generalInfo->email ?? '' }}" required>
                                    <span class="error" id="email-error"></span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Location</label>
                                    <input type="text" name="location" id="location" class="form-control solid" value="{{ $generalInfo->location ?? '' }}" required>
                                    <span class="error" id="location-error"></span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control solid" value="{{ $generalInfo->phone ?? '' }}" required>
                                    <span class="error" id="phone-error"></span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Footer Description</label>
                                    <textarea name="footer_desc" id="footer_desc" class="form-control solid">{{ $generalInfo->footer_desc ?? '' }}</textarea>
                                    <span class="error" id="footer_desc-error"></span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label">Sidebar Image</label>
                                    <input type="file" name="sidebar_image" id="sidebar_image" class="form-control solid">
                                    @if($generalInfo && $generalInfo->sidebar_image)
                                        <img src="{{ asset('storage/' . $generalInfo->sidebar_image) }}" alt="Sidebar Image" width="100" class="mt-3">
                                    @endif
                                    <span class="error" id="sidebar_image-error"></span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label">Sidebar Title</label>
                                    <input type="text" name="sidebar_title" id="sidebar_title" class="form-control solid" value="{{ $generalInfo->sidebar_title ?? '' }}">
                                    <span class="error" id="sidebar_title-error"></span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Sidebar Description</label>
                                    <textarea name="sidebar_description" id="sidebar_description" class="form-control solid">{{ $generalInfo->sidebar_description ?? '' }}</textarea>
                                    <span class="error" id="sidebar_description-error"></span>
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
    document.getElementById('general-info-form').addEventListener('submit', function(event) {
        event.preventDefault();
        let $submitButton = $(this).find('button[type="submit"]');
        let originalText = $submitButton.html(); // Save original button text

        $submitButton.html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
        ).prop('disabled', true);

        var formData = new FormData(this);

        fetch("{{ route('admin.general_info.update', $generalInfo->id ?? 1) }}", {
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
                window.location.reload();
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
