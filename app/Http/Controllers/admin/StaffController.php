<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Staff;
use App\Models\Berkas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = User::all();
        return view('admin.staff.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->all();
        $data['role'] = 'STAFF';
        User::create($data);

        return redirect()->route('staff.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(User $staff)
    {
        return view('admin.staff.update', $staff);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $staff)
    {
        // dd($request->all(), $staff);
        $data = $request->all();
        $staff->update($data);

        return redirect()->route('staff.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $staff)
    {
        $mahasiswa = Mahasiswa::where('user_id', $staff->id)->first();
        if($mahasiswa) {
            $berkas = Berkas::where('mahasiswa_id', $mahasiswa->id);
            if ($berkas) {
                $berkas->delete();
            }
            $mahasiswa->delete();
        }
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'Data berhasil dihapus');
    }
}
