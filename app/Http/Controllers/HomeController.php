<?php

namespace App\Http\Controllers;
use App\Models\Edukasi;
use App\Models\Identifikasi;
use App\Models\Nutrisi;
use App\Models\Fisik;
use App\Models\Evaluasi;
use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $chat = Chat::all();
        // $nutrisi = Nutrisi::where('users_id', $id)->get();
        // $edukasi = Edukasi::all();
        return view('home', compact('chat'));
    }

    public function kenutrisi()
    {
        return view('kenutrisi');
    }

    public function kefisik()
    {
        return view('kefisik');
    }

    public function quis()
    {
        // $edukasi = Edukasi::all();
        $evaluasi = Evaluasi::all();
        return view('quis', compact('evaluasi'));
    }

    public function viewFisik()
    {
        // $edukasi = Edukasi::find($id);
        $edukasi = Edukasi::where('kategori', 2)->get();
        return view('homebackp',compact('edukasi'));
    }

    public function viewNutrisi()
    {
        // $edukasi = Edukasi::find($id);
        $edukasi = Edukasi::where('kategori', 1)->get();
        return view('homebackp',compact('edukasi'));
    }

    public function viewEdukasi($id)
    {
        $edukasi = Edukasi::find($id);
        return view('viewEdukasi',compact('edukasi'));
    }

    public function identifikasi($id)
    {
        $identifikasi = Identifikasi::where('users_id', $id)->get();
        // $user = User::all();
        // return view('adminHome');
        return view('identifikasi', compact('identifikasi'));
    }

    public function createIdentifikasi(Request $request)
    {    
        Identifikasi::create($request->all());
        return redirect('/menuju-nutrisi');
    }

    public function evaluasi()
    {
        $evaluasi = Evaluasi::all();
        // $user = User::all();
        // return view('adminEvaluasi');
        return view('evaluasi', compact('evaluasi'));
    }

    //Nutrisi     
    public function Nutrisi($id)
    {
        $nutrisi = Nutrisi::where('users_id', $id)->get();
        // $user = User::all();
        // return view('adminNutrisi');
        return view('nutrisi', compact('nutrisi'));
    }

    public function createNutrisi(Request $request)
    {    
        Nutrisi::create($request->all());
        return redirect('/menuju-fisik');
    }

    public function editNutrisi($id)
    {
        $nutrisi = Nutrisi::find($id);
        return view('editNutrisi',compact('nutrisi'));
    }

    public function updateNutrisi(Request $request,$id)
    {
        $nutrisi = Nutrisi::find($id);
        $nutrisi->update($request->all());
        return redirect('/menuju-fisik')->with('sukses');
    }

    //Fisik     
    public function Fisik($id)
    {
        $fisik = Fisik::where('users_id', $id)->get();
        // $user = User::all();
        // return view('adminFisik');
        return view('fisik', compact('fisik'));
    }

    public function createFisik(Request $request)
    {    
        Fisik::create($request->all());
        return redirect('home')->with('success', 'Task Created Successfully!');
    }

    public function editFisik($id)
    {
        $fisik = Fisik::find($id);
        return view('editFisik',compact('fisik'));
    }

    public function updateFisik(Request $request,$id)
    {
        $fisik = Fisik::find($id);
        $fisik->update($request->all());
        return redirect('/home')->with('sukses');
    }
    
    // public function adminHome()
    // {
    //     return view('admin');
    // }
}
