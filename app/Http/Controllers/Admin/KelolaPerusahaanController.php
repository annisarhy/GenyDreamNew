<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Perusahaan;
class KelolaPerusahaanController extends Controller
{
    public function index(){
        $data['listPerusahaan'] = \App\Perusahaan::paginate(12);
        return view('admin.perusahaan-list-admin',$data);
    }

    public function search(Request $request){		
		$search = $request->search;
     		
		$listPerusahaan = Perusahaan::where('nama','like',"%".$search."%")->paginate(12);
     		
		return view('admin.perusahaan-list-admin', compact('listPerusahaan'));
 
	}

    public function aToZ(){                
        $listPerusahaan = Perusahaan::orderBy('nama', 'ASC')->paginate(12);
        return view('admin.perusahaan-list-admin', compact('listPerusahaan'));
 
    }

    public function zToA(){                
        $listPerusahaan = Perusahaan::orderBy('nama', 'DESC')->paginate(12);
        return view('admin.perusahaan-list-admin', compact('listPerusahaan'));
 
    }

    public function updatedat(){                
        $listPerusahaan = Perusahaan::orderBy('updated_at', 'DESC')->paginate(12);
        return view('admin.perusahaan-list-admin', compact('listPerusahaan'));
 
    }

    public function older(){                
        $listPerusahaan = Perusahaan::orderBy('created_at', 'ASC')->paginate(12);
        return view('admin.perusahaan-list-admin', compact('listPerusahaan'));
 
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

    public function destroyModal(Request $request){
        $id_perusahaan=$request->input('id_perusahaan');        
        Perusahaan::destroy($id_perusahaan);

        return redirect()->route('admin.perusahaan.index')->with('success','Data Berhasil Dihapus');
    }
}
