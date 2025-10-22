<?php

namespace App\Http\Controllers;

use App\Models\MasterPasien;
use Illuminate\Http\Request;

class MasterPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master_pasien.index.index');

    }


    public function search(Request $request)
    {
        $nama = $request->nama;
        $jenis_kelamin = $request->jenis_kelamin;

        $data_search = MasterPasien::query();

        if (!empty($nama)) $data_search->where('nama', 'LIKE', '%' . $nama . '%');
        if (!empty($jenis_kelamin)) $data_search->where('jenis_kelamin', $jenis_kelamin);

        $data_search = $data_search->select('kode', 'nama', 'jenis_kelamin', 'tanggal_lahir', 'alamat', 'no_hp')->orderBy('id')->get();

        return response()->json([
            'status' => 200,
            'data' => $data_search
        ]);
    }

    public function formView($method, $id = 0)
    {
        if ($method == 'new') {
            $pasien = [];
        } else {
            $pasien = MasterPasien::find($id);
        }

        return view('master_pasiens.form.index', [
            'pasien' => $pasien,
            'method' => $method
        ]);
    }

    public function formSubmit(Request $request, $method, $id = 0)
    {
        if ($method == 'new') {
            $data = new MasterPasien;
            $kode = MasterPasien::count('id') + 1;
            $kode = str_pad($kode, 5, '0', STR_PAD_LEFT);
        } else {
            $data = MasterPasien::find($id);
            $kode = $data->kode;
        }

        $data->kode = $kode;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->alamat = $request->alamat;
        $data->no_hp = $request->no_hp;
        $data->save();

        return redirect('master-pasiens');
    }

    public function delete($id)
    {
        MasterPasien::find($id)->delete();
        return redirect('master-pasiens');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterPasien  $masterPasien
     * @return \Illuminate\Http\Response
     */
    public function show(MasterPasien $masterPasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterPasien  $masterPasien
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterPasien $masterPasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MasterPasien  $masterPasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterPasien $masterPasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterPasien  $masterPasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterPasien $masterPasien)
    {
        //
    }
}
