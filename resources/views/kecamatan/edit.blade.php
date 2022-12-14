@extends('layouts.app')

@section('title', 'Post-Edit')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Wilayah</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Rekrutment</a></div>
                <div class="breadcrumb-item"><a href="#">Informasi</a></div>
                <div class="breadcrumb-item">Wilayah Kecamatan</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Wilayah Rekrutment</h2>
            <p class="section-lead">Di halaman ini, kita dapat mengedit wilayah kecamatan seleksi mitra.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Kecamatan</h4>
                    <a class="btn btn-primary" href="{{ route('kecamatan.index') }}">Kembali</a>
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{route('kecamatan.update', $kecamatan->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kecamatan_tipe">Wilayah Kecamatan</label>
                                <input type="text" class="form-control @error('kecamatan_tipe') is-invalid @enderror" id="kecamatan_tipe"
                                    name="kecamatan_tipe" placeholder="Masukkan wilayah kecamatan..." value="{{ $kecamatan->kecamatan_tipe }}">
                                @error('kecamatan_tipe')
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