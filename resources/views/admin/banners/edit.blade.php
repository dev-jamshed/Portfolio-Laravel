{{-- @extends('layouts.admin')

@section('content')
    <h1>Edit Banner</h1>
    <form id="edit-banner-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $banner->title }}" required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description">{{ $banner->description }}</textarea>
        </div>
        <div>
            <label for="image">Image</label>
            <input type="file" name="image" id="image">
            <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" width="100">
        </div>
        <div>
            <label for="skills">Skills</label>
            <div id="skills-wrapper">
                @foreach(json_decode($banner->skills) as $skill)
                    <input type="text" name="skills[]" value="{{ $skill }}">
                @endforeach
            </div>
            <button type="button" onclick="addSkill()">Add Skill</button>
        </div>
        <div>
            <label for="top_skill">Top Skill</label>
            <input type="text" name="top_skill" id="top_skill" value="{{ $banner->top_skill }}" required>
        </div>
        <div>
            <label for="bottom_skill">Bottom Skill</label>
            <input type="text" name="bottom_skill" id="bottom_skill" value="{{ $banner->bottom_skill }}" required>
        </div>
        <button type="submit">Update</button>
    </form>

    <script>
        function addSkill() {
            var wrapper = document.getElementById('skills-wrapper');
            var input = document.createElement('input');
            input.type = 'text';
            input.name = 'skills[]';
            wrapper.appendChild(input);
        }

        document.getElementById('edit-banner-form').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            fetch("{{ route('admin.banners.update', $banner->id) }}", {
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
                    alert('Banner Updated Successfully');
                    window.location.href = "{{ route('admin.banners.index') }}";
                } else {
                    alert('Error updating banner');
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
                <h3 class="me-auto my-0">Edit  Banner</h3>
                <div>
                    <a href="{{ route('admin.banners.index') }}"
                    
                        class="btn btn-primary me-3"><i class="fa-solid fa-arrow-left-long me-2"></i>Back
                    </a>
                </div>
            </div>
            
        </div>

        <div class="row">

            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <form id="create-banner-form"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gy-3">
            
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required">Title</label>
                                        <input type="text" name="title" id="title" class="form-control solid" placeholder="Title"
                                             required value="{{ $banner->title }}">
                                            <span class="error" id="title-error"></span>
                                    </div>
                                    
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required">Skills</label>
                                        <div id="skills-wrapper">

                                            @foreach(json_decode($banner->skills) as $skill)
                                            <input type="text"  class="form-control solid" name="skills[]" value="{{ $skill }}">
                                            @endforeach
 
                                        </div>

                                       
                                        <button type="button" class="btn btn-primary me-3 mt-3" onclick="addSkill()"><i class="fas fa-plus me-2"></i> Add Skill</button>
                                        <span class="error" id="skills-error"></span>
                                        
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required">Top Skill</label>
                                        <input  type="text" name="top_skill" id="top_skill" class="form-control solid" placeholder="Top Skill"
                                             required value="{{ $banner->top_skill }}" >
                                             <span class="error" id="top_skill-error"></span>
                                    </div>
            
                                    <div class="col-lg-6 col-12">
                                        <label class="form-label required">Bottom Skill</label>
                                        <input  type="text" name="bottom_skill" id="bottom_skill" class="form-control solid" placeholder="Bottom Skill"
                                             required value="{{ $banner->bottom_skill }}">
                                             <span class="error" id="bottom_skill-error"></span>
                                    </div>
            
                                    
                                    <div class="col-12">
                                        <label class="form-label required">Description</label>
                                        <textarea name="description" id="description" class="form-control" rows="6" id="comment">
                                            {{ $banner->description }}
                                        </textarea>
                                        <span class="error" id="description-error"></span>
                                    </div>     
                                    
            
                                    <div class="col-lg-6 col-12">
                                    

                                        <label class="form-label required">Image</label>
                                                <input type="file" class="form-control solid" name="image" id="image">
                                                <span class="error" id="image-error"></span>

                                                <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}" width="100" class="mt-3">
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
    function addSkill() {
        var wrapper = document.getElementById('skills-wrapper');
        var input = document.createElement('input');
        input.type = 'text';
        input.name = 'skills[]';
        input.className = 'form-control solid';
        input.placeholder = 'Add Skill';
        wrapper.appendChild(input);
    }

        document.getElementById('create-banner-form').addEventListener('submit', function(event) {
            event.preventDefault();
            let $submitButton = $(this).find('button[type="submit"]');
        let originalText = $submitButton.html(); // Save original button text
       
        $submitButton.html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...'
                    )
                    .prop('disabled', true);


            var formData = new FormData(this);

            fetch("{{ route('admin.banners.update', $banner->id) }}", {
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
                    window.location.href = "{{ route('admin.banners.index') }}";
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
            })  .finally(()=>{
            $submitButton.html(originalText).prop('disabled', false);
        });
        });
</script>
     
@endsection

