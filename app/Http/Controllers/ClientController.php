<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Models\Berkas;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadRequest $request)
    {

        // $data = $request->all();
        // dd($data);
        // Tambahin id user
        $folder = 'assets/'. $request->id.'/cv';
        // $data['photo'] = $request->file('photo')->store('assets/product', 'public');

        $berkas['cv'] =  $request->file('cv')->storeAs($folder, 'public');
        $berkas['ktp'] = $request->file('ktp')->storeAs($folder, 'public');
        $berkas['ijazah'] = $request->file('ijazah')->storeAs($folder, 'public');
        $berkas['transkip'] =  $request->file('transkip')->storeAs($folder, 'public');
        $berkas['sertifikat'] = $request->file('sertifikat')->storeAs($folder, 'public');
        $berkas['sertifikat_vaksin'] = $request->file('sertifikat_vaksin')->storeAs($folder, 'public');
        $berkas['foto'] = $request->file('foto')->storeAs($folder,'public');
        $berkas['foto_full_body'] =  $request->file('foto_full_body')->storeAs($folder, 'public');

        // $berkas['cv'] = $folder .'/'. $request->file('cv')->getClientOriginalName();
        // $berkas['ktp'] = $folder . '/' . $request->file('ktp')->getClientOriginalName();
        // $berkas['ijazah'] = $folder . '/' . $request->file('ijazah')->getClientOriginalName();
        // $berkas['transkip'] = $folder . '/' . $request->file('transkip_nilai')->getClientOriginalName();
        // $berkas['sertifikat'] = $folder . '/' . $request->file('sertifikat')->getClientOriginalName();
        // $berkas['sertifikat_vaksin'] = $folder . '/' . $request->file('sertifikat_vaksin')->getClientOriginalName();
        // $berkas['foto'] = $folder . '/' . $request->file('foto')->getClientOriginalName();
        // $berkas['foto_full_body'] = $folder . '/' . $request->file('foto_full_body')->getClientOriginalName();



        $berkas['mahasiswa_id'] = $request->id;

        Berkas::create($berkas);

        return redirect()->route('mahasiswa.dashboard');

        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('mahasiswa.biodata');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
