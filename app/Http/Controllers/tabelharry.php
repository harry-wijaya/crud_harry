<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class tabelharry extends Controller
{
    //
    public function index()
    {
        $user = DB::table('tabeluser')->get();

        return view('frontend.tampil',['user'=>$user]);
    }

    public function tambah()
    {
        return view('frontend.our-project');
    }

    public function store(Request $request)
    {
        DB::table('tabeluser')->insert ([
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'nohp' => $request->nohp,
            'semester' => $request->semester
        ]);
        return redirect('/tampilan');
    }

    public function edit($id)
    {
        $user = DB::table('tabeluser')->where('id',$id)->get();
        return view('frontend.edit',['user'=>$user]);
        
    }

    public function update(Request $request)
    {
        DB::table('tabeluser')->where('id',$request->id)->update ([
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'nohp' => $request->nohp,
            'semester' => $request->semester,
        ]);
        return redirect('tampilan');
    }

    public function hapus($id)
    {
        DB::table('tabeluser')->where('id',$id)->delete();
        return redirect('tampilan');
    }


    public function dashboard()
    {
        return view('frontend.dashboard');
    }

    public function about()
    {
        return view('frontend.about-us');
    }

    public function project()
    {
        return view('frontend.our-project');
    }
    

}
