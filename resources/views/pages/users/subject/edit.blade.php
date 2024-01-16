@extends('layouts.app')

@section('title', 'Edit Subject')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Subject</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">Edit Subject</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('subject.update', $subject) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Subject</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text"
                                    class="form-control @error('title')
                                    is-invalid
                                @enderror"
                                    name="title" value="{{ $subject->title }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Lecturer</label>
                                <input type="text"
                                    class="form-control @error('lecturer_id')
                                    is-invalid
                                @enderror"
                                    name="lecturer_id" value="{{ $subject->lecturer_id }}">
                                @error('lecturer_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Semester</label>
                                <input type="text"
                                    class="form-control @error('semester')
                                    is-invalid
                                @enderror"
                                    name="semester" value="{{ $subject->semester }}">
                                @error('semester')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Academic Year</label>
                                <input type="text"
                                    class="form-control @error('academic_year')
                                    is-invalid
                                @enderror"
                                    name="academic_year" value="{{ $subject->academic_year }}">
                                @error('academic_year')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>SKS</label>
                                <input type="text"
                                    class="form-control @error('sks')
                                    is-invalid
                                @enderror"
                                    name="sks" value="{{ $subject->sks }}">
                                @error('sks')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Code</label>
                                <input type="text"
                                    class="form-control @error('code')
                                    is-invalid
                                @enderror"
                                    name="code" value="{{ $subject->code }}">
                                @error('code')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-0">
                                <label>Description</label>
                                <textarea class="form-control" data-height="150" name="description">{{ $subject->description }}</textarea>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
