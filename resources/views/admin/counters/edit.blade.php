{{-- @extends('layouts.admin')

@section('content')
    <h1>Edit Counter</h1>
    <form id="edit-counter-form">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $counter->title }}" required>
        </div>
        <div>
            <label for="value">Value</label>
            <input type="number" name="value" id="value" value="{{ $counter->value }}" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" required>{{ $counter->description }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>

    <script>
        document.getElementById('edit-counter-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            fetch("{{ route('admin.counters.update', $counter->id) }}", {
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
                    alert('Counter Updated Successfully');
                    window.location.href = "{{ route('admin.counters.index') }}";
                } else {
                    alert('Error updating counter');
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
                <h3 class="me-auto my-0">Edit Counter</h3>
                <div>
                    <a href="{{ route('admin.counters.index') }}"
                    
                        class="btn btn-primary me-3"><i class="fa-solid fa-arrow-left-long me-2"></i>Back
                    </a>
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <form id="edit-counter-form">
                            @csrf
                            @method('PUT')
                            <div class="row gy-3">
            
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required">Title</label>
                                        <input type="text" value="{{ $counter->title }}" name="title" id="title" class="form-control solid" placeholder="Title"
                                             required>
                                            <span class="error" id="title-error"></span>
                                    </div>
                                    
            
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required">Value</label>
                                        <input  type="number" value="{{ $counter->value }}"  name="value" id="value" class="form-control solid" placeholder="Value"
                                             required>
                                             <span class="error" id="value-error"></span>
                                    </div>
            
                                    <div class="col-12">
                                        <label class="form-label required">Description</label>
                                        <textarea name="description" id="description" class="form-control" rows="6" id="comment">{{ $counter->description }}</textarea>
                                        <span class="error" id="description-error"></span>
                                    </div>     
            
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@endsection

@section('script')

<script>
    

    document.getElementById('edit-counter-form').addEventListener('submit', function(event) {
            event.preventDefault();
            let $submitButton = $(this).find('button[type="submit"]');
            let originalText = $submitButton.html(); // Save original button text
        $submitButton.html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                    )
                    .prop('disabled', true);

            var formData = new FormData(this);

            fetch("{{ route('admin.counters.update', $counter->id) }}", {
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
                    window.location.href = "{{ route('admin.counters.index') }}";
                } else {
                    alert('Error updating counter');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            })
            .finally(()=>{
            $submitButton.html(originalText).prop('disabled', false);
        });
        });
</script>
     
@endsection
