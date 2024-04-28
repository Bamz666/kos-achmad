@extends('template.admin')
@section('konten')
<div class="content">
<div class="panel-header" style="background-color: #b6895b;">
    <div class="page-inner py-5">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
        <div>
          <h2 class="text-white pb-2 fw-bold">Selamat Datang, {{ Auth::user()->name }}</h2>
          <h5 class="text-white op-7 mb-2">Kelola Data KosAchmad Dengan Mudah</h5>
        </div>
        <div class="ml-md-auto py-2 py-md-0">
          <a href="{{route('datakamar')}}" class="btn btn-white btn-border btn-round mr-2">Manage</a>
        </div>
      </div>
    </div>
  </div>
  <div class="page-inner mt--5">
    <div class="row ">
      <div class="col-md-12">
        <center>
        <div class="card full-height">
          <div class="card-body">
            <div class="card-title">Statistik Data KosAchmad</div>
            <div class="card-category">Pantau terus perkembangan dari kos achmad</div>

            <div class="row mt-3">
              <div class="col-sm-6 col-md-6">
                <div class="card card-stats card-round" style="background-color: #b6895b; color:white;">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="fas fa-tags"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category" style="color: white">Jumlah Kosan Tersedia</p>
                          <h4 class="card-title text-white">{{$kosTersedia}}</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6">
                <div class="card card-stats card-round text-white" style="background-color: grey;">
                  <div class="card-body ">
                    <div class="row">
                      <div class="col-5">
                        <div class="icon-big text-center">
                          <i class="fas fa-book"></i>
                        </div>
                      </div>
                      <div class="col-7 col-stats">
                        <div class="numbers">
                          <p class="card-category text-white">Jumlah Kosan Terisi</p>
                          <h4 class="card-title text-white">5</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </center>
      </div>
      <div class="col-md-4">
        <div class="card card-profile">
          <div class="card-header" style="background-image: url('{{ asset('vendor') }}/img/gambarKos.jpg')">
            <div class="profile-picture">
              <div class="avatar avatar-xl">
                <img src="{{ asset('vendor') }}/img/logokos2.jpg" alt="..." class="avatar-img rounded-circle">
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="user-profile text-center">
              <div class="name">{{ Auth::user()->name }}</div>
              <div class="job">Fullstack Developer</div>
              <div class="desc">A man who hates loneliness</div>
              <div class="social-media">
                <a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
                  <span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
                </a>
                <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                  <span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> 
                </a>
                <a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
                  <span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
                </a>
                <a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
                  <span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> 
                </a>
              </div>
              <div class="view-profile">
                <a href="#" class="btn btn-block" style="background-color: #b6895b; color:white">View Full Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Ubah Data Profil</div>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jd">Nama User</label>
                                            <input type="text" value="" name="judul" class="form-control " id="jd" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Email</label>
                                            <input type="text" value="" name="judul" class="form-control " id="jd"  >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="jd">Password</label>
                                          <input type="text" value="" name="judul" class="form-control " id="jd" >
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jd">Konfirmasi Password</label>
                                        <input type="text" value="" name="judul" class="form-control " id="jd"  >
                                    </div>
                                </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                      <center>
                      <button type="submit" class="btn" style="background-color: grey; color:white"><i class="fas fa-refresh"></i> Update</button>
                      </center>
                  </div>
                </form>
            </div>
        </div>
    </div>
    </div>
  </div>
@endsection                    