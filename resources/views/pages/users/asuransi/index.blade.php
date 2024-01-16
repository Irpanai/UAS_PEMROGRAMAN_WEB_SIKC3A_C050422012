@extends('layouts.app')

@section('title', 'Asuransi')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Formulir Asuransi Kesehatan</h1>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="home">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="asuransi">Asuransi</a></div>
                    <div class="breadcrumb-item">Daftar Asuransi</div>
                </div>
            </div>
            <div class="section-body">

                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Semua Asuransi</h4>
                                <div class="section-header-button">
                                    <a href="{{ route('asuransi.create') }}" class="btn btn-primary">Tambah Asuransi</a>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET", action="{{ route('asuransi.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>

                                            <th>Nomor KTP</th>
                                            <th>Nama Lengkap</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Status Pernikahan</th>
                                            <th>Nomor Handphone</th>
                                            <th>NPWP</th>
                                            <th>Kewarganegaraan</th>
                                            <th>Kelas</th>
                                            <th>E-mail</th>
                                            <th>Alamat</th>
                                            <th>RT</th>
                                            <th>RW</th>
                                            <th>Kode Pos</th>
                                            <th>No. Telp Rumah</th>
                                            <th>Kelurahan / Desa</th>
                                            <th>Nomor Kartu Keluarga</th>
                                            <th>Status Dalam Keluarga</th>
                                            <th>Jumlah Anak</th>
                                            <th>Rekening</th>
                                            <th>Nomor Rekening</th>
                                            <th>Nama Pemilik Rekening</th>
                                            <th>Action</th> 

                                        </tr>
                                        @foreach ($asuransis as $asuransi)
                                        <tr>
                                            <td>
                                                {{ $asuransi->nomor_ktp }}
                                            </td>
                                            <td>
                                                {{ $asuransi->nama_lengkap }}
                                            </td>
                                            <td>
                                                {{ $asuransi->jenis_kelamin }}
                                            </td>
                                            <td>
                                                {{ $asuransi->tempat_lahir }}
                                            </td>
                                            <td>
                                                {{ $asuransi->tanggal_lahir }}
                                            </td>
                                            <td>
                                                {{ $asuransi->status_pernikahan }}
                                            </td>
                                            <td>
                                                {{ $asuransi->nomor_handphone }}
                                            </td>
                                            <td>
                                                {{ $asuransi->npwp }}
                                            </td>
                                            <td>
                                                {{ $asuransi->kewarganegaraan }}
                                            </td>
                                            <td>
                                                {{ $asuransi->kelas }}
                                            </td>
                                            <td>
                                                {{ $asuransi->email }}
                                            </td>
                                            <td>
                                                {{ $asuransi->alamat }}
                                            </td>
                                            <td>
                                                {{ $asuransi->rt }}
                                            </td>
                                            <td>
                                                {{ $asuransi->rw }}
                                            </td>
                                            <td>
                                                {{ $asuransi->kode_pos }}
                                            </td>
                                            <td>
                                                {{ $asuransi->no_telp_rumah }}
                                            </td>
                                            <td>
                                                {{ $asuransi->kelurahan_desa }}
                                            </td>
                                            <td>
                                                {{ $asuransi->nomor_kartu_keluarga }}
                                            </td>
                                            <td>
                                                {{ $asuransi->status_dalam_keluarga }}
                                            </td>
                                            <td>
                                                {{ $asuransi->jumlah_anak }}
                                            </td>
                                            <td>
                                                {{ $asuransi->rekening }}
                                            </td>
                                            <td>
                                                {{ $asuransi->nomor_rekening }}
                                            </td>
                                            <td>
                                                {{ $asuransi->nama_pemilik_rekening }}
                                            </td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('asuransi.edit', $asuransi->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('asuransi.destroy', $asuransi->id) }}" method="POST"
                                                            class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete" onclick="return confirm('Are you sure you want to delete this user?')">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $asuransis->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush
