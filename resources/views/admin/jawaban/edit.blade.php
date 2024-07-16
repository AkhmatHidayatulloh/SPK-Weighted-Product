@extends('admin.layouts.app')

@section('title', 'Edit Jawaban')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Jawaban</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Jawaban</li>
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
                            <h3 class="card-title">Form Edit Jawaban</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('jawaban.update', $jawaban->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="id_pertanyaan" id="id_pertanyaan" value="{{ $jawaban->id_pertanyaan }}">
                                <div class="form-group">
                                    <label for="name">Jawaban</label>
                                    <input type="text" class="form-control" id="jawaban" name="jawaban" value="{{ old('jawaban', $jawaban->jawaban) }}"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nilai Bobot Jawaban</label>
                                    <input type="number" max="5" min="1" class="form-control" id="nilai_bobot_jawaban" name="nilai_bobot_jawaban" value="{{ old('nilai_bobot_jawaban', $jawaban->nilai_bobot_jawaban) }}"
                                        required>
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
