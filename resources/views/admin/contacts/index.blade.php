@extends('layouts.admin')

@section('content')

    <h1>Contacts</h1>

    <table id="contacts-table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>

    <script>
        $(document).ready(function() {
            $('#contacts-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.contacts.data') }}",
                columns: [
                    { data: 'full_name', name: 'full_name' },
                    { data: 'phone_number', name: 'phone_number' },
                    { data: 'email', name: 'email' },
                    { data: 'subject', name: 'subject' },
                    { data: 'message', name: 'message' },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endsection
