<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KamarKos;
use Illuminate\Support\Facades\Validator;

class KamarController extends Controller
{

    public function index()
    {
        $kamar = KamarKos::all();
        return view('front/awal', compact('kamar'));
    }

    public function index_kosan()
    {
        $kamar = KamarKos::all();
        return view('front/kosan', compact('kamar'));
    }

    public function index_km_dalam()
    {
        $kamar = KamarKos::all()->where('kamar_mandi', '=', 'Dalam');
        return view('front/dalam', compact('kamar'));
    }

    public function index_km_luar()
    {
        $kamar = KamarKos::all()->where('kamar_mandi', '=', 'Luar');
        return view('front/luar', compact('kamar'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim dari form
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|min:3|max:50|regex:/^[A-Za-z\s]+$/i',
            'kota' => 'required',
            'nomor' => 'required|max:14|regex:/^\+?(\d{1,3})?\s?\(?(\d{3})\)?[-.\s]?(\d{3})[-.\s]?(\d{4})$/',
        ], [
            'required' => ':attribute tidak boleh kosong',
            'min' => ':attribute terlalu pendek',
            'max' => ':attribute terlalu panjang',
            'regex' => ':attribute tidak dalam format yang benar',
        ]);

        $validator->validate();
        // Dapetin ID kamar dari request
        $kamarId = $request->input('id_kamar');

        // Ngurangin jumlah stok kamar
        $kamar = KamarKos::findOrFail($kamarId);
        $kamar->stok = $kamar->stok - 1;
        $kamar->save();

        return redirect()->route('front.success')->with('success', 'Data kategori berhasil ditambahkan');
    }

    public function show($id)
    {
        $show = KamarKos::findOrFail($id);
        return view('front/detail', compact('show'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
