@extends('template.admin')
@section('konten')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Data</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{route('dashboard')}}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Data</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Data Kamar Kos</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Tambah Data Kamar</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Tambah Data Kamar</div>
                </div>
                <form action="{{ route('back.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jd">Nama Kosan</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="text" value="{{ old('nama')}}" name="nama" class="form-control {{ $errors->first('nama') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Nama">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jd">Lokasi</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="text" value="{{ old('lokasi')}}" name="lokasi" class="form-control {{ $errors->first('lokasi') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Lokasi">
                                            
                                        </div>
                                    </div>                                
                                    <div class="col-md-6 form-group form-floating-label">
                                        <select class="form-control input-solid" name="gender" id="selectFloatingLabel2"
                                            required>
                                            <option value="">&nbsp;</option>
                                            <option value="Pria" {{ old('gender') == 'Pria' ? 'selected' : '' }}>Pria</option>
                                            <option value="Wanita" {{ old('gender') == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                                            <option value="Pria & Wanita" {{ old('gender') == 'Pria & Wanita' ? 'selected' : '' }}>Pria & Wanita</option>
                                        </select>                             
                                        <label for="selectFloatingLabel2" class="placeholder">Pilih Gender <small class="text-danger" style="font-size: 1rem">*</small></label>
                                    </div>  
                                    <div class="col-md-6 form-group form-floating-label">
                                        <select class="form-control input-solid" name="kamar_mandi" id="selectFloatingLabel2"
                                            required>
                                            <option value="">&nbsp;</option>
                                            <option value="Dalam" {{ old('kamar_mandi') == 'Dalam' ? 'selected' : '' }}>Dalam</option>
                                            <option value="Luar" {{ old('kamar_mandi') == 'Luar' ? 'selected' : '' }}>Luar</option>
                                        </select>                             
                                        <label for="selectFloatingLabel2" class="placeholder">Kamar Mandi <small class="text-danger" style="font-size: 1rem">*</small></label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jd">Harga</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="text" value="{{ old('harga')}}" name="harga" class="form-control {{ $errors->first('harga') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Harga">            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jd">Stok</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="text" value="{{ old('stok')}}" name="stok" class="form-control {{ $errors->first('stok') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Stok">            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Deskripsi Singkat</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="text" value="{{ old('deskripsi_singkat')}}" name="deskripsi_singkat" class="form-control {{ $errors->first('deskripsi_singkat') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Deskripsi">            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Deskripsi Lengkap</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <textarea type="text" rows="6" value="{{ old('deskripsi_lengkap')}}" name="deskripsi_lengkap" class="form-control {{ $errors->first('deskripsi_lengkap') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Deskripsi Lengkap"></textarea>           
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Utama</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="file" name="gambar_utama" class="form-control {{ $errors->first('gambar_utama') ? "is-invalid":""}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Pendukung 1</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="file" name="gambar_satu" class="form-control {{ $errors->first('gambar_satu') ? "is-invalid":""}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Pendukung 2</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="file" name="gambar_dua" class="form-control {{ $errors->first('gambar_dua') ? "is-invalid":""}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Pendukung 3</label>
                                            <input type="file" name="gambar_tiga" class="form-control {{ $errors->first('gambar_tiga') ? "is-invalid":""}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Pendukung 4</label>
                                            <input type="file" name="gambar_empat" class="form-control {{ $errors->first('gambar_empat') ? "is-invalid":""}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Pendukung 5</label>
                                            <input type="file" name="gambar_lima" class="form-control {{ $errors->first('gambar_lima') ? "is-invalid":""}}">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <center>
                        <button type="submit" class="btn" style="background-color: #b6895b; color:white;">Simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection