@extends('backend.layouts.template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Tambah Pengalaman Kerja</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ url('dashboard') }}">Home</a></li>
                    <li>Riwayat Hidup</li>
                    <li>Pengalaman Kerja</li>
                </ol>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Form Tambah Pengalaman Kerja</div>
            <div class="panel-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('pengalaman_kerja.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Masuk</label>
                        <input type="number" name="tahun_masuk" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Keluar</label>
                        <input type="number" name="tahun_keluar" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </section>
</section>
@endsection
