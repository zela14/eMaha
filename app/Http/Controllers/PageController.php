<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function profile()
    {
        return view('profile');
    }
    public function student()
    {
        $mhs = Mahasiswa::paginate(5);
        return view('student',['key'=>'mahasiswa', 'mhs' =>$mhs]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function pencarian(Request $request){
        $cari = $request->search;
        $mhs = Mahasiswa::where('nama', 'like', '%' .$cari.'%')->orwhere('nim', 'like', '%' .$cari.'%')->paginate(5);
        $mhs->appends($request -> all());
        return view('student',['key'=> 'mahasiswa','mhs'=>$mhs]);
    }
    public function tambah(){
        return view('formtambah',['key'=>'mahasiswa']);
    }
    public function simpan(Request $request){
        $minat = implode(',',$request->get('minat'));
        Mahasiswa::create([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'gender'=>$request->gender,
            'prodi'=>$request->prodi,
            'minat'=>$minat
        ]);
        return redirect('/student')->with('flash', 'Data Berhasil di Tambahkan')->with('flash_type', 'success');
    }
    public function updatemahasiswa($id)
    {
        $mhs = Mahasiswa::find($id);
        return view('updatemahasiswa', ['key' => 'student', 'mahasiswa' => $mhs]);
    }
    public function update($id, Request $request)
    {
        $minat = implode(',',$request->get('minat'));
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->prodi = $request->prodi;
        $mhs->minat = $minat;
        $mhs->save();

        return redirect('student')->with('flash', 'Data Berhasil di Update')->with('flash_type', 'primary');
    }
    public function delete($id){
        $mhs = Mahasiswa::find($id);
        $mhs ->delete();
        return redirect('student')->with('flash', 'Data Berhasil di Hapus')->with('flash_type', 'danger');
    }
    
    
}
