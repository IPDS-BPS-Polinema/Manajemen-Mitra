@extends('layouts.app')

@section('title', 'User-Index')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Nilai Mitra</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Management</a></div>
        <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
        <div class="breadcrumb-item">Nilai</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Halaman Nilai</h2>
      <p class="section-lead">Di halaman ini, kita dapat memberikan nilai pada mitra.</p>
      <div class="card">
        <div class="card-header">
          <h4>Data Nilai Mitra</h4>
        </div>

        <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table table-bordered">
          <tr style="text-align: center">
            <th>No</th>
            <th>Nama</th>
            <th>Kegiatan</th>
            <th>Kecamatan</th>
            <th>Kelurahan</th>
            <th>Nilai Ketepatan</th>
            <th>Nilai Kualitas</th>
            <th>Nilai Sikap</th>
            <th width="200px">Aksi</th>
          </tr>
          @foreach ($nilai as $item)
          <tr>
            <td style="text-align: center">{{ $loop->iteration }}</td>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->kegiatan->product->name }}</td>
            <td>{{ $item->kecamatan->kecamatan_tipe }}</td>
            <td>{{ $item->subkecamatan->sub_kecamatan }}</td>
            <td>{{ $item->nilai_ketepatan }}</td>
            <td>{{ $item->nilai_kualitas }}</td>
            <td >{{ $item->nilai_sikap }}</td>
            <td >
                <form action="{{ route('nilai.destroy',$item->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('nilai.edit',$item->id) }}">Nilai</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </table>

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
