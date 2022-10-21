<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PengajarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data = Pengajar::all();
        return view('dashboard.master.pengajar.index', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [            
            'id_pengajar'     => 'required',
            'nm_pengajar'     => 'required',
            'wkt_mulai'    => 'required',
            'wkt_akhir'      => 'required',
            'stts_pengajar'   => 'required'
        ]);

        //create post
        Pengajar::create([
            'id_pengajar'     => $request->id_pengajar,
            'nm_pengajar'     => $request->nm_pengajar,
            'stts_pengajar'   => $request->stts_pengajar,
            'wkt_mulai'   => $request->wkt_mulai,
            'wkt_akhir'   => $request->wkt_akhir
        ]);

        // //redirect to index
        return redirect()->route('pengajar')->with(['success' => 'Pengajar successfully added!']);
    }

    public function edit($id)
    {
        $data = Pengajar::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_pengajar'     => 'required',
            'nm_pengajar'     => 'required',
            'wkt_mulai'   => 'required',
            'wkt_akhir'   => 'required',
            'stts_pengajar'   => 'required'
        ]);

        $data = Pengajar::find($id);
        $data->id_pengajar = $request->id_pengajar;
        $data->nm_pengajar = $request->nm_pengajar;
        $data->wkt_mulai = $request->wkt_mulai;        
        $data->wkt_akhir = $request->wkt_akhir;        
        $data->stts_pengajar = $request->stts_pengajar;
        $data->update();
        return response()->json(['success' => 'Pengajar successfully updated!']);
    }

    public function destroy($id)
    {
        Pengajar::find($id)->delete();

        return redirect()->route('pengajar')->with(['success' => 'Pengajar successfully deleted!']);
    }
}
