<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriItem;
use App\Models\MasterItem;

class KategoriItemController extends Controller
{
    public function index(Request $request)
    {
        $query = KategoriItem::query();

        if($request->filled('kode')){
            $query->where('kode', 'like', '%'.$request->kode.'%');
        }
        if($request->filled('nama')){
            $query->where('nama', 'like', '%'.$request->nama.'%');
        }

        $data['kategori'] = $query->orderBy('id')->get();
        return view('kategori_items.index', $data);
    }

    public function formView($method, $id = 0)
    {
        if($method == 'new'){
            $kategori = null;
        } else {
            $kategori = KategoriItem::find($id);
        }
        return view('kategori_items.form', ['kategori' => $kategori, 'method' => $method]);
    }

    public function formSubmit(Request $request, $method, $id = 0)
    {
        if($method == 'new'){
            $kategori = new KategoriItem();
        } else {
            $kategori = KategoriItem::find($id);
        }

        $kategori->kode = $request->kode;
        $kategori->nama = $request->nama;
        $kategori->save();

        return redirect()->route('kategori.index');
    }

    public function view($id)
    {
        $kategori = KategoriItem::with('items')->find($id);
        return view('kategori_items.view', ['kategori' => $kategori]);
    }

    public function delete($id)
    {
        KategoriItem::find($id)->delete();
        return redirect()->route('kategori.index');
    }

    
}
