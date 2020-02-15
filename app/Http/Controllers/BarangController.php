<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BarangController extends Controller
{
    public function index()
    {

        // ambil data dan tampilkan
        $data_barang = DB::table('data_barang')->get();

        return view('index', ['data_barang' => $data_barang]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    // insert data ke table data_barang
    public function masukan_data(Request $request)
    {
        // masukkan datanya
        DB::table('data_barang')->insert([
            'barang_nama' => $request->nama,
            'barang_stok' => $request->stok
        ]);

        // alihkan ke hal barang
        return redirect('/barang');
    }

    // edit data
    public function edit($id)
    {
        $data_barang = DB::table('data_barang')->where('barang_id', $id)->get();

        return view('edit', ['data_barang' => $data_barang]);
    }

    public function update(Request $request)
    {
        // update data barang
        DB::table('data_barang')->where('barang_id',$request->id)->update([
            'barang_nama' => $request->nama,
            'barang_stok' => $request->stok
        ]);

        return redirect('/barang');
    }
}
