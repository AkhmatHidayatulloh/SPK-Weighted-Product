@extends('admin.layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('collapse/style.css') }}">
@endsection

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Master Perhitungan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Perhitungan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <a href="" class="btn btn-sm btn-primary">
                            <i class="fa fa-plus"></i>&nbsp;&nbsp;Hitung Perhitungan
                        </a> --}}
                        </div>
                        @if (\Session::has('info'))
                            <div class="alert alert-info alert-dismissible" role="alert" data-timeout="2000">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>
                                    {{ \Session::get('info') }}
                                </strong>
                            </div>
                        @endif
                        @if ($errors->any() != null)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif
                        <form action="{{ route('perhitungan.store') }}" method="post">
                            <button type="submit" class="btn btn-sm btn-primary" value="BTNsimpan" name="BTNsimpan"
                                id="BTNsimpan">
                                Simpan
                            </button>
                            @csrf
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Vendor</th>
                                            <th>General Information</th>
                                            <th>Price</th>
                                            <th>Quality Control</th>
                                            <th>Transaction</th>
                                            <th>Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 0;
                                        @endphp
                                        @forelse($vendors as $datavendor)
                                            <tr class="clickable" data-toggle="collapse" id="row{{ $no }}"
                                                data-target=".row{{ $no }}">
                                                <td><input type="checkbox" name="cbperhitungan[{{ $no }}]"
                                                        id="cbperhitungan[{{ $no }}]"
                                                        value="{{ $datavendor->id }}"></td>
                                                <td>{{ $datavendor->name }}</td>
                                                <td>{{ $datavendor->C1 }}</td>
                                                <td>{{ $datavendor->C2 }}</td>
                                                <td>{{ $datavendor->C3 }}</td>
                                                <td>{{ $datavendor->C4 }}</td>
                                                <td>{{ $datavendor->C5 }}</td>

                                            </tr>
                                            @php
                                                $no++;
                                            @endphp
                                        @empty
                                            <tr>
                                                <td colspan="7">Data Vendor Kosong</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
    @section('script')
        <script>
            $(document).ready(function() {
                $('#example2').DataTable();
            });
        </script>
    @endsection
