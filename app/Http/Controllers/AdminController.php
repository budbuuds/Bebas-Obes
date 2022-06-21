<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\Identifikasi;
use App\Models\Edukasi;
use App\Models\Nutrisi;
use App\Models\Fisik;
use App\Models\Evaluasi;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\FisikExport;
use App\Exports\NutrisiExport;
use App\Exports\IdentifikasiExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class AdminController extends Controller
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

//Identifikasi     
    public function adminHome()
    {
        $identifikasi = Identifikasi::all();
        $user = User::all();
        // return view('adminHome');
        return view('admin.adminHome', compact('identifikasi'));
    }

    public function createIdentifikasi(Request $request)
    {    
        Identifikasi::create($request->all());
        return redirect('/admin/identifikasi');
    }

    public function editIdentifikasi($id)
    {
        $identifikasi = Identifikasi::find($id);
        return view('admin.editIdentifikasi',compact('identifikasi'));
    }

    public function updateIdentifikasi(Request $request,$id)
    {
        $identifikasi = Identifikasi::find($id);
        $identifikasi->update($request->all());
        return redirect('/admin/identifikasi')->with('sukses');
    }

    public function deleteIdentifikasi($id)
    {
        $identifikasi = Identifikasi::FindOrFail($id);
        $identifikasi->delete();
        return redirect('/admin/identifikasi')->with('hapus');
    }

//Edukasi     
    public function adminEdukasi()
    {
        $edukasi = Edukasi::all();
        // return view('adminEdukasi');
        return view('admin.adminEdukasi', compact('edukasi'));
    }

    public function createEdukasi(Request $request)
    {    
        // Edukasi::create($request->all());
        // $edukasi = \App\Models\Edukasi::create($request->all());
        // if($request->hasFile('gambar')){
        //     $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
        //     $edukasi->gambar = $request->file('gambar')->getClientOriginalName();
        //     $edukasi->save();
        // }
        $edukasi = \App\Models\Edukasi::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $edukasi->gambar = $request->file('gambar')->getClientOriginalName();
            $edukasi->save();
        }
        return redirect('/admin/edukasi');
    }

    public function editEdukasi($id)
    {
        $edukasi = Edukasi::find($id);
        return view('admin.editEdukasi',compact('edukasi'));
    }

    public function updateEdukasi(Request $request,$id)
    {
        $edukasi = Edukasi::find($id);
        $edukasi->update($request->all());
        return redirect('/admin/edukasi')->with('sukses');
    }

    public function deleteEdukasi($id)
    {
        $edukasi = Edukasi::FindOrFail($id);
        $edukasi->delete();
        return redirect('/admin/edukasi')->with('hapus');
    }

//Nutrisi     
    public function adminNutrisi()
    {
        $nutrisi = Nutrisi::all();
        $user = User::all();
        // return view('adminNutrisi');
        return view('admin.adminNutrisi', compact('nutrisi'));
    }

    public function createNutrisi(Request $request)
    {    
        Nutrisi::create($request->all());
        return redirect('/admin/nutrisi');
    }

    public function editNutrisi($id)
    {
        $nutrisi = Nutrisi::find($id);
        return view('admin.editNutrisi',compact('nutrisi'));
    }

    public function updateNutrisi(Request $request,$id)
    {
        $nutrisi = Nutrisi::find($id);
        $nutrisi->update($request->all());
        return redirect('/admin/nutrisi')->with('sukses');
    }

    public function deleteNutrisi($id)
    {
        $nutrisi = Nutrisi::FindOrFail($id);
        $nutrisi->delete();
        return redirect('/admin/nutrisi')->with('hapus');
    }

//Fisik     
    public function adminFisik()
    {
        $fisik = Fisik::all();
        $user = User::all();
        // return view('adminFisik');
        return view('admin.adminFisik', compact('fisik'));
    }

    public function createFisik(Request $request)
    {    
        Fisik::create($request->all());
        return redirect('/admin/fisik');
    }

    public function editFisik($id)
    {
        $fisik = Fisik::find($id);
        return view('admin.editFisik',compact('fisik'));
    }

    public function updateFisik(Request $request,$id)
    {
        $fisik = Fisik::find($id);
        $fisik->update($request->all());
        return redirect('/admin/fisik')->with('sukses');
    }

    public function deleteFisik($id)
    {
        $fisik = Fisik::FindOrFail($id);
        $fisik->delete();
        return redirect('/admin/fisik')->with('hapus');
    }

//Chat     
    public function adminChat()
    {
        $chat = Chat::all();
        $user = User::all();
        // return view('adminChat');
        return view('admin.adminChat', compact('chat'));
    }

    public function createChat(Request $request)
    {    
        Chat::create($request->all());
        return redirect('/admin/chat');
    }

    public function editChat($id)
    {
        $chat = Chat::find($id);
        return view('admin.editChat',compact('chat'));
    }

    public function updateChat(Request $request,$id)
    {
        $chat = Chat::find($id);
        $chat->update($request->all());
        return redirect('/admin/chat')->with('sukses');
    }

    public function deleteChat($id)
    {
        $chat = Chat::FindOrFail($id);
        $chat->delete();
        return redirect('/admin/chat')->with('hapus');
    }

//Evaluasi     
    public function adminEvaluasi()
    {
        $evaluasi = Evaluasi::all();
        $user = User::all();
        // return view('adminEvaluasi');
        return view('admin.adminEvaluasi', compact('evaluasi'));
    }

    public function createEvaluasi(Request $request)
    {    
        Evaluasi::create($request->all());
        return redirect('/admin/evaluasi');
    }

    public function editEvaluasi($id)
    {
        $evaluasi = Evaluasi::find($id);
        return view('admin.editEvaluasi',compact('evaluasi'));
    }

    public function updateEvaluasi(Request $request,$id)
    {
        $evaluasi = Evaluasi::find($id);
        $evaluasi->update($request->all());
        return redirect('/admin/evaluasi')->with('sukses');
    }

    public function deleteEvaluasi($id)
    {
        $evaluasi = Evaluasi::FindOrFail($id);
        $evaluasi->delete();
        return redirect('/admin/evaluasi')->with('hapus');
    }

//User     
    public function adminUser()
    {
        $user = User::all();
        // $user = User::all();
        // return view('adminUser');
        return view('admin.adminUser', compact('user'));
    }

//Export

    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportUser() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportFisik() 
    {
        return Excel::download(new FisikExport, 'Fisik.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportNutrisi() 
    {
        return Excel::download(new NutrisiExport, 'Nutrisi.xlsx');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportIdentifikasi() 
    {
        return Excel::download(new IdentifikasiExport, 'Identifikasi.xlsx');
    }

    public function pdfFisik()

    {
        $fisik = Fisik::all();
        // return view('admin.FisikPDF',compact('fisik'));
        $pdf = PDF::loadView('admin.FisikPDF', compact('fisik'));
        return $pdf->download('AktifitasFisik.pdf');
    }
}
