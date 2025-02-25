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
                                    <input type="file" name="logo" class="form-control solid">
                                    @if($generalInfo && $generalInfo->logo)
                                        <img src="{{ asset('storage/' . $generalInfo->logo) }}" alt="Logo" width="100" class="mt-3">
                                    @endif
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Email</label>
                                    <input type="email" name="email" class="form-control solid" value="{{ $generalInfo->email ?? '' }}" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Location</label>
                                    <input type="text" name="location" class="form-control solid" value="{{ $generalInfo->location ?? '' }}" required>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Phone</label>
                                    <input type="text" name="phone" class="form-control solid" value="{{ $generalInfo->phone ?? '' }}" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Footer Description</label>
                                    <textarea name="footer_desc" class="form-control solid">{{ $generalInfo->footer_desc ?? '' }}</textarea>
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

        fetch("{{ route('admin.general_info.update') }}", {
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
