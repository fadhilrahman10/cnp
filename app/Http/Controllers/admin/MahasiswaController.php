<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Berkas;
use App\Models\Mahasiswa;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MahasiswaController extends Controller
{

    private $auth;

    public function __construct()
    {
        // $this->auth = request()->session()->get('user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mahasiswa'] = Mahasiswa::all();
        return view('admin.mahasiswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $store['username'] = $data['nim'];
        $store['password'] = $data['password'];
        $store['role'] = 'USER';

        $create = User::create($store);

        $mahasiswa['nim'] = $data['nim'];
        $mahasiswa['nama'] = $data['nama'];
        $mahasiswa['jurusan'] = $data['jurusan'];
        $mahasiswa['email'] = $data['email'];
        $mahasiswa['alamat'] = $data['alamat'];
        $mahasiswa['no_hp'] = $data['no_hp'];
        $mahasiswa['tempat_tanggal_lahir'] = $data['ttl'];
        $mahasiswa['user_id'] = $create->id;

        Mahasiswa::create($mahasiswa);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        $data['berkas'] = Berkas::where('mahasiswa_id', $mahasiswa->id)->get();

        return view('admin.mahasiswa.detail-berkas', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('admin.mahasiswa.update', $mahasiswa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        // dd($request->all(), $mahasiswa);
        $update = $request->all();
        $mahasiswa->update($update);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        // $user = User::findOrFail('id', $mahasiswa->user_id);
        $user = User::where('id', $mahasiswa->user_id)->delete();
        $berkas = Berkas::where('mahasiswa_id', $mahasiswa->id)->first();
        if($berkas) {
            $berkas->delete();
        }
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
