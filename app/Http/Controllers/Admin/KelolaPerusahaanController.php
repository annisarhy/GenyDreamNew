<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelolaPerusahaanController extends Controller
{
    public function index(){
        $data['listPerusahaan'] = \App\Perusahaan::all();
        return view('admin.perusahaan-list-admin',$data);
    }

    public function create(){
        return view('admin.perusahaan-add-admin');
    }

    public function edit(Request $request, $id){
        $data['perusahaan'] = \App\Perusahaan::find($id);
        return view('admin.perusahaan-add-admin',$data);
    }

    public function detail($id){
        $data['perusahaan'] = \App\Perusahaan::find($id);
        return view('admin.perusahaan-detail-admin',$data);
    }

    public function store(Request $request){
    	$rule = [
            'nama' => 'required|string',
            'email' => 'required|string',
    		'penanggung_jawab' => 'required|string',
            'no_telp' => 'required|string',
            'alamat' => 'required|string',
    	];
    	$this->validate($request,$rule);

    	$input = $request->all();
    	$status = \App\Perusahaan::create($input);

    	if ($status) {
    		return redirect()->route('admin.perusahaan.index')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect()->route('admin.perusahaan.add')->with('error','Data Gagal Ditambahkan');
    	}
    }

    public function update(Request $request, $id){
    	$rule = [
            'nama' => 'required|string',
            'email' => 'required|string',
    		'penanggung_jawab' => 'required|string',
            'no_telp' => 'required|string',
            'alamat' => 'required|string',
    	];
    	$this->validate($request,$rule);

        $input = $request->all();
        $perusahaan = \App\Perusahaan::find($id);
    	$status = $perusahaan->update($input);

    	if ($status) {
    		return redirect()->route('admin.perusahaan.index')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect()->route('admin.perusahaan.edit',$perusahaan->id)->with('error','Data Gagal Ditambahkan');
    	}
    }

    public function destroy(Request $request, $id){
        $perusahaan = \App\perusahaan::find($id);
    	$status = $perusahaan->delete();

    	if ($status) {
    		return redirect()->route('admin.perusahaan.index')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect()->route('admin.perusahaan.index')->with('error','Data Gagal Ditambahkan');
    	}
    }
}
