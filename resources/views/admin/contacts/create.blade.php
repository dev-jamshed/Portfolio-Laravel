@extends('layouts.admin')

@section('content')
    <h1>Contact Us</h1>
    
    <form id="create-contact-form">
        @csrf
        <div>
            <label for="full_name">Full Name</label>
            <input type="text" name="full_name" id="full_name" required>
            <span class="error" id="full_name-error"></span>
        </div>
        <div>
            <label for="phone_number">Phone Number</label>
            <input type="text" name="phone_number" id="phone_number" required>
            <span class="error" id="phone_number-error"></span>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <span class="error" id="email-error"></span>
        </div>
        <div>
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" required>
            <span class="error" id="subject-error"></span>
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" id="message" required></textarea>
            <span class="error" id="message-error"></span>
        </div>
        <button type="submit">Send</button>
    </form>

    <script>
        document.getElementById('create-contact-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            fetch("{{ route('admin.contacts.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Message Sent Successfully');
                    window.location.href = "{{ route('admin.contacts.index') }}";
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
