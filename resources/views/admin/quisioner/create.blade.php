    @extends('admin.layouts.app')

    @section('title')
        {{ $title }}
    @endsection

    @section('style')
        {{-- {{ asset('formwizard/style.css') }} --}}
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
        <link rel="stylesheet" href="{{ asset('formwizard/style.css') }}">
        <link rel="stylesheet" href="{{ asset('formwizard/radio.css') }}">
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
                            <li class="breadcrumb-item active">{{ $title }}</li>
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
                
                <div class="col-md-12">
                    <div class="card">
                        <div class="container">
                            <h2 id="heading">Quisioner Untuk Perhitungan SPK</h2>
                            <p>Fill all form field to go to next step</p>
                            <form id="msform" action="{{ route('quisioner.index') }}" method="POST">
                                @csrf
                                <input type="text" name="id_vendor" value="{{ $id_vendor }}">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    @forelse($category as $dataCategory)
                                        @php
                                            $width = 100 / $category->count();
                                        @endphp
                                        @if ($loop->first)
                                            <li class="active" id="Category-{{ $dataCategory->id }}"
                                                style="width: {{ $width }}% !important;">
                                                <strong>
                                                    {{ $dataCategory->name }}
                                                </strong>
                                            </li>
                                        @else
                                            <li id="Category-{{ $dataCategory->id }}"
                                                style="width: {{ $width }}% !important;">
                                                <strong>
                                                    {{ $dataCategory->name }}
                                                </strong>
                                            </li>
                                        @endif
                                    @empty
                                        <li class="active" id="account"><strong>No Data Found</strong></li>
                                    @endforelse
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <br> <!-- fieldsets -->
                                @forelse($soal as $dataKategori)
                                    <fieldset>
                                        <div class="form-card" style="text-align: left;">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">{{ $dataKategori->name }}</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step {{ $dataKategori->nomor }} - {{ $dataKategori->count() }}</h2>
                                                </div>
                                            </div>

                                            @foreach ($dataKategori->soals as $soal)
                                                <section class="radio-section" style="padding-bottom: 50px">
                                                    <div class="radio-list">
                                                        <h4 style="padding-top: 20px;">
                                                          No. {{ $soal->nomor }} :  {{ $soal->pertanyaan }}
                                                        </h4>
                                                        @foreach ($soal->jawaban as $jawaban)
                                                            <input type="hidden" name="id_kategori{{ $dataKategori->id }}{{ $soal->id }}" value="{{ $dataKategori->id }}">
                                                            <input type="hidden" name="id_soal{{ $dataKategori->id }}{{ $soal->id }}" value="{{ $soal->id }}">
                                                            
                                                            <div class="radio-item"
                                                                id="rblist{{ $soal->id_pertanyaan }}{{ $jawaban->id }}">
                                                                <input name="radio_{{ $dataKategori->id }}_{{ $soal->id }}"
                                                                    id="{{ $soal->id_pertanyaan }}{{ $jawaban->id }}"
                                                                    type="radio" value="{{ $jawaban->nilai_bobot_jawaban }}">
                                                                <label
                                                                    for="{{ $soal->id_pertanyaan }}{{ $jawaban->id }}">
                                                                    {{ $jawaban->jawaban }}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </section>
                                            @endforeach
                                        </div>
                                        @if ($loop->last)
                                            <button type="submit" class="action-button">Submit</button>
                                            <input type="button" name="previous" class="previous action-button-previous"
                                                value="Previous" />
                                        @elseif($loop->first)
                                            <input type="button" name="next" class="next action-button"
                                                value="Next" />
                                        @else
                                        <input type="button" name="next" class="next action-button"
                                                value="Next" />
                                            <input type="button" name="previous" class="previous action-button-previous"
                                                value="Previous" />
                                        @endif
                                    </fieldset>
                                @empty
                                    {{-- Data Kosong --}}
                                @endforelse
                            </form>
                        </div>
                    </div>
                </div>

        </section>
    @endsection

    @section('jsformwizard')
        {{-- {{ asset('formwizard/script.js') }} --}}

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src="{{ asset('formwizard/script.js') }}"></script>
    @endsection
