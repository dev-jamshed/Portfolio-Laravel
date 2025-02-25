@extends('layouts.admin')

@section('content')
    <h1>{{ isset($service) ? 'Edit' : 'Create' }} Service</h1>
    <form id="service-form" enctype="multipart/form-data">
        @csrf
        @if(isset($service))
            @method('PUT')
        @endif
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="{{ $service->name ?? '' }}" required>
            <span class="error" id="name-error"></span>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ $service->description ?? '' }}</textarea>
            <span class="error" id="description-error"></span>
        </div>
        <div>
            <label for="icon">Icon</label>
            <input type="file" name="icon" id="icon">
            @if(isset($service) && $service->icon)
                <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->name }}" width="100">
            @endif
            <span class="error" id="icon-error"></span>
        </div>
        <div>
            <label for="projects_done">Projects Done</label>
            <input type="number" name="projects_done" id="projects_done" value="{{ $service->projects_done ?? '' }}" required>
            <span class="error" id="projects_done-error"></span>
        </div>
        <div>
            <label for="show_on_homepage">Show on Homepage</label>
            <select name="show_on_homepage" id="show_on_homepage" required>
                <option value="1" {{ (isset($service) && $service->show_on_homepage) ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ (isset($service) && !$service->show_on_homepage) ? 'selected' : '' }}>No</option>
            </select>
            <span class="error" id="show_on_homepage-error"></span>
        </div>
        <button type="submit">{{ isset($service) ? 'Update' : 'Create' }}</button>
    </form>

    <script>
        document.getElementById('service-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            var url = "{{ isset($service) ? route('admin.services.update', $service->id) : route('admin.services.store') }}";
            var method = "{{ isset($service) ? 'POST' : 'POST' }}";

            fetch(url, {
                method: method,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'X-HTTP-Method-Override': "{{ isset($service) ? 'PUT' : 'POST' }}"
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Service ' + (method === 'POST' ? 'Created' : 'Updated') + ' Successfully');
                    window.location.href = "{{ route('admin.services.index') }}";
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
