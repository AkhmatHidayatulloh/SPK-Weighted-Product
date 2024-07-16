@extends('admin.layouts.app')

@section('title', 'Edit Soal')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Soal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Soal</li>
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
                            <h3 class="card-title">Form Edit Soal</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('soal.update', $soal->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Pertanyaan</label>
                                    <textarea class="form-control"  name="pertanyaan" id="pertanyaan" cols="30" rows="10" required>{{ $soal->pertanyaan }}</textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Update Soal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
