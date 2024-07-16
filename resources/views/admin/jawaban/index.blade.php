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
                        <li class="breadcrumb-item active">Data Jawaban</li>
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
            @if ($count == 5)
            <button class="btn btn-primary mb-3" disabled>Tambah Jawaban</button>
            @else
            <a href="{{ route('jawaban.create', ['id_pertanyaan' => $pertanyaan['id']]) }}" class="btn btn-primary mb-3">Tambah Jawaban</a>
            @endif
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        
                        <div class="card-header">
                            <h3 class="card-title">Tabel Quisioner</h3>
                        </div>
                        <div class="callout callout-info text-center">
                            <h4>Pertanyaan</h4>
                            <p>{{ $pertanyaan['pertanyaan'] }}</p>
                        </div>
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jawaban</th>
                                        <th>bobot</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse( $listjawaban as $jawaban)
                                        <tr>
                                            <td>{{ $jawaban->nomor }}</td>
                                            <td>{{ $jawaban->jawaban }}</td>
                                            <td>{{ $jawaban->nilai_bobot_jawaban }}</td>
                                            <td>
                                                <a href="{{ route('jawaban.edit', $jawaban->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                <button class="btn btn-danger delete-btn"
                                                    data-form="{{ $jawaban->id }}">Delete</button>
                                                <form id="delete-form-{{ $jawaban->id }}"
                                                    action="{{ route('jawaban.destroy', $jawaban->id, $jawaban->id_pertanyaan) }}" method="POST"
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