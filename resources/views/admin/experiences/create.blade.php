{{-- @extends('layouts.admin')

@section('content')
    <h1>Create Experience</h1>
    <form id="create-experience-form">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
            <span class="error" id="title-error"></span>
        </div>
        <div>
            <label for="company">Company</label>
            <input type="text" name="company" id="company" required>
            <span class="error" id="company-error"></span>
        </div>
        <div>
            <label for="duration">Duration</label>
            <input type="text" name="duration" id="duration" required>
            <span class="error" id="duration-error"></span>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
            <span class="error" id="description-error"></span>
        </div>
        <button type="submit">Create</button>
    </form>

    <script>
        document.getElementById('create-experience-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            fetch("{{ route('admin.experiences.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Experience Created Successfully');
                    window.location.href = "{{ route('admin.experiences.index') }}";
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


 --}}




 


 @extends('admin.layouts.layout')


 @section('main_content')
     <div class="container-fluid">
 
         <div class="row page-titles mb-4 py-3">
 
             <div class="d-flex align-items-center flex-wrap">
                 <h3 class="me-auto my-0">Create Experience</h3>
                 <div>
                     <a href="{{ route('admin.experiences.index') }}"
                     
                         class="btn btn-primary me-3"><i class="fa-solid fa-arrow-left-long me-2"></i>Back
                     </a>
                 </div>
             </div>
             
         </div>
 
         <div class="row">
 
             <div class="col-12">
                 <div class="card">
 
                     <div class="card-body">
                         <form id="create-counter-form">
                             @csrf
                             <div class="row gy-3">
             
                                     <div class="col-lg-6 col-12">
                                         <label class="form-label required">Title</label>
                                         <input type="text" name="title" id="title" class="form-control solid" placeholder="Title"
                                              required>
                                             <span class="error" id="title-error"></span>
                                     </div>
                                     
             
                                     <div class="col-lg-6 col-12">
                                         <label class="form-label required">Company</label>
                                         <input  type="text"    name="company" id="company"  class="form-control solid" placeholder="Company"
                                              required>
                                             <span class="error" id="company-error"></span>
                                     </div>
                                     
             
                                     <div class="col-lg-6 col-12">
                                         <label class="form-label required">Duration</label>
                                         <input  type="text"  name="duration" id="duration" class="form-control solid" placeholder="Duration"
                                              required>
                                             <span class="error" id="duration-error"></span>
                                     </div>
                                      
             
                                     <div class="col-12">
                                         <label class="form-label required">Description</label>
                                         <textarea name="description" id="description" class="form-control" rows="6"  id="description"></textarea>
                                         <span class="error" id="description-error"></span>
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
     document.getElementById('create-counter-form').addEventListener('submit', function(event) {
         event.preventDefault();
 
         let $submitButton = $(this).find('button[type="submit"]');
         let originalText = $submitButton.html(); // Save original button text
        
         $submitButton.html(
                         '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                     )
                     .prop('disabled', true);
 
         
         var formData = new FormData(this);
 
         fetch("{{ route('admin.experiences.store') }}", {
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
                 window.location.href = "{{ route('admin.experiences.index') }}";
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
         .finally(()=>{
             $submitButton.html(originalText).prop('disabled', false);
         })
     
         ;
     });
 </script>
      
 @endsection
 