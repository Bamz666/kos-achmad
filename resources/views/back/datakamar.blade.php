@extends('template.admin')
@section('konten')
<div class="content">
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
            </ul>
        </div>
        <div class="row">
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Kamar Kos</h4>
            <div >
                <a href="{{route('create')}}">
                    <button class="btn btn-md btn-round float-right" style="margin-top: -2.2rem; background-color: #b6895b; color: white">
                    <i class="fas fa-plus-circle"></i> Tambah
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="basic-datatables" class="display table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nama Kosan</th>
                            <th>Harga</th>
                            <th>Kamar Mandi</th>
                            <th>Gender</th>
                            <th>Stok Kamar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Kosan</th>
                            <th>Harga</th>
                            <th>Kamar Mandi</th>
                            <th>Gender</th>
                            <th>Stok Kamar</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($admin as $item)
                        <tr>
                            <td>{{$item -> nama}}</td>
                            <td>{{$item -> harga}}</td>
                            <td>{{$item -> kamar_mandi}}</td>
                            <td>{{$item -> gender}}</td>
                            <td>{{$item -> stok}}</td>
                            <td>
                                <a href="{{ route('edit', $item->id_nama)}}" style="text-decoration: none">
                                    <button type="button" class="btn btn-icon btn-round btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </button> &nbsp;
                                </a>
                                <a href="{{ route('destroy', $item->id_nama)}}">
                                    <button onclick="return confirm('Yakin data dihapus?')" type="button" class="btn btn-icon btn-round btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection