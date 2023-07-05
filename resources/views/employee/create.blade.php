@extends('layouts.app1')

@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    {{--
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif --}}


                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Employee</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control @error('firstName') is-invalid @enderror"
                                name="firstName" id="firstName" value="{{ old('firstName') }}"
                                placeholder="Enter First Name">
                            @error('firstName')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control @error('lastName') is-invalid @enderror"
                                name="lastName" id="lastName" value="{{ old('lastName') }}" placeholder="Enter Last Name">
                            @error('lastName')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" value="{{ old('email') }}" placeholder="Enter Email">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" class="form-control @error('age') is-invalid @enderror" name="age"
                                id="age" value="{{ old('age') }}" placeholder="Enter Age">
                            @error('age')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="position" class="form-label">Position</label>
                            <select name="position" id="position" class="form-select">
                                @foreach ($positions as $position)
                                    <option value="{{ $position->id }}"
                                        {{ old('position') == $position->id ? 'selected' : '' }}>
                                        {{ $position->code . ' - ' . $position->name }}</option>
                                @endforeach
                            </select>
                            @error('position')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="cv" class="form-label">Curriculum Vitae (CV)</label>
                            <input type="file" class="form-control" name="cv" id="cv">
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('employees.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circle me-2"> Cancel</i></a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="sumbit" class="btn btn-dark btn-lg mat-3"><i class="bi-check-circle me-2">
                                    Save</i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@vite('resources/sass/app.scss')
