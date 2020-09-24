<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Berita;
use App\KategoriBerita;

class KelolaBeritaController extends Controller
{
    public function index(){        
        $listBerita = Berita::orderBy('id', 'DESC')->paginate(12);
        return view('admin.berita-list-admin', compact('listBerita'));
    }

    public function create(){        
        $kategori = KategoriBerita::All();
        return view('admin.berita-add-admin')->with('kategori', $kategori);
    }

    public function store(Request $request){
        $request->validate([
            'judul'                     => 'required',
            'isi'                       => 'required',
            'id_kategori'               => 'required',
            'image'                     => 'required|image|mimes:png,jpg,jpeg,giv,svg|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images_input'), $new_name);

        $form_data = array(
            'judul'         => $request->judul,
            'isi'           => $request->isi,
            'id_kategori'   => $request->id_kategori,
            'gambar'        => $new_name
        );

            $status=Berita::create($form_data);

        
    		if ($status) {
                return redirect()->route('admin.berita.index')->with('success','Data Berhasil Diubah');
            }else{
                return redirect()->route('admin.berita.add')->with('error','Data Gagal Ditubah');
            }
    }

    public function detail($id){        
        $berita = Berita::findOrFail($id);
        return view('admin.berita-detail-admin', compact('berita'));
    }

    public function edit($id){
        $berita = Berita::findOrFail($id);
        $kategori = KategoriBerita::All();
        return view('admin.berita-edit-admin', compact('berita'))->with('kategori', $kategori);        
    }

    public function update(Request $request, $id){
        $image_name = $request->hidden_image;
        $image  = $request->file('image');
        if($image != ''){
            $request->validate([
                'judul'         => 'required',
                'isi'           => 'required',
                'id_kategori'   => 'required',
                'image'        => 'required|image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images_input'), $image_name);
        }else{
            $request->validate([
                'judul'         => 'required',
                'isi'           => 'required',
                'id_kategori'   => 'required'
            ]);
        }

        $form_data = array(
            'judul'         => $request->judul,
            'isi'           => $request->isi,
            'id_kategori'   => $request->id_kategori,
            'gambar'        => $image_name
        );

        $status = Berita::whereId($id)->update($form_data);

        if ($status) {
    		return redirect()->route('admin.berita.index')->with('success','Data Berhasil Diubah');
    	}else{
    		return redirect()->route('admin.berita.edit')->with('error','Data Gagal Diubah');
    	}
    }

    public function destroy(Request $request, $id){
        $id_berita=$request->input('id_berita');

        $data = Berita::findOrFail($id);
        $data->delete($id_berita);

        return redirect()->route('admin.berita.index')->with('success','Data Berhasil Dihapus');
    }

    public function destroyModal(Request $request){
        $id_berita=$request->input('id_berita');        
        Berita::destroy($id_berita);

        return redirect()->route('admin.berita.index')->with('success','Data Berhasil Dihapus');
    }
}
