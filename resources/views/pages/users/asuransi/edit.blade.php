@extends('layouts.app')

@section('title', 'Edit Asuransi')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Asuransi</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Asuransi</a></div>
                    <div class="breadcrumb-item">Edit Asuransi</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('asuransi.update', $asuransi) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Asuransi</h4>
                        </div>
                        <div class="form-group">
                            <hr>
                            <p class="text-center"><strong>Identitas</strong></p>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nomor KTP</label>
                                <input type="text"
                                    class="form-control @error('nomor_ktp')
                                    is-invalid
                                @enderror"
                                    name="nomor_ktp" value="{{ $asuransi->nomor_ktp }}">
                                @error('nomor_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text"
                                    class="form-control @error('nama_lengkap')
                                    is-invalid
                                @enderror"
                                    name="nama_lengkap" value="{{ $asuransi->nama_lengkap }}">
                                @error('nama_lengkap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" {{ $asuransi->jenis_kelamin == 'Laki-Laki' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" {{ $asuransi->jenis_kelamin == 'Perempuan' ? 'checked' : '' }}>
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                                @error('jenis_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text"
                                    class="form-control @error('tempat_lahir')
                                    is-invalid
                                @enderror"
                                    name="tempat_lahir" value="{{ $asuransi->tempat_lahir }}">
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date"
                                    class="form-control @error('tanggal_lahir')
                                    is-invalid
                                @enderror"
                                    name="tanggal_lahir" value="{{ $asuransi->tanggal_lahir }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Status Pernikahan</label>
                                <select class="form-control @error('status_pernikahan') is-invalid @enderror" name="status_pernikahan">
                                    <option value="Menikah" {{ $asuransi->status_pernikahan == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                                    <option value="Belum Menikah" {{ $asuransi->status_pernikahan == 'Belum Menikah' ? 'selected' : '' }}>Belum Menikah</option>
                                </select>
                                @error('status_pernikahan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor Handphone</label>
                                <input type="text"
                                    class="form-control @error('nomor_handphone')
                                    is-invalid
                                @enderror"
                                    name="nomor_handphone" value="{{ $asuransi->nomor_handphone }}">
                                @error('nomor_handphone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>NPWP</label>
                                <input type="text"
                                    class="form-control @error('npwp')
                                    is-invalid
                                @enderror"
                                    name="npwp" value="{{ $asuransi->npwp }}">
                                @error('npwp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kewarganegaraan</label>
                                <select name="kewarganegaraan" class="form-control @error('kewarganegaraan') is-invalid @enderror">
                                    <option value="Indonesia" {{ $asuransi->kewarganegaraan == 'Indonesia' ? 'selected' : '' }}>Indonesia</option>
                                    <option value="Luar Negeri" {{ $asuransi->kewarganegaraan == 'Luar Negeri' ? 'selected' : '' }}>Luar Negeri</option>
                                </select>
                                @error('kewarganegaraan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control @error('kelas') is-invalid @enderror">
                                    <option value="I" {{ $asuransi->kelas == 'I' ? 'selected' : '' }}>I</option>
                                    <option value="II" {{ $asuransi->kelas == 'II' ? 'selected' : '' }}>II</option>
                                    <option value="III" {{ $asuransi->kelas == 'III' ? 'selected' : '' }}>III</option>
                                </select>
                                @error('kelas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    name="email" value="{{ $asuransi->email }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <hr>
                                <p class="text-center"><strong>Alamat</strong></p>
                                <hr>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $asuransi->alamat }}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>RT</label>
                                <select name="rt" class="form-control @error('rt') is-invalid @enderror">
                                    @for ($i = 1; $i <= 7; $i++)
                                        <option value="{{ $i }}" {{ $asuransi->rt == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('rt')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>RW</label>
                                <select name="rw" class="form-control @error('rw') is-invalid @enderror">
                                    @for ($i = 1; $i <= 7; $i++)
                                        <option value="{{ $i }}" {{ $asuransi->rw == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('rw')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Kode Pos</label>
                                <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" value="{{ $asuransi->kode_pos }}">
                                @error('kode_pos')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>No. Telpon Rumah</label>
                                <input type="text" class="form-control @error('no_telp_rumah') is-invalid @enderror" name="no_telp_rumah" value="{{ $asuransi->no_telp_rumah }}">
                                @error('no_telp_rumah')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kelurahan/Desa</label>
                                <input type="text" class="form-control @error('kelurahan_desa') is-invalid @enderror" name="kelurahan_desa" value="{{ $asuransi->kelurahan_desa }}">
                                @error('kelurahan_desa')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Nomor Kartu Keluarga</label>
                                <input type="text" class="form-control @error('nomor_kartu_keluarga') is-invalid @enderror" name="nomor_kartu_keluarga" value="{{ $asuransi->nomor_kartu_keluarga }}">
                                @error('nomor_kartu_keluarga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <hr>
                                <p class="text-center"><strong>Tambahan</strong></p>
                                <hr>
                            </div>
                            <div class="form-group">
                                <label>Status dalam Keluarga</label>
                                <select name="status_dalam_keluarga" class="form-control @error('status_dalam_keluarga') is-invalid @enderror">
                                    <option value="Kepala Keluarga" {{ $asuransi->status_dalam_keluarga == 'Kepala Keluarga' ? 'selected' : '' }}>Kepala Keluarga</option>
                                    <option value="Anak" {{ $asuransi->status_dalam_keluarga == 'Anak' ? 'selected' : '' }}>Anak</option>
                                    <option value="Istri/Suami" {{ $asuransi->status_dalam_keluarga == 'Istri/Suami' ? 'selected' : '' }}>Istri/Suami</option>
                                </select>
                                @error('status_dalam_keluarga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Jumlah Anak</label>
                                <select name="jumlah_anak" class="form-control @error('jumlah_anak') is-invalid @enderror">
                                    @for ($i = 0; $i <= 5; $i++)
                                        <option value="{{ $i }}" {{ $asuransi->jumlah_anak == $i ? 'selected' : '' }}>{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('jumlah_anak')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Rekening</label>
                                <select class="form-control @error('rekening') is-invalid @enderror" name="rekening">
                                    <option value="BCA" {{ $asuransi->rekening == 'BCA' ? 'selected' : '' }}>BCA</option>
                                    <option value="BNI" {{ $asuransi->rekening == 'BNI' ? 'selected' : '' }}>BNI</option>
                                    <option value="BSI" {{ $asuransi->rekening == 'BSI' ? 'selected' : '' }}>BSI</option>
                                    <option value="BRI" {{ $asuransi->rekening == 'BRI' ? 'selected' : '' }}>BRI</option>
                                    <option value="MANDIRI" {{ $asuransi->rekening == 'MANDIRI' ? 'selected' : '' }}>MANDIRI</option>
                                    <option value="DANAMON" {{ $asuransi->rekening == 'DANAMON' ? 'selected' : '' }}>DANAMON</option>
                                    <option value="CIMB NIAGA" {{ $asuransi->rekening == 'CIMB_NIAGA' ? 'selected' : '' }}>CIMB NIAGA</option>


                                </select>
                                @error('rekening')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Nomor Rekening</label>
                                <input type="text" class="form-control @error('nomor_rekening') is-invalid @enderror" name="nomor_rekening" value="{{ $asuransi->nomor_rekening }}">
                                @error('nomor_rekening')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Nama Pemilik Rekening</label>
                                <input type="text" class="form-control @error('nama_pemilik_rekening') is-invalid @enderror" name="nama_pemilik_rekening" value="{{ $asuransi->nama_pemilik_rekening }}">
                                @error('nama_pemilik_rekening')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Tambahkan field lain sesuai kebutuhan -->
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->

    <!-- Page Specific JS File -->
@endpush
