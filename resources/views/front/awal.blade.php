@extends('template.main')
@section('konten')
<!-- slider_area_start -->
<div class="slider_area">
<div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-9">
                    
                    <div class="slider_text ">
                        <span>Kosan? Kos Achmad Aja!!.</span>
                        <h3> Bantu kamu yang lagi butuh kosan</h3>
                        <p>Kenyamanan yang sederhana, seperti rumahmu</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- kosan_area_start  -->
<div class="popular_causes_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    <h3><span>Daftar Kamar</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">          
                <div class="causes_active owl-carousel">
                    @foreach ($kamar as $item)
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="{{ asset('upload/'.$item['gambar_utama'])}}" alt="" style="aspect-ratio: 3/2;">
                        </div>
                        <div class="causes_content">
                            <center style="margin-top: -1rem">
                                <a href="#" class="genric-btn primary radius">{{$item->gender}}</a>
                            </center>
                            <div class="balance d-flex justify-content-between align-items-center mt-1">
                                @if ($item->stok == 0)
                                    <span class="text-danger">Kamar Penuh</span>
                                @else
                                    <span>Kamar Tersedia: {{$item->stok}}</span>
                                @endif
                                &nbsp; Rp.{{ number_format($item->harga, 0, ',', '.') }}
                            </div>                            
                            <h4>{{$item->nama}}</h4>
                            <p>{{$item->deskripsi_singkat}}</p>
                            @if ($item->stok == 0)
                            <a class="read_more" style="cursor: not-allowed; color: grey;">Read More</a>
                            @else
                            <a class="read_more" href="{{ route('show',$item->id_nama)}}">Read More</a>
                            @endif      
                        </div>
                    </div>
                    @endforeach
                    <div class="single_cause">
                        <div class="thumb">
                            <img src="{{ asset('vendor') }}/img/frontPic.jpg" alt="" style="aspect-ratio: 3/2;">
                        </div>
                        <div class="causes_content">
                            <div class="balance d-flex justify-content-between align-items-center" style="margin-top: -0.5rem;">
                            </div>
                            <h4>Fasilitas</h4>
                            <p>Kumpulan foto dari beberapa fasilitas yang tersedia di kosan, seperti tempat parkir (untuk motor), dapur, kamar
                                mandi luar, dan lain sebagainya.</p>
                            <a class="read_more" href="{{ route('fasilitas') }}">Read More</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <a href="{{ route('kosan') }}">
            <div class="section_title text-right">
                <h4><span>Selengkapnya &nbsp;<i class="fas fa-arrow-right"></i></span></h4>
            </div>
        </a>
    </div>
</div>

<!-- kosan_area_end  -->

<!-- data_area_start  -->
<div class="counter_area mb-5">
    <div class="container">
        <div class="counter_bg overlay">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_counter d-flex align-items-center justify-content-center">
                        <div class="icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="events">
                            <h3 class="counter">10</h3>
                            <p>Kamar Kos</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_counter d-flex align-items-center justify-content-center">
                        <div class="icon">
                            <i class="fas fa-map"></i>
                        </div>
                        <div class="events">
                            <h3 class="counter">12</h3>
                            <p>Menit Menuju Kawasan Sudirman</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_counter d-flex align-items-center justify-content-center">
                        <div class="icon">
                            <i class="flaticon-hug"></i>
                        </div>
                        <div class="events">
                            
                            <p>Penjaga Kos Ramah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- data_area_end  -->

<!-- pelopor_area_start  -->
<div class="our_volunteer_area section_padding" style="background-color: #b6895b1f;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section_title text-center mb-55">
                    <h3><span>Pemilik & Pengurus Kos Achmad</span></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single_volenteer">
                    <div class="volenteer_thumb">
                        <img src="{{ asset('vendor') }}/img/pemilik.jpg" alt="">
                    </div>
                    <div class="voolenteer_info d-flex align-items-end">
                        <div class="social_links">
                            <ul>
                                <li>
                                    <a href="#"> <i class="fab fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank"> <i class="fab fa-instagram"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-linkedin"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-twitter"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="info_inner">
                            <h4>Achmad Alwani</h4>
                            <p>Owners Kos Achmad</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1">
                
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_volenteer">
                    <div class="volenteer_thumb">
                        <img src="{{ asset('vendor') }}/img/owners.jpg" alt="">
                    </div>
                    <div class="voolenteer_info d-flex align-items-end">
                        <div class="social_links">
                            <ul>
                                <li>
                                    <a href="#"> <i class="fab fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-instagram"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-linkedin"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fab fa-twitter"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="info_inner">
                            <h4>Alvin & Nina</h4>
                            <p>Pengurus Kos Achmad</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- pelopor_area_end  -->
@endsection