<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use App\Models\donasibarangs;
use App\Models\donasiuangs;
use App\Models\tambahdonases;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $dataKatalog= tambahdonases::all();

            $jd = request()->input('jenisDonors');
            $dataKatalog = tambahdonases::query();
        
            if ($jd) {
                $dataKatalog = $dataKatalog->where('jenisDonor', $jd);
            }
        
            $tambahdonases = $dataKatalog->get();
    
        return view('home.katalogDonasi',['tambahdonases'=>$tambahdonases]);
    }

    function katalog(Request $request){
        $filter = User::when($request->status != null, function($q) use($request){
            return $q->where('jenisDonor', $request->status);
        })->paginate(3);
        
        return view('home.katalogDonasi', compact('users'));
    }

    public function formInputUang()
    {
        $call = tambahdonases::find('jenisDonor');
        return view('home.formInputUang', compact('call'));
    
        // return view('home.formInputUang');
    }

    function tampilDataUang($id){
        $data = tambahdonases::find($id);
        return view('home.formInputUang', compact('data'));
    }

    function tampilDataBarang($id){
        $data = tambahdonases::find($id);
        //dd($data);
        return view('home.formInputBarang', compact('data'));
    }

    public function storeUang(Request $request)
    {
       // dd($request->input());
     $validated = $request->validate([
            'jenisDonor'=>'required',
            'idJenisDonor'=>'required',
            'email'=>'required',
            'donatur'=>'required', 
            'nominalDonasi'=>'required', 
            'pesan'=>'required'
        ]);

        donasiuangs::create($validated);
        return redirect("/terimakasih");
    }

    function formInputBarang(Request $request){
        return view('home.formInputBarang');
    }

    public function storeBarang(Request $request)
    {
        $strBarang = donasibarangs::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('donasiBarang/', $request->file('gambar')->getClientOriginalName());
            $strBarang->gambar = $request->file('gambar')->getClientOriginalName();
            $strBarang->save();
            return redirect("/terimakasih");
        }
       // dd($request->input());
            $validated = $request->validate([
            'jenisDonor'=>'required',
            'idJenisDonor'=>'required',
            'email'=>'required',
            'donatur'=>'required', 
            'gambar'=>'required', 
            'namaBarang'=>'required', 
            'pesan'=>'required'
        ]);

        donasibarangs::create($validated);
        return redirect("/terimakasih");
    }

    function tungguValidasi(){
        return view('home.tungguValidasi');
    }

    function terimakasih(){
        return view('home.terimakasih');
    }
}
