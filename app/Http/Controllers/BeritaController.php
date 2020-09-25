<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function index(){                
        $listBerita = Berita::orderBy('id', 'DESC')->paginate(12);
        return view('list-berita', compact('listBerita'));
 
    }

    public function search(Request $request){		
		$search = $request->search;
     		
		$listBerita = Berita::where('judul','like',"%".$search."%")->paginate(12);
     		
		return view('list-berita', compact('listBerita'));
 
	}

    public function lifestyleKategori(){                
        $listBerita = Berita::orderBy('id', 'DESC')->where('id_kategori', '1')->paginate(12);
        return view('list-berita', compact('listBerita'));
 
    }

    public function tipsKarirKategori(){                
        $listBerita = Berita::orderBy('id', 'DESC')->where('id_kategori', '2')->paginate(12);
        return view('list-berita', compact('listBerita'));
 
    }

    public function keahlianKategori(){                
        $listBerita = Berita::orderBy('id', 'DESC')->where('id_kategori', '3')->paginate(12);
        return view('list-berita', compact('listBerita'));
 
    }

    public function tentangPerusahaanKategori(){                
        $listBerita = Berita::orderBy('id', 'DESC')->where('id_kategori', '4')->paginate(12);
        return view('list-berita', compact('listBerita'));
 
    }

    public function BeritaUmumKategori(){                
        $listBerita = Berita::orderBy('id', 'DESC')->where('id_kategori', '5')->paginate(12);
        return view('list-berita', compact('listBerita'));
 
    }

    public function detailBerita($id){       
        $listBerita = Berita::orderBy('id', 'DESC')->take(3)->get();
        $berita = Berita::findOrFail($id);
        return view('detail-berita', compact('berita','listBerita'));
 
    }

    public function detailBeritaList(){                
    }
}
