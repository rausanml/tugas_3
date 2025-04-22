<?php 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
use App\Models\Anggota; 
 
class AnggotaController extends Controller 
{ 
    public function index() 
    { 
        $anggota = Anggota::orderBy('id', 'desc')->get(); 
        return view('V_anggota.index', [ 
            'judul' => 'Data Anggota', 
            'index' => $anggota 
        ]); 
    }

    public function create()
    {
        return view('V_anggota.create', [
            'judul' => 'Tambah Anggota'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'hp' => 'required|numeric'
        ]);

        Anggota::create($request->all());
        return redirect()->route('anggota.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('V_anggota.edit', [
            'judul' => 'Edit Anggota',
            'anggota' => $anggota
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'hp' => 'required|numeric'
        ]);

        $anggota = Anggota::find($id);
        $anggota->update($request->all());
        return redirect()->route('anggota.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect()->route('anggota.index')->with('success', 'Data berhasil dihapus');
    }

    /** 
     * dan berikutnya terdapat function  lainnya 
     */ 
} 