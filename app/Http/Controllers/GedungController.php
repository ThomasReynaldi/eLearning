<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use Illuminate\Http\Request;

class GedungController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $data =  Gedung::all();
        return view('dashboard.master.gedung.index', compact('data'));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'kd_gedung'     => 'required|unique:gedungs',
            'nm_gedung'     => 'required',
            'jml_lantai'    => 'required',
            'p_gedung'      => 'required',
            't_gedung'      => 'required',
            'l_gedung'      => 'required',
            'ket_gedung'    => 'required',
            'stts_gedung'   => 'required'
        ]);

        //create post
        Gedung::create([
            'kd_gedung'     => $request->kd_gedung,
            'nm_gedung'     => $request->nm_gedung,
            'jml_lantai'    => $request->jml_lantai,
            'p_gedung'      => $request->p_gedung,
            't_gedung'      => $request->t_gedung,
            'l_gedung'      => $request->l_gedung,
            'ket_gedung'    => $request->ket_gedung,
            'stts_gedung'   => $request->stts_gedung
        ]);

        //redirect to index
        return redirect()->route('gedung')->with(['success' => 'Gedung successfully added!']);
    }

    public function edit($id)
    {
        $data = Gedung::find($id);
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kd_gedung'     => 'required|unique:gedungs,kd_gedung,' . $id . ',id_gedung|min:4',
            'nm_gedung'     => 'required',
            'jml_lantai'    => 'required',
            'p_gedung'      => 'required',
            't_gedung'      => 'required',
            'l_gedung'      => 'required',
            'ket_gedung'    => 'required',
            'stts_gedung'   => 'required'
        ]);

        //create post
        $data = Gedung::find($id);
        $data->kd_gedung     = $request->kd_gedung;
        $data->nm_gedung     = $request->nm_gedung;
        $data->jml_lantai    = $request->jml_lantai;
        $data->p_gedung      = $request->p_gedung;
        $data->t_gedung      = $request->t_gedung;
        $data->l_gedung      = $request->l_gedung;
        $data->ket_gedung    = $request->ket_gedung;
        $data->stts_gedung   = $request->stts_gedung;
        $data->update();
        return response()->json(['success' => 'Gedung successfully updated!']);
    }

    public function destroy($id)
    {
        Gedung::find($id)->delete();
        return redirect()->route('gedung')->with(['success' => 'Gedung successfully deleted!']);
    }
}
