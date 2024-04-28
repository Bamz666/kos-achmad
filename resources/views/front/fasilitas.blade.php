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
						<h3>Fasilitas</h3>
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
						<a href="{{ asset('vendor') }}/img/foto1.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('vendor') }}/img/foto1.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ asset('vendor') }}/img/foto2.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('vendor') }}/img/foto2.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ asset('vendor') }}/img/foto3.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('vendor') }}/img/foto3.jpg);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="{{ asset('vendor') }}/img/foto4.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('vendor') }}/img/foto4.jpg);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="{{ asset('vendor') }}/img/foto5.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url({{ asset('vendor') }}/img/foto5.jpg);"></div>
						</a>
					</div>
				</div>
			</div>
			{{-- <div class="section-top-border" style="margin-top: -3rem">
				<div class="row">
					<div class="col-md-12">
						<h1>{{$show->nama}}</h1>
						<div class="typography" style="color: #808080; font-size: 18px;">
                            @if ($show->stok_kamar == 0)
                            <i class="fas fa-home text-danger"></i> <small class="text-danger">Kamar Penuh</small> |
                            @else
                            <i class="fas fa-home"></i> <small>Stok Kamar : {{$show->stok_kamar}}</small> |
                            @endif
                            <i class="fas fa-user"></i> <small>{{$show->gender}}</small> |
                            <i class="fas fa-bath"></i> <small>Kamar Mandi : {{$show->kamar_mandi}}</small> |
                            <i class="fas fa-map-marker-alt"></i> <small>{{$show->lokasi}}</small>
                          </div>                          
					</div>
				</div>
			</div> --}}
		</div>
	</div>
	<!-- End Align Area -->
@endsection