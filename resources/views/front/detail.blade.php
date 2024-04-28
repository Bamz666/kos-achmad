@extends('template.main')
<style>
.cards {
  display: inline-block;
  width: 100%;
  background: white;
  padding: .4em;
  border-radius: 6px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}


.cards-image {
  background-color: rgb(236, 236, 236);
  width: 100%;
  height: 70%;
  border-radius: 6px 6px 0 0;
  aspect-ratio: 3/2;
}

.cards-image:hover {
  transform: scale(0.98);
}

.category {
  text-transform: uppercase;
  font-size: 0.7em;
  font-weight: 600;
  color: rgb(63, 121, 230);
  padding: 10px 7px 0;
}

.category:hover {
  cursor: pointer;
}

.heading {
  font-weight: 600;
  color: rgb(88, 87, 87);
  padding: 7px;
}

.heading:hover {
  cursor: pointer;
}

.author {
  color: gray;
  font-weight: 400;
  font-size: 11px;
  padding-top: 10px;
}

.name {
  font-weight: 600;
}

.name:hover {
  cursor: pointer;
}
</style>
@section('konten')
	<!-- bradcam_area_start  -->
	<div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="bradcam_text text-center">
                        <h3>{{ $show['nama']}}</h3>
                      </div>	
				</div>
			</div>
		</div>
	</div>
	<!-- bradcam_area_end  -->

	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<h3>Image Gallery</h3>
				<div class="row gallery-item">
					<div class="col-md-4">
                        <a href="{{ asset('upload/'.$show['gambar_lima'])}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url('{{ asset('upload/'.$show['gambar_lima'])}}');"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{ asset('upload/'.$show['gambar_empat'])}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url('{{ asset('upload/'.$show['gambar_empat'])}}');"></div>
                        </a>
                    </div>
					<div class="col-md-4">
                        <a href="{{ asset('upload/'.$show['gambar_tiga'])}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url('{{ asset('upload/'.$show['gambar_tiga'])}}');"></div>
                        </a>
                    </div>
					<div class="col-md-6">
                        <a href="{{ asset('upload/'.$show['gambar_dua'])}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url('{{ asset('upload/'.$show['gambar_dua'])}}');"></div>
                        </a>
                    </div>
					<div class="col-md-6">
                        <a href="{{ asset('upload/'.$show['gambar_satu'])}}" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url('{{ asset('upload/'.$show['gambar_satu'])}}');"></div>
                        </a>
                    </div>
				</div>
			</div>
			<div class="section-top-border" style="margin-top: -3rem">
				<div class="row">
					<div class="col-md-12">
						<h1>{{$show->nama}}</h1>
						<div class="typography" style="color: #808080; font-size: 18px;">
                            @if ($show->stok == 0)
                            <i class="fas fa-home text-danger"></i> <small class="text-danger">Kamar Penuh</small> |
                            @else
                            <i class="fas fa-home"></i> <small>Stok Kamar : {{$show->stok}}</small> |
                            @endif
                            <i class="fas fa-user"></i> <small>{{$show->gender}}</small> |
                            <i class="fas fa-bath"></i> <small>Kamar Mandi : {{$show->kamar_mandi}}</small> |
                            <i class="fas fa-map-marker-alt"></i> <small>{{$show->lokasi}}</small>
                          </div>                          
					</div>
				</div>
			</div>
			<div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist" style="margin-top: -0.5rem">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Fasilitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Deskripsi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Ketentuan Hunian</a>
                            </li>
                            @if ($show->stok == 0)
                            <button class="btn btn-primary btn-round ml-auto disabled" style="background-color: #a1a1a1; cursor: default; border-color: transparent;">
                                <i class="fa fa-ban"></i>
                                Kamar Penuh
                            </button>                            
                            @else
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Pesan
                            </button>
                            @endif
                            
                            <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header no-bd">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">
                                                Pesan</span> 
                                                <span class="fw-light">
                                                    Kamar
                                                </span>
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('store', $show->id_nama) }}" id="pesanForm" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group form-group-default">
                                                            <span>Rincian Kamar</span>
                                                            <div class="cards mt-2">
                                                                <div class="cards-image" style="background: url('{{ asset('upload/'.$show['gambar_utama'])}}');">
                                                                   
                                                                </div>
                                                                <div class="category"> {{$show->gender}} </div>
                                                                <div class="heading"> {{$show->nama}}
                                                                    <p class="float-right">Rp.{{ number_format($show->harga, 0, ',', '.') }}/bulan</p>
                                                                    <div class="author"> Kamar <span class="name">{{$show->stok}}</span> Tersedia</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mt-3">
                                                        <div class="form-group form-group-default">
                                                            <span>Data Diri Kamu</span>
                                                            <div class="cards mt-2">
                                                                <div>
                                                                    <div class="heading">Nama Kamu</div>
                                                                    <input type="text" name="first_name" placeholder="Nama Lengkap" pattern="[A-Za-z\s]{3,50}"
                                                                    title="Harap masukkan huruf saja (3-50 karakter)" required class="single-input">
                                                                </div>
                                                                <div class="heading mt-1">Kota Kamu</div>
                                                                <div class="input-group-icon">
                                                                    <div class="icon" style="margin-top: 0.6rem; margin-left: -0.4rem;"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                                                    <div class="form-select" id="default-select">
                                                                        <select name="kota">
                                                                            <option value="1">Kota</option>
                                                                            <option value="1">Jakarta</option>
                                                                            <option value="1">Bandung</option>
                                                                            <option value="1">Bogor</option>
                                                                            <option value="1">Depok</option>
                                                                        </select>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="heading">Nomor Kamu</div>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                          <span class="input-group-text" style="background-color: #b6895b27;border: none;">
                                                                            <i class="fas fa-phone-alt" style="color: #808080;"></i>
                                                                          </span>
                                                                        </div>
                                                                        <input type="text" name="nomor" placeholder="Nomor Handphone" 
                                                                            pattern="^(?:\+62|0[1-9]{2})[0-9]{8,12}$" 
                                                                            title="Harap masukkan nomor telepon dengan format yang benar" 
                                                                            required class="form-control" style="background-color: #b6895b27; border: none;">
                                                                    </div>    
                                                                </div>
                                                            </div>                                                      
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id_kamar" value="{{ $show->id_nama }}">
                                                <p class="small">* Pastikan anda telah memasukkan data dengan benar!</p>
                                                <center>
                                                <a href="https://api.whatsapp.com/send?phone=6281388333641" target="_blank" style="width: 15em;" class="btn btn-success mt-2 mb-2"><i class="fab fa-whatsapp"></i> Whatsapp</a> <br>
                                                <i class="fas fa-arrow-up"></i>
                                                <p style="font-size: 0.8em;">Klik Buat Nanya CS</p>
                                            </center>
                                                <div class="modal-footer no-bd">
                                                    <button type="submit" class="btn btn-primary" id="pesanButton">Pesan</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                            <!-- Bagian form -->
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </ul>
                        <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-10 mt-2">
                                                        <h4 class="page-title float-left">Fasilitas Kosan</h4>
                                                    </div> 
                                                </div>            
                                            </div>                                   
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                <i class="fas fa-wifi" style="color: #b6895b;"></i> &nbsp; <small style="font-size: 18px;">Internet/Wi-Fi</small>
                                                <p>Tersedia Wi-Fi gratis</p>
                                            </div>
                                            <div class="col-md-4">
                                                <i class="fas fa-lock" style="color: #b6895b;"></i> &nbsp; <small style="font-size: 18px;">Keamanan</small>
                                                <p>CCTV . Gembok</p>
                                            </div>
                                            <div class="col-md-4">
                                                <i class="fas fa-utensils" style="color: #b6895b;"></i> &nbsp; <small style="font-size: 18px;">Dapur</small>
                                                <p>Kompor . Kulkas </p>
                                              </div>  
                                              <div class="col-md-4 mt-3">
                                                <i class="fas fa-tshirt" style="color: #b6895b;"></i> &nbsp; <small style="font-size: 18px;">Cucian</small>
                                                <p>Mesin Cuci . Pengering . Jemuran</p>
                                              </div>   
                                              <div class="col-md-4 mt-3">
                                                <i class="fas fa-broom" style="color: #b6895b;"></i> &nbsp; <small style="font-size: 18px;">Pembersihan</small>
                                                <p>Setiap Sore</p>
                                              </div>
                                              <div class="col-md-4 mt-3">
                                                <i class="fas fa-parking" style="color: #b6895b;"></i> &nbsp; <small style="font-size: 18px;">Area Parkir</small>
                                                <p>Tersedia Tempat Parkir</p>
                                              </div>                                                                                                                                       
                                                </div>    
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="card">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-10 mt-2">
                                                        <h4 class="page-title float-left">Deskripsi Kosan</h4>
                                                    </div>   
                                                </div>            
                                            </div>                                   
                                            <div class="card-body">
                                               <p>{{$show->deskripsi_lengkap}}</p>
                                            </div>
                                    </div>     
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-10 mt-2">
                                                <h4 class="page-title float-left">Ketentuan Hunian</h4>
                                            </div>    
                                        </div>            
                                    </div>                                   
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-md-6">
                                            <p>1. Tidak diperbolehkan untuk merokok di dalam kamar. Merokok hanya diperbolehkan di area yang telah disediakan.</p>
                                            <p class="mt-2">2. Dilarang untuk memasang paku dan menempel suatu barang di dinding dan pintu.</p>
                                            <p class="mt-2">3. Tidak diizinkan menerima dan membawa tamu/teman lawan jenis di kamar, ataupun menginap.</p>
                                            <p class="mt-2">4. Dilarang untuk merusak benda bersama yang berada dalam area kamar ataupun di area umum.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>5. Tidak diperbolehkan meminjamkan kamar untuk digunakan orang lain. </p>
                                            <p class="mt-2">6. Dilarang untuk memasak di dalam kamar. Demi keamanan bersama gunakanlah dapur umum yang telah disediakan.</p>
                                            <p class="mt-2">7. Diperkenankan untuk membawa anak dengan usia minimal 4 tahun, dengan catatan penghuni tetap berkewajiban untuk menjaga ketenangan dan tidak berisik di dalam kamar.</p>
                                            <p class="mt-2">8. Tidak diperbolehkan untuk menggunakan hunian Rukita untuk kegiatan komersial apa pun.</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <p>* Tolong amati dengan seksama tiap detail yang telah diinfokan agar tidak terjadi hal-hal yang tidak diinginkan
                            kedepannya
                        </p>
                    </div>
                </div>
            </div> 
		</div>
	</div>
	<!-- End Align Area -->
@endsection