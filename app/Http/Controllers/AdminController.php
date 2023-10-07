<?php

namespace App\Http\Controllers;

use App\Models\donasibarangs;
use App\Models\donasiuangs;
use App\Models\tambahdonases;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
use Carbon\Carbon;

class AdminController extends Controller
{

    function dashboard(){
        $tambahdonases = tambahdonases::count();
        $donasibarangs = donasibarangs::count();
        //$totalNominalDns = donasiuangs::where('nominalDonasi')->sum('nominalDonasi');
        $total = donasiuangs::sum('nominalDonasi');
        $formattedTotal = number_format($total, 2);

        $donasiuangs = donasiuangs::count();
        $User = User::count();
        $admin = User::where('role','admin')->count();
        $users = User::where('role','user')->count();

        $totalKeseluruhan= donasiuangs::all()->count();
        $total = donasiuangs::sum('nominalDonasi');
        $formattedTotal = number_format($total, 2);

        $gerejau = donasiuangs::where('jenisDonor','Gereja')->count();
        $gerejaUG = donasiuangs::where('jenisDonor','Gereja')->sum('nominalDonasi');
        $totalGerejaUG = number_format($gerejaUG, 2);
       

        $retaileru = donasiuangs::where('jenisDonor','Retailer')->count();
        $retailerUR = donasiuangs::where('jenisDonor','Retailer')->sum('nominalDonasi');
        $totalRetailerUR = number_format($retailerUR, 2);

        $organisasiu = donasiuangs::where('jenisDonor','Organisasi')->count();
        $organisasiUO = donasiuangs::where('jenisDonor','Organisasi')->sum('nominalDonasi');
        $totalorganisasiUO = number_format($organisasiUO, 2);

        $individuu = donasiuangs::where('jenisDonor','Individu')->count();
        $indivduUI = donasiuangs::where('jenisDonor','Individu')->sum('nominalDonasi');
        $totalIndividuUI = number_format($indivduUI, 2);

        $pemerintahu = donasiuangs::where('jenisDonor','Pemerintah')->count();
        $pemerintahUP = donasiuangs::where('jenisDonor','Pemerintah')->sum('nominalDonasi');
        $totalPemerintahUP = number_format($pemerintahUP, 2);


        //total donasi barang bedasrkan jenis donor
        $gerejab = donasibarangs::where('jenisDonor','Gereja')->count();
        $retailerb = donasibarangs::where('jenisDonor','Retailer')->count();
        $organisasib = donasibarangs::where('jenisDonor','Organisasi')->count();
        $individub = donasibarangs::where('jenisDonor','Individu')->count();
        $pemerintahb = donasibarangs::where('jenisDonor','Pemerintah')->count();

        $donasibarangs = donasibarangs::count();

        return view('admin.dashboard', compact('tambahdonases','donasibarangs','donasiuangs','admin','users','User','formattedTotal', 'totalKeseluruhan',
        'gerejau','totalGerejaUG',
        'retaileru','totalRetailerUR',
        'organisasiu','totalorganisasiUO',
        'individuu','totalIndividuUI',
        'pemerintahu','totalPemerintahUP',
        'gerejab','retailerb','organisasib','individub','pemerintahb'));
    }

    //progressDonasi
    function progressDonasi(){
        $jd = request()->input('jenisDonors');
        $dataUang = tambahdonases::query();
    
        if ($jd) {
            $dataUang = $dataUang->where('jenisDonor', $jd);
        }
    
        $donasiuangs = $dataUang->get();

        $total = donasiuangs::sum('nominalDonasi');
        $formattedTotal = number_format($total, 2);

        return view('admin.progressDonasi', ['tambahdonases' => $donasiuangs], compact('formattedTotal'));
    }

    //DONASI UANG
    function listDonasiUang(){
        $jd = request()->input('jenisDonors');
        $dataUang = donasiuangs::query();
    
        if ($jd) {
            $dataUang = $dataUang->where('jenisDonor', $jd);
        }
    
        $donasiuangs = $dataUang->get();

        $total = donasiuangs::sum('nominalDonasi');
        $formattedTotal = number_format($total, 2);

        return view('admin.listDonasiUang', ['donasiuangs' => $donasiuangs], compact('formattedTotal'));
    }

    function deleteDonasiUang($id)
    {
        $data=donasiuangs::find($id);
        $data->delete();
        return redirect('/listDonasiUang');
    }

    //DONASI BARANG
    function listDonasiBarang(){
        
        $jd = request()->input('jenisDonors');
        $dataBarang = donasibarangs::query();
    
        if ($jd) {
            $dataBarang = $dataBarang->where('jenisDonor', $jd);
        }
    
        $donasibarangs = $dataBarang->get();

        return view('admin.listDonasiBarang',['donasibarangs'=>$donasibarangs]);
    }

    function deleteDonasiBarang($id)
    {
        $data=donasibarangs::find($id);
        $data->delete();
        return redirect('/listDonasiBarang');
    }

    //USER TERDAFTAR
    function listUserTerdaftar(){
        $role = request()->input('roles');
        $data = User::query();
    
        if ($role) {
            $data = $data->where('role', $role);
        }
    
        $users = $data->get();
    
        return view('admin.listUserTerdaftar', ['users' => $users]);
    }

    function formTambahUserAdm(){
        return view('admin.formTambahUserAdm');
    }


    function registerAdmin(Request $req){
            User::create([
                 'username' => $req->username,
                 'name' => $req->name,
                 'email' => $req->email,
                 'password' => bcrypt($req->password),
                 'role' => 'admin',
                 'alamat'=> $req->alamat,
                 'instagram'=> $req->instagram,
                 'facebook'=> $req->facebook,
                 'aboutme'=> $req->aboutme,
            ]);
                 return redirect('listUserTerdaftar');
         }


    function deleteUserTerdaftar($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect('/listUserTerdaftar');
    }

    //TAMBAH DONASI
    function tambahDonasi(){
        $jd = request()->input('jenisDonors');
        $dataUang = tambahdonases::query();
    
        if ($jd) {
            $dataUang = $dataUang->where('jenisDonor', $jd);
        }
    
        $tambahdonases = $dataUang->get();

        return view('admin.tbhDonasi',['tambahdonases'=>$tambahdonases]);
    }

    function formTambahDonasi(){
        return view('admin.formTambahDonasi');
    }

    function storeTbhDonasi(Request $request)
    {

        $tbhDonasi = tambahdonases::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('tambahDonasi/', $request->file('foto')->getClientOriginalName());
            $tbhDonasi->foto = $request->file('foto')->getClientOriginalName();
            $tbhDonasi->save();
            return redirect('/tbhDonasi')->with('success', 'Data Berhasil Ditambahkan');
        }
        
        $validated = $request->validate([
            'jenisDonor'=>'required',
            'foto'=>'required', 
            'namaDonasi'=>'required', 
            'deskripsi'=>'required',
            'nominalDonasi'=>'required',
            'targetDonasi'=>'required'
        ]);

        tambahdonases::create($validated);
        return redirect("/tbhDonasi");
    }

    function deleteTambahDonasi($id)
    {
        $data=tambahdonases::find($id);
        $data->delete();
        return redirect('/tbhDonasi');
    }

     function tampilDataEditTambahDonasi($id){
        $data = tambahdonases::find($id);
        return view('admin.formEditDataTambahDonasi', compact('data'));
    }

    function updateDataEditTambahDonasi(Request $request, $id){
        $data = tambahdonases::find($id);
        $data->update($request->all());
        return redirect('/tbhDonasi');
    }

    //Profile Admin
    function profileAdmin(){
        return view('admin.profileAdmin');
    }

    public function updateAdmin(Request $request, $id){

    $user = User::findOrFail($id);
    $user->update([
        'name' => $request->input('name'),
        'alamat' => $request->input('alamat'),
        'instagram' => $request->input('instagram'),
        'facebook' => $request->input('facebook'),
        'aboutme' => $request->input('aboutme'),
    ]);

    return redirect('/profileAdmin');
    }
}
