@extends('admin.layouts.app')

@section('title', 'Add Category')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Add Category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Add Category</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Category Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description"
                                    required>{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="bobot">Bobot</label>
                                <input type="number" step="0.01" class="form-control" id="bobot" name="bobot"
                                    value="{{ old('bobot') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="benefit">Benefit</label>
                                <select class="form-control" name="benefit" id="benefit">
                                    <option value="1">
                                        Iya
                                    </option>
                                    <option value="0">
                                        Tidak
                                    </option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection