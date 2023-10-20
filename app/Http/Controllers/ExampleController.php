<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        return "Ini adalah contoh halaman utama dari ExampleController";
    }

    public function show($id)
    {
        return "Tampilkan data dengan ID: " . $id;
    }

    public function create()
    {
        return "Tampilkan formulir untuk membuat data baru";
    }

    public function store(Request $request)
    {
        // Proses penyimpanan data baru ke dalam database
        return "Data baru telah disimpan ke dalam database";
    }

    public function edit($id)
    {
        return "Tampilkan formulir untuk mengedit data dengan ID: " . $id;
    }

    public function update(Request $request, $id)
    {
        // Perbarui data dengan ID yang sesuai di dalam database
        return "Data dengan ID " . $id . " telah diperbarui";
    }

    public function destroy($id)
    {
        // Hapus data dengan ID yang sesuai dari database
        return "Data dengan ID " . $id . " telah dihapus";
    }
}
