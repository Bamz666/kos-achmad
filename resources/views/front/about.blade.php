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
						<h3>About Us</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- bradcam_area_end  -->
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6">
            <div class="section_title text-center mb-55 mt-5">
                <h3><span>Selamat Datang di Kos Achmad</span></h3>
            </div>
        </div>
    </div>

    <div class="service-area section-padding30 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="fas fa-home"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a>Rumah Oke</a></h5>
                            <p>Kondisi rumah yang gak perlu diraguin lagi buat kamu-kamu yang mau punya kamar yang nyaman.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-think"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a>Pemilik Ramah</a></h5>
                            <p>Pemilik kosan yang ramah, dijamin bikin kamu para anak kos nyaman dan betah tinggal lama-lama disini.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-gear"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a>Lingkungan Sehat</a></h5>
                            <p>Lingkungan yang cukup sehat karena kebersihan sangat dijaga di tempat ini, bikin kamu gak perlu khawatir lagi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

	<!-- Start Align Area -->
	<div class="whole-wrap mt-3">
		<div class="container box_1170">
			<div class="section-top-border">
				<h3 class="mb-30">Hunian Yang Nyaman</h3>
				<div class="row">
					<div class="col-md-3">
						<img src="{{ asset('vendor') }}/img/frontPic.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20">
						<p>Kami adalah tempat kos yang menawarkan hunian yang nyaman dan terjangkau di pusat kota. Kami dengan bangga memberikan 
                            pelayanan terbaik kepada mahasiswa, pekerja, dan siapa pun yang mencari tempat tinggal yang nyaman dan aman di daerah ini.</p>
					</div>
				</div>
			</div>
			<div class="section-top-border text-right">
				<h3 class="mb-30">Fasilitas Lengkap</h3>
				<div class="row">
					<div class="col-md-9">
						<p class="text-right">Di Kos Achmad, kami mengerti betapa pentingnya memiliki lingkungan yang nyaman. Oleh karena itu, kami telah menghadirkan fasilitas yang memadai untuk memenuhi kebutuhan Anda. 
                            Setiap kamar kos kami  dilengkapi dengan fasilitas seperti tempat tidur, meja belajar, lemari, dan akses internet yang cepat. Kami juga 
                            menyediakan dapur bersama, dan area makan, tempat Anda dapat berinteraksi dengan penghuni lain dan menciptakan ikatan yang erat. 
                            Untuk keamanan kami telah melengkapi kosan kami dengan pengawasan CCTV.</p>
					</div>
					<div class="col-md-3">
						<img src="{{ asset('vendor') }}/img/foto5.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
            <div class="section-top-border">
				<h3 class="mb-30">Lokasi Strategis</h3>
				<div class="row">
					<div class="col-md-3">
						<img src="{{ asset('vendor') }}/img/maps.webp" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20">
						<p>Kami juga bangga dengan lokasi strategis kami. Terletak di pusat kota, dekat dengan pusat perkantoran, pusat perbelanjaan, tempat 
                            hiburan, dan fasilitas umum lainnya. Transportasi umum juga mudah diakses, memudahkan Anda untuk menjelajahi dan mengakses berbagai 
                            area di sekitar kami.</p>
					</div>
				</div>
			</div>
            <div class="section-top-border text-right">
				<h3 class="mb-30">Terima Kasih</h3>
				<div class="row">
					<div class="col-md-9">
						<p class="text-right">Terima kasih telah mengunjungi website Kos Achmad. Kami berharap informasi yang kami 
                            berikan dapat membantu Anda. Jika Anda memiliki pertanyaan lebih lanjut atau ingin mengatur kunjungan untuk 
                            melihat langsung fasilitas kami, jangan ragu untuk menghubungi kami melalui kontak yang tersedia di halaman ini. 
                            Kami berharap dapat menyambut Anda sebagai penghuni kami dan menjadikan tempat tinggal Anda di Kos Achmad 
                            sebagai pengalaman yang menyenangkan dan memuaskan.</p>
					</div>
					<div class="col-md-3">
						<img src="{{ asset('vendor') }}/img/thanks.webp" alt="" class="img-fluid">
					</div>
				</div>
			</div>
        </div>
    </div>
	<!-- End Align Area -->
@endsection