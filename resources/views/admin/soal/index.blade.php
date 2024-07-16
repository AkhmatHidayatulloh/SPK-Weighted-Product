@extends('admin.layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ $title }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Pertanyaan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('soal.create') }}" class="btn btn-primary mb-3">Tambah Soal</a>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Soal</h3>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kriteria</th>
                                        <th>Pertanyaan</th>
                                        <th>Lihat Jawaban</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($soal as $soal)
                                        <tr>
                                            <td>{{ $soal->nomor }}</td>
                                            <td>{{ $soal->name }}</td>
                                            <td>{{ $soal->pertanyaan }}</td>
                                            <td><a href="{{ route('jawaban.index', [ 'id' => $soal->id]) }}" class="btn btn-info">Lihat
                                                    Jawaban</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('soal.edit', $soal->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <button class="btn btn-danger delete-btn"
                                                    data-form="{{ $soal->id }}">Delete</button>
                                                <form id="delete-form-{{ $soal->id }}"
                                                    action="{{ route('soal.destroy', $soal->id) }}" method="POST"
                                                    style="display:none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">Data Soal Tidak Ada</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function() {
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
            $(this).remove();
        });
    }, 5000);
});
</script>

<script>
$(document).ready(function() {
    $('#example2').DataTable();

    $('.delete-btn').on('click', function(e) {
        e.preventDefault();
        var formId = $(this).data('form');
        var form = $('#delete-form-' + formId);

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
</script>
@endsection