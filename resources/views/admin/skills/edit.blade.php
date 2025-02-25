@extends('admin.layouts.layout')


@section('main_content')
    <div class="container-fluid">

        <div class="row page-titles mb-4 py-3">

            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Edit Skill</h3>
                <div>
                    <a href="{{ route('admin.skills.index') }}"
                    
                        class="btn btn-primary me-3"><i class="fa-solid fa-arrow-left-long me-2"></i>Back
                    </a>
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <form id="create-counter-form" enctype="multipart/form-data">
                            @csrf
        @method('PUT')
                            <div class="row gy-3">
            
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required">Name</label>
                                        <input type="text"  name="name" id="name" value="{{ $skill->name }}" class="form-control solid" placeholder="Name"
                                             required>
                                            <span class="error" id="name-error"></span>
                                    </div>
                                    
            
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required">Range</label>
                                        <input type="range" name="range" id="range" min="0" max="100"  value="{{ $skill->range }}"  class="form-control solid" 
                                             required>
                                             <span class="error" id="range-error"></span>
                                    </div>
            
                                    <div class="col-12">
                                        <label class="form-label required">Description</label>
                                        <textarea name="description" id="description" class="form-control" rows="6" id="description">{{ $skill->description }}</textarea>
                                        <span class="error" id="description-error"></span>
                                    </div>    
                                    
                                    <div class="col-xl-6  col-md-6 mb-4">
                                        <label class="form-label required">Show on Homepage</label>
                                        <select name="show_on_homepage" class="default-select wide form-control solid required" required >
                                            <option value="1" {{ $skill->show_on_homepage == 1 ? 'selected' : '' }} >Yes</option>
                                            <option value="0" {{ $skill->show_on_homepage == 0 ? 'selected' : '' }}>No</option>
                                        </select>
                                        <span class="error" id="show_on_homepage-error"></span>
                                    </div>    

                                    <div class="col-lg-6 col-12">
                                        <label class="form-label">Icon</label>
                                        <input type="file" name="icon" id="icon" class="form-control solid">
                                        @if($skill->icon)
                                            <img src="{{ Storage::url($skill->icon) }}" alt="icon" width="50" height="50" class="mt-2">
                                        @endif
                                        <span class="error" id="icon-error"></span>
                                    </div>

                                    <div class="col-lg-6 col-12 mb-4">
                                        <label class="form-label">Best Skill</label>
                                        <select name="best_skill" class="default-select wide form-control solid">
                                            <option value="1" {{ $skill->best_skill == 1 ? 'selected' : '' }}>Yes</option>
                                            <option value="0" {{ $skill->best_skill == 0 ? 'selected' : '' }}>No</option>
                                        </select>
                                        <span class="error" id="best_skill-error"></span>
                                    </div>

                                    <div class="col-lg-6 col-12 mb-4">
                                        <label class="form-label required">Category</label>
                                        <select name="category_id" class="default-select wide form-control solid required" required>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ $skill->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="error" id="category_id-error"></span>
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
    document.getElementById('create-counter-form').addEventListener('submit', function(event) {
        event.preventDefault();

        let $submitButton = $(this).find('button[type="submit"]');
        let originalText = $submitButton.html(); // Save original button text
       
        $submitButton.html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                    )
                    .prop('disabled', true);

        
        var formData = new FormData(this);

        fetch("{{ route('admin.skills.update', $skill->id) }}", {
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
                window.location.href = "{{ route('admin.skills.index') }}";
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
