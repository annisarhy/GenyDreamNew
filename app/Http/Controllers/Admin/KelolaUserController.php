<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class KelolaUserController extends Controller
{
    public function index(){
        $data['listUser'] = \App\User::paginate(12);
        return view('admin.user-list-admin',$data);
    }

    public function search(Request $request){		
		$search = $request->search;
     		
		$listUser = User::where('username','like',"%".$search."%")->paginate(12);
     		
		return view('admin.user-list-admin', compact('listUser'));
 
	}

    public function aToZ(){                
        $listUser = User::orderBy('username', 'ASC')->paginate(12);
        return view('admin.user-list-admin', compact('listUser'));
 
    }

    public function zToA(){                
        $listUser = User::orderBy('username', 'DESC')->paginate(12);
        return view('admin.user-list-admin', compact('listUser'));
 
    }

    public function updatedat(){                
        $listUser = User::orderBy('updated_at', 'DESC')->paginate(12);
        return view('admin.user-list-admin', compact('listUser'));
 
    }

    public function older(){                
        $listUser = User::orderBy('created_at', 'ASC')->paginate(12);
        return view('admin.user-list-admin', compact('listUser'));
 
    }

    public function create(){
        return view('admin.user-add-admin');
    }

    public function edit(Request $request, $id){
        $data['user'] = \App\User::find($id);
        return view('admin.user-add-admin',$data);
    }

    public function detail($id){
        $data['user'] = \App\User::find($id);
        return view('admin.user-detail-admin',$data);
    }

    public function store(Request $request){
    	$rule = [
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
    	];
    	$this->validate($request,$rule);

    	$user = new \App\User([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);
        $status = $user->create();
        
        $user->initRole();

    	if ($status) {
    		return redirect()->route('admin.user.index')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect()->route('admin.user.add')->with('error','Data Gagal Ditambahkan');
    	}
    }

    public function update(Request $request, $id){
    	$rule = [
            'username' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string',
    	];
    	$this->validate($request,$rule);

        $user = \App\User::find($id);
    	$status = $user->update([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
        ]);

    	if ($status) {
    		return redirect()->route('admin.user.index')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect()->route('admin.user.edit',$user->id)->with('error','Data Gagal Ditambahkan');
    	}
    }

    public function destroy(Request $request, $id){
        $user = \App\user::find($id);
    	$status = $user->delete();

    	if ($status) {
    		return redirect()->route('admin.user.index')->with('success','Data Berhasil Ditambahkan');
    	}else{
    		return redirect()->route('admin.user.index')->with('error','Data Gagal Ditambahkan');
    	}
    }
    
}
