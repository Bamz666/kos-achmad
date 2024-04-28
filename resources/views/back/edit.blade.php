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
                <a href="#">Edit Data Kamar</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Edit Kamar: {{$edit -> nama}}</div>
                </div>
                <form action="{{ route('back.update', $edit['id_nama']) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jd">Nama Kosan</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="text" value="{{ $edit['nama']}}" name="nama" class="form-control {{ $errors->first('nama') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Nama">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jd">Lokasi</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="text" value="{{ $edit['lokasi']}}" name="lokasi" class="form-control {{ $errors->first('lokasi') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Lokasi">
                                            
                                        </div>
                                    </div>                                
                                    <div class="col-md-6 form-group form-floating-label">
                                        <select class="form-control input-solid" name="gender" id="selectFloatingLabel2"
                                            required>
                                            <option value="">&nbsp;</option>
                                            <option value="Pria" {{ $edit['gender'] == 'Pria' ? 'selected' : '' }}>Pria</option>
                                            <option value="Wanita" {{ $edit['gender'] == 'Wanita' ? 'selected' : '' }}>Wanita</option>
                                            <option value="Pria & Wanita" {{ $edit['gender'] == 'Pria & Wanita' ? 'selected' : '' }}>Pria & Wanita</option>
                                        </select>                             
                                        <label for="selectFloatingLabel2" class="placeholder">Pilih Gender <small class="text-danger" style="font-size: 1rem">*</small></label>
                                    </div>  
                                    <div class="col-md-6 form-group form-floating-label">
                                        <select class="form-control input-solid" name="kamar_mandi" id="selectFloatingLabel2"
                                            required>
                                            <option value="">&nbsp;</option>
                                            <option value="Dalam" {{ $edit['kamar_mandi'] == 'Dalam' ? 'selected' : '' }}>Dalam</option>
                                            <option value="Luar" {{ $edit['kamar_mandi'] == 'Luar' ? 'selected' : '' }}>Luar</option>
                                        </select>                             
                                        <label for="selectFloatingLabel2" class="placeholder">Kamar Mandi <small class="text-danger" style="font-size: 1rem">*</small></label>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jd">Harga</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="text" value="{{ $edit['harga']}}" name="harga" class="form-control {{ $errors->first('harga') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Harga">            
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jd">Stok</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="text" value="{{ $edit['stok']}}" name="stok" class="form-control {{ $errors->first('stok') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Stok">            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Deskripsi Singkat</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <input type="text" value="{{ $edit['deskripsi_singkat']}}" name="deskripsi_singkat" class="form-control {{ $errors->first('deskripsi_singkat') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Deskripsi">            
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="jd">Deskripsi Lengkap</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <textarea type="text" rows="6"  name="deskripsi_lengkap" class="form-control {{ $errors->first('deskripsi_lengkap') ? "is-invalid":""}}" id="jd" placeholder="Masukkan Deskripsi Lengkap">{{ $edit['deskripsi_lengkap']}}</textarea>           
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Utama</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <img style="width: 100%" src="{{ asset('upload/'.$edit['gambar_utama'])}}"> 
                                            <input type="file" name="gambar_utama" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Pendukung 1</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <img style="width: 100%" src="{{ asset('upload/'.$edit['gambar_satu'])}}">
                                            <input type="file" name="gambar_satu" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Pendukung 2</label> <small class="text-danger" style="font-size: 1rem">*</small>
                                            <img style="width: 100%" src="{{ asset('upload/'.$edit['gambar_dua'])}}">
                                            <input type="file" name="gambar_dua" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Pendukung 3</label>
                                            <img style="width: 100%" src="{{ asset('upload/'.$edit['gambar_tiga'])}}">
                                            <input type="file" name="gambar_tiga" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Pendukung 4</label>
                                            <img style="width: 100%" src="{{ asset('upload/'.$edit['gambar_empat'])}}">
                                            <input type="file" name="gambar_empat" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="password">Gambar Pendukung 5</label>
                                            <img style="width: 100%" src="{{ asset('upload/'.$edit['gambar_lima'])}}">
                                            <input type="file" name="gambar_lima" class="form-control">
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