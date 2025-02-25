@extends('admin.layouts.layout')

@section('main_content')
    <div class="container-fluid">
        <div class="row page-titles mb-4 py-3">
            <div class="d-flex align-items-center flex-wrap">
                <h3 class="me-auto my-0">Edit Skill Category</h3>
                <div>
                    <a href="{{ route('admin.skill_categories.index') }}" class="btn btn-primary me-3">
                        <i class="fa-solid fa-arrow-left-long me-2"></i>Back
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.skill_categories.update', $skillCategory->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row gy-3">
                                <div class="col-12">
                                    <label class="form-label required">Name</label>
                                    <input type="text" name="name" class="form-control solid" value="{{ $skillCategory->name }}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
