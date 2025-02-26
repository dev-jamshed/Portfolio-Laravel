@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">
        <div class="row page-titles mb-4 py-3">
            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Total Years of Experience</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="experience-year-form" method="POST" action="{{ route('admin.experience_years.update') }}">
                            @csrf
                            @method('PUT')
                            <div class="row gy-3">
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Title</label>
                                    <input type="text" name="title" id="title" class="form-control solid" value="{{ $experienceYear->title ?? '' }}" required>
                                    <span class="error" id="title-error"></span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label class="form-label required">Total Years</label>
                                    <input type="number" name="total_years" id="total_years" class="form-control solid" value="{{ $experienceYear->total_years ?? '' }}" required>
                                    <span class="error" id="total_years-error"></span>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" id="description" class="form-control solid">{{ $experienceYear->description ?? '' }}</textarea>
                                    <span class="error" id="description-error"></span>
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
    @if(session('success'))
        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
        });
    @endif
</script>
@endsection
