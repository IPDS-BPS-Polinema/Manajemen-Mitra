@extends('layouts.app')

@section('title', 'Post-Index')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Wilayah</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Rekrutmen</a></div>
                <div class="breadcrumb-item"><a href="#">Informasi</a></div>
                <div class="breadcrumb-item">Wilayah Kecamatan</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Wilayah Rekrutment</h2>
            <p class="section-lead">Di halaman ini, kita dapat menambahkan wilayah kecamatan seleksi mitra.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Data Kebutuhan Lokasi Kecamatan</h4>
                </div>

                <div class="row">
                    @if (Session::has('success'))
                    <div class="col-12">
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    </div>
                    @endif
                    <div class="col-md-4">
                        <div class="card shadow my-4 border">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kecamatan</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{route('kecamatan.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="kecamatan_tipe">Wilayah Kecamatan</label>
                                        <input type="text" class="form-control @error('kecamatan_tipe') is-invalid @enderror"
                                            id="kecamatan_tipe" name="kecamatan_tipe" placeholder="Masukkan wilayah kecamatan.."
                                            value="{{ old('kecamatan_tipe')}}">
                                        @error('kecamatan_tipe')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card shadow my-4 border">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Wilayah Kecamatan</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="text-center">No</th>
                                                <th scope="col" class="text-center">Wilayah Kecamatan</th>
                                                <th scope="col" class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($kecamatan->isEmpty())
                                            <tr class="text-center">
                                                <td colspan="6">Data masih kosong.</td>
                                            </tr>
                                            @else
                                            @foreach ($kecamatan as $item)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{$item->kecamatan_tipe}}</td>
                                                <td>
                                                    <a href="{{ route('kecamatan.edit', $item->id)}}"
                                                        class="btn btn-sm btn-success"><i
                                                            class="fas fa-fw fa-edit"></i></a>
                                                    <form action="{{route('kecamatan.destroy', $item->id)}}" method="POST"
                                                        class="d-inline">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button type="submit" class="btn btn-sm btn-danger"><i
                                                                class="fas fa-fw fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    {{-- @if (!$data->isEmpty())
                                    {{$data->links('vendor.pagination.bootstrap-4')}}
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="card-footer bg-whitesmoke">
                    BPS - Kota Malang
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush