<?php

namespace App\Http\Controllers;

use App\Models\donasibarangs;
use App\Models\donasiuangs;
use App\Models\tambahdonases;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{

    function landingPage(){
        
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

        //filter
        $jd = request()->input('jenisDonors');
        $dataKatalog = tambahdonases::query();
    
        if ($jd) {
            $dataKatalog = $dataKatalog->where('jenisDonor', $jd);
        }
    
        $tambahdonases = $dataKatalog->get();
        

        return view('home.landing-page',['tambahdonases'=>$tambahdonases], compact('formattedTotal','donasibarangs', 'totalKeseluruhan',
        'gerejau','totalGerejaUG',
        'retaileru','totalRetailerUR',
        'organisasiu','totalorganisasiUO',
        'individuu','totalIndividuUI',
        'pemerintahu','totalPemerintahUP',
        'gerejab','retailerb','organisasib','individub','pemerintahb'));
    }



    function index(){
        return view('login.login');
    }

    function register(){
        return view('login.register');
    }

    
    function registerUser(Request $req){
       User::create([
            'username' => $req->username,
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'role' => 'user',
            'alamat'=> $req->alamat,
            'instagram'=> $req->instagram,
            'facebook'=> $req->facebook,
            'aboutme'=> $req->aboutme,
        ]);
        return redirect('/login');
    }


public function info() {
return view('home.info');
}
    // public function login(Request $request){
    //     //dd($request);
    //     $credentials = $request->validate([
    //         'email' => ['required', 'string', 'max:100', 'email'],
    //         'password' => ['required']
    //     ]);

    //     if (Auth::attempt($credentials)){
    //         if(Auth::user()->role == 'admin'){
    //             $request->session()->regenerate();
    //             return redirect()->intended('/admin');
    //         }
    //         if(Auth::user()->role == 'user'){
    //             $request->session()->regenerate();
    //             return redirect()->intended('/user');
    //         }
    //     }
    //     return back()->withErrors([
    //         'email' => 'Email and Password invalid'
    //     ])->onlyInput('email');
    // }


    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'string', 'max:100', 'email'],
            'password' => ['required']
        ]);
    
        if (Auth::attempt($credentials)){
            if(Auth::user()->role == 'admin'){
                $request->session()->regenerate();
                // Flash a session variable to indicate a successful login
                Session::flash('success', 'Welcome, ' . Auth::user()->name . '! You have successfully logged in.');
                return redirect()->intended('/admin');
            }
            if(Auth::user()->role == 'user'){
                $request->session()->regenerate();
                // Flash a session variable to indicate a successful login
                Session::flash('success', 'Welcome, ' . Auth::user()->name . '! You have successfully logged in.');
                return redirect()->intended('/user');
            }
        }
    
        return back()->withErrors([
            'email' => 'Email and Password invalid'
        ])->onlyInput('email');
    }
    


        function logout(){
            Auth::logout();
            return redirect('/');
        }
    }
