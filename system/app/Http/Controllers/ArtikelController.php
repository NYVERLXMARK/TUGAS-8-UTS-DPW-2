<?php

namespace App\Http\Controllers;
use App\Models\Artikel;

class ArtikelController extends Controller {
    function index(){
        $user = request()->user();
        $data['list_artikel'] = $user->artikel;
        return view('artikel.index', $data);
    }
    function create(){
        return view('artikel.create');
    }
    function store(){
        $artikel = new Artikel;
        $artikel->id_user = request()->user()->id;
        $artikel->judul = request('judul');
        $artikel->tag = request('tag');
        $artikel->isi = request('isi');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Artikel Berhasil ditambahkan');
    }
    function show(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('artikel.show', $data);
    }
    function edit(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('artikel.edit', $data);
    }
    function update(Artikel $artikel){
        $artikel->judul = request('judul');
        $artikel->tag = request('tag');
        $artikel->isi = request('isi');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Artikel Berhasil diubah');
    }
    function destroy(Artikel $artikel){
        $artikel->delete();

        return redirect('admin/artikel')->with('danger', 'Artikel Berhasil dihapus');
    }
    function filter(){
        $judul = request('judul');
        $data['list_artikel'] = Artikel::where('judul', 'like', "%$judul%")->get();
        $data['judul'] =$judul;

        return view('artikel.index', $data);
    }
}