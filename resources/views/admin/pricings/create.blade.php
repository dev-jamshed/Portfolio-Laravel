@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">
        <div class="row page-titles mb-4 py-3">
            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Create Pricing</h3>
                <div>
                    <a href="{{ route('admin.pricings.index') }}" class="btn btn-primary me-3"><i class="fa-solid fa-arrow-left-long me-2"></i>Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="create-pricing-form">
                            @csrf
                            <div class="row gy-3">
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Title</label>
                                    <input type="text" name="title" id="title" class="form-control solid" placeholder="Title" required>
                                    <span class="error" id="title-error"></span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Price</label>
                                    <input type="number" name="price" id="price" class="form-control solid" placeholder="Price" required>
                                    <span class="error" id="price-error"></span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Base</label>
                                    <input type="text" name="base" id="base" class="form-control solid" placeholder="Base (e.g., per month, per year)" required>
                                    <span class="error" id="base-error"></span>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Features</label>
                                    <div id="features-list">
                                        <div class="input-group mb-3">
                                            <input type="text" name="features[]" class="form-control solid" placeholder="Feature">
                                            <button type="button" class="btn btn-danger remove-feature"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                    <button type="button" id="add-feature" class="btn btn-secondary mt-2"><i class="fa fa-plus"></i> Add Feature</button>
                                    <span class="error" id="features-error"></span>
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
    document.getElementById('add-feature').addEventListener('click', function() {
        const featureInput = `
            <div class="input-group mb-3">
                <input type="text" name="features[]" class="form-control solid" placeholder="Feature">
                <button type="button" class="btn btn-danger remove-feature"><i class="fa fa-trash"></i></button>
            </div>
        `;
        document.getElementById('features-list').insertAdjacentHTML('beforeend', featureInput);
    });

    document.getElementById('features-list').addEventListener('click', function(event) {
        if (event.target.closest('.remove-feature')) {
            event.target.closest('.input-group').remove();
        }
    });

    document.getElementById('create-pricing-form').addEventListener('submit', function(event) {
        event.preventDefault();

        let $submitButton = $(this).find('button[type="submit"]');
        let originalText = $submitButton.html(); // Save original button text

        $submitButton.html(
            '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
        ).prop('disabled', true);

        var formData = new FormData(this);

        fetch("{{ route('admin.pricings.store') }}", {
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
</script>
@endsection
