@extends('admin.layouts.app')

@section('title', 'Tambah Soal')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Soal</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Soal</li>
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
                            <h3 class="card-title">Form Tambah Soal</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('soal.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="kriteria">Kriteria</label>
                                    <select name="kriteria" id="kriteria" class="form-control">
                                        @foreach ($option as $kriteria)
                                            <option value="{{ $kriteria->id }}">{{ $kriteria->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pertanyaan">Pertanyaan</label>
                                    <textarea class="form-control" id="pertanyaan" name="pertanyaan"
                                    value="{{ old('pertanyaan') }}" required></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Tambah Pertanyaan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

