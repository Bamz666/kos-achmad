<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KamarKos;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public $admin;
    public function __construct()
    {
        $this->admin = new KamarKos;
    }

    public function dashboard()
    {
        $admin = KamarKos::all();
        $kosTersedia = KamarKos::sum('stok');
        return view('back.dashboard', compact('admin', 'kosTersedia'));
    }

    public function editUser()
    {
    }

    public function index()
    {
        $admin = KamarKos::all();
        return view('back.datakamar', compact('admin'));
    }

    public function create()
    {
        $admin = KamarKos::all();
        return view('back.create', compact('admin'));
    }

    public function store(Request $request)
    {

        $rules = [
            'nama' => 'required|min:5|max:70',
            'lokasi' => 'required|min:5|max:70',
            'harga' => 'required',
            'kamar_mandi' => 'required',
            'gender' => 'required',
            'stok' => 'required',
            'deskripsi_singkat' => 'required',
            'gambar_utama' => 'required',
            'gambar_satu' => 'required',
            'gambar_dua' => 'required',
            'deskripsi_lengkap' => 'required',
            'gambar_tiga' => 'nullable',
            'gambar_empat' => 'nullable',
            'gambar_lima' => 'nullable',

        ];

        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'min' => ':attribute terlalu pendek',
            'max' => ':attribute terlalu panjang',
        ];

        $this->validate($request, $rules, $messages);

        $nm = $request->gambar_utama;
        $nm1 = $request->gambar_satu;
        $nm2 = $request->gambar_dua;

        $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();
        $namaFile1 = time() . rand(100, 999) . "." . $nm1->getClientOriginalExtension();
        $namaFile2 = time() . rand(100, 999) . "." . $nm2->getClientOriginalExtension();

        $this->admin->nama = $request->nama;
        $this->admin->harga = $request->harga;
        $this->admin->lokasi = $request->lokasi;
        $this->admin->kamar_mandi = $request->kamar_mandi;
        $this->admin->gender = $request->gender;
        $this->admin->stok = $request->stok;
        $this->admin->deskripsi_singkat = $request->deskripsi_singkat;
        $this->admin->deskripsi_lengkap = $request->deskripsi_lengkap;
        $this->admin->gambar_utama = $namaFile;
        $this->admin->gambar_satu = $namaFile1;
        $this->admin->gambar_dua = $namaFile2;

        $nm->move(public_path() . '/upload', $namaFile);
        $nm1->move(public_path() . '/upload', $namaFile1);
        $nm2->move(public_path() . '/upload', $namaFile2);

        if ($request->hasFile('gambar_tiga')) {
            $nm3 = $request->gambar_tiga;
            $namaFile3 = time() . rand(100, 999) . "." . $nm3->getClientOriginalExtension();
            $this->admin->gambar_tiga = $namaFile3;
            $nm3->move(public_path() . '/upload', $namaFile3);
        }

        if ($request->hasFile('gambar_empat')) {
            $nm4 = $request->gambar_empat;
            $namaFile4 = time() . rand(100, 999) . "." . $nm4->getClientOriginalExtension();
            $this->admin->gambar_empat = $namaFile4;
            $nm4->move(public_path() . '/upload', $namaFile4);
        }

        if ($request->hasFile('gambar_lima')) {
            $nm5 = $request->gambar_lima;
            $namaFile5 = time() . rand(100, 999) . "." . $nm5->getClientOriginalExtension();
            $this->admin->gambar_lima = $namaFile5;
            $nm5->move(public_path() . '/upload', $namaFile5);
        }

        $this->admin->save();

        return redirect()->route('datakamar')->with('success', 'Data kamar berhasil ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edit = KamarKos::findOrFail($id);

        return view('back.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $kamar = KamarKos::findOrFail($id);

        $rules = [
            'nama' => 'required|min:5|max:70',
            'lokasi' => 'required|min:5|max:70',
            'harga' => 'required',
            'kamar_mandi' => 'required',
            'gender' => 'required',
            'stok' => 'required',
            'deskripsi_singkat' => 'required',
            'deskripsi_lengkap' => 'required',
            'gambar_tiga' => 'nullable',
            'gambar_empat' => 'nullable',
            'gambar_lima' => 'nullable',
        ];

        $messages = [
            'required' => ':attribute tidak boleh kosong',
            'min' => ':attribute terlalu pendek',
            'max' => ':attribute terlalu panjang',
        ];

        $this->validate($request, $rules, $messages);

        $kamar->nama = $request->nama;
        $kamar->harga = $request->harga;
        $kamar->lokasi = $request->lokasi;
        $kamar->kamar_mandi = $request->kamar_mandi;
        $kamar->gender = $request->gender;
        $kamar->stok = $request->stok;
        $kamar->deskripsi_singkat = $request->deskripsi_singkat;
        $kamar->deskripsi_lengkap = $request->deskripsi_lengkap;

        if ($request->hasFile('gambar_utama')) {
            $this->deleteImageIfExists($kamar->gambar_utama);
            $namaFile = time() . rand(100, 999) . "." . $request->gambar_utama->getClientOriginalExtension();
            $kamar->gambar_utama = $namaFile;
            $request->gambar_utama->move(public_path() . '/upload', $namaFile);
        }

        if ($request->hasFile('gambar_satu')) {
            $this->deleteImageIfExists($kamar->gambar_satu);
            $namaFile1 = time() . rand(100, 999) . "." . $request->gambar_satu->getClientOriginalExtension();
            $kamar->gambar_satu = $namaFile1;
            $request->gambar_satu->move(public_path() . '/upload', $namaFile1);
        }

        if ($request->hasFile('gambar_dua')) {
            $this->deleteImageIfExists($kamar->gambar_dua);
            $namaFile2 = time() . rand(100, 999) . "." . $request->gambar_dua->getClientOriginalExtension();
            $kamar->gambar_dua = $namaFile2;
            $request->gambar_dua->move(public_path() . '/upload', $namaFile2);
        }

        if ($request->hasFile('gambar_tiga')) {
            $this->deleteImageIfExists($kamar->gambar_tiga);
            $namaFile3 = time() . rand(100, 999) . "." . $request->gambar_tiga->getClientOriginalExtension();
            $kamar->gambar_tiga = $namaFile3;
            $request->gambar_tiga->move(public_path() . '/upload', $namaFile3);
        }

        if ($request->hasFile('gambar_empat')) {
            $this->deleteImageIfExists($kamar->gambar_empat);
            $namaFile4 = time() . rand(100, 999) . "." . $request->gambar_empat->getClientOriginalExtension();
            $kamar->gambar_empat = $namaFile4;
            $request->gambar_empat->move(public_path() . '/upload', $namaFile4);
        }

        if ($request->hasFile('gambar_lima')) {
            $this->deleteImageIfExists($kamar->gambar_lima);
            $namaFile5 = time() . rand(100, 999) . "." . $request->gambar_lima->getClientOriginalExtension();
            $kamar->gambar_lima = $namaFile5;
            $request->gambar_lima->move(public_path() . '/upload', $namaFile5);
        }

        $kamar->save();

        return redirect()->route('datakamar')->with('success', 'Data kamar berhasil diperbarui');
    }


    public function destroy($id)
    {
        $kamar = KamarKos::findOrFail($id);

        $this->deleteImageIfExists($kamar->gambar_utama);
        $this->deleteImageIfExists($kamar->gambar_satu);
        $this->deleteImageIfExists($kamar->gambar_dua);
        $this->deleteImageIfExists($kamar->gambar_tiga);
        $this->deleteImageIfExists($kamar->gambar_empat);
        $this->deleteImageIfExists($kamar->gambar_lima);

        $kamar->delete();

        return redirect()->route('datakamar')->with('success', 'Data kamar berhasil dihapus');
    }

    private function deleteImageIfExists($imageName)
    {
        if ($imageName && file_exists(public_path('/upload/' . $imageName))) {
            unlink(public_path('/upload/' . $imageName));
        }
    }
}
