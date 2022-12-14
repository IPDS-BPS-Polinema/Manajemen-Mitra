@extends('layouts.app')

@section('title', 'Post-Edit')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Dokumen</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Rekrutment</a></div>
                <div class="breadcrumb-item"><a href="#">Informasi</a></div>
                <div class="breadcrumb-item">Dokumen Pendukung</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Dokumen Pendukung</h2>
            <p class="section-lead">Di halaman ini, kita dapat menambahkan dokumen pendukung yang digunakan dalam seleksi mitra.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Kebutuhan Dokumen</h4>
                    <a class="btn btn-primary" href="{{ route('tipe_dokumen.index') }}">Kembali</a>
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{route('tipe_dokumen.update', $data->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Jenis Dokumen</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" placeholder="Masukkan jenis dokumen" value="{{ $data->name }}">
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer bg-whitesmoke">
            BPS - Kota Malang
        </div>
</div>
</section>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush