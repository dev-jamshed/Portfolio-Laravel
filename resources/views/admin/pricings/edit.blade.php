@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">
        <div class="row page-titles mb-4 py-3">
            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Edit Pricing</h3>
                <div>
                    <a href="{{ route('admin.pricings.index') }}" class="btn btn-primary me-3"><i class="fa-solid fa-arrow-left-long me-2"></i>Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="edit-pricing-form" method="POST" action="{{ route('admin.pricings.update', $pricing->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row gy-3">
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Title</label>
                                    <input type="text" name="title" id="title" class="form-control solid" value="{{ $pricing->title }}" required>
                                    <span class="error" id="title-error"></span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Price</label>
                                    <input type="number" name="price" id="price" class="form-control solid" value="{{ $pricing->price }}" required>
                                    <span class="error" id="price-error"></span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Base</label>
                                    <input type="text" name="base" id="base" class="form-control solid" value="{{ $pricing->base }}" required>
                                    <span class="error" id="base-error"></span>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Features</label>
                                    <div id="features-list">
                                        @foreach($pricing->features as $feature)
                                            <div class="input-group mb-3">
                                                <input type="text" name="features[]" class="form-control solid" value="{{ $feature->feature }}">
                                                <button type="button" class="btn btn-danger remove-feature"><i class="fa fa-trash"></i></button>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="btn btn-secondary" id="add-feature"><i class="fa fa-plus"></i> Add Feature</button>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('add-feature').addEventListener('click', function () {
            const featuresList = document.getElementById('features-list');
            const newFeature = document.createElement('div');
            newFeature.classList.add('input-group', 'mb-3');
            newFeature.innerHTML = `
                <input type="text" name="features[]" class="form-control solid">
                <button type="button" class="btn btn-danger remove-feature"><i class="fa fa-trash"></i></button>
            `;
            featuresList.appendChild(newFeature);
        });

        document.getElementById('features-list').addEventListener('click', function (e) {
            if (e.target.closest('.remove-feature')) {
                e.target.closest('.input-group').remove();
            }
        });

        document.getElementById('edit-pricing-form').addEventListener('submit', function(event) {
            event.preventDefault();

            let $submitButton = $(this).find('button[type="submit"]');
            let originalText = $submitButton.html(); // Save original button text

            $submitButton.html(
                '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
            ).prop('disabled', true);

            var formData = new FormData(this);

            fetch("{{ route('admin.pricings.update', $pricing->id) }}", {
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
                    window.location.href = "{{ route('admin.pricings.index') }}";
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
    });
</script>
@endsection
