<?php

namespace App\Http\Controllers\Backend\DataPengurus;

use App\Http\Controllers\Controller;
use App\Models\DataPengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $penguruses = DataPengurus::all();
        return view('backend.datatable_datapengurus.index', compact('penguruses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('backend.form_datapengurus.index');
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

        // $this->validate($request, [
        //     'foto'     => 'required|image|mimes:png,jpg,jpeg',
        //     'nama_lengkap'     => 'required',
        //     'alamat_lengkap'   => 'required',
        //     'jenis_kelamin'   => 'required',
        //     'nomor_telepon'   => 'required',
        //     'jabatan_kepengurusan'   => 'required'
        // ]);

        if($request->file("image")){
            $image = $request->file('image');
            $image->storeAs('public/foto_pengurus', $image->hashName());
        }

        //upload image


        $penguruses = DataPengurus::create([
            'foto'     => "null",
            'nama_lengkap'     => $request->nama_lengkap,
            'alamat_lengkap'     => $request->alamat_lengkap,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'nomor_telepon'     => $request->nomor_telepon,
            'jabatan_kepengurusan'     => $request->jabatan_kepengurusan
        ]);

        if($penguruses){
            //redirect dengan pesan sukses
            return redirect()->route('datapengurus.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('datapengurus.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
