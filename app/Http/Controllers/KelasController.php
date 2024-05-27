<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $data['result'] = Kelas::all(); // Menggunakan namespace yang sudah diimpor
        return view('kelas.index')->with($data);
    }

    public function create()
    {
        return view('kelas.form');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_kelas'    => 'required|max:100', // Perbaikan: penggunaan max()
            'jurusan'       => 'required|max:100'  // Perbaikan: penggunaan max()
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $status = Kelas::create($input); // Menggunakan namespace yang sudah diimpor

        if ($status) return redirect('/')->with('success', 'Data berhasil ditambahkan');
        else return redirect('/')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
        $data['result'] = Kelas::find($id);
        return view('kelas.form')->with($data);
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nama_kelas'    => 'required|max:100', // Perbaikan: penggunaan max()
            'jurusan'       => 'required|max:100'  // Perbaikan: penggunaan max()
        ];
        $this->validate($request, $rules);

        $input = $request->all();
        $result = Kelas::where('id_kelas', $id)->first();
        $status = $result->update($input);

        if ($status) return redirect('/')->with('success', 'Data berhasil diubah');
        else return redirect('/')->with('error', 'Data gagal diubah');
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Models\Kelas::where('id_kelas', $id)->first();
        $status = $result->delete();

        if($status) return redirect('/')->with('success', 'Data berhasil dihapus');
        else return redirect('/')->with('error', 'Data gagal dihapus');
    }
}
